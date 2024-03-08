resource "aws_vpc" "capitalbetting_vpc" {
  cidr_block = "10.0.0.0/16"
  enable_dns_hostnames = true
  enable_dns_support   = true
    tags = {
    Name = "capitalbetting_vpc"
  }
}

resource "aws_internet_gateway" "gw" {
  vpc_id = aws_vpc.capitalbetting_vpc.id
}


resource "aws_route_table" "rt" {
  vpc_id = aws_vpc.capitalbetting_vpc.id
    route {
    cidr_block = "0.0.0.0/0"
    gateway_id = aws_internet_gateway.gw.id
  }
}
resource "aws_route_table_association" "a" {
  subnet_id      = aws_subnet.sna.id
  route_table_id = aws_route_table.rt.id
}

resource "aws_route_table_association" "b" {
  subnet_id      = aws_subnet.snb.id
  route_table_id = aws_route_table.rt.id
}


resource "aws_subnet" "sna" {
  vpc_id            = aws_vpc.capitalbetting_vpc.id
  cidr_block        = "10.0.1.0/24"
  availability_zone = "us-east-1b"
  map_public_ip_on_launch = "true"

  tags = {
    Name = "sna"
  }
}

resource "aws_subnet" "snb" {
  vpc_id            = aws_vpc.capitalbetting_vpc.id
  cidr_block        = "10.0.2.0/24"
  availability_zone = "us-east-1a"
  map_public_ip_on_launch = "true"

  tags = {
    Name = "snb"
  }
}


resource "aws_security_group" "sg" {
  name        = "sg"
  description = "Allow all traffic"

  vpc_id = aws_vpc.capitalbetting_vpc.id

  ingress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_eks_cluster" "capitalbetting" {
  name     = "capitalbetting"
  role_arn = aws_iam_role.EKSClusterRole.arn

  vpc_config {
    subnet_ids = [aws_subnet.sna.id, aws_subnet.snb.id]
  }


}

resource "aws_eks_node_group" "capitalbetting" {
  cluster_name    = aws_eks_cluster.capitalbetting.name
  node_group_name = "capitalbetting"
  node_role_arn   = aws_iam_role.NodeGroupRole.arn
  subnet_ids      = aws_subnet.sna[*].id
  instance_types  = ["t3.medium"]

  scaling_config {
    desired_size = 1
    max_size     = 1
    min_size     = 1
  }

  update_config {
    max_unavailable = 1
  }

  depends_on = [
    aws_iam_role_policy_attachment.AmazonEKSWorkerNodePolicy,
    aws_iam_role_policy_attachment.AmazonEKS_CNI_Policy,
    aws_iam_role_policy_attachment.AmazonEC2ContainerRegistryReadOnly,
  ]
}

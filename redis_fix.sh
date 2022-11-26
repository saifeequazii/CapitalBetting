while true
do
if curl localhost/test.php |grep READONLY
then
cd /home/ec2-user/capitalbeting.com/start
docker-compose restart
fi
done
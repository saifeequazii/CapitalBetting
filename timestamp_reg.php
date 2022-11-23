<!DOCTYPE html>

<html>

<body>
<form action="signup.php" method="post">

<body style="background-color:black;">
<h2 style="color:white">AGREE?</h2>
<img src="src/logo.png" alt="Paris" style="width:50%;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

<?php 

if ($_POST["uname"] == NULL) {
echo "please enter username";
    }
else {
    
    if ($_POST["pword"] == NULL) {
        
        echo "Please enter  password";
        
        }
        else
        {
 
      
            echo 'Welcome to the team'  ," ",$_POST["fname"] , " ", $_POST["lname"] ;
            echo 'password is '  ," ",$_POST["pword"] ;
            echo 'number is '  ," ",$_POST["mnumber"] ;
            echo 'first name '  ," ",$_POST["fname"] ;
            echo 'lastname'  ," ",$_POST["lname"] ;
            echo 'username'  ," ",$_POST["uname"] ;
            
        }
       
    
}

?>

<h2  style="color:white"> <?php echo  'welcome To the Team please confirm Details below'?></h2>
<h1 style="color:white"> <?php echo  'Name: ', $_POST["fname"] , " " ,$_POST["lname"]?></h1>
<h1 style="color:white"> <?php echo  'Mobile no: ', $_POST["mnumber"] ?></h1>
<h1 style="color:white"> <?php echo  'Username: ', $_POST["uname"] ?></h1>
<h1 style="color:white"> <?php echo  'password: ', $_POST["pword"] , " " ?></h1>
<input type="hidden"  name="uname" value=<?php echo $_POST["uname"]?>>
<input type="hidden"  name="pword" value=<?php echo $_POST["pword"]?>>
<input type="hidden"  name="mnum" value=<?php echo $_POST["mnumber"]?>>
<input type="hidden"  name="name" value=<?php echo $_POST["fname"],"_", $_POST["lname"]?>>
<input type="submit" value="AGREE">

</body>
</form>
</html> 





<style>
img {
  display: block;
  margin-left: auto;
  position: relative;
  margin-right: auto;

  max-width: 500px;
  height: 500px;
  width: auto;
  border: solid black;
}
h2 {text-align: center;
    font-family: "Sofia", sans-serif;
 font-size: 20px;}
input[type=text], select {
  width: 68%;
  align-self: center;
  background-color: #ffffff;
  color: rgb(0, 0, 0);
  padding: 7px 20px;
  margin: 2px 0;
  border: none;
  border-radius: 14px;
  cursor: pointer;
  margin-left:auto;
  margin-right:auto;
  display:block;
  margin-top:1%;
  margin-bottom:0%;
}
input[type=submit] {
  width: 70%;
  align-self: center;
  background-color: #ffe552;
  color: rgb(0, 0, 0);
  padding: 7px 20px;
  margin: 2px 0;
  border: none;
  border-radius: 14px;
  cursor: pointer;
  margin-left:auto;
  margin-right:auto;
  display:block;
  margin-top:1%;
  margin-bottom:0%;
}
input[type=submit]:hover {
  background-color: #ffe552;
}
div {
  border-radius: 10px;
  background-color: #ffe552;
  padding: 20px;
}
h1 {
  font-size: 20px;
  text-align: center;
}


</style>
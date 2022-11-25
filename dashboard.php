<!DOCTYPE html>

<html>

<body>
<form action="index.php" method="post">

<body style="background-color:black;">
<h2 style="color:white">DASHBOARD</h2>
<img src="src/logo.png" alt="Paris" style="width:50%;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

<?php 

if ($_POST["name"] == NULL) {
echo "please enter username";
    }
else {
    
    if ($_POST["password"] == NULL) {
        
        echo "Please enter  password";
        
        }
        else
        {
          $redis = new Redis(); 
          $redis->connect('db', 6379); 
          
          $db_name = print_r($redis->get($_POST["name"]),true);
          $name = print_r($redis->get("name_".$_POST["name"]),true);
          if ($db_name == $_POST["password"]){
            

            
            
            $element = print_r($redis->get("element_".$_POST["name"]),true);
            #echo ' <h2 style="color:black">Welcome  </h2> '<i>$db_name</i> ;
            echo <<< END_OF_TEXT
            <h1>WELCOME </h1>
            <h1>Current Earning rate:- $element / min</h1> <button type="button">ACTIVATE!</button>
            <h1></h1>
        END_OF_TEXT;
            
          }
          else{
            echo <<< END_OF_TEXT
            <h1>Invalid credentials </h1> 
            <h1>please check your credentials before entering</h1>
            <h1> </h1>
            <h1>lets go to home in 5 second</h1>
            <script>
            setTimeout(function() {
                window.location.href="index.php";
            }, 5000);
        </script>
        END_OF_TEXT;
            #usleep(5);
            #header("Location: index.php");
            #die();
            
            
              #header("Location: index.php");
              #die();
            
          }


            
          

            
        }
       
    
}

?>


</body>
</form>
</html> 
<style>
img {
  display: block;
  margin-left: auto;
  position: relative;
  margin-right: auto;

  max-width: 150px;
  height: 150px;
  width: auto;
  border: solid black;
}
h2 {text-align: center;
    font-family: "Sofia", sans-serif;
 font-size: 20px;}
 button {
  display: block;
  margin-left: auto;
  position: relative;
  margin-right: auto;
  max-width: 150px;
  height: 150px;
  width: auto;
  border: solid black;
  text-align: center;
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
  font-family:verdana;
  color: white;
}
</style>
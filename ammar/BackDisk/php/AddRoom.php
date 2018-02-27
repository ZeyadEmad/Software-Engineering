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
<h1> Add New Room</h1>	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectone";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_POST){
$Number = $_POST['num1'];
$sql = "INSERT INTO rooms (`ID`,`Number`) VALUES (Null,'$Number' )";
$sql = "INSERT INTO`rooms` (`ID`, `Number`) VALUES (NULL, '$Number')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<form action="" method ="Post" id="a" >
  <h4>Enter Room Number:</h4>
  <input type="text" name="num1" >
  <br><br>
  
  <input type="submit" name="submit" value="Submit" onclick="Rooms.php"  >
  <input type="button" onclick="parent.location='BackDisk.php'" value="Back">
</form> 


</body>
</html>
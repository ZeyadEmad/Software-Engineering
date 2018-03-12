<<<<<<< HEAD
<?php
class data{
	
	
function con()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "try1";
		$conn = new mysqli($servername, $username, $password, $db);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	} 
    

}


?>
=======
<?php
class data{
	
	
function con()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "try1";
		$conn = new mysqli($servername, $username, $password, $db);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	} 

}
?>
>>>>>>> 39b9fc79caa1db37a4edd2e1b2951c17173e9245

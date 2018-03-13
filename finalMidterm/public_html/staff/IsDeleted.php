<!DOCTYPE html>
<html>
<head>
	<title>Request </title>

</head>
<body>
<?php
require_once  "../staff/database.php";

	$data = new data();
	$conn = $data->con();
        $id = $_GET['id'];
        $sql = "Delete from `user` where ID = '$id'";
        if ($conn->query($sql) === TRUE) {
                header("Location:../staff/BackDisk.php");
        } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
           
?>

</body>
</html>
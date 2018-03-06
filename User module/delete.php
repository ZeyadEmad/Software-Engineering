<!DOCTYPE html>
   <?php 
	session_start();
	require("ConnectionToDB.php");
	$id = $_SESSION["ID"];

                    $db = new dbconnect;
                    $sql = "DELETE 
							FROM user 
							WHERE ID = '$id'
                            ";

                    echo $sql;
                    echo "<br>";

                    $result = $db->executesql($sql);
   ?>


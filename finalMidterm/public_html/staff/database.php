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
                    $conn->close();
            } 
    function executesql($sql){
    			$result = mysqli_query($this->con, $sql);
    			if($result == TRUE){
    				return $result;
    			}
    			else{
    				echo "Error executing SQL statement: " .$this->con->error;
    			}
    		}

}
?>

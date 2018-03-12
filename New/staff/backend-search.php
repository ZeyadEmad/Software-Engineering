<?php
$con = mysqli_connect("localhost", "root", "", "try1");

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term =  $_REQUEST['term'];
 
if(isset($term)){
   
    $sql = "SELECT * FROM user WHERE FirstName LIKE '" . $term . "%' or LastName LIKE '" . $term . "%'";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['FirstName'] . " ". $row['LastName'] ."</p>";
            }
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
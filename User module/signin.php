<?php
  session_start();
  $_SESSION['auth'] = "true";
  require("ConnectionToDB.php");
?>
<!DOCTYPE html>
    <head>

    </head>
<html>
    <body>

      
        <form method="post" action="">
                <br>
                Email:  <br>
                <input type="text" name="username" id="username"> <br><br>
                Password:  <br>
                <input type="password" name="password" id="password"> <br><br>
                <input  type="submit" value="Sign in" class="signin" name = "submit"><br>

        </form>


           <?php
                if (isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
					

                    $db = new dbconnect;

					$sql = "SELECT * FROM `user`
							WHERE Email = '$username'
							AND Password = '$password'
							";
                    echo $sql;
                    echo "<br>";

                    $result = $db->executesql($sql);
                    echo "<br>";

                    if ($row = mysqli_fetch_array($result)){
                            $_SESSION["ID"] = $row[0];
                            $_SESSION["FName"] = $row['FirstName'];
							$_SESSION["LName"] = $row['LastName'];
							$_SESSION["Email"] = $row['Email'];
							$_SESSION["Password"] = $row['Password'];
							$_SESSION["Telephone"] = $row['Telephone'];
							$_SESSION["Hobby"] = $row['Hobby'];
                            header("Location: profile.php");
					}else{
						echo "Invalid email or password";
					}
				}
                    

            ?>
    </body>
</html>

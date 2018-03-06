<?php
  session_start();
  require("ConnectionToDB.php");
?>
<!DOCTYPE html>
    <head>

    </head>
<html>
    <body>
        <form method="post" action="">

                First Name: <br>
                <input type="text" name="firstname" id="username" value="<?php echo $_SESSION['FName']; ?>"> <br><br>
                Last Name : <br>
                <input type="text" name="lastname" id="username" value="<?php echo $_SESSION['LName']; ?>"> <br><br>
                Email : <br>
                <input type="text" name="email" id="username" value="<?php echo $_SESSION['Email']; ?>"> <br><br>
                Telephone : <br>
                <input type="text" name="mobile" id="username" value="<?php echo $_SESSION['Telephone']; ?>"> <br><br>
                <br>
                Hobby:  <br>
                <input type="text" name="hobby" id="username" value="<?php echo $_SESSION['Hobby']; ?>"> <br><br>
                Gender : <br>
                Male<input type="radio" name="gender" id="username" value = "Male">
				Female<input type="radio" name="gender" id="username" value = "Female"> <br><br>
                <input  type="submit" value="Update profile" class="signin" name = "submit"><br>



        </form>

           <?php
                if (isset($_POST['submit'])){
                    $fname = $_POST['firstname'];
                    $lname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
					$hobby = $_POST['hobby'];
					$gender = $_POST['gender'];
					
					if ($gender == "Male"){
						$gender = "m";
					}else if ($gender == "Female"){
						$gender = "f";
					}
                    

                    $id = $_SESSION["ID"];

                    $db = new dbconnect;
                    $sql = "UPDATE user
                            SET FirstName = '$fname',
                                LastName = '$lname',
                                Email = '$email',
                                Telephone = '$mobile',
                                Email = '$email',
								Gender = '$gender',
								Hobby = '$hobby'
								
                                
                            WHERE id = '$id'
                            ";

                    echo $sql;
                    echo "<br>";

                    $result = $db->executesql($sql);
                  }


            ?>
    </body>
</html>

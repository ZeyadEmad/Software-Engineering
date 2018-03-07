<?php require("ConnectionToDB.php");  ?>
<!DOCTYPE html>
    <head>

    </head>
<html>
    <body>
        <form method="post" action="">

                First Name: <br>
                <input type="text" name="firstname" id="username"> <br><br>
                Last Name : <br>
                <input type="text" name="lastname" id="username"> <br><br>
                Email : <br>
                <input type="text" name="email" id="username" required> <br><br>
                Telephone : <br>
                <input type="text" name="mobile" id="username"> <br><br>
                <br>
				Hobby : <br>
                <input type="text" name="hobby" id="username"> <br><br>
                <br>
				Gender : <br>
                Male<input type="radio" name="gender" id="username" value = "Male">
				Female<input type="radio" name="gender" id="username" value = "Female"> <br><br>
                <br>
                Password:  <br>
                <input type="password" name="password" id="password"> <br><br>
                <input  type="submit" value="Sign Up" class="signin" name = "submit"><br>



        </form>

           <?php
                if (isset($_POST['submit'])){
                    $fname = $_POST['firstname'];
                    $lname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $hobby = $_POST['hobby'];
                    $password = $_POST['password'];
					$gender = $_POST['gender'];
					
					if ($gender == "Male"){
						$gender = "m";
					}else if ($gender == "Female"){
						$gender = "f";
					}

                    $db = new dbconnect;
                    $sql = "INSERT INTO `user` (`FirstName`, `LastName`, `Email`, `Password`, `Telephone`, `Hobby`, `gender` )
                                  VALUES ('$fname', '$lname', '$email', '$password', '$mobile', '$hobby', '$gender')";

                    echo $sql;
                    echo "<br>";

                    $result = $db->executesql($sql);
                  }


            ?>
    </body>
</html>

<<<<<<< HEAD
<?php
session_start();
require_once 'functions.php';
require_once 'Css-files.php';
$servername = "localhost";
$username = "root";
$password = "";
$db = "try1";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
                    

if (isset($_POST['submit'])){
    
                    
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $age = $_POST['age'];
                    $mail = $_POST['mail'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $number = $_POST['number'];
					$jobrole = $_POST['jobrole'];
					$usertype = 1;
                    $gemail = $_POST['gemail'];
                    $gnumber = $_POST['gnumber'];
                    $pic = $_POST['pic'];
                    
				
                    $id = $_SESSION["ID"];

                    $db = new dbconnect;
                    $sql = "UPDATE user
                            SET First-name = '$fname',
                                last-name = '$lname',
                                age = '$age',
                                email = '$mail',
                                username = '$username',
                                password = '$password',
								address = '$address',
								telephone = '$number',
                                gender = '$jobrole',
                                type-id = '$usertype',
                                Gemail = '$gemail',
                                Gnumber = '$gnumber',
                                pic = '$pic'
								
                                
                            WHERE id = '$id'
                            ";

                    echo "<br>";
                    echo $sql;
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                    
                  }


            
?>
<html>
    <head>
        <title>
            Edit Student
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/editstudent.css">
        <meta charset="UTF-8">
    </head>
	<?php require_once 'header.php'; ?>

    <body>
        <form method="post" action="">
        <div class="contentform">
            <div class="leftgroup">
                <div class="form-group">
                    <p>First Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input type="text" name="fname">
                </div>
                <div class="form-group">
                    <p>Last Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input type="text" name="lname">
                </div>
                <div class="form-group">
                    <p>E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="mail">
                </div>
                <div class="form-group">
                    <p>Home Address</p>
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <input type="text" name="address">
                </div>
                <div class="form-group">
                    <p>Age</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="age">
                </div>
                <div class="form-group">
                    <p>Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="number">
                </div>
            </div>
            <div class="rightgroup">
                <div class="form-group">
                    <p>Gender</p>
                    <span class="icon"><i></i></span>
                    <select name="jobrole" class="form-control selectpicker">
                      <optgroup label="Gender" id="list">
                        <option >Male</option>
                        <option >Female</option>
                        
                      </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <p>Username</p>
                    <span class="icon"><i></i></span>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="password" name="password" />
                </div>
                <div class="form-group">
                    <p>Guardian E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="gemail">
                    <div class="form-group">
                    <p>Guardian Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="gnumber">
                </div>
                    
                </div>
                Choose the picture <br><br>
                <input type="file" name="pic" accept="image/*">
            </div>
            
            
            
        </div>
         
        <button type="submit" class="create-profile" value="Edit student" >Edit Student</button>
		
    </form>
	<button class="create-profile" id="bb" onclick="parent.location='frontdiskhome.php'">Back</button>
    </body>
    
</html>

=======
<?php
?>

<html>
    <head>
        <title>
            Edit Student
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/editstudent.css">
        <meta charset="UTF-8">
    </head>
	<?php require_once 'header.php'; ?>

    <body>
        <form method="post" action="">
        <div class="contentform">
            <div class="leftgroup">
                <div class="form-group">
                    <p>First Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input type="text" name="fname">
                </div>
                <div class="form-group">
                    <p>Last Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input type="text" name="lname">
                </div>
                <div class="form-group">
                    <p>E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="mail">
                </div>
                <div class="form-group">
                    <p>Home Address</p>
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <input type="text" name="address">
                </div>
                <div class="form-group">
                    <p>Age</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="city">
                </div>
                <div class="form-group">
                    <p>Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="number">
                </div>
            </div>
            <div class="rightgroup">
                <div class="form-group">
                    <p>Gender</p>
                    <span class="icon"><i></i></span>
                    <select name="jobrole" class="form-control selectpicker">
                      <optgroup label="Gender" id="list">
                        <option >Male</option>
                        <option >Female</option>
                        
                      </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <p>Username</p>
                    <span class="icon"><i></i></span>
                    <input type="text" name="salary">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="password" name="pass" />
                </div>
                <div class="form-group">
                    <p>Guardian E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="mail">
                    <div class="form-group">
                    <p>Guardian Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="number">
                </div>
                    
                </div>
                Choose the picture <br><br>
                <input type="file" name="pic" accept="image/*">
            </div>
            
            
            
        </div>
         
        <button type="submit" class="create-profile" value="Edit student" >Edit Student</button>
		
    </form>
	<button class="create-profile" id="bb" onclick="parent.location='frontdiskhome.php'">Back</button>
    </body>
    
</html>

>>>>>>> 39b9fc79caa1db37a4edd2e1b2951c17173e9245

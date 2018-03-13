<html>
    <head>
        <title>
            Edit Student
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/editstudent.css">
        <meta charset="UTF-8">
    </head>
	<?php require_once '../constant/header.php'; ?>

    <body>
        <?php
            $id = $_GET['id'];
            require_once  "../staff/database.php";

              $data = new data();
              $conn = $data->con();

             $sql = "SELECT * FROM `user` WHERE id = $id";

             $result = $conn->query($sql);

              if ($result->num_rows > 0) {

              while($row = $result->fetch_assoc()) {
    echo '<form method="post" action="">
        <div class="contentform">
            <div class="leftgroup">
                <div class="form-group">
                    <p>First Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input type="text" name="fname" value="'.$row['First-name'].'">
                                        <input type="text" name="id" value="'.$row['id'].'" hidden>

                </div>
                <div class="form-group">
                    <p>Last Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input type="text" name="lname" value="'.$row['last-name'].'">
                </div>
                <div class="form-group">
                    <p>E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="mail" value="'.$row['email'].'">
                </div>
                <div class="form-group">
                    <p>Home Address</p>
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <input type="text" name="address" value="'.$row['address'].'">
                </div>
                <div class="form-group">
                    <p>Age</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="age" value="'.$row['age'].'">
                </div>
                <div class="form-group">
                    <p>Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="number" value="'.$row['telephone'].'">
                </div>
            </div>
            <div class="rightgroup">
                <div class="form-group">
                    <p>Gender</p>
                    <input type="text" name="gender" value="'.$row['gender'].'" disabled>
                </div>
                <div class="form-group">
                    <p>Username</p>
                    <span class="icon"><i></i></span>
                    <input type="text" name="salary" value="'.$row['email'].'">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="password" name="pass" value="'.$row['password'].'" />
                </div>
                
            
            
            
        </div>
         
        <button type="submit" class="create-profile" value="Edit student" >Edit Student</button>
        
    </form>
';
                        }
                  } else {
                      echo "0 results";
                  }
                 
            if($_POST){
            $id = $_POST["id"];
            $dfname =$_POST["fname"];
            $dlname = $_POST['lname'];
            $dmail = $_POST['mail'];
            $daddress = $_POST['address'];
            $dage = $_POST['age'];
            $dnumber = $_POST['number'];
            $dpassword = $_POST['pass'];
             $sql = "UPDATE `user`
                SET `First-name` = '$dfname', 
                    `last-name` = '$dlname',
                    `age` = '$dage',
                    `email` = '$dmail',
                    `password`= '$dpassword',
                    `address` = '$daddress',
                    `telephone`= '$dnumber'
                    WHERE `id` = $id";
             
             if ($conn->query($sql) === TRUE) 
                 {  
                   
                        echo "<script> alert('your account updated successfully');  </script>";
                        header("Location:../staff/frontdiskhome.php");
                        
                    
                 } 
             else 
                 {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                 }
         
        }
                $conn->close(); 
        ?>

	<button class="create-profile" id="bb" onclick="parent.location='../staff/frontdiskhome.php'">Back</button>
    </body>
    
</html>


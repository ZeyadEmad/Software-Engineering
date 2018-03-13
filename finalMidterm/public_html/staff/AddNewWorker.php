    v<?php
?>

<html>
    <head>
        <title>
            Add New Worker
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/addworker.css">
        <meta charset="UTF-8">
    </head>
<?php require_once '../constant/header.php'; ?>
    <body>
       <!-- <form method="post" action="">
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
                    <p>City</p>
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
                    <p>Job Role</p>
                    <span class="icon"><i class="fa fa-info"></i></span>
                    <select name="jobrole" class="form-control selectpicker">
                      <optgroup label="Please select the job role" id="list">
                        <option >Dummy</option>
                        <option >Dummy</option>
                        <option >Dummy</option>
                        <option >Dummy</option>
                        <option >Dummy</option>
                      </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <p>Salary</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input type="text" name="salary">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="password" name="pass" />
                </div>
            </div>
        </div>
        <button type="submit" class="create-profile" value="Create profile">Create profile</button>
    </form>-->
       
       <?php
        $id = $_GET['id'];
        require_once  "../staff/database.php";
        $data = new data();
        $conn = $data->con();
        $sql = "SELECT * FROM `user` WHERE id = $id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
          {
              while($row = $result->fetch_assoc())
                {
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
                                    <input type="text" name="id" value="'.$row['id'].'" hidden>
                                </div>
                                <div class="form-group">
                                    <p>E-mail</p>
                                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="text" name="Email" value="'.$row['email'].'">
                                    <input type="text" name="id" value="'.$row['id'].'" hidden>
                                </div>
                                <div class="form-group">
                                    <p>Home Address</p>
                                    <span class="icon"><i class="fa fa-home"></i></span>
                                    <input type="text" name="city" value="'.$row['address'].'">
                                    <input type="text" name="id" value="'.$row['id'].'" hidden>
                                </div>
                                <div class="form-group">
                                    <p>Phone number</p>
                                    <span class="icon"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="Pnumber" value="'.$row['telephone'].'">
                                    <input type="text" name="id" value="'.$row['id'].'" hidden>
                                </div>
                        </div>
                        <div class="rightgroup">
                            <div class="form-group">
                                <p>Username</p>
                                <span class="icon"><i class="fa fa-building-o"></i></span>
                                <input type="text" name="uname" value="'.$row['username'].'">
                                <input type="text" name="id" value="'.$row['id'].'" hidden>
                            </div>
                            <div class="form-group">
                                <p>Password</p>
                                <span class="icon"><i class="fa fa-building-o"></i></span>
                                <input type="password" name="pass" value="'.$row['password'].'">
                                <input type="text" name="id" value="'.$row['id'].'" hidden>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="create-profile" value="Edit student" >Edit Student</button>
                    
                </form>';
                }
        } 
        else 
        {
        echo "0 results";
        }

        if($_POST)
        {
            $dfname =$_POST["fname"];
            $dlname = $_POST['lname'];
            $dmail = $_POST['Email'];
            $daddress = $_POST['city'];
            $dnumber = $_POST['Pnumber'];
            $dusername = $_POST['uname'];
            $dpassword = $_POST['pass'];
            $sql = "UPDATE `user`
                    SET `First-name` = '$dfname', 
                    `last-name` = '$dlname',
                    `email` = '$dmail',
                    `password`= '$dpassword',
                    `address` = '$daddress',
                    `telephone`= '$dnumber'
                    WHERE `id` = $id";

            if ($conn->query($sql) === TRUE) 
                {  
                    echo "<script> alert('your account updated successfully');  </script>";
                    header("Location:../staff/BackDisk.php");
                } 
            else 
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
        $conn->close(); 
        ?>
    <button class="create-profile" id="bb" onclick="parent.location='BackDisk.php'">Back</button>
    </body>
    
</html>


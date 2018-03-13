<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign up
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="../css/signup.css" rel="stylesheet" />
        
        <meta charset="UTF-8">
    </head>

    <body>
        
        <form method="post" action="../staff/functions.php"  >
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
                    <input type="text" name="pnumber">
                </div>
            </div>
            <div class="rightgroup">
                <div class="form-group">
                    <p>Gender</p>
                    <span class="icon"><i></i></span>
                    <select name="glist" class="form-control selectpicker">
                      <optgroup label="Gender" name="glist" >
                        <option id="glist" value="1">Male</option>
                        <option id="glist" value="0" >Female</option>
                        
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
                    <input type="email" name="gumail">
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
            
            <button type="submit" class="create-profile" onclick="parent.location='../student/student.php'" name="Addnewstudent"> Submit </button>
		

    </form>
    <button type="submit" class="create-profile" onclick = "location.href='../Index.php'" > Back </button>
    </body>
    
</html>


<!--
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "try1";
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    }
    
    if($_POST){
        $dfname =$_POST["fname"];
        $dlname = $_POST['lname'];
        $dmail = $_POST['mail'];
        $daddress = $_POST['address'];
        $dage = $_POST['age'];
        $dnumber = $_POST['pnumber'];
        $dgender = $_POST['glist'];
        $dusername = $_POST['username'];
        $dpassword = $_POST['password'];
        $dpemail = $_POST['gumail'];
        $dgnumber = $_POST['gnumber'];
        $dpic = $_POST['pic'];
        $usertype = 1;

        $TableName = 'user';
         $sql = "INSERT INTO `user` (`id`,`First-name`, `last-name`, `age`, `email`,`username`, `password`, `address`, `telephone`,`gender`,`type-id`,`Pic`) VALUES (NULL ,'$dfname', '$dlname', '$dage', '$dmail','$dusername','$dpassword', '$daddress', '$dnumber','$dgender','5','$dpic')";
         $MAX = "SELECT MAX(ID) FROM  user";
         $last_id = $conn->insert_id;
         $sql1 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id', '1', '$dpemail')";
         $sql2 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id' , '2', '$dgnumber')";
                
        
         if ($conn->query($sql) === TRUE) 
             {  
                $last_id = $conn->insert_id;
                $sql1 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id', '1', '$dpemail')";
                $sql2 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id' , '2', '$dgnumber')";
                echo "New record created successfully. Last inserted ID is: " . $last_id;
                
                if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE  ) 
                {
                   
                    echo "<script> alert('Welcome your account created successfully');  </script>";
                    header("Location:../student/student.php");
                }
             } 
         else 
             {
                 echo "Error: " . $sql . "<br>" . $conn->error;
             }
         
        }  
        
-->

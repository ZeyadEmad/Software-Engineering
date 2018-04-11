<?php
//session_start();
              $servername = "localhost";
			  $username = "root";
			  $password = "";
			  $db = "try1";
			 
		      $emailError =" ";
		
		  
		$con  = new mysqli($servername,$username,$password,$db);echo "hi";
               if($con->connect_error)	
                {
					die("failed to connect :".$con->connect_error);
			    }				   
		      
		 
		    function disconnect()
			
			{
				return $close();
			}

      
	   if(isset($_POST['submit']))
                     {
						 
	                     if(empty($_POST['mail']))
	                           {
		                          $emailError = "email is required";
	                           }
                         
						 else
						 {
							 $sql = "insert into user (First-name, last-name, age, email, password, address, telephone, gender) values ('".$_POST['First-name']."',
							'".$_POST['last-name']."','".$_POST['age']."','".$_POST['email']."','".$_POST['password']."','".$_POST['address']."',
							'".$_POST['telephone']."','".$_POST['gender']."')";
							echo $sql;
							$result  = mysqli_query($con,$sql);
							if($result)
							{ 
						      // header("Location:index.php");
							}
						 }

                     
					 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign up
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
        <meta charset="UTF-8">
    </head>

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
            
        <button type="submit" class="create-profile" value="Edit student"> Submit </button>
		

    </form>
    <button type="submit" class="create-profile" onclick = "location.href='welcom.php'" > Back </button>
    </body>
    
</html>


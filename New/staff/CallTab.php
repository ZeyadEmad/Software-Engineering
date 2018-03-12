<<<<<<< HEAD
<?php
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
                    $mail = $_POST['mail'];
                    $address = $_POST['address'];
                    $age = $_POST['age'];
                    $number = $_POST['number'];
					$jobrole = $_POST['jobrole'];
					$username = $_POST['username'];
                    $password = $_POST['password'];
                    $gemail = $_POST['gemail'];
                    $gnumber = $_POST['gnumber'];
                    $pic = $_POST['pic'];
                    $usertype = 1;
				
                   
                    $sql = "INSERT INTO `user` (`First-name`, `last-name`, `age`, `email`,`username`, `password`, `address`, `telephone`,`gender`,`type-id`,`Gemail`,`Gnumber`,`pic`) VALUES ('$fname', '$lname', '$age', '$mail','$username','$password', '$address', '$number','$jobrole','1','$gemail','$gnumber','$pic')";
        
                    echo "<br>";
                    echo $sql;
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                    
                  }


            require_once 'userDAO/BaseDao.php';
            require_once 'userDAO/UserDao.php';


            $DB=new UserDao();
            $Users=$DB->SelectAll('user');
       
?>
<!DOCTYPE html>
<html>
<body>
<!--BackDisk-->

<div id="Add-new-user" class="tabcontent" >

<h2> Enter New User:</h2>
<div class="vertical-menu">
<form method="post" action="" class="form1">
        <div class="contentform">
            <div class="leftgroup">
                <div class="form-group">
                    <p class="p1" >First Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input  class="input1" type="text" name="fname">
                </div>
                <div class="form-group">
                    <p class="p1">Last Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input class="input1" type="text" name="lname">
                </div>
                <div class="form-group">
                    <p class="p1">E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input class="input1" type="email" name="mail">
                </div>
                <div class="form-group">
                    <p class="p1">Home Address</p>
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <input class="input1" type="text" name="address">
                </div>
                <div class="form-group">
                    <p class="p1">City</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="text" name="city">
                </div>
                
            </div>
            <div class="rightgroup">
				<div class="form-group">
                    <p class="p1">Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input class="input1" type="text" name="number">
                </div>
                <div class="form-group">
                    <p class="p1">Job Role</p>
                    <span class="icon"><i class="fa fa-info"></i></span>
                    <select name="jobrole" class="select1" class="form-control selectpicker">
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
                    <p class="p1">Salary</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input class="input1" type="text" name="salary">
                </div>
                <div class="form-group">
                    <p class="p1">Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="password" name="pass" />
                </div>
            </div>
        </div>
        <button type="submit" class="create-profile" value="Create profile">Create profile</button>
    </form>
</div>
</div>


<div id="Add-new-course" class="tabcontent">
 
<h2> Enter New Cousre Information:</h2>
<form  name="form_name" action="" method ="post" class="from-horizontal" >
Course Code:<br>
<input type="text" id="name" name="name"  >
<br>
Subject Name:<br>
<input type="text" id="name" name="name"  >
<br>
Course Teacher:<br>
<input type="text" id="name" name="name"  >
<br>
Room:<br>
<div id="buttons_panel">
	<?php echo getButtons();?>
</div>


<br>
Select Weekdays & Time:<br>
<div>
	<div class="dropdown">
		  <div class="dropbtn" id="sat">Saturday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term1" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term1" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term1" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term1" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term1" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term1" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term1" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Sunday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term2" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term2" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term2" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term2" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term2" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term2" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term2" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Monday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term3" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term3" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term3" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term3" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term3" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term3" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term3" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Tuesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term4" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term4" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term4" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term4" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term4" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term4" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term4" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Wednesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term5" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term5" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term5" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term5" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term5" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term5" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term5" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Thursday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term6" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term6" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term6" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term6" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term6" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term6" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term6" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Friday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term7" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term7" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term7" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term7" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term7" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term7" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term7" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
</div>
<br>
Course Color:<br>
<input type="color" class="co1"  name="favcolor" value="#ff0000">
<br><br>
<input type="submit" class="b1" value="Submit" >

</form>
</div>

<div id="View-courses" class="tabcontent">
  <h2>All Courses</h2>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Eng101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Eng102</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Math101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Ph101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Arb101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Abr102</button>
  
</div>


<div id="Total-Bills" class="tabcontent">
  <h3>Total Bills</h3>
</div>

<div id="Staff" class="tabcontent">
  <h1>View Staff</h1>
		
<input type="text" name="search">
<button>Search for Students</button><br><br>
<div class="vertical-menu">
		<table cellpadding="2" cellspacing="0">
		
		<tbody>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			
		</tbody>
		</table>
		</div>
</div>

<div id="Rooms" class="tabcontent">
	
<h2> Rooms:</h2>
	<div id="buttons_panel">
	<?php echo getButtons1();?>
	</div>
	<br>
	<button class="button1" id="bf1" onclick="parent.location='AddRoom.php'">Add new room</button>
	<br>
	<br>
	<br>

</div>

<div id="View-requests" class="tabcontent">
  <h3>New Requests</h3>
  
	<table>
	  <tr>
		<th>Content</th>
		<th>Detalis</th> 
	  </tr>
	  <tr>
		<td>***</td>
		<td>empty</td>
	  </tr>
	  <tr>
		<td>***</td>
		<td>----</td>
	  </tr>
	  <tr>
		<td>***</td>
		<td>empty</td>
	  </tr>
		<tr>
		<td>***</td>
		<td>empty</td>
	  </tr>
		<tr>
		<td>***</td>
		<td>----</td>
	  </tr>
	</table>
	<br>
	<br>
	<br>
</div>


<!--FrontDisk-->

<div id="Add-new-Student" class="tabcontent" >
	<div class="vertical-menu">
		<form method="post" action="">
			<div class="contentform">
				<div class="leftgroup">
					<div class="form-group">
						<p>First Name</p>
						<span class="icon"><i class="fa fa-male"></i></span>
						<input type="text" name="fname" id="fname">
					</div>
					<div class="form-group">
						<p>Last Name</p>
						<span class="icon"><i class="fa fa-male"></i></span>
						<input type="text" name="lname" id="lname">
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
						  <optgroup label="gender" id="list">
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
					<input type="file" name="pic" accept="image/*"><br><br>
				</div>
				
				
				
			</div>
				
			<button type="submit" class="create-profile" name="submit" value="Add new student">Add new Student</button>
		</form>
	</div>
</div>

<div id="Students" class="tabcontent"><br><br>
    <div class="vertical-menu">
	<input type="text" name="search"> </input>
		<button>Search for Students</button><br><br>
   
		<div id = "divtable">
			<table>
			<tbody>
                <?php
                 foreach($Users as $u)
            {
                echo $u['First-name'];
            }
                
                ?>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Samy Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td> Youssef Mohamed</td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>
  
<div id="View-Bills" class="tabcontent">
	<div class="vertical-menu">
	<table>
		<tr>
			<th class="th-title" colspan="4">Today Bills</th>
		</tr>
		<tr>
			<th>Code</th>
			<th>Student name</th>
			<th>Amount</th>  
	    </tr>
	    <tr>
		   <th>
				<select id = "sel1">
				  <option value="Subject">213123</option>
				  <option value="Subject">213324</option>
				  <option value="Subject">21344</option>
				  <option value="Subject">5353</option>
				  <option value="Subject">12312412</option>
				  <option value="Subject">2135152</option>
				</select>
			   
			</th>
			<th>
				<select id = "sel2">
				  <option value="Teacher">Mr/Ahmed Mohamed</option>
				  <option value="Teacher">Mr/Mohamed Ali</option>
				  <option value="Teacher">Mr/Ali Tareeq</option>
				  <option value="Teacher">Mr/Hani Mohamed</option>
				  <option value="Teacher">Mr/Ahmed Hani</option>
				  <option value="Teacher">Mr/Waleed Mahmoud</option>
				</select>
			</th>	   
			<th>
			<input type ="Number"></input><br>
			</th>
		<br><br>
		</tr>
		<tr>
			<th>
			<select id = "sel1">
					  <option value="Subject">213123</option>
					  <option value="Subject">213324</option>
					  <option value="Subject">21344</option>
					  <option value="Subject">5353</option>
					  <option value="Subject">12312412</option>
					  <option value="Subject">2135152</option>
					</select>
			</th>
			<th>
			<select id = "sel2">
					  <option value="Teacher">Mr/Ahmed Mohamed</option>
					  <option value="Teacher">Mr/Mohamed Ali</option>
					  <option value="Teacher">Mr/Ali Tareeq</option>
					  <option value="Teacher">Mr/Hani Mohamed</option>
					  <option value="Teacher">Mr/Ahmed Hani</option>
					  <option value="Teacher">Mr/Waleed Mahmoud</option>
					</select>
			</th>
		
			<th>
		   <input type ="Number"></input><br>
			</th>
		</tr>
		<br><br>
		</tr>
		<tr>
			<th>
			<select id = "sel1">
					  <option value="Subject">213123</option>
					  <option value="Subject">213324</option>
					  <option value="Subject">21344</option>
					  <option value="Subject">5353</option>
					  <option value="Subject">12312412</option>
					  <option value="Subject">2135152</option>
					</select>
			</th>
			<th>
			<select id = "sel2">
					  <option value="Teacher">Mr/Ahmed Mohamed</option>
					  <option value="Teacher">Mr/Mohamed Ali</option>
					  <option value="Teacher">Mr/Ali Tareeq</option>
					  <option value="Teacher">Mr/Hani Mohamed</option>
					  <option value="Teacher">Mr/Ahmed Hani</option>
					  <option value="Teacher">Mr/Waleed Mahmoud</option>
					</select>
			</th>
		
			<th>
		   <input type ="Number"></input><br>
			</th>
		<br><br>
		</tr>
		<tr>
			<th>
			<select id = "sel1">
					  <option value="Subject">213123</option>
					  <option value="Subject">213324</option>
					  <option value="Subject">21344</option>
					  <option value="Subject">5353</option>
					  <option value="Subject">12312412</option>
					  <option value="Subject">2135152</option>
					</select>
			</th>
			<th>
			<select id = "sel2">
					  <option value="Teacher">Mr/Ahmed Mohamed</option>
					  <option value="Teacher">Mr/Mohamed Ali</option>
					  <option value="Teacher">Mr/Ali Tareeq</option>
					  <option value="Teacher">Mr/Hani Mohamed</option>
					  <option value="Teacher">Mr/Ahmed Hani</option>
					  <option value="Teacher">Mr/Waleed Mahmoud</option>
					</select>
			</th>
		
			<th>
		   <input type ="Number"></input><br>
			</th>
		</tr>
	</table> 
	<button type="Submit"> Submit </button>
	</div>
</div>

<div id="Attendence" class="tabcontent">
   <h2>Choose Courses</h2>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng102</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Math101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Ph101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Arb101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Abr102</button>
  <br><br><br><br>
</div>

<!--ViewCou-->

<div id="Edit-course" class="tabcontent">
  
<h2> Enter New Cousre Information:</h2>
<form  name="form_name" action="" method ="post" class="from-horizontal" >
Course Code:<br>
<input type="text" id="name" name="name"  >
<br>
Subject Name:<br>
<input type="text" id="name" name="name"  >
<br>
Course Teacher:<br>
<input type="text" id="name" name="name"  >
<br>
Room:<br>
<div id="buttons_panel">
	<?php echo getButtons();?>
</div>
<br>
Select Weekdays & Time:<br>
<div>
	<div class="dropdown">
		  <div class="dropbtn" id="sat">Saturday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term1" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term1" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term1" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term1" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term1" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term1" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term1" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Sunday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term2" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term2" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term2" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term2" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term2" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term2" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term2" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Monday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term3" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term3" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term3" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term3" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term3" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term3" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term3" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Tuesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term4" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term4" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term4" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term4" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term4" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term4" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term4" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Wednesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term5" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term5" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term5" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term5" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term5" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term5" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term5" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Thursday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term6" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term6" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term6" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term6" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term6" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term6" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term6" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Friday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term7" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term7" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term7" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term7" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term7" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term7" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term7" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
</div>
<br>
Course Color:<br>
<input type="color" class="co1"  name="favcolor" value="#ff0000">
<br><br>
<input type="submit" class="b1" value="Submit" >

</form>
</div>

<div id="student" class="tabcontent">
  <h1>View Students</h1>
			
	<div class="vertical-menu">
	<table cellpadding="2" cellspacing="0">
	
	<tbody>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		
	</tbody>
	</table>
	</div>
</div>

<!--ViewCou2-->
<div id="Attendence1" class="tabcontent">
  <h2> Today Attendence<br> </h2>
	<div class="vertical-menu">
		<div>
			<table cellpadding="2" cellspacing="0">
				<tbody>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Samy Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present
					<input type="radio" name="attend" value="female"> Absent<br>
					</form>   	
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td> Youssef Mohamed</td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present
					<input type="radio" name="attend" value="female"> Absent<br>
					</form>
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present</input>
					<input type="radio" name="attend" value="female"> Absent</input>
					<br>
					</form>
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present</input>
					<input type="radio" name="attend" value="female"> Absent</input>
					<br>
					</form>
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present</input>
					<input type="radio" name="attend" value="female"> Absent</input>
					<br>
					</form>
				</td>
				</tr>	
			</tbody>
			</table>
		</div>  
		<button type="Submit"> Submit </button>
	</div>  
</div>

<div id="student1" class="tabcontent">
  <h1>View Students</h1>
			
	<div class="vertical-menu">
	<table cellpadding="2" cellspacing="0">
	
	<tbody>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		
	</tbody>
	</table>
	</div>
</div>


<!--Teacher-->

<div id="Schedule" class="tabcontent" >
<div class="vertical-menu">	
	<h1>  Week  </h1>

	<div>
		<table cellpadding="2" cellspacing="0" class="too1">
		<thead>
		<tr>
			<td></td>
			<td>Saturday</td>
			<td>Sunday</td>
			<td>Monday</td>
			<td>Tuesday</td>
			<td>Wednesday</td>
			<td>Thursday</td>
			<td>Friday</td>
		</tr>
		</thead>
			<tbody>
			<tr>
			<td>09:00 AM -> 11:00 AM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>11:00 AM -> 01:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>01:00 PM -> 03:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>03:00 PM -> 05:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>05:00 PM -> 07:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>07:00 PM -> 09:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>09:00 PM -> 11:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
		</tbody>
		</table>
	</div>
 </div>   
	
</div>

<div id="details" class="tabcontent">
	 <div class="vertical-menu">	
	 <h1>Change Your Detail</h1>

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

		</form>
	 </div>
</div>

<div id="Extra" class="tabcontent">
  <form>
Select the course code    
    <select>
  <option value="20401">20401</option>
  <option value="30213">30213</option>
  <option value="20401">20401</option>
  <option value="30213">30213</option>
  <option value="20401">20401</option>
  <option value="30213">30213</option>
</select><br><br>
    Date<br>
  <input type="text" name="Date" placeholder="Month/day/year"><br><br>
      <input type="submit">
    
</form>
</div>

<div id="Contact" class="tabcontent">
    <h3>Contact Admin</h3>
  <textarea rows="4" cols="50">
    </textarea><br><br>
    <input type="submit">
</div>

</body>
</html>
=======
<?php
require_once 'functions.php';
require_once 'Css-files.php';

?>
<!DOCTYPE html>
<html>
<body>
<!--BackDisk-->

<div id="Add-new-user" class="tabcontent" >

<h2> Enter New User:</h2>
<div class="vertical-menu">
<form method="post" action="" class="form1">
        <div class="contentform">
            <div class="leftgroup">
                <div class="form-group">
                    <p class="p1" >First Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input  class="input1" type="text" name="fname">
                </div>
                <div class="form-group">
                    <p class="p1">Last Name</p>
                    <span class="icon"><i class="fa fa-male"></i></span>
                    <input class="input1" type="text" name="lname">
                </div>
                <div class="form-group">
                    <p class="p1">E-mail</p>
                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                    <input class="input1" type="email" name="mail">
                </div>
                <div class="form-group">
                    <p class="p1">Home Address</p>
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <input class="input1" type="text" name="address">
                </div>
                <div class="form-group">
                    <p class="p1">City</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="text" name="city">
                </div>
                
            </div>
            <div class="rightgroup">
				<div class="form-group">
                    <p class="p1">Phone number</p>
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <input class="input1" type="text" name="number">
                </div>
                <div class="form-group">
                    <p class="p1">Job Role</p>
                    <span class="icon"><i class="fa fa-info"></i></span>
                    <select name="jobrole" class="select1" class="form-control selectpicker">
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
                    <p class="p1">Salary</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input class="input1" type="text" name="salary">
                </div>
                <div class="form-group">
                    <p class="p1">Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="password" name="pass" />
                </div>
            </div>
        </div>
        <button type="submit" class="create-profile" value="Create profile">Create profile</button>
    </form>
</div>
</div>


<div id="Add-new-course" class="tabcontent">
 
<h2> Enter New Cousre Information:</h2>
<form  name="form_name" action="" method ="post" class="from-horizontal" >
Course Code:<br>
<input type="text" id="name" name="name"  >
<br>
Subject Name:<br>
<input type="text" id="name" name="name"  >
<br>
Course Teacher:<br>
<input type="text" id="name" name="name"  >
<br>
Room:<br>
<div id="buttons_panel">
	<?php echo getButtons();?>
</div>


<br>
Select Weekdays & Time:<br>
<div>
	<div class="dropdown">
		  <div class="dropbtn" id="sat">Saturday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term1" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term1" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term1" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term1" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term1" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term1" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term1" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Sunday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term2" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term2" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term2" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term2" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term2" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term2" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term2" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Monday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term3" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term3" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term3" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term3" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term3" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term3" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term3" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Tuesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term4" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term4" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term4" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term4" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term4" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term4" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term4" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Wednesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term5" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term5" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term5" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term5" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term5" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term5" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term5" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Thursday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term6" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term6" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term6" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term6" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term6" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term6" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term6" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Friday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term7" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term7" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term7" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term7" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term7" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term7" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term7" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
</div>
<br>
Course Color:<br>
<input type="color" class="co1"  name="favcolor" value="#ff0000">
<br><br>
<input type="submit" class="b1" value="Submit" >

</form>
</div>

<div id="View-courses" class="tabcontent">
  <h2>All Courses</h2>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Eng101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Eng102</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Math101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Ph101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Arb101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou.php'">Abr102</button>
  
</div>


<div id="Total-Bills" class="tabcontent">
  <h3>Total Bills</h3>
</div>

<div id="Staff" class="tabcontent">
  <h1>View Staff</h1>
		
<input type="text" name="search">
<button>Search for Students</button><br><br>
<div class="vertical-menu">
		<table cellpadding="2" cellspacing="0">
		
		<tbody>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			<tr>
			<td><img src="../img/img_avatar.png" alt="Avatar"></td>
			<td>USER1 </td>
			<td><button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button> </td>
			<td><button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button> </td>
			</tr>
			
		</tbody>
		</table>
		</div>
</div>

<div id="Rooms" class="tabcontent">
	
<h2> Rooms:</h2>
	<div id="buttons_panel">
	<?php echo getButtons1();?>
	</div>
	<br>
	<button class="button1" id="bf1" onclick="parent.location='AddRoom.php'">Add new room</button>
	<br>
	<br>
	<br>

</div>

<div id="View-requests" class="tabcontent">
  <h3>New Requests</h3>
  
	<table>
	  <tr>
		<th>Content</th>
		<th>Detalis</th> 
	  </tr>
	  <tr>
		<td>***</td>
		<td>empty</td>
	  </tr>
	  <tr>
		<td>***</td>
		<td>----</td>
	  </tr>
	  <tr>
		<td>***</td>
		<td>empty</td>
	  </tr>
		<tr>
		<td>***</td>
		<td>empty</td>
	  </tr>
		<tr>
		<td>***</td>
		<td>----</td>
	  </tr>
	</table>
	<br>
	<br>
	<br>
</div>


<!--FrontDisk-->

<div id="Add-new-Student" class="tabcontent" >
	<div class="vertical-menu">
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
					<input type="file" name="pic" accept="image/*"><br><br>
				</div>
				
				
				
			</div>
				
			<button type="submit" class="create-profile" value="ADd new student">Add new Student</button>
		</form>
	</div>
</div>

<div id="Students" class="tabcontent"><br><br>
    <div class="vertical-menu">
	<input type="text" name="search"> </input>
		<button>Search for Students</button><br><br>
   
		<div id = "divtable">
			<table>
			<tbody>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Samy Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td> Youssef Mohamed</td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
				<tr>
				<td><img src="../img/image.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button> </td>
				<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button> </td>
				<td><button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
				<td><button onclick="myFunction()"class="button3" id="bb" >Delete</button></td>
				<td><button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>
  
<div id="View-Bills" class="tabcontent">
	<div class="vertical-menu">
	<table>
		<tr>
			<th class="th-title" colspan="4">Today Bills</th>
		</tr>
		<tr>
			<th>Code</th>
			<th>Student name</th>
			<th>Amount</th>  
	    </tr>
	    <tr>
		   <th>
				<select id = "sel1">
				  <option value="Subject">213123</option>
				  <option value="Subject">213324</option>
				  <option value="Subject">21344</option>
				  <option value="Subject">5353</option>
				  <option value="Subject">12312412</option>
				  <option value="Subject">2135152</option>
				</select>
			   
			</th>
			<th>
				<select id = "sel2">
				  <option value="Teacher">Mr/Ahmed Mohamed</option>
				  <option value="Teacher">Mr/Mohamed Ali</option>
				  <option value="Teacher">Mr/Ali Tareeq</option>
				  <option value="Teacher">Mr/Hani Mohamed</option>
				  <option value="Teacher">Mr/Ahmed Hani</option>
				  <option value="Teacher">Mr/Waleed Mahmoud</option>
				</select>
			</th>	   
			<th>
			<input type ="Number"></input><br>
			</th>
		<br><br>
		</tr>
		<tr>
			<th>
			<select id = "sel1">
					  <option value="Subject">213123</option>
					  <option value="Subject">213324</option>
					  <option value="Subject">21344</option>
					  <option value="Subject">5353</option>
					  <option value="Subject">12312412</option>
					  <option value="Subject">2135152</option>
					</select>
			</th>
			<th>
			<select id = "sel2">
					  <option value="Teacher">Mr/Ahmed Mohamed</option>
					  <option value="Teacher">Mr/Mohamed Ali</option>
					  <option value="Teacher">Mr/Ali Tareeq</option>
					  <option value="Teacher">Mr/Hani Mohamed</option>
					  <option value="Teacher">Mr/Ahmed Hani</option>
					  <option value="Teacher">Mr/Waleed Mahmoud</option>
					</select>
			</th>
		
			<th>
		   <input type ="Number"></input><br>
			</th>
		</tr>
		<br><br>
		</tr>
		<tr>
			<th>
			<select id = "sel1">
					  <option value="Subject">213123</option>
					  <option value="Subject">213324</option>
					  <option value="Subject">21344</option>
					  <option value="Subject">5353</option>
					  <option value="Subject">12312412</option>
					  <option value="Subject">2135152</option>
					</select>
			</th>
			<th>
			<select id = "sel2">
					  <option value="Teacher">Mr/Ahmed Mohamed</option>
					  <option value="Teacher">Mr/Mohamed Ali</option>
					  <option value="Teacher">Mr/Ali Tareeq</option>
					  <option value="Teacher">Mr/Hani Mohamed</option>
					  <option value="Teacher">Mr/Ahmed Hani</option>
					  <option value="Teacher">Mr/Waleed Mahmoud</option>
					</select>
			</th>
		
			<th>
		   <input type ="Number"></input><br>
			</th>
		<br><br>
		</tr>
		<tr>
			<th>
			<select id = "sel1">
					  <option value="Subject">213123</option>
					  <option value="Subject">213324</option>
					  <option value="Subject">21344</option>
					  <option value="Subject">5353</option>
					  <option value="Subject">12312412</option>
					  <option value="Subject">2135152</option>
					</select>
			</th>
			<th>
			<select id = "sel2">
					  <option value="Teacher">Mr/Ahmed Mohamed</option>
					  <option value="Teacher">Mr/Mohamed Ali</option>
					  <option value="Teacher">Mr/Ali Tareeq</option>
					  <option value="Teacher">Mr/Hani Mohamed</option>
					  <option value="Teacher">Mr/Ahmed Hani</option>
					  <option value="Teacher">Mr/Waleed Mahmoud</option>
					</select>
			</th>
		
			<th>
		   <input type ="Number"></input><br>
			</th>
		</tr>
	</table> 
	<button type="Submit"> Submit </button>
	</div>
</div>

<div id="Attendence" class="tabcontent">
   <h2>Choose Courses</h2>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng102</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Math101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Ph101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Arb101</button>
  <button class="button1" id="bf1" onclick="parent.location='ViewCou2.php'">Abr102</button>
  <br><br><br><br>
</div>

<!--ViewCou-->

<div id="Edit-course" class="tabcontent">
  
<h2> Enter New Cousre Information:</h2>
<form  name="form_name" action="" method ="post" class="from-horizontal" >
Course Code:<br>
<input type="text" id="name" name="name"  >
<br>
Subject Name:<br>
<input type="text" id="name" name="name"  >
<br>
Course Teacher:<br>
<input type="text" id="name" name="name"  >
<br>
Room:<br>
<div id="buttons_panel">
	<?php echo getButtons();?>
</div>
<br>
Select Weekdays & Time:<br>
<div>
	<div class="dropdown">
		  <div class="dropbtn" id="sat">Saturday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term1" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term1" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term1" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term1" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term1" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term1" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term1" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Sunday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term2" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term2" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term2" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term2" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term2" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term2" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term2" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Monday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term3" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term3" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term3" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term3" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term3" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term3" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term3" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Tuesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term4" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term4" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term4" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term4" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term4" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term4" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term4" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Wednesday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term5" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term5" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term5" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term5" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term5" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term5" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term5" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Thursday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term6" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term6" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term6" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term6" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term6" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term6" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term6" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
	<div class="dropdown">
		  <div class="dropbtn">Friday</div>
		  <div class="dropdown-content">
			<input type="radio" name="term7" id="0" >09:00AM - 11:00AM</input><br>
			<input type="radio" name="term7" id="1" >11:00AM - 01:00PM</input><br>
			<input type="radio" name="term7" id="2" >01:00PM - 03:00PM</input><br>
			<input type="radio" name="term7" id="3" >03:00PM - 05:00PM</input><br>
			<input type="radio" name="term7" id="4" >05:00PM - 07:00PM</input><br>
			<input type="radio" name="term7" id="5" >07:00PM - 09:00PM</input><br>
			<input type="radio" name="term7" id="6" >09:00PM - 11:00PM</input><br>
		  </div>
	</div>
</div>
<br>
Course Color:<br>
<input type="color" class="co1"  name="favcolor" value="#ff0000">
<br><br>
<input type="submit" class="b1" value="Submit" >

</form>
</div>

<div id="student" class="tabcontent">
  <h1>View Students</h1>
			
	<div class="vertical-menu">
	<table cellpadding="2" cellspacing="0">
	
	<tbody>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent.php'">Edit</button> </td>
		</tr>
		
	</tbody>
	</table>
	</div>
</div>

<!--ViewCou2-->
<div id="Attendence1" class="tabcontent">
  <h2> Today Attendence<br> </h2>
	<div class="vertical-menu">
		<div>
			<table cellpadding="2" cellspacing="0">
				<tbody>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Samy Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present
					<input type="radio" name="attend" value="female"> Absent<br>
					</form>   	
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td> Youssef Mohamed</td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present
					<input type="radio" name="attend" value="female"> Absent<br>
					</form>
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present</input>
					<input type="radio" name="attend" value="female"> Absent</input>
					<br>
					</form>
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present</input>
					<input type="radio" name="attend" value="female"> Absent</input>
					<br>
					</form>
				</td>
				</tr>
				<tr>
				<td><img src="../img/img_avatar.png" alt="Avatar"></img></td>
				<td>Ahmed Mohamed  </td>
				<td>
					<form action="">
					<input type="radio" name="attend" value="male"> Present</input>
					<input type="radio" name="attend" value="female"> Absent</input>
					<br>
					</form>
				</td>
				</tr>	
			</tbody>
			</table>
		</div>  
		<button type="Submit"> Submit </button>
	</div>  
</div>

<div id="student1" class="tabcontent">
  <h1>View Students</h1>
			
	<div class="vertical-menu">
	<table cellpadding="2" cellspacing="0">
	
	<tbody>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='Editstudent1.php'">Edit</button> </td>
		</tr>
		
	</tbody>
	</table>
	</div>
</div>


<!--Teacher-->

<div id="Schedule" class="tabcontent" >
<div class="vertical-menu">	
	<h1>  Week  </h1>

	<div>
		<table cellpadding="2" cellspacing="0" class="too1">
		<thead>
		<tr>
			<td></td>
			<td>Saturday</td>
			<td>Sunday</td>
			<td>Monday</td>
			<td>Tuesday</td>
			<td>Wednesday</td>
			<td>Thursday</td>
			<td>Friday</td>
		</tr>
		</thead>
			<tbody>
			<tr>
			<td>09:00 AM -> 11:00 AM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>11:00 AM -> 01:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>01:00 PM -> 03:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>03:00 PM -> 05:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>05:00 PM -> 07:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>07:00 PM -> 09:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
			<tr>
			<td>09:00 PM -> 11:00 PM</td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
		</tbody>
		</table>
	</div>
 </div>   
	
</div>

<div id="details" class="tabcontent">
	 <div class="vertical-menu">	
	 <h1>Change Your Detail</h1>

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

		</form>
	 </div>
</div>

<div id="Extra" class="tabcontent">
  <form>
Select the course code    
    <select>
  <option value="20401">20401</option>
  <option value="30213">30213</option>
  <option value="20401">20401</option>
  <option value="30213">30213</option>
  <option value="20401">20401</option>
  <option value="30213">30213</option>
</select><br><br>
    Date<br>
  <input type="text" name="Date" placeholder="Month/day/year"><br><br>
      <input type="submit">
    
</form>
</div>

<div id="Contact" class="tabcontent">
    <h3>Contact Admin</h3>
  <textarea rows="4" cols="50">
    </textarea><br><br>
    <input type="submit">
</div>

</body>
</html>
>>>>>>> 39b9fc79caa1db37a4edd2e1b2951c17173e9245

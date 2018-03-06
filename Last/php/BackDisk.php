<?php
function getButtons()
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "projectone";
	

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID,Number FROM `rooms` ";
$result = $conn->query($sql);
$x=0;
$btns= array();
	

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
		{
			//$btns[$x]=array($row["ID"]=>$row["Number"]);
			$btns[$x]=array('ID'=>$row['ID'],'Num'=>$row['Number']);
			$x=$x+1;
		}
	}
	
$str='';

	
foreach($btns as $btn)
	{
		$str.='&nbsp;<input type="radio" value="'.$btn['Num'].'" name="room" id="'.$btn['ID'].'" class="r1"/>'.$btn['Num'].'';
	
	}
	return $str;
	$conn->close();
	}
function getButtons1()
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "projectone";
	

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID,Number FROM `rooms` ";
$result = $conn->query($sql);
$x=0;
$btns= array();
	

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
		{
			//$btns[$x]=array($row["ID"]=>$row["Number"]);
			$btns[$x]=array('ID'=>$row['ID'],'Num'=>$row['Number']);
			$x=$x+1;
		}
	}
	
$str='';

	
foreach($btns as $btn)
	{
		$pass='Calendar.php';
		$str.='&nbsp;<input type="button"  value="'.$btn['Num'].'" name="btn_'.$btn['Num'].'" id="button1" class="button1" onclick=window.parent.location.href="Calendar.php" target="_parent"/>';
	
	}
	return $str;
	$conn->close();
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<link type="text/css" href="../css/home.css" rel="stylesheet" />
	<link type="text/css" href="../css/addcou.css" rel="stylesheet" />
	<link type="text/css" href="../css/Room.css" rel="stylesheet" />
	<link type="text/css" href="../css/staff.css" rel="stylesheet" />
	<link rel="stylesheet" href="../css/addworker1.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <meta charset="UTF-8">
</head>
<body>

<div id="a">
<img src="../img/img_avatar.png" alt="Avatar">
</div>
<div id="aa">
<h1>Username</h1>
</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Add-new-user')">Add new user</button>
  <button class="tablinks" onclick="openCity(event, 'Add-new-course')">Add new course</button>
  <button class="tablinks" onclick="openCity(event, 'View-courses')">View courses</button>
  <button class="tablinks" onclick="openCity(event, 'Total-Bills')">Total Bills</button>
  <button class="tablinks" onclick="openCity(event, 'Staff')">Staff</button>
  <button class="tablinks" onclick="openCity(event, 'Rooms')">Rooms</button>
  <button class="tablinks" onclick="openCity(event, 'View-requests')">View requests</button>
</div>




<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


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

<br><br><br><br>

<button class="button1" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>

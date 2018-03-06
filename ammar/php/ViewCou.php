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
	
	
?>
<!DOCTYPE html><html>
<head>
	<title>View Course </title>
	<link type="text/css" href="../css/home.css" rel="stylesheet" />
	<link type="text/css" href="../css/staff.css" rel="stylesheet" />
    <link type="text/css" href="../css/Room.css" rel="stylesheet" />
	<link type="text/css" href="../css/addcou.css" rel="stylesheet" />
<style>

.button1
{
	text-align: center;
	height:100px;
	width: 100px;
	Background-color:#ffcccc;
	position:static;
}

</style>
</head>
<body>
<h1> Course code</h1>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'student')">View student</button>
  <button class="tablinks" onclick="openCity(event, 'Edit-course')">Edit</button>
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
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		<tr>
		<td><img src="../img/img_avatar.png" alt="Avatar"></td>
		<td>USER1 </td>
		<td><button class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit</button> </td>
		</tr>
		
	</tbody>
	</table>
	</div>
</div>


<button class="button1" id="bf1" onclick="parent.location='BackDisk.php'">Back</button>
 


</body>
</html>
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
    
     
</head>
<body>

<div id="a">
<img src="../img/img_avatar.png" alt="Avatar">
</div>
<div id="aa">
<h1>Welcome Mr. Ahmed</h1>
</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Add-new-user')">View your Schedule</button>
  <button class="tablinks" onclick="openCity(event, 'Add-new-course')">Change your details</button>
  <button class="tablinks" onclick="openCity(event, 'View-courses')">Submit an Extra</button>
  <button class="tablinks" onclick="openCity(event, 'Total-Bills')">Contact Admin</button>
  

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

</div>

<div id="Add-new-course" class="tabcontent">
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

<div id="View-courses" class="tabcontent">
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


<div id="Total-Bills" class="tabcontent">
    <h3>Contact Admin</h3>
  <textarea rows="4" cols="50">
    </textarea><br><br>
    <input type="submit">
</div>

<div id="Staff" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  

</div><div id="Rooms" class="tabcontent">
	
<h2> Rooms:</h2>
	<div id="buttons_panel">
	<?php echo getButtons1();?>
	</div>
	<br>
	<button class="button1" id="bf1" onclick="parent.location='AddRoom.php'">Add new room</button>
</div>



<br><br><br><br>

<button class="button1" id="bf1" onclick="parent.location='BackDisk.php'">Logout</button>


</body>
</html>

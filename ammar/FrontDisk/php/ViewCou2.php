<!DOCTYPE html>
<html>
<head>
	<title>View Course </title>
	<link type="text/css" href="../css/home.css" rel="stylesheet" />
	<link type="text/css" href="../css/staff.css" rel="stylesheet" />
    <link type="text/css" href="../css/Room.css" rel="stylesheet" />
	<link type="text/css" href="../css/addcou.css" rel="stylesheet" />
	<link type="text/css" href="../css/home1.css" rel="stylesheet" />
    <link type="text/css" href="../css/searchstudents.css" rel="stylesheet" />
    <link type="text/css" href="../css/puttinggrades.css" rel="stylesheet" />  
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
  <button class="tablinks" onclick="openCity(event, 'Attendence')">Attendence</button>
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


<div id="Attendence" class="tabcontent">
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


<button class="button1" id="bf1" onclick="parent.location='frontdiskhome.php'">Back</button>
 


</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<link type="text/css" href="../css/home.css" rel="stylesheet" />
	<link type="text/css" href="../css/table.css" rel="stylesheet" />
    
</head>
<body>

<div id="a">
<img src="../img/img_avatar.png" alt="Avatar">
</div>
<div id="aa">
<h1>Welcome Mr. Ahmed</h1>
</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Schedule')">View your Schedule</button>
  <button class="tablinks" onclick="openCity(event, 'details')">Change your details</button>
  <button class="tablinks" onclick="openCity(event, 'Extra')">Submit an Extra</button>
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact Admin</button>
  

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


<div id="Schedule" class="tabcontent" >
<div class="vertical-menu">	
	<h1>  Week  </h1>

	<div>
		<table cellpadding="2" cellspacing="0">
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

<br><br><br><br>

<button class="button122" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>

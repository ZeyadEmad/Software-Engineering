<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<link type="text/css" href="../css/home1.css" rel="stylesheet" />
    <link type="text/css" href="../css/searchstudents.css" rel="stylesheet" />
    <link type="text/css" href="../css/puttinggrades.css" rel="stylesheet" />    
</head>
<body>

<div id="a">
<img src="../img/image.png" alt="Avatar"></img>
</div>
<div id="aa">
<h1>Welcome User</h1>
</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Add-new-Student')">Add new Student</button>
  <button class="tablinks" onclick="openCity(event, 'Students')">Students</button>
  <button class="tablinks" onclick="openCity(event, 'View-Bills')">Bills</button>
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
    
    
  
<script>
function myFunction() {
    alert("Details has been Deleted");
}
</script>
    

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

<button class="button1" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>

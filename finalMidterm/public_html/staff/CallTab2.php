<?php
require_once 'functions.php';
require_once '../constant/Css-filesold.php';

?>
<!DOCTYPE html>
<html>
<body>
<!--BackDisk-->
<div class="container" style="padding-right: 10%" >
<div id="Add-new-user" class="tabcontent" >

<h3> Enter New User:</h3>

<form method="post" action="" class="form1">

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
                        <option >Lawyer</option>
                        <option >Professor</option>
                        <option >Doctor</option>
                        <option >Engineer</option>
                        <option >Driver</option>
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
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary create-profile" type="submit">
  Create profile
</button>

        </div>
    </form>

</div>

<div class="container" style="padding-right: 10%" >
<div id="Add-new-course" class="tabcontent">
 
<h3> Enter New Cousre Information:</h3>
<form  name="form_name" action="" method ="post" class="from-horizontal" >
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="name">
    <label class="mdl-textfield__label" for="name">Course Code</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="name">
    <label class="mdl-textfield__label" for="name">Subject Name</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="name">
    <label class="mdl-textfield__label" for="name">Course Teacher</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="name">
    <label class="mdl-textfield__label" for="name">Room</label>
  </div>

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
<br>
<br>
Course Color:<br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input co1" type="color" id="favcolor" value="#4286f4">
  </div>
<br><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary b1" type="submit">
  Submit
</button>


</form>
</div>
</div>
<div id="View-courses" class="tabcontent">
  <h3>All Courses</h3>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Eng101</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Eng102</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Math101</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Arb101</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Abr102</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Ph101</button>
  <br>
  <br>
</div>

<!--

<div id="Total-Bills" class="tabcontent">
  <h3>Total Bills</h3>
</div>

-->
<div id="Staff" class="tabcontent">
  <h3>View Staff</h3>

<input class="mdl-textfield__input " type="text"  name="search" placeholder="Search"><br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" >Search for Students</button>

<br><br>
<table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
   	  <th class="mdl-data-table__cell--non-numeric">Photo</th>
   	  <th class="mdl-data-table__cell--non-numeric">User</th>
      <th class="mdl-data-table__cell--non-numeric">Edit</th>
      <th class="mdl-data-table__cell--non-numeric">Attendance</th>
      <th class="mdl-data-table__cell--non-numeric">Salary</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
      <td class="mdl-data-table__cell--non-numeric">USER1</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='AddNewWorker.php'">Edit</td>      
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='EmployeeAtt.php'">Attendance</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='EmployeeBills.php'">Salary</td>

    </tr>
    <tr>
    	<td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
      <td class="mdl-data-table__cell--non-numeric">USER2</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='AddNewWorker.php'">Edit</td>      
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='EmployeeAtt.php'">Attendance</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='EmployeeBills.php'">Salary</td>
    </tr>
    <tr>
    	<td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
      <td class="mdl-data-table__cell--non-numeric">USER3</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='AddNewWorker.php'">Edit</td>      
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='EmployeeAtt.php'">Attendance</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='EmployeeBills.php'">Salary</td>

    </tr>
  </tbody></table>  
  <br><br>

</div>

<div id="Rooms" class="tabcontent">
	
<h3> Rooms:</h3>
	<div id="buttons_panel">
	<?php echo getButtons1();?>
	</div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='AddRoom.php'">Add new room</button>

	<br>
	<br>
	<br>

</div>

<div id="View-requests" class="tabcontent">
  <h3>New Requests</h3>
  <table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Content</th>
      <th class="mdl-data-table__cell--non-numeric">Detalis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">***</td>
      <td class="mdl-data-table__cell--non-numeric">----</td>

    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">***</td>
      <td class="mdl-data-table__cell--non-numeric">empty</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">***</td>
      <td class="mdl-data-table__cell--non-numeric">----</td>

    </tr>

    <tr>
      <td class="mdl-data-table__cell--non-numeric">***</td>
      <td class="mdl-data-table__cell--non-numeric">empty</td>
    </tr>
  </tbody></table>  
	
	<br>
	<br>
	<br>
</div>


<!--FrontDisk-->

<div id="Add-new-Student" class="tabcontent" >
		<form method="post" action="">
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
                    <p class="p1">Age</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="text" name="address">
                </div>
                <div class="form-group">
						<p class="p1">Phone number</p>
						<span class="icon"><i class="fa fa-phone"></i></span>
						<input class="input1" type="text" name="address">
					</div>
                
            </div>
            <div class="rightgroup">
            	<div class="form-group">
						<p class="p1">Gender</p>
						<span class="icon"><i></i></span>
						<select name="jobrole" class="form-control selectpicker select1">
						  <optgroup label="Gender" id="list">
							<option >Male</option>
							<option >Female</option>
							
						  </optgroup>
						</select>
					</div>
                
                <div class="form-group">
                    <p class="p1">Username</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input class="input1" type="text" name="salary">
                </div>
                <div class="form-group">
                    <p class="p1">Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="password" name="pass" />
                </div>
                <div class="form-group">
                    <p class="p1">Guardian E-mail</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input class="input1" type="text" name="salary">
                </div>
                 <div class="form-group">
						<p class="p1">Guardian Phone number</p>
						<span class="icon"><i class="fa fa-phone"></i></span>
						<input class="input1" type="text" name="address">
					</div>
					<div class="form-group">
						<p class="p1">Choose a picture</p>
						<input class="input1" type="file" name="pic">
					</div>
            </div>
            <br><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary create-profile" type="submit">
  Add new Student
</button>
<br><br><br><br>
		</form>
	</div>

<div id="Students" class="tabcontent" style="padding-right: 20%"><br><br>

<input class="mdl-textfield__input " type="text"  name="search" placeholder="Search"><br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" >Search for Students</button>

<br><br>
<table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
   	  <th class="mdl-data-table__cell--non-numeric">Photo</th>
   	  <th class="mdl-data-table__cell--non-numeric">User</th>
      <th class="mdl-data-table__cell--non-numeric">Course</th>
      <th class="mdl-data-table__cell--non-numeric">Grades</th>
      <th class="mdl-data-table__cell--non-numeric">Edit</th>
      <th class="mdl-data-table__cell--non-numeric">Delete</th>
      <th class="mdl-data-table__cell--non-numeric">Amount</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
      <td class="mdl-data-table__cell--non-numeric">Samy Mohamed</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='addcourse.php'">Add Course</td>      
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='puttinggrades.php'">Grades</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='Editstudent1.php'">Edit Details</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="myFunction()"class="button3">Delete</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='amount.php'">Amount</td>


    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
      <td class="mdl-data-table__cell--non-numeric">Youssef Mohamed</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='addcourse.php'">Add Course</td>      
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='puttinggrades.php'">Grades</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='Editstudent1.php'">Edit Details</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="myFunction()"class="button3">Delete</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='amount.php'">Amount</td>
  </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
      <td class="mdl-data-table__cell--non-numeric">Ahmed Mohamed</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='addcourse.php'">Add Course</td>      
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='puttinggrades.php'">Grades</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='Editstudent1.php'">Edit Details</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="myFunction()"class="button3">Delete</td>
      <td class="mdl-data-table__cell--non-numeric" onclick="parent.location='amount.php'">Amount</td>    </tr>
  </tbody></table>  
  <br><br>

</div>
  
<div id="View-Bills" class="tabcontent" style="padding-right: 20%">
	 <h3>New Requests</h3>
  <table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Code</th>
      <th class="mdl-data-table__cell--non-numeric">Student name</th>
      <th class="mdl-data-table__cell--non-numeric">Amount</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">
      	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample5" readonly>
        <input type="hidden" value="" name="sample5">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample5" class="mdl-textfield__label"></label>
        <ul for="sample5" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">1111</li>
            <li class="mdl-menu__item" data-val="2R">2222</li>
            <li class="mdl-menu__item" data-val="3S">3333</li>
            <li class="mdl-menu__item" data-val="4I">44444</li>
        </ul>
    </div>
      </td>
      <td class="mdl-data-table__cell--non-numeric">
      	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample4" readonly>
        <input type="hidden" value="" name="sample4">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample4" class="mdl-textfield__label"></label>
        <ul for="sample4" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">Mr.Ahmed Mohamed</li>
            <li class="mdl-menu__item" data-val="2R">Mr.Mohamed Ali</li>
            <li class="mdl-menu__item" data-val="3S">MrAli Tareeq</li>
        </ul>
    </div>

      </td>
<td class="mdl-data-table__cell--non-numeric"><input class="mdl-textfield__input " type="text"  name="search" placeholder="amount"><br>
</td>
    </tr>

        <tr>
      <td class="mdl-data-table__cell--non-numeric">
      	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample2" readonly>
        <input type="hidden" value="" name="sample2">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample2" class="mdl-textfield__label"></label>
        <ul for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">1111</li>
            <li class="mdl-menu__item" data-val="2R">2222</li>
            <li class="mdl-menu__item" data-val="3S">3333</li>
            <li class="mdl-menu__item" data-val="4I">44444</li>
        </ul>
    </div>
      </td>
      <td class="mdl-data-table__cell--non-numeric">
      	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample3" readonly>
        <input type="hidden" value="" name="sample3">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample3" class="mdl-textfield__label"></label>
        <ul for="sample3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">Mr.Ahmed Mohamed</li>
            <li class="mdl-menu__item" data-val="2R">Mr.Mohamed Ali</li>
            <li class="mdl-menu__item" data-val="3S">MrAli Tareeq</li>
        </ul>
    </div>

      </td>
<td class="mdl-data-table__cell--non-numeric"><input class="mdl-textfield__input " type="text"  name="search" placeholder="amount"><br>
</td>
    </tr>

        <tr>
      <td class="mdl-data-table__cell--non-numeric">
      	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample1" readonly>
        <input type="hidden" value="" name="sample1">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample1" class="mdl-textfield__label"></label>
        <ul for="sample1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">1111</li>
            <li class="mdl-menu__item" data-val="2R">2222</li>
            <li class="mdl-menu__item" data-val="3S">3333</li>
            <li class="mdl-menu__item" data-val="4I">44444</li>
        </ul>
    </div>
      </td>
      <td class="mdl-data-table__cell--non-numeric">
      	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample6" readonly>
        <input type="hidden" value="" name="sample6">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample6" class="mdl-textfield__label"></label>
        <ul for="sample6" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">Mr.Ahmed Mohamed</li>
            <li class="mdl-menu__item" data-val="2R">Mr.Mohamed Ali</li>
            <li class="mdl-menu__item" data-val="3S">MrAli Tareeq</li>
        </ul>
    </div>

      </td>
<td class="mdl-data-table__cell--non-numeric"><input class="mdl-textfield__input " type="text"  name="search" placeholder="amount"><br>
</td>
    </tr>

        

  </tbody></table> 
  <br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" >Submit</button> 
  <br>
</div>

<div id="Attendence" class="tabcontent">
   <h3>Choose Courses</h3>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng101</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng102</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Math101</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Arb101</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Abr102</button>
   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Ph101</button>
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

<div id="Schedule" class="tabcontent" style="padding-right: 20%;padding-bottom: 5%;"  >
		<h3>  Week  </h3>
	  <table class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric"></th>
      <th class="mdl-data-table__cell--non-numeric">Saturday</th>
      <th class="mdl-data-table__cell--non-numeric">Sunday</th>
      <th class="mdl-data-table__cell--non-numeric">Monday</th>
      <th class="mdl-data-table__cell--non-numeric">Tuesday</th>
      <th class="mdl-data-table__cell--non-numeric">Wednesday</th>
      <th class="mdl-data-table__cell--non-numeric">Thursday</th>
      <th class="mdl-data-table__cell--non-numeric">Friday</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">09:00 AM -> 11:00 AM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>

          <tr>
      <td class="mdl-data-table__cell--non-numeric">11:00 AM -> 01:00 PM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>

            <tr>
      <td class="mdl-data-table__cell--non-numeric">01:00 PM -> 03:00 PM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>
        <tr>
      <td class="mdl-data-table__cell--non-numeric">03:00 PM -> 05:00 PM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>

        <tr>
      <td class="mdl-data-table__cell--non-numeric">05:00 PM -> 07:00 PM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>


        <tr>
      <td class="mdl-data-table__cell--non-numeric">07:00 PM -> 09:00 PM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>

      <tr>
      <td class="mdl-data-table__cell--non-numeric">09:00 PM -> 11:00 PM</td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>

    </tr>
  </tbody></table> 
	
</div>

<div id="details" class="tabcontent" style="padding-right: 20%;padding-bottom: 5%;">	
	 <h3>Change Your Detail</h3>

	 <form method="post" action="">
	 
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
                    <p class="p1">Age</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="text" name="address">
                </div>
                <div class="form-group">
						<p class="p1">Phone number</p>
						<span class="icon"><i class="fa fa-phone"></i></span>
						<input class="input1" type="text" name="address">
					</div>
                
            </div>
            <div class="rightgroup">
            	<div class="form-group">
						<p class="p1">Gender</p>
						<span class="icon"><i></i></span>
						<select name="jobrole" class="form-control selectpicker select1">
						  <optgroup label="Gender" id="list">
							<option >Male</option>
							<option >Female</option>
							
						  </optgroup>
						</select>
					</div>
                
                <div class="form-group">
                    <p class="p1">Username</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input class="input1" type="text" name="salary">
                </div>
                <div class="form-group">
                    <p class="p1">Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="password" name="pass" />
                </div>
                <div class="form-group">
                    <p class="p1">Guardian E-mail</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input class="input1" type="text" name="salary">
                </div>
                 <div class="form-group">
						<p class="p1">Guardian Phone number</p>
						<span class="icon"><i class="fa fa-phone"></i></span>
						<input class="input1" type="text" name="address">
					</div>
					<div class="form-group">
						<p class="p1">Choose a picture</p>
						<input class="input1" type="file" name="pic">
					</div>
            </div>
            <br><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary create-profile" type="submit">
Change Info
</button>
<br><br><br><br>
		</form>
	 </div>
</div>

<div id="Extra" class="tabcontent">
  <form>
<h3>Select the course code</h3>  
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
        <input type="text" value="" class="mdl-textfield__input" id="sample5" readonly>
        <input type="hidden" value="" name="sample5">
        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
        <label for="sample5" class="mdl-textfield__label">Choose</label>
        <ul for="sample5" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
            <li class="mdl-menu__item" data-val="1">20401</li>
            <li class="mdl-menu__item" data-val="2R">30213</li>
            <li class="mdl-menu__item" data-val="3S">20401</li>
            <li class="mdl-menu__item" data-val="4I">30213</li>
        </ul>
    </div>  
    <br><br>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Date...</label>
  </div>
  <br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary " type="submit">
Submit
</button>
    
</form>
</div>

<div id="Contact" class="tabcontent">
    <h3>Contact Admin</h3>
    <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "4" id="sample5" ></textarea>
    <label class="mdl-textfield__label" for="sample5">Text lines...</label>
  </div>
  <br><br>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary " type="submit">
Submit
</button>
</div>

</body>
</html>

<?php
require_once 'functions.php';
require_once '../constant/Css-filesold.php';
?>
<!DOCTYPE html>
<html>
<head>  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"></head>
<body>
<!--Back Disk-->

<!--Add-new-Staff-->
<div class="container" style="padding-right: 10%" >
    <div id="Add-new-user" class="tabcontent" >
        <h3> Enter New User:</h3>
        <form method="post" action="../staff/functions.php" class="form1">
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
                    <p class="p1">Age</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input class="input1" type="text" name="age">
                    </div>
                    <div class="form-group">
                         <p class="p1">E-mail</p>
                         <span class="icon"><i class="fa fa-envelope-o"></i></span>
                         <input class="input1" type="email" name="Email">
                    </div>
                    <div class="form-group">
                         <p class="p1">Home Address</p>
                         <span class="icon"><i class="fa fa-home"></i></span>
                         <input class="input1" type="text" name="HAddress">
                    </div>
                    <div class="form-group">
                         <p class="p1">City</p>
                         <span class="icon"><i class="fa fa-building-o"></i></span>
                         <input class="input1" type="text" name="city">
                    </div>
                    <div class="form-group">
                        <p class="p1">Gender</p>
                        <span class="icon"><i class="fa fa-info"></i></span>
                        <select name="glist" class="select1" class="form-control selectpicker">
                          <optgroup label="Gender" name="glist" >
                            <option id="glist" value="1">Male</option>
                            <option id="glist" value="0" >Female</option>
                          </optgroup>
                        </select>
                    </div>
                </div>
                <div class="rightgroup">
                    <div class="form-group">
                        <p class="p1">Phone number</p>
                        <span class="icon"><i class="fa fa-phone"></i></span>
                        <input class="input1" type="text" name="Pnumber">
                    </div>
                    <div class="form-group">
                        <p class="p1">Job Role</p>
                        <span class="icon"><i class="fa fa-info"></i></span>
                        <select name="jobrole" class="select1" class="form-control selectpicker">
                          <optgroup label="Please select the job role" id="jobrole">
                            <option id="jobrole" value="2">Back-disk</option>
                            <option id="jobrole" value="3">Front-disk</option>
                            <option id="jobrole" value="4">Teacher</option>
                          </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <p class="p1">Salary</p>
                        <span class="icon"><i class="fa fa-dollar"></i></span>
                        <input class="input1" type="text" name="salary">
                    </div>
                    <div class="form-group">
                    <p class="p1">Username</p>
                    <span class="icon"><i ></i></span>
                    <input type="text" name="uname" class="input1">
                    </div>
                    <div class="form-group">
                        <p class="p1">Password</p>
                        <span class="icon"><i class="fa fa-building-o"></i></span>
                        <input class="input1" type="password" name="pass" />
                    </div>
                
                    Choose the picture <br><br>
                    <input type="file" name="pic" accept="image/*">
                </div>    
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary create-profile" name="AddStaff" type="submit">Create profile</button>
        </form>
    </div>
</div>
<!--Add-new-group-->
<div class="container" style="padding-right: 10%" >
    <div id="Add-new-group" class="tabcontent">
        <h3> Enter New Group Information:</h3>
        <form  name="form_name" action="" method ="post" class="from-horizontal" >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="GroupCode" id="GroupCode" >
            <label class="mdl-textfield__label" for="name">Group Code</label>
            </div><br>
            <div  id="buttons_panel">
            <p> Select Course</p> <?php echo selectCourse();?>
            </div>
            <div id="buttons_panel">
            <p> Select Teacher</p> <?php echo selectTeacher();?>
            </div>
            <div id="buttons_panel">
               <p> Select Room</p> 
               <br>   
                <?php echo getButtons();?>
            </div>
            <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="month">
            <label class="mdl-textfield__label" for="name">Month </label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="year">
            <label class="mdl-textfield__label" for="name">Year </label>
            </div><br>
            <p>Select Weekdays & Time:</p><br>
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
            <br><br>
            Course Color:<br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input co1" type="color" name="color" id="favcolor" value="#4286f4">
            </div>
            <br><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary b1" type="submit" name="submitGroup">Submit</button>
        </form>
    </div>
</div>

<!--Add-new-course-->
<div class="container" style="padding-right: 10%" >
    <div id="Add-new-course" class="tabcontent">
        <h3> Enter New Course Information:</h3>
        <form  name="form_name" action="../staff/functions.php" method="post" class="from-horizontal" >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="suname">
            <label class="mdl-textfield__label" for="name">Subject Name</label>
            </div><br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="colevel">
            <label class="mdl-textfield__label" for="name">Course Level</label>
            </div>
            <br><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary b1" type="submit" name="submitCourse">Submit</button>
        </form>
    </div>
</div>

<!--View-group-->
<div class="container" style="padding-right: 10%" >
    <div id="View-group" class="tabcontent">
      <h3>All Courses</h3>
      <!--<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Eng101</button>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Eng102</button>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Math101</button>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Arb101</button>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Abr102</button>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou.php'">Ph101</button>
      -->
      <?php echo selectCourse2();?>
      <br><br>
    </div>
</div>

<!--

<div id="Total-Bills" class="tabcontent">
  <h3>Total Bills</h3>
</div>

-->

<!--Staff-->
<div class="container" style="padding-right: 10%" >
    <div id="Staff" class="tabcontent">
        <h3>View Staff</h3>
        <input class="mdl-textfield__input " type="text"  id="myInput1" onkeyup="mysearchStaff()" name="search" placeholder="Search"><br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" >Search for Staff</button>
        <br><br>
        <div class="vertical-menu">
        <table class="mdl-data-table mdl-js-data-table" id="myTable1">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Photo</th>
                    <th class="mdl-data-table__cell--non-numeric">User</th>
                    <th class="mdl-data-table__cell--non-numeric">Edit</th>
                    <th class="mdl-data-table__cell--non-numeric">Attendance</th>
                    <th class="mdl-data-table__cell--non-numeric">Salary</th>
                    <th class="mdl-data-table__cell--non-numeric">Delete</th>
                </tr>
            <!--</thead>
            <tbody>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                  <td class="mdl-data-table__cell--non-numeric">USER1</td>
                  <td> <button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button></td>      
                  <td> <button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button></td>
                  <td> <button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button></td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                  <td class="mdl-data-table__cell--non-numeric">USER2</td>
                  <td> <button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button></td>      
                  <td> <button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button></td>
                  <td> <button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button></td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                  <td class="mdl-data-table__cell--non-numeric">USER3</td>
                  <td> <button class="button3" id="bb" onclick="parent.location='AddNewWorker.php'">Edit</button></td>      
                  <td> <button class="button3" id="bb" onclick="parent.location='EmployeeAtt.php'">Attendance</button></td>
                  <td> <button class="button3" id="bb" onclick="parent.location='EmployeeBills.php'">Salary</button></td>
                </tr>
                </tbody>-->
            <tbody>
                <?php
                require_once  "database.php";
                $data = new data();
                $conn = $data->con();
                $sql = "SELECT * FROM `user` WHERE `type-id`<>'5' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                            {
                                echo'<tr>
                                   <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                                   <td class="mdl-data-table__cell--non-numeric">'. $row["First-name"]. ' ' . $row["last-name"].'</td>';
                                echo'
                                   <td> <button class="button3" id="bb" ><a href="AddNewWorker.php?id='.$row["id"].'">Edit Details</a></button></td>
                                   <td> <button class="button3" id="bb" ><a href="EmployeeAtt.php?id='.$row["id"].'">Attendance</a></button></td>
                                   <td> <button class="button3" id="bb" ><a href="EmployeeBills.php?id='.$row["id"].'">Salary</a></button></td>
                                   <td> <button class="button3" id="bb" ><a href="IsDeleted.php?id='.$row["id"].'">Delete</a></button></td>
                                   </tr>';

                                     //    echo "id: " . $row["id"]. " - Name: " . $row["First-name"]. " " . $row["last-name"]. "<br>";
                            }
                       } 
                  else 
                      {
                        echo "0 results";
                      }
                $conn->close(); 
                ?>
              </tbody>
        </table>  
        <br><br>
        </div>
    </div>
</div>

<!--Rooms-->
<div class="container" style="padding-right: 10%" >
    <div id="Rooms" class="tabcontent">
        <h3> Rooms:</h3>
            <div id="buttons_panel">
                <?php echo getButtons1();?>
            </div>
            <br>
            
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='AddRoom.php'">Add new room</button>
            <br><br><br>
    </div>
</div>


<!--View-requests-->
<div class="container" style="padding-right: 10%" >
    <div id="View-requests" class="tabcontent">
        <h3>New Requests</h3>
        <table class="mdl-data-table mdl-js-data-table">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric">Content</th>
              <th class="mdl-data-table__cell--non-numeric">Details</th>
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
          </tbody>
        </table>  
        <br><br><br>
    </div>
</div>

<!--Front Disk-->

<!--Add-new-Student-->
<div class="container" style="padding-right: 10%" >
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
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary create-profile" type="submit" name="Addnewstudent1">Add new Student</button>
            <br><br><br><br>
        </form>
    </div>
</div>

<!--Students-->
<div id="Students" class="tabcontent" style="padding-right: 10%; height: 700px;" >
     <h3>View Student</h3>
    <div>
       <!-- <br><br>
        <div class="vertical-menu" style="height: 550px;">
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
                  <td> <button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button></td>      
                  <td> <button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button></td>
                  <td> <button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
                  <td> <button onclick="Deleted()"class="button3" id="bb" >Delete</button></td>
                  <td> <button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                  <td class="mdl-data-table__cell--non-numeric">Youssef Mohamed</td>
                  <td> <button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button></td>      
                  <td> <button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button></td>
                  <td> <button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
                  <td> <button onclick="Deleted()" class="button3" id="bb" >Delete</button></td>
                  <td> <button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                  <td class="mdl-data-table__cell--non-numeric">Ahmed Mohamed</td>
                 <td> <button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button></td>      
                  <td> <button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button></td>
                  <td> <button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
                  <td> <button onclick="Deleted()"class="button3" id="bb" >Delete</button></td>
                  <td> <button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                  <td class="mdl-data-table__cell--non-numeric">Ahmed Mohamed</td>
                 <td> <button onclick="location.href='addcourse.php'" class="button3" id="bb" >Add Course</button></td>      
                  <td> <button onclick="location.href='puttinggrades.php'" class="button3" id="bb" >Grades</button></td>
                  <td> <button onclick="location.href='Editstudent1.php'" class="button3" id="bb" >Edit Details</button></td>
                  <td> <button onclick="Deleted()"class="button3" id="bb" >Delete</button></td>
                  <td> <button onclick="location.href='amount.php'" class="button3" id="bb" > Amount</button></td>
                </tr>
              </tbody>
            </table> 
        </div>
        <br><br>-->
        <input class="mdl-textfield__input " id="myInput" onkeyup="mysearchStudent()" type="text"  name="search" placeholder="Search"><br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" >Search for Students</button>
        <br><br>
        <div class="vertical-menu" style="height: 480px;">
            <table class="mdl-data-table mdl-js-data-table" id="myTable">
              <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric" >Photo</th>
                    <th class="mdl-data-table__cell--non-numeric">User</th>
                    <th class="mdl-data-table__cell--non-numeric">Course</th>
                    <th class="mdl-data-table__cell--non-numeric">Grades</th>
                    <th class="mdl-data-table__cell--non-numeric">Edit</th>
                    <th class="mdl-data-table__cell--non-numeric">Delete</th>
                    <th class="mdl-data-table__cell--non-numeric">Amount</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once  "database.php";
                $data = new data();
                $conn = $data->con();
                $sql = "SELECT * FROM `user` WHERE `type-id`='5' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                            {
                                echo'<tr>
                                   <td class="mdl-data-table__cell--non-numeric"><img src="../img/img_avatar.png" alt="Avatar"></td>
                                   <td class="mdl-data-table__cell--non-numeric">'. $row["First-name"]. ' ' . $row["last-name"].'</td>';
                                echo'
                                   <td> <button class="button3" id="bb" ><a href="addcourse.php?id='.$row["id"].'">Add Course</a></button></td>
                                   <td> <button class="button3" id="bb" ><a href="puttinggrades.phpid='.$row["id"].'">Grades</a></button></td>
                                   <td> <button class="button3" id="bb" ><a href="Editstudent2.php?id='.$row["id"].'">Edit Details</a></button></td>
                                    <td> <button class="button3" id="bb" ><a href="IsDeleted2.php?id='.$row["id"].'">Delete</a></button></td>
                                   <td> <button class="button3" id="bb" ><a href="amount.php?id='.$row["id"].'">View Amount</a></button></td>
                                    </tr>';

                                     //    echo "id: " . $row["id"]. " - Name: " . $row["First-name"]. " " . $row["last-name"]. "<br>";
                            }
                       } 
                  else 
                      {
                        echo "0 results";
                      }
                $conn->close(); 
                ?>
              </tbody>
            </table>  
        </div>
        <br><br>
        
    </div>
</div>
 
<!--View-Bills-->
<div id="View-Bills" class="tabcontent" style="padding-right: 20%; height: 600px;">
    <div>
        <h3>New Requests</h3>
        <div class="vertical-menu" style="height: 450px;">
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
            </tbody>
        </table> 
        <br>
        </div>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" >Submit</button> 
        <br>
        
    </div>
</div>

<!--Attendance-->
<div id="Attendence" class="tabcontent">
    <div>
        <h3>Choose Courses</h3>
        <div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng101</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Eng102</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Math101</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Arb101</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Abr102</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary bf1" id="bf1" onclick="parent.location='ViewCou2.php'">Ph101</button>
        </div>
        <br><br><br><br>
    </div>
</div>

<!--View Course-->

<!--Edit-course-->
<div class="container" style="padding-right: 10%" >
<div id="Edit-course" class="tabcontent">
    <div>
    <h3> Enter New Group Information:</h3>
        <form  name="form_name" action="" method ="post" class="from-horizontal" >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="GroupCode" id="GroupCode" >
            <label class="mdl-textfield__label" for="name">Group Code</label>
            </div><br>
            <div  id="buttons_panel">
            <p> Select Course</p> <?php echo selectCourse();?>
            </div>
            <div id="buttons_panel">
            <p> Select Teacher</p> <?php echo selectTeacher();?>
            </div>
            <div id="buttons_panel">
               <p> Select Room</p> 
               <br>   
                <?php echo getButtons();?>
            </div>
            <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="month">
            <label class="mdl-textfield__label" for="name">Month </label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="year">
            <label class="mdl-textfield__label" for="name">Year </label>
            </div><br>
            <p>Select Weekdays & Time:</p><br>
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
            <br><br>
            Course Color:<br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input co1" type="color" name="color" id="favcolor" value="#4286f4">
            </div>
            <br><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary b1" type="submit" name="submitGroup">Submit</button>
        </form>
    </div>
</div>
</div>

<!--student-->
<div class="container" style="padding-right: 10%" >
<div id="student" class="tabcontent">
    <div>
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
</div>
</div>

<!--View Course2-->

<!--Attendance1-->
<div class="container" style="padding-right: 10%" >
<div id="Attendence1" class="tabcontent">
    <div>
        <h2> Today Attendance<br> </h2>
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
            <button type="Submit" style="text-align: center;height:100px; width: 100px; color:#ffcccc; position:static;"> Submit </button>
        </div> 
    </div> 
</div>
</div>

<!--student1-->
<div class="container" style="padding-right: 10%" >
<div id="student1" class="tabcontent">
    <div>
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
</div>
</div>

<!--Teacher-->

<!--Schedule-->
<div class="container" style="padding-right: 10%" >
    <div id="Schedule" class="tabcontent" style="padding-right: 20%;padding-bottom: 5%;"  >
        <div>
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
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<!--details-->
<div class="container" style="padding-right: 10%" >
    <div id="details" class="tabcontent" style="padding-bottom: 5%;">	
        <div >
            <h3>Change Your Detail</h3>
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

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary create-profile" type="submit">Change Info</button>
            </form>

        </div>
    </div>
</div>

<!--Extra-->
<div id="Extra" class="tabcontent">
    <div>    
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
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary " type="submit">Submit</button>
        </form>
    </div>
</div>

<!--Contact-->
<div id="Contact" class="tabcontent">
    <div>
        <h3>Contact Admin</h3>
        <div class="mdl-textfield mdl-js-textfield">
        <textarea class="mdl-textfield__input" type="text" rows= "4" id="sample5" ></textarea>
        <label class="mdl-textfield__label" for="sample5">Text lines...</label>
        </div>
        <br><br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary " type="submit">Submit</button>
    </div>
</div>

</body>

<script>
    function mysearchStudent() 
    {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) 
      {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) 
        {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
          {
            tr[i].style.display = "";
          } 
          else 
          {
            tr[i].style.display = "none";
          }
        }       
      }
    } 
    function mysearchStaff() 
    {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput1");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable1");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) 
      {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) 
        {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
          {
            tr[i].style.display = "";
          } 
          else 
          {
            tr[i].style.display = "none";
          }
        }       
      }
    } 
</script>
   
   
</html>
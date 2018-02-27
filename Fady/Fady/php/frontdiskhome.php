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
    <link type="text/css" href="../css/searchstudents.css" rel="stylesheet" />
    <link type="text/css" href="../css/puttinggrades.css" rel="stylesheet" />
    
    
     
</head>
<body>

<div id="a">
<img src="../img/image.png" alt="Avatar">
</div>
<div id="aa">
<h1>Welcome User</h1>
</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Add-new-user')">Add new Student</button>
  <button class="tablinks" onclick="openCity(event, 'Add-new-course')">Students</button>
  <button class="tablinks" onclick="openCity(event, 'View-courses')">Bills</button>
  <button class="tablinks" onclick="openCity(event, 'Total-Bills')">Attendence</button>
  

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

<div id="Add-new-course" class="tabcontent"><br><br>
    <input type="text" name="search">
    <button>Search for Students</button><br><br>


	   
<div id = "divtable">
<table>

		<tbody>
	<tr>
	<td><img src="../img/image.png" alt="Avatar"></td>
	<td>Samy Mohamed  </td>
        
	<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Add Course</button> </td>
	<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Grades</button> </td>
        <td><button onclick="location.href='Editstudent.php'"class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit Details</button>
        <td><button onclick="myFunction()"class="button3" id="bb" onclick="parent.location='BackDisk.php'">Delete Details</button></td>
         <td><button onclick="location.href='amount.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'"> Amount</button></td>
	</tr>
	<tr>
	<td><img src="../img/image.png" alt="Avatar"></td>
			<td> Youssef Mohamed</td>
	<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Add Course</button> </td>
	<td><button onclick="location.href='puttinggrades.php'"class="button3" id="bb" onclick="parent.location='BackDisk.php'">Grades</button> </td>
        <td><button onclick="location.href='Editstudent.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit Details</button>
         <td><button onclick="myFunction()"class="button3" id="bb" onclick="parent.location='BackDisk.php'">Delete Details</button>
             <td><button onclick="location.href='amount.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'"> Amount</button></td>
	</tr>
	<tr>
	<td><img src="../img/image.png" alt="Avatar"></td>
			<td>Ahmed Mohamed  </td>
	<td><button onclick="location.href='addcourse.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Add Courses</button> </td>
	<td><button onclick="location.href='puttinggrades.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Grades</button> </td>
        <td><button onclick="location.href='Editstudent.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Edit Details</button>
        <td><button onclick="myFunction()" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Delete Details</button> 
        <td><button onclick="location.href='amount.php'" class="button3" id="bb" onclick="parent.location='BackDisk.php'">Amount</button></td>
	</tr>
            
	
</tbody>
</table>
</div>
    
    
    </div>
	<div class="aB">
	
	</div>
<script>
function myFunction() {
    alert("Details has been Deleted");
}
</script>
    

<div id="View-courses" class="tabcontent"><br>
  Date :    
<input type="text" name="date" placeholder="month/day/year"><br><br>
<style>
        table {            
            background-color: tan;   
            border: 5px solid cornflowerblue;  
            border-spacing: 10px; 
            font-family: Arial, Helvetica, sans-serif       
        }

        th {
            background-color: cornflowerblue;
            border: 2px solid cornflowerblue;
            color: white;
            padding: 20px;
        }
       
        td {
            border: 2px solid cornflowerblue;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
            border-top: 0;
            border-bottom: 0;
        }

        .th-title {
            background-color: white;
            border-top: 0;
            border-bottom: 0;            
            color: black;
        }   
        #btn2{
		      
	    width:140px;
	    height:40px;
	     color:blue;
        background-color:gray;
         font-size:15px;
      }		
	      #btn3{
		      
	    width:140px;
	    height:40px;
	     color:blue;
        background-color:gray;
         font-size:15px;
      }	
	  #sel1{
		background-color: cornflowerblue;
		padding: 5px 5px 5px 5px ;
		color: white;
		
	  }
	  
	   #sel2{
		background-color: cornflowerblue;
		padding: 5px 5px 5px 5px ;
		color: white;
	  }
	  option
	  {
	   background-color:gray;
	  }
	  
    </style>

   
<body>




<table>

    <tr>
        <th class="th-title" colspan="4">Today Bills</th>
    </tr>

    <tr>
        <th>Code</th>
        <th>Student name</th>
        <th>Amount</th>
       
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
        <input type ="Number"><br>
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
       <input type ="Number"><br>
        </th>
    </tr>
	   
</table>
    </body>
</div>

<div id="Total-Bills" class="tabcontent"><br><br>
    
   <h2> Today Attendence<br><br><br> </h2>
	
<div>
<table cellpadding="2" cellspacing="0">

		<tbody>
	<tr>
	<td><img src="../img/image.png" alt="Avatar"></td>
	<td>Samy Mohamed  </td>
        <td>
    <form action="">
    <input type="radio" name="attend" value="male"> Present
    <input type="radio" name="attend" value="female"> Absent<br>
    </form>   
            
        </td>
  
   
	</tr>
	<tr>
	<td><img src="../img/image.png" alt="Avatar"></td>
			<td> Youssef Mohamed</td>
        <td>
    <form action="">
    <input type="radio" name="attend" value="male"> Present
    <input type="radio" name="attend" value="female"> Absent<br>
    </form>
        </td>

	</tr>
	<tr>
	<td><img src="../img/image.png" alt="Avatar"></td>
			<td>Ahmed Mohamed  </td>
        <td>
    <form action="">
    <input type="radio" name="attend" value="male"> Present
    <input type="radio" name="attend" value="female"> Absent<br>
    </form>
        </td>
	
	</tr>
            
</tbody>
</table>
</div>
    
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


<button class="button1" id="bf1" onclick="parent.location='BackDisk.php'">Logout</button>

<button type="Submit" id="subbtn"> Submit </button>

</body>
</html>

<?php
require_once 'functions.php';
require_once 'Css-files.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	  
</head>
<body>

<?php require_once 'header.php'; ?>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Add-new-Student')">Add new Student</button>
  <button class="tablinks" onclick="openCity(event, 'Students')">Students</button>
  <button class="tablinks" onclick="openCity(event, 'View-Bills')">Bills</button>
  <button class="tablinks" onclick="openCity(event, 'Attendence')">Attendence</button>
</div>

<?php require_once 'CallTab.php'; ?>
<br><br>
<button class="button1" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>

<<<<<<< HEAD
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
  <button class="tablinks" onclick="openCity(event, 'Add-new-user')">Add new user</button>
  <button class="tablinks" onclick="openCity(event, 'Add-new-course')">Add new course</button>
  <button class="tablinks" onclick="openCity(event, 'View-courses')">View courses</button>
  <button class="tablinks" onclick="openCity(event, 'Total-Bills')">Total Bills</button>
  <button class="tablinks" onclick="openCity(event, 'Staff')">Staff</button>
  <button class="tablinks" onclick="openCity(event, 'Rooms')">Rooms</button>
  <button class="tablinks" onclick="openCity(event, 'View-requests')">View requests</button>
</div>

<?php require_once 'CallTab.php'; ?>
<br><br><br><br>

<button class="button1" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>
=======
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
  <button class="tablinks" onclick="openCity(event, 'Add-new-user')">Add new user</button>
  <button class="tablinks" onclick="openCity(event, 'Add-new-course')">Add new course</button>
  <button class="tablinks" onclick="openCity(event, 'View-courses')">View courses</button>
  <button class="tablinks" onclick="openCity(event, 'Total-Bills')">Total Bills</button>
  <button class="tablinks" onclick="openCity(event, 'Staff')">Staff</button>
  <button class="tablinks" onclick="openCity(event, 'Rooms')">Rooms</button>
  <button class="tablinks" onclick="openCity(event, 'View-requests')">View requests</button>
</div>

<?php require_once 'CallTab.php'; ?>
<br><br><br><br>

<button class="button1" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>
>>>>>>> 39b9fc79caa1db37a4edd2e1b2951c17173e9245

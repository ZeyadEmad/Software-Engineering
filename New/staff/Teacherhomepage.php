<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<link type="text/css" href="../css/home.css" rel="stylesheet" />
	<link type="text/css" href="../css/table.css" rel="stylesheet" />
    
</head>
<body>

<?php require_once 'header.php'; ?>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Schedule')">View your Schedule</button>
  <button class="tablinks" onclick="openCity(event, 'details')">Change your details</button>
  <button class="tablinks" onclick="openCity(event, 'Extra')">Submit an Extra</button>
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact Admin</button>

</div>


<?php require_once 'CallTab.php'; ?>


<br><br><br><br>

<button class="button122" id="bf1" onclick="parent.location='stafflog.php'">Logout</button>


</body>
</html>

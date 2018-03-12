<?php
require_once 'functions.php';
require_once 'Css-files.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Course </title>
	
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
  <button class="tablinks" onclick="openCity(event, 'student1')">View student</button>
  <button class="tablinks" onclick="openCity(event, 'Attendence1')">Attendence</button>
</div>


<?php require_once 'CallTab.php'; ?>




<button class="button1" id="bf1" onclick="parent.location='frontdiskhome.php'">Back</button>
 


</body>
</html>
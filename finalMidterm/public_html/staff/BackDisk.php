<?php
require_once 'functions.php';
require_once 'Css-files.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Home</span>
    <nav class="mdl-navigation" id="myselect">
      <a class="mdl-navigation__link tablinks"	onclick="openCity(event, 'Add-new-user')" > Add new user </a>
      <a class="mdl-navigation__link tablinks"	onclick="openCity(event, 'Add-new-course')" > Add new course </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Add-new-group')"> Add new group </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'View-group')"> View courses </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Staff')"> Staff  </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Rooms')"> Rooms  </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'View-requests')"> View requests  </a>
      <a class="mdl-navigation__link " href="stafflog.php"> Logout </a>
    </nav>
  </div>
<!--

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Add-new-user')">Add new user</button>
  <button class="tablinks" onclick="openCity(event, 'Add-new-course')">Add new course</button>
  <button class="tablinks" onclick="openCity(event, 'View-courses')">View courses</button>
  <button class="tablinks" onclick="openCity(event, 'Total-Bills')">Total Bills</button>
  <button class="tablinks" onclick="openCity(event, 'Staff')">Staff</button>
  <button class="tablinks" onclick="openCity(event, 'Rooms')">Rooms</button>
  <button class="tablinks" onclick="openCity(event, 'View-requests')">View requests</button>
</div>
-->
<?php require_once 'CallTab.php'; ?>



</body>
</html>

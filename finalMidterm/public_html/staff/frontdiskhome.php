<?php
require_once 'functions.php';
require_once 'Css-files.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      <a class="mdl-navigation__link tablinks"	onclick="openCity(event, 'Add-new-Student')">Add new Student </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Students')">Students </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'View-Bills')">Bills </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Attendence')">Attendance </a>
      <a class="mdl-navigation__link " href="stafflog.php"> Logout </a>
    </nav>
  </div>

<?php require_once 'CallTab.php'; ?>
<br><br>

</body>
</html>

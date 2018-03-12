<?php
require_once 'functions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<link type="text/css" href="../css/teacherhome.css" rel="stylesheet" />
	<link type="text/css" href="../css/table.css" rel="stylesheet" />
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
      <a class="mdl-navigation__link tablinks"	onclick="openCity(event, 'Schedule')">View your Schedule </a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'details')">Change your details</a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Extra')">Submit an Extra</a>
      <a class="mdl-navigation__link tablinks" onclick="openCity(event, 'Contact')">Contact Admin</a>
      <a class="mdl-navigation__link " href="stafflog.php"> Logout </a>
    </nav>
  </div>




<?php require_once '../staff/CallTab.php'; ?>


<br><br><br><br>
<?php require_once "../constant/footer.php"; ?>



</body>
</html>

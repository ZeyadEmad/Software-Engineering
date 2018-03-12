<!DOCTYPE html>
<html>
    <head>
    <title>WELCOME</title>
    <link rel="stylesheet" type="text/css"  href="../public_html/css/welcomepage.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

    <img id = "img1" src="../public_html/img/scottsdale-learning-center.jpg"  width="300" height="220" >
    <img id = "img2" src="../public_html/img/IMG_9963-for-tile.jpg"  width="300" height="220" >

    <h1 id="HH">  Winner Educational Center</h1>

    <form name="studentlog" action="../public_html/staff/functions.php" method="post"> 
        <div class="logp">
        <b id="BB"> Please enter your user name and password </b>
        <br><br>
        <b>Username :</b>
        <input type="text" name="username" id="b1" >
        <br><br>
        <b> Password :</b>
        <input type="password" name="userpass" id="b2"> 
        </div>
    
    <br>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary" type="submit" value="Log In" 
            id="log" name="studentlog" >Login</button>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="button" value="Sign up" 
            id="up" onclick = "location.href='../public_html/student/signup.php'"  >Sign up </button>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="button" value="Staff"
            id="sta"  onclick = "location.href='../public_html/staff/stafflog.php'"  >Staff</button>

    </form>

    <div class="multi-bg-example"></div>

    <?php
    require_once "../public_html/constant/footer.php";
    ?>
</body>
</html>
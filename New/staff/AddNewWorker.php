<?php
?>

<html>
    <head>
        <title>
            Add New Worker
        </title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/addworker.css">
        <meta charset="UTF-8">
    </head>
<?php require_once 'header.php'; ?>
    <body>
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
                    <p>City</p>
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
                    <p>Job Role</p>
                    <span class="icon"><i class="fa fa-info"></i></span>
                    <select name="jobrole" class="form-control selectpicker">
                      <optgroup label="Please select the job role" id="list">
                        <option >Dummy</option>
                        <option >Dummy</option>
                        <option >Dummy</option>
                        <option >Dummy</option>
                        <option >Dummy</option>
                      </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <p>Salary</p>
                    <span class="icon"><i class="fa fa-dollar"></i></span>
                    <input type="text" name="salary">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <input type="password" name="pass" />
                </div>
            </div>
        </div>
        <button type="submit" class="create-profile" value="Create profile">Create profile</button>
    </form>
    <button class="create-profile" id="bb" onclick="parent.location='BackDisk.php'">Back</button>
    </body>
    
</html>


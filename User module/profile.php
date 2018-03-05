<!DOCTYPE html>
   <?php 
	session_start();
   ?>
<html>
    <body>
		<h1>Welcome <?php echo $_SESSION['FName']; ?> </h1> 
		<br>
	
	  <a href="editprofile.php">Edit Profile</a>
	  <a href="delete.php">Delete Profile</a>
      <a href="signout.php">Sign out</a>
      <a href="search.php">Search</a>

    </body>
</html>

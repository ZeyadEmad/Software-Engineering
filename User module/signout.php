<?php
  session_start();
  if (session_destroy()){
      echo "<h3>Logged out</h3>";
  }
?>

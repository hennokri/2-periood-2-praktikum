<?php
  header("Location: components/new-page.php");
  exit;
?>
<!DOCTYPE html>
<html>
  <head>
   <?php 
   
   require ("components/site-functions.php"); 

   ?>
  </head>
  <body>
   <?php
   $argument = " Kristi";
   echo "<p>Tere{$argument}</p>";

   ?>
  </body>
</html>
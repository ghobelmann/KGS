<?php
/* Displays all successful messages */
require("../dbconnectg.php"); 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: indexg.php" );
    endif;
    ?>
    </p>
    <a href="../indexg.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>

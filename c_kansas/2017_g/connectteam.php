 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headerb.php");
include_once("databaseconnect.php");
 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">

</head>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=enterteam.php">


<center><H1>! New School Added !</H1></center>



</BODY>
</HTML>

<?php 
$sql="INSERT INTO team (school, abv, classification, state, conference, league, coach)
VALUES
('$_POST[school]','$_POST[abv]','$_POST[classification]','$_POST[state]','$_POST[conference]','$_POST[league]','$_POST[coach]')";    




?>
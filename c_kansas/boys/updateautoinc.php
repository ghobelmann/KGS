<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>
   <META HTTP-EQUIV="Refresh" CONTENT="1;URL=admin.php">
</head><body>	 
 
 
 


<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

$user = $_SESSION['username'];
echo $user;


?>






</BODY>
</HTML>


<?php 

if(!empty($_GET['autoinc']))
{
$autoinc = $_GET['autoinc'];
}
echo $autoinc;

$sql="ALTER TABLE `setup` AUTO_INCREMENT =$autoinc";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 
  }
  
  $sql="ALTER TABLE `par` AUTO_INCREMENT =$autoinc";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 
  }


  $sql="ALTER TABLE `tournament` AUTO_INCREMENT =$autoinc";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 
 
  }
?>




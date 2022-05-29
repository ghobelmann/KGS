<?php
error_reporting(E_ALL);
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
?>
<TITLE>Automatic Redirection - Test</TITLE>
<LINK REL=STYLESHEET HREF="../../utility/main.css" TYPE="text/css">
<META HTTP-EQUIV="Refresh" CONTENT="4;URL=subreport.php">


</HEAD>
<BODY>

<center><H1>! Your Sub Request is being submitted, please check to make sure it is correct !</H1></center>



</BODY>
</HTML>


<?php 


 $sql="INSERT INTO subs (member, sub, date)
VALUES
('$_POST[1]','$_POST[2]','$_POST[3]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  
  
?>


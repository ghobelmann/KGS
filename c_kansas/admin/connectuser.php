<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>

<HTML>
<HEAD>

<TITLE>Automatic Redirection - Test</TITLE>
<LINK REL=STYLESHEET HREF="../../utility/main.css" TYPE="text/css">
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.usd237.com/scgolf/EnterScores.php">

</HEAD>
<BODY onLoad="redirect()">

<center><H1>! New User Added !</H1></center>



</BODY>
</HTML>

<?php 
$sql="INSERT INTO data_logins (first_name, last_name, username, password, email, permissions)
VALUES
('$_POST[first_name]','$_POST[last_name]','$_POST[username]',MD5('$_POST[password]'),'$_POST[email]', 'user')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }      
?>
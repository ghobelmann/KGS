<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include_once("databaseconnect.php");
include_once("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>

<HTML>
<HEAD>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=EnterScores.php">

</HEAD>
<BODY onLoad="redirect()">

<center><H1>! Column Updates !</H1></center>



</BODY>
</HTML>


<?php 

  $c = "$_POST[numb]";

mysql_query("UPDATE columns SET number = '$c' WHERE id = '1'");


        
?>




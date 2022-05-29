<?php
$page_title = "Enter Schedule";
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
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.usd237.com/golf/EnterSchedule.php">

<SCRIPT LANGUAGE="JavaScript"><!--
function redirect () { setTimeout("go_now()",10000000000); }
function go_now ()   { window.location.href = "http://www.usd237.com/golf/EnterSchedule.php"; }
//--></SCRIPT>

</HEAD>
<BODY onLoad="redirect()">

<center>
  <H1>! Schedule Added !</H1>
</center>



</BODY>
</HTML>


<?php 

$sql="INSERT INTO schedule (team, a, b, c, d)
VALUES
('$_POST[team]','$_POST[player_1]','$_POST[player_2]','$_POST[player_3]','$_POST[player_4]')";


if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }



?>

<SCRIPT LANGUAGE="JavaScript"><!--
function go_now () {
    window.location.href = "http://www.usd237.com/golf/EnterSchedule.php";
}
//-->
</SCRIPT>
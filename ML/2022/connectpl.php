<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
//if(authorize("superadmin,admin") != "success") die('unauthorized');
?>

<HTML>
<HEAD>

<TITLE>Automatic Redirection - Test</TITLE>
<LINK REL=STYLESHEET HREF="../../utility/main.css" TYPE="text/css">
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.smithcentergolf.com/Golf/2013/enterplayers.php"

<SCRIPT LANGUAGE="JavaScript"><!--
function redirect () { setTimeout("go_now()",10000000000); }
function go_now ()   { window.location.href = "http://www.usd237.com/golf"; }
//--></SCRIPT>

</HEAD>
<BODY onLoad="redirect()">

<center>
  <H1>! Player Added !</H1>
</center>



</BODY>
</HTML>


<?php 

$sql="INSERT INTO person(player_1, phone, email, hc, mem, sub, trny)
VALUES
('$_POST[player_1]','$_POST[phone]','$_POST[email]','$_POST[hc]','$_POST[mem]','$_POST[sub]','$_POST[trny]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }



?>

<SCRIPT LANGUAGE="JavaScript"><!--
function go_now () {
    window.location.href = "http://www.usd237.com/golf/enterplayers.php";
}
//-->
</SCRIPT>
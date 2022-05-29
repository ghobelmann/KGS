<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>




<LINK REL=STYLESHEET HREF="../../utility/main.css" TYPE="text/css">
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://localhost/scgolf/enterscores.php">

<SCRIPT LANGUAGE="JavaScript"><!--
function redirect () { setTimeout("go_now()",10000000); }
function go_now ()   { window.location.href = "http://localhost/scgolf/enterscores.php"; }
//--></SCRIPT>



</BODY>
</HTML>

<?php


$sql = 'TRUNCATE TABLE `scores`';

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


?>
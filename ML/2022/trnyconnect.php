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

<SCRIPT LANGUAGE="JavaScript"><!--
function redirect () { setTimeout("go_now()",10000000); }
function go_now ()   { window.location.href = "http://www.usd237.com/scgolf/EnterScores.php"; }
//--></SCRIPT>

</HEAD>
<BODY onLoad="redirect()">

<H1>! Tournament Updated !</H1>


</BODY>
</HTML>

<?php

$sql = "(UPDATE 'tournament' SET 'tournament' = '$_POST[tournament]',
'date' = '$_POST[date]' WHERE 'id' =1 LIMIT 1)" ;

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


?>

<SCRIPT LANGUAGE="JavaScript"><!--
function go_now () {
    window.location.href = "http://www.usd237.com/scgolf/EnterScores.php";
}
//-->
</SCRIPT>
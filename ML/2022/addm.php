<?php
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
include("header.php");
include("menubar.php");
?>

<?php


$sql="INSERT INTO person (name, team, phone, email, member, sub)
VALUES
('$_POST[name]','$_POST[team]','$_POST[phone]','$_POST[email]','$_POST[member]','$_POST[sub]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>








<HTML>
<HEAD>

<TITLE>Add Member Script</TITLE>
<LINK REL=STYLESHEET HREF="../../utility/main.css" TYPE="text/css">
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.usd237.com/golf/addmember.php">

<SCRIPT LANGUAGE="JavaScript"><!--
function redirect () { setTimeout("go_now()",10); }
function go_now ()   { window.location.href = "http://www.usd237.com/golf/addmember.php; }
//--></SCRIPT>

</HEAD>

<BODY onLoad="redirect()">

<H1>! Member Added !</H1>



</BODY>
</HTML>


</SCRIPT>
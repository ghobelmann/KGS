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
include("charts/sample.xml");
?>

<html><style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<body>


<div id="Layer2" style="position:absolute; width:556px; height:22px; z-index:2; left: 213px; top: 155px;">
  <div align="center"><strong>Team Scores </strong></div>
</div>
<div id="Layer1" style="position:absolute; width:605px; height:599px; z-index:3; left: 213px; top: 178px;">

<?php

$query = "SELECT * FROM schedule where week_1 =1"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Player 1</th> <th>Player 2</th><th>Player 3</th> <th>Player 4</th><th>Week 1</th><th>Week 2</th><th>Week 3</th><th>Week 4</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo $row['player_2'];
	echo "</td><td><CENTER>"; 
	echo $row['player_3'];
	echo "</td><td><CENTER>"; 
	echo $row['player_4'];
	echo "</td><td><CENTER>"; 
	echo $row['week_1'];
	echo "</td><td><CENTER>"; 
	echo $row['week_2'];
	echo "</td><td><CENTER>"; 
	echo $row['week_3'];
	echo "</td><td><CENTER>"; 
	echo $row['week_4'];
	echo "</td><CENTER>";
} 

echo "</table>";


?>

<?php include("footer.php"); ?>







</div>

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
<title>Team Rosters</title><body>



<div id="Layer2" style="position:absolute; width:556px; height:22px; z-index:2; left: 213px; top: 155px;">
  <div align="center">
    <p><strong><span class="style1">Team Rosters</span></strong></p>
  </div>

<div id="Layer1" style="position:absolute; width:605px; height:599px; z-index:3; left: 213px; top: 178px;">
</div>
<?php


$query = "SELECT * FROM person order by team"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Player</th> <th>Position</th><th>Team</th><th>Phone</th><th>Email</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['player_p'];
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td><td><CENTER>";
	echo $row['phone'];
	echo "</td><td><CENTER>";
	echo $row['email'];
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";


?>

<?php include("footer.php"); ?>







</div>
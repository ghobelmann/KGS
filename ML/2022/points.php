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
<body>



<div id="Layer2" style="position:absolute; width:605px; height:21px; z-index:2; left: 213px; top: 156px;">
  <div align="center"><strong>Point Rankings</strong></div>
</div>
<div id="Layer1" style="position:absolute; width:605px; height:599px; z-index:3; left: 213px; top: 178px;">

<?php


$query = "SELECT player_1, team, sum(points) as points, avg(((((total) - 35.8) * 113) / 118)* .8) as hc80,  
avg(total) as score,
count(player_1) as rounds FROM scores group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Rank</th><th>Name</th> <th>Team</th><th>Points</th><th>Average Score</th><th>Rounds Played</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 0);
	echo "</td><td><CENTER>"; 
	echo round ($row['score'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['rounds'], 0);
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>

<?php include("footer.php"); ?>







</div>

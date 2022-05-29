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
.style2 {font-size: 24px}
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



<div id="Layer2" style="position:absolute; width:663px; height:22px; z-index:2; left: 208px; top: 132px;">
  <div align="center">
    <p><strong><span class="style2">Average Totals of All Rounds Played Sorted by Team Ascending. </span></strong></p>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:605px; height:599px; z-index:3; left: 213px; top: 178px;">

<?php


$query = "SELECT player_1, team, mtch, avg(total) as total, max(total) as max, min(total) as min, 
            count(player_1) as count, sum(points) as points, avg(((((total) - 35.8) * 113) / 118)* .8) as hc
			FROM scores group by player_1 order by team, total asc"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Player</th> <th>Team</th><th>Avg Score Front</th><th>Low Score Front</th><th>High Score Front</th><th>Average Score Back</th><th>Low Score Back</th><th>High Score Back</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; ?>
	<td colspan="2">Averages</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
} 

echo "</table>";



<tr><td colspan="2">Averages</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(total) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td></tr> 
</table>
<div />	







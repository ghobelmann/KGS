<?php
$page_title = "Hole by Hole Scores";
$permission = "public";
define("IN_GOLF_STATS", TRUE);
include("common.php");
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
  <div align="center"><strong><span class="style1">Touranment Totals </span></strong></div>
</div>
<div id="Layer1" style="position:absolute; width:605px; height:599px; z-index:3; left: 213px; top: 178px;">
<?php

//6 Man query-----------------------------------------------------------------------------------------------------------------------
$query = "SELECT team, sum(total) as total FROM scores WHERE tournament = '$_POST[tournament]' AND man_6 ='yes' group by team order by total"; 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Team</th><th>6 Man Score</th><th>Player 1</th><th>Player 2</th><th>Player 3</th><th>Player 4</th><th>Player 5</th><th>Player 6</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
$query = "SELECT `player_1`, `team`, `total` FROM `scores` WHERE `team` = '".$row['team']."' AND `tournament` = '".$_POST['tournament']."' AND`jv` NOT IN ('yes')";
$player_result = mysql_query($query) or die(mysql_error());
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a></td><td><center>'.$row['total'].'</td>';
	while($player = mysql_fetch_assoc($player_result))
	{
	echo '<td><a href="messagename.php?name='.$player['player_1'].'"><font color=black>'.$player['player_1'].'</font></a><br>'.$player['total'].'</td>';
	}
	echo "</tr>"; 
} 

echo "</table>";

<?php

//6 Man query-----------------------------------------------------------------------------------------------------------------------
$query = "SELECT team, sum(total) as total FROM scores WHERE tournament = '$_POST[tournament]' AND man_6 ='yes' group by team order by total"; 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Team</th><th>6 Man Score</th><th>Player 1</th><th>Player 2</th><th>Player 3</th><th>Player 4</th><th>Player 5</th><th>Player 6</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
$query = "SELECT `player_1`, `team`, `total` FROM `scores` WHERE `team` = '".$row['team']."' AND `tournament` = '".$_POST['tournament']."' AND`jv` NOT IN ('yes')";
$player_result = mysql_query($query) or die(mysql_error());
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a></td><td><center>'.$row['total'].'</td>';
	while($player = mysql_fetch_assoc($player_result))
	{
	echo '<td><a href="messagename.php?name='.$player['player_1'].'"><font color=black>'.$player['player_1'].'</font></a><br>'.$player['total'].'</td>';
	}
	echo "</tr>"; 
} 

echo "</table>";

//4 Man query---------------------------------------------------------------------------------------------------------------------------------------
$query = "SELECT team, sum(total) as total FROM scores WHERE tournament = '$_POST[tournament]' AND man_4 ='yes' group by team order by total"; 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Team</th><th>4 Man Score</th><th>Player 1</th><th>Player 2</th><th>Player 3</th><th>Player 4</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
$query = "SELECT `player_1`, `team`, `total` FROM `scores` WHERE `team` = '".$row['team']."' AND man_4 ='yes' AND `tournament` = '".$_POST['tournament']."' AND`jv` NOT IN ('yes')";
$player_result = mysql_query($query) or die(mysql_error());
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a></td><td><center>'.$row['total'].'</td>';
	while($player = mysql_fetch_assoc($player_result))
	{
	echo '<td><a href="messagename.php?name='.$player['player_1'].'"><font color=black>'.$player['player_1'].'</font></a><br>'.$player['total'].'</td>';
	}
	echo "</tr>"; 
} 

echo "</table>";

//2 Man query-----------------------------------------------------------------------------------------------------------------------------------------
$query = "SELECT team, sum(total) as total FROM scores WHERE tournament = '$_POST[tournament]' AND man_2 ='yes' group by team order by total"; 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Team</th><th>2 Man Score</th><th>Player 1</th><th>Player 2</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
$query = "SELECT `player_1`, `team`, `total` FROM `scores` WHERE `team` = '".$row['team']."' AND man_2 ='yes' AND `tournament` = '".$_POST['tournament']."' AND`jv` NOT IN ('yes')";
$player_result = mysql_query($query) or die(mysql_error());
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a></td><td><center>'.$row['total'].'</td>';
	while($player = mysql_fetch_assoc($player_result))
	{
	echo '<td><a href="messagename.php?name='.$player['player_1'].'"><font color=black>'.$player['player_1'].'</font></a><br>'.$player['total'].'</td>';
	}
	echo "</tr>"; 
} 

echo "</table>";

//-----------------------------------------------------------------------------------------------------------------------------------------

?>

<?php include("footer.php"); ?>







</div>
<?php
$page_title = "Average Totals";
$permission = "public";
define("IN_GOLF_STATS", TRUE);
include("common.php");

?>
<?php


$query = "SELECT player_1, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1, 
			avg(points) as points, max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max,
			 min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
            count(player_1) as count, sum(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as pnts, 
			avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9)
			 - 35.4) * 113) / 122.5)* .8) as hc, team
			FROM scores WHERE scramble <> 'yes' group by player_1 order by total_1, count asc"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo '<table border="1" width = "750">';
echo '<tr> <th width="40">Place</th><th width="140">Player</th> <th width="75">Avg. Points Scored</th><th width="75">Avg. Score</th><th width="75">High Score</th><th width="75">Low Score</th><th width="60">Rounds Played</th><th width="75">Total Shots</th><th width="75">Handicap</th><th>Team</th></tr>';
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['total_1'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>"; 
	echo $row['min'];
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td><td><CENTER>"; 
	echo $row['pnts'];
	echo "</td><td><CENTER>";  
	echo round ($row['hc'], 0);
	echo '</td><td><center><a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>
<?php
//Increment counter
mysql_query("UPDATE countertable SET count_avgtotal=count_avgtotal+1");

//extract count from database table
$query = "SELECT count_avgtotal FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_avgtotal']; 
	echo "</td></tr>";

} 




?>
<a href="avgtotal.php">Without subs included.</a>
<?php
include ("footer.php");
?>






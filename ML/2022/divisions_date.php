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
//include("header.php");
//include("menubar.php");
?>



<table width="0" border="1" cellpadding="1">
  <tr>
    <td valign="top"><h3 align="center">A Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE a = 'yes' AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low Score</th><th>High Score</th><th>Avg Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc'], 0);
	echo "</td><td><CENTER>";
	echo round($row['avg'], 1);	
	echo "</td><td><CENTER>";
	echo $row['min'];
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>";
	echo round ($row['avgpoints'], 1);	
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>


    <td valign="top"><h3 align="center">B Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE b = 'yes' AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low Score</th><th>High Score</th><th>Avg Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc'], 0);
	echo "</td><td><CENTER>";
	echo round($row['avg'], 1);	
	echo "</td><td><CENTER>";
	echo $row['min'];
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>";
	echo round ($row['avgpoints'], 1);	
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>
  </tr>
  <tr>
    <td valign="top"><h3 align="center">C Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE c = 'yes' AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low Score</th><th>High Score</th><th>Avg Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc'], 0);
	echo "</td><td><CENTER>";
	echo round($row['avg'], 1);	
	echo "</td><td><CENTER>";
	echo $row['min'];
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>";
	echo round ($row['avgpoints'], 1);		
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>
    <td valign="top"><h3 align="center">D Player Statistics</h3>
    <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE d = 'yes' AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low Score</th><th>High Score</th><th>Avg Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc'], 0);
	echo "</td><td><CENTER>";
	echo round($row['avg'], 1);	
	echo "</td><td><CENTER>";
	echo $row['min'];
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>";
	echo round ($row['avgpoints'], 1);	
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";



?></td>
  </tr>
</table>





<table width="0" border="1" cellpadding="1">
  <tr>
    <td valign="top"><h3 align="center">Substitute Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE sub = 'yes' group by player_1 order by avg asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Handicap</th><th>Average</th><th>Low Score</th><th>High Score</th><th>Avg Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc'], 0);
	echo "</td><td><CENTER>";
	echo round($row['avg'], 1);	
	echo "</td><td><CENTER>";
	echo $row['min'];
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>";
	echo round ($row['avgpoints'], 1);	
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>


<?php
//Increment counter
mysql_query("UPDATE countertable SET count_divisions=count_divisions+1");

//extract count from database table
$query = "SELECT count_divisions FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_divisions']; 
	echo "</td></tr>";

} 




?>
  <?php include("footer.php"); ?>
</h1>

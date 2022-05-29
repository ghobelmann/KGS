  <?php error_reporting (E_ALL ^ E_NOTICE); ?>   
  
  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  
  
  <meta name="Smith Center Mens League" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <script src="style/jquery-2.1.4.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
  
  </head>
<?php

$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");

//include("header.php");
//include("menubar.php");

if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>


      

    <td valign="top"><h3 align="left">A Player Statistics</h2>
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
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low</th><th>High</th><th>Avg Pnts</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
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
?>

<h2>B Player Statistics</h2>
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
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low</th><th>High</th><th>Avg Pnts</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
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
?><h2>C Player Statistics</h2>
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
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low</th><th>High</th><th>Avg Pnts</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
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
?><h3 align="left">D Player Statistics</h2>
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
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th><th>Low</th><th>High</th><th>Avg Pnts</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
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



?>





<h2>Substitute Statistics</h2>
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
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
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
?>







<?php include("footer.php"); ?>

</body>
</html>

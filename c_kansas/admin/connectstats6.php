<?php
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

$user = $_SESSION['username'];
echo $user;
?>

<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>








<?php

//include("menubar.php");
 $team = isset($_POST['1']) ? $_POST['1'] : '';


$query = "SELECT player_1, avg(total) as total, max(total) as max, min(total) as min, 
            count(player_1) as count, sum(total) as pnts, avg((total) - 71.1) as hc, team
			FROM scores WHERE `team` = '$team' AND dq <> 'dq' AND total > 0 group by player_1 order by total, count asc"; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr> <th>Player</th> <th>Avg Score</th><th>High Score</th><th>Low Score</th><th>Rounds Played</th><th>Strokes Over Par</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>"; 
	echo $row['min'];
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td><td><CENTER>";  
	echo round ($row['hc'], 1);
	echo "</td></tr><CENTER>"; 
	
} 

echo "</table>";


?>
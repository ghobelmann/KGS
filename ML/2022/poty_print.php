<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

$page_title="Schedule";
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
//include("style/style.php");

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>
<html>
<body>






				<h2>Player of the Year Race, as of <?php echo date("M d, Y"); ?>.</h2>

	<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND a = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>A</th> <th>Player</th><th>Total Points</th><th>Rnd</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td></tr><CENTER>"; 
	$i++;
} 

echo "</table>";


?>


			<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND b = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>B</th> <th>Player</th><th>Total Points</th><th>Rnd</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>

			<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND c = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>C</th> <th>Player</th><th>Total Points</th><th>Rnd</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>
		
			<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND d = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>D</th> <th>Player</th><th>Total Points</th><th>Rnd</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>














</body>
</html>
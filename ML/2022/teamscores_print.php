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
<head>
<style>

tr:nth-child(even) {
  background-color: #ddddd;
}


tr:nth-child(odd) {
  background-color: white;
}
</style>

</head>
<body>

<?php
$dt = new DateTime();

?>

 <center> <h2>Smith Center Mens League Team Scores Through <?php echo $dt->format('m-d-Y');  ?>  </h2> </center>

        <center><h2>AB Division</h2>
   <?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores WHERE team <= 10 and mtch > 600 group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<center><table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points Scored to Date</th><th>Total Rounds Played to Date</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td><td><CENTER>"; 
	echo $row['rounds'];
	echo "</td><CENTER>";
	$i++;
} 

echo"</table>";
?>   

<center><h2>CD Division</h2>
   <?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores WHERE team > 10 and mtch > 600 group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<center><table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points Scored to Date</th><th>Total Rounds Played to Date</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td><td><CENTER>"; 
	echo $row['rounds'];
	echo "</td><CENTER>";
	$i++;
} 

echo"</table>";
?>      



</body>
</html>
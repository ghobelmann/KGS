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
include("style/style.php");
include("menubar.php");
//include("menubar.php");
?>

<?php

$query = "SELECT *, sum(points)as points, count(player_1) as rounds FROM scores WHERE sub <> 'yes' GROUP by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
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

<p Align = 'left' style = 5><?php
//Increment counter
mysql_query("UPDATE countertable SET count_teamscores=count_teamscores+1");

//extract count from database table
$query = "SELECT count_teamscores FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_teamscores']; 
	echo "</td></tr>";

} 




?></p>

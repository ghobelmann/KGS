<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	

<?php
error_reporting (E_Warning);
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
include_once("headera.php");

?>


<?php if(!empty($_GET['event']))
{
$event = $_GET['event'];
}
?>
<table border="1"  valign ="top">
    <tr>
        <td valign='top' width='10%'align='center' >
        
 

<?php

//Submit Query to MySql Database
$query1 = "SELECT player_1, team, sum(points) as points
 FROM scores WHERE `event` = '$event' GROUP by player_1
ORDER BY points DESC";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());
//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'  >";
echo "<tr><th>Place</th><th>Player Name </th> <th>Team</th><th>Total Points</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result1 )) {
	// Print out the contents of each row into a table
	 	echo "<tr><td>";
	echo $i;
	echo "</td><td><CENTER>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo $row['team'];
  	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td></tr></strong><CENTER>"; 
	$i++;
} 
?>  
              
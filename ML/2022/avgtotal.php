

<!DOCTYPE html>

<html lang="en">

  <head>


	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="High School Golf Results">
    <meta name="author" content="Greg Hobelmann">




<?php
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
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


if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>
  


    <title>KansasGolfScores.com</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
        <link href="w3.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
    <style>
    body {background-color: black;}
  #grad {
  background: linear-gradient(white, gray);
}
</style>


<?php



include_once("databaseconnect.php");

?>   


</head>
<body>
       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">
       <h4 class="card-header bg-dark">  
<center>       
<a href="index.php">Home</a></h4>
</center> 
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">

      <h1 class="my-4"><center>Smith Center Mens League 2020
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
      
        
<h6>
Hole by Hole scoring leaders.<br>
<th><a href="hole1.php">Hole 1</a>
<th><a href="hole2.php">Hole 2</a>
<th><a href="hole3.php">Hole 3</a>
<th><a href="hole4.php">Hole 4</a>
<th><a href="hole5.php">Hole 5</a>
<th><a href="hole6.php">Hole 6</a>
<th><a href="hole7.php">Hole 7</a>
<th><a href="hole8.php">Hole 8</a>
<th><a href="hole9.php">Hole 9</a>
</h6>
<?php


$query = "SELECT player_1, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1, 
			avg(points) as points, max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max,
			 min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
            count(player_1) as count, sum(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as pnts, 
			avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9)
			 - 35.4) * 113) / 122.5)* .8) as hc, team
			FROM scores WHERE scramble <> 'yes' and sub <> 'yes' group by player_1 order by total_1 asc"; 
      

	 
$result = mysql_query($query) or die(mysql_error());

echo "<table class='table'>";
echo '<tr> <th width="40">Place</th><th width="140">Player</th> <th width="75">Avg. Points Scored</th>
<th width="75">Avg. Score</th><th width="75">High Score</th><th width="75">Low Score</th>
<th width="60">Rounds Played</th><th width="75">Total Shots</th><th width="75">Handicap</th><th>Team</th></tr>';
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
	echo '</td><td><center><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";





?>
<?php

$query = "SELECT avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) 
as total_1 from scores"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Avg</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['total_1'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?>


<?php
//Increment counter
mysql_query("UPDATE countertable SET count_avgtotal=count_avgtotal+1");

//extract count from database table
$query = "SELECT count_avgtotal FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table class='table'>";
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


<?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT scores.player_1, scores.team, scores.points, 

44 - avg(scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + scores.hole6
 + scores.hole7 + scores.hole8 + scores.hole9) as net,
 
 sum(scores.points) as points, 
 
 count(scores.player_1) as count,
  
44 - avg(scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + scores.hole6
 + scores.hole7 + scores.hole8 + scores.hole9)
           
        + sum(scores.points) + (count(scores.player_1)* 5) as fedex, 
 
 hc.hc from scores, hc WHERE scores.player_1 = hc.player_1 AND sub <> 'yes'
 GROUP by scores.player_1 order by fedex desc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th>
<th>Points</th><<th>Count</th><th>Net Score</th><th>HC</th><th>Redmen Cup</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font size=4>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
  echo "</td><td><CENTER>"; 
  echo round ($row['points'], 0);
    echo "</td><td><CENTER>"; 
  echo round ($row['count'], 0);
  echo "</td><td><CENTER>";
	echo round ($row['net'], 0);
	echo "</td><td><CENTER>"; 
	echo $row['hc'];
  echo "</td><td><CENTER>"; 
	echo round ($row['fedex'], 2);
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?>


<a href="avgtotal_subs.php">With subs included.</a>









               




  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






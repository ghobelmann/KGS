<?php error_reporting (E_ALL ^ E_NOTICE); ?>
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

if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  
  
  <meta name="Smith Center Mens League" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <script src="style/jquery-2.1.4.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
  
  </head>

  
	<title class='title'>Smith Center Mens League Golf 2016</title>
  		    <ul> <h2>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>  </h2>
      		    <ul> <h2>
			  <li><a href="tournaments.php">Tournaments</a></li>
			<li>    <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>   </h2>
			</ul>





   <h2><h2><a href="netscores.php">Net Scores</a></h2></h2>
                <h2> (Top 10 Lowest Net Score All Divisions)</h2>
                        <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT scores.player_1, (scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + 
scores.hole6 + scores.hole7 + scores.hole8 + scores.hole9) as score, hc.hc, 
((scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + 
scores.hole6 + scores.hole7 + scores.hole8 + scores.hole9) - hc.hc) as net
 FROM scores, hc WHERE scores.player_1 = hc.player_1 AND DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
 ORDER by net asc LIMIT 10 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table class='table' border='1'>";
echo "<tr> <th>Place</th><th>Name</th><th>NET</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td>';
	echo "<td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";  
	echo $row['net'];
	echo "</td>";
	$i++;
} 
echo "</table>";

?>         



<h2>Player of the Week</h2>
                <h2> (Highest Points Lowest Score)</h2>
                <h2> A Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,
 team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND a = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
               
                <h2>B Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND b = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </h2>
                <h2>C Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score, 
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND c = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </h2>
                <h2>D Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score, 
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND d = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>

</h2>
     
     
     <h2>Scoring Average by Division</h2>
                <h2>
<?php	
	
	
	
	//A Scoring Average



	$query = "SELECT avg(total) as total_a FROM scores WHERE `a` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table  class='table' border='1'>";
echo "<tr> <th>A Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo round($row['total_a'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?></h2>   <h2>
<?php	
	
	
	
	//BScoring Average



	$query = "SELECT avg(total) as total_b FROM scores WHERE `b` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table class='table' border='1'>";
echo "<tr> <th>B Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>";  
	echo round($row['total_b'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?>

      <h2>
<?php	
	
	
	
	//C Scoring Average



	$query = "SELECT avg(total) as total_c FROM scores WHERE `c` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table  class='table' border='1'>";
echo "<tr> <th>C Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>";  
	echo round($row['total_c'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?>
        <h2>
<?php	
	
	
	
	//D Scoring Average



	$query = "SELECT avg(total) as total_d FROM scores WHERE `d` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table  class='table' border='1'>";
echo "<tr> <th>D Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>";  
	echo round($row['total_d'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?>
       <h2>

 <td>
					<h2>WEEKLY TEAM MATCHUPS</h2>
					<table  class='table' >
                  <tr>
                    <td align="center">Team</td>
                    <td align="center"><h2>Score</td>
							<td align="center"><h2>Rnd</td>
							<td align="center"><h2></td>
							<td align="center"><h2>Team</td>
							<td align="center"><h2>Score</td>
							<td align="center"><h2>Rnd</td>
					  </tr>
                  <tr>
                    <td align="center"><h2><?php $query = "SELECT a FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['a']; ?>
                    </td>
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <?php
									?>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center"><h2>vs</td>
							<td align="center"><h2><?php $query = "SELECT b FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['b']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><h2><?php $query = "SELECT c FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['c']; ?></td>
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center"><h2>vs</td>
							<td align="center"><h2><?php $query = "SELECT d FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['d']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><h2><?php $query = "SELECT e FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['e']; ?></td>
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center"><h2>vs</td>
							<td align="center"><h2><?php $query = "SELECT f FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['f']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><h2><?php $query = "SELECT g FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['g']; ?></td>
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center"><h2>vs</td>
							<td align="center"><h2><?php $query = "SELECT h FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['h']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><h2><?php $query = "SELECT i FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['i']; ?></td>
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center"><h2>vs</td>
							<td align="center"><h2><?php $query = "SELECT j FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['j']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><h2><?php $query = "SELECT k FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['k']; ?></td>
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center"><h2>vs</td>
							<td align="center"><h2><?php $query = "SELECT l FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['l']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><h2>Total </td>352 Possible
                    <td align="center"><h2><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE  scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <td align="center"><h2></td>
                    <td align="center"><h2></td>
							<td align="center"><h2></td>
							<td align="center"><h2></td>
							<td align="center"><h2></td>
					  </tr>
                </table>
					<h2>




            <p align="left"><h2>Team Scores This Week</h2></h2>
                <div><h2> 
<?php	
	
	
	
	//Get number of Team to Search For.



	$query = "SELECT *, count(player_1) as round, sum(points) as points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th><h2>Place</th><th>Team</th> <th>Points this Week</th><th>Rounds</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><h2><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['round'];
	echo "</td><CENTER>";
	$i++;
} 
echo "</table>";

?></h2>



 <p align="left"><h2>Total Strokes Per Team</h2>
                <div><h2>
<?php	
	
	
	
	//Get number of Team to Search For.



	$query = "SELECT team, sum(total) as total, count(player_1) as round FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by team order by total asc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th>Place</th><th>Team</th> <th>Strokes this Week</th><th>Rounds</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 1);
  echo "</td><td><CENTER>"; 
	echo $row['round'];
	echo "</td><CENTER>";
	$i++;
} 
echo "</table>";

?></h2>

<html>





            <td align="left" valign="top"><p align="center"><h2>TOTAL TEAM SCORES</h2></h2>
                <div><h2>
                  <?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table  class='table' border='1'>";
echo "<tr> <th>Place</th><th>Team</th> <th>Points</th><th>Rounds</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['rounds'];
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>
    <br><br>              
 


              </h2></td>
























<?php include("footer.php"); ?>

</body>
</html>



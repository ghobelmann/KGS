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
//include("style/style.php");
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Smith Center Mens League Golf</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    
        <script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.avgtotal.php";
}
//-->
</script>

  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan"><p>Mens League...</p></div>
		<!-- end logo -->
		</div>
		<div id="nav">
		  <div id="nav-menu-left"></div>
		  <div id="nav-menu">
		  <!-- start of navigation -->
		    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			    <li> <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>  </li>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>
			  <li><a href="admin_page.php" style="background-image: none;">admin</a></li>
			</ul>
      
			<!-- end navigation -->
          </div>
		  <div id="nav-menu-right"></div>
		</div>
	  </div>
	  <div class="clearfloats"></div>
	  <div id="header2">
	    <!-- the large header slogan which is over top of the grass image can either be changed, or removed below -->
	    <div id="header2-slogan1"><p>Stats 
      
      <SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
}
</script>

</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


<h1>
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
</h1>
<h1>
<th><a href="week1.php">Week 1</a>
<th><a href="week2.php">Week 2</a>
<th><a href="week3.php">Week 3</a>
<th><a href="week4.php">Week 4</a>
<th><a href="week5.php">Week 5</a>
<th><a href="week6.php">Week 6</a>
<th><a href="week7.php">Week 7</a>
<th><a href="week8.php">Week 8</a>
<th><a href="week9.php">Week 9</a>
</h1> 
<?php


$query = "SELECT player_1, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1, 
			avg(points) as points, max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max,
			 min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
            count(player_1) as count, sum(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as pnts, 
			avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9)
			 - 35.4) * 113) / 122.5)* .8) as hc, team
			FROM scores WHERE scramble <> 'yes'  and sub <> 'yes' and mtch < 800
      group by player_1 order by total_1, count asc"; 
      

	 
$result = mysql_query($query) or die(mysql_error());

echo '<table border="1" width = "90%">';
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
	
	
echo "<table border='1'>";
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
	
	
echo "<table border='1'>";
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

















</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
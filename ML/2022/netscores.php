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
include("style/style.php");


if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Smith Center Mens League Golf 2012</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan"><p>Mens League 2012...</p></div>
		<!-- end logo -->
		</div>
		<div id="nav">
		  <div id="nav-menu-left"></div>
		  <div id="nav-menu">
		  <!-- start of navigation -->
		    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="https://docs.google.com/spreadsheets/d/1hfP8qNagl8hnZSdvGZwHIUcjSuUX2cHQZZ5Q1O0dMY8/edit?ts=5cdb469d#gid=0">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			  <li>  <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
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
	    <div id="header2-slogan1"><p>Net Scores</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


                            <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT scores.player_1, (scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + 
scores.hole6 + scores.hole7 + scores.hole8 + scores.hole9) as score, hc.hc, 
((scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + 
scores.hole6 + scores.hole7 + scores.hole8 + scores.hole9) - hc.hc) as net, 
(scores.hole1 + scores.hole2 + scores.hole3 + scores.hole4 + scores.hole5 + 
scores.hole6 + scores.hole7 + scores.hole8 + scores.hole9) as score, hc.hc as hc
 FROM scores, hc WHERE scores.player_1 = hc.player_1 AND DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date 
  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
 ORDER by net asc, score desc "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Name</th><th>NET</th><th>Score</th><th>Handicap</th></tr>";
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
  echo "</td><td><CENTER>";  
	echo $row['score'];
  echo "</td><td><CENTER>";  
	echo $row['hc'];
	echo "</td>";
	$i++;
} 
echo "</table>";

?> 
       


























<?php include("footer.php"); ?>

</body>
</html>


</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
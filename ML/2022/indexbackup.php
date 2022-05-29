
<?php
error_reporting (E_ALL ^ E_NOTICE);
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
	<title>Smith Center Mens League Golf 2012</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />  
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />


    <script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.index.php";
}
//-->
</script>
             
  </head>
      
  <body>      
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>SmithCenter<span class="green">Golf</span></p>
		<div id="slogan"><p>Mens League and Tournaments WebSite</p></div>
    <div id="slogan"> <a href="admin_page.php" style="background-image: none;">Administrator Login</a></p></div>
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
			  <li><a href="tournaments.php">Tournaments</a></li>
			<li>    <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>
			</ul>

			<!-- end navigation -->
          </div>
		  <div id="nav-menu-right"></div>
		</div>
	  </div>
	  <div class="clearfloats"></div>
	  <div id="header2">
	    <!-- the large header slogan which is over top of the grass image can either be changed, or removed below -->
	    <div id="header2-slogan1"><p><a href="teams.php" class="style1">Team Numbers Assigned</a> </p>
	    </div>
	    <div id="header4-slogan2"><p class="style2">Match Play  using last years handicaps for 3 weeks.  </p>
	    </div>

    <?php
	//This script is for the marquee
$query = "SELECT text FROM marquee";

$result = mysql_query($query);

$num = mysql_num_rows($result);

while( $row = mysql_fetch_object($result) )

{

    $body .= $row->text;

}

//print "<marquee scrollamount = 10><h1>". substr($body, 0) ."</h1></marquee>";  


?>
<marquee scrollamount="8"><span class="h2">
<?php 
$marquee = htmlspecialchars( substr($body, 0) ,ENT_QUOTES);
//echo $marquee;
?></marquee>
       
		 
		  
	    <!-- end header slogan -->
	  </div>
	           <br><br>     <br />
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->
       <h1>Needed: Full Time D Player for the rest of the year.</h1>
      <h1><a href="SubReport.php">If you need a sub enter it here.</a>
      <h3> Subs, Click on a Date, if a player needs a sub you can enter your name to play for them. </h3>
<p>
                           <?php
// PHP Search Script
//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
//Submit Query to MySql Database
$query = "SELECT * FROM subs WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -90 day) > date";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>Subs Needed!! Click Date below to see who.</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<td>"; 
	echo '<a href="subdate.php?date='.$row['date'].'">'.$row['date'].'</font></a>';
	echo "</td>"; 
} 

	
?>

		<table width="90%" height="177"  border="0" align="center" cellpadding="15" cellspacing="19" bordercolor="#CCCCCC">
          <tr><th></th></tr>
          <tr>
            <td width="93%" align="left" valign="top"><p>
            
           
           
            
            </p>
 
   <p><h2><a href="netscores.php">Net Scores</a></h2></p>
                <p> (Top 10 Lowest Net Score All Divisions)</p>
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

echo "<table border='1'>";
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

                
                
                

  
                <p><h2>Player of the Week</h2></p>
                <p> (Highest Points Lowest Score)</p>
                <p> A Player.
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

echo "<table border='1'>";
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
                </p>
                <p class="style5">B Player.
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

echo "<table border='1'>";
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
                </p>
                <p class="style5">C Player.
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

echo "<table border='1'>";
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
                </p>
                <p class="style5">D Player.
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

echo "<table border='1'>";
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

</p>
     
     
      <p align="left"><h2>Scoring Average by Division</h2></p>
                <div align="left">
<?php	
	
	
	
	//A Scoring Average



	$query = "SELECT avg(total) as total_a FROM scores WHERE `a` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>A Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo round($row['total_a'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?></p>
<?php	
	
	
	
	//BScoring Average



	$query = "SELECT avg(total) as total_b FROM scores WHERE `b` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>B Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>";  
	echo round($row['total_b'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?></p>


<?php	
	
	
	
	//C Scoring Average



	$query = "SELECT avg(total) as total_c FROM scores WHERE `c` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>C Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>";  
	echo round($row['total_c'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?></p>

<?php	
	
	
	
	//D Scoring Average



	$query = "SELECT avg(total) as total_d FROM scores WHERE `d` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>D Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>";  
	echo round($row['total_d'], 1);
	echo "</td><CENTER>";
} 
echo "</table>";

?></p>


 <td width="80%" align="left" valign="top">
					<p align="center"><h2>WEEKLY TEAM MATCHUPS</h2></p>
					<table width="324" border="4" cellpadding="0" cellspacing="2" bordercolor="#000000">
                  <tr>
                    <td align="center">Team</td>
                    <td align="center">Score</td>
							<td align="center">Rnd</td>
							<td align="center"></td>
							<td align="center">Team</td>
							<td align="center">Score</td>
							<td align="center">Rnd</td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT a FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['a']; ?>
                    </td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <?php
									?>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT b FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['b']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT c FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['c']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT d FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['d']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT e FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['e']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT f FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['f']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT g FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['g']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT h FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['h']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT i FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['i']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT j FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['j']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT k FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['k']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT l FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['l']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center">Total </td>528 Possible
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE  scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <td align="center"></td>
                    <td align="center"></td>
							<td align="center"></td>
							<td align="center"></td>
							<td align="center"></td>
					  </tr>
                </table>
					<p>




            <p align="left"><h2>Team Scores This Week</h2></p>
                <div align="left">
<?php	
	
	
	
	//Get number of Team to Search For.



	$query = "SELECT *, count(player_1) as round, sum(points) as points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team</th> <th>Points this Week</th><th>Rounds</th></tr>";
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
	echo $row['round'];
	echo "</td><CENTER>";
	$i++;
} 
echo "</table>";

?></p>



 <p align="left"><h2>Total Strokes Per Team</h2></p>
                <div align="left">
<?php	
	
	
	
	//Get number of Team to Search For.



	$query = "SELECT team, sum(total) as total, count(player_1) as round FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by team order by total asc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
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

?></p>

<html>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>




            <td width="29%" align="left" valign="top"><p align="center"><h2>TOTAL TEAM SCORES</h2></p>
                <div align="left">
                  <?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
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
  <h2>Weekly Individual Leaderboard</h2>
	 
         <?php	

	$query = "SELECT date, avg(total) as total, count(player_1) as count FROM scores
	 WHERE date > '2012-05-02' GROUP by date"; 
	 $result = mysql_query($query) or die(mysql_error());
	 

	 
echo "<table border='1' width='80%'>";
echo "<tr><th>Week</th> <th>Date</th>
<th>Avg Score</th><th>Rnd</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result)) {

	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="overunder.php?tournament='.$row['date'].'">'.$row['date'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td></tr><CENTER>";
	$i++;
	
} 

?>

   </table >
</tr>       



              </p></td>
           
<div align="center">
	






         </div></td>
          </tr>         
    <br><br>
		<tr>
                  <td align="center"><h2>Message Board</h2></td>
                </tr>
                <tr>
                  <td align="center"><?php
			 if(authorize("admin, superadmin, messageboard") == 'success')
			 {
			  if(isset($_POST['msg']) == 'submitted')
{
if(!$_POST['from'] || !$_POST['message'])

echo '<h2><font color="red">You must fill in both fields.</font></h2>';
} else {
$_POST['from'] = htmlspecialchars($_POST['from'], ENT_QUOTES);
$_POST['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);
$sql = "INSERT INTO `message_board` (`timestamp`, `from`, `message`) VALUES ('".time()."', '".$_POST['from']."', '".$_POST['message']."')";
mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
}
}
?>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="messageboard" class="style5">
                        <p>
                          <input name="msg" type="hidden" value="submitted">
                        </p>
                        <table width="300"  border="0" cellpadding="0" cellspacing="1" bgcolor="#E4E6AE">
                          <tr>
                            <td align="center" colspan="2">Post a new message </td>
                          </tr>
                          <tr>
                            <td width="90" align="right">Your Name:</td>
                            <td width="251" align="left"><input name="from" type="text" size="35" maxlength="40"></td>
                          </tr>
                          <tr bgcolor="#E4E6AE">
                            <td colspan="2"><textarea name="message" cols="50" size="35" rows="6"></textarea></td>
                          </tr>
                          <tr align="right">
                            <td colspan="2"><input name="submit" type="submit" value="Post"></td>
                          </tr>
                        </table>
                      </form>
                      <?php
}
?></td>
                </tr>

        

</div>




		  
		  <?php
			  $sql = "SELECT * FROM `message_board` ORDER BY `id` DESC LIMIT 0,4";
			  $result = mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
			  while($data = mysql_fetch_assoc($result))
			  {
			  $date = date("d-M-y",$data['timestamp']);
			  //$time = date("g:i A",$data['timestamp']);
			  echo '
			  <table width="80%"  border="0" cellspacing="15" cellpadding="15">
                <tr>
                 
				
</td>
                  <td align="left" valign="top"><h2>'.$data['message'].'</h2></td>
                </tr>
              </table>';
			  }
			  ?>

		 
		  
		  
	    </div>
	  </div>
	  
	           <?php
//Increment counter
mysql_query("UPDATE countertable SET count_index=count_index+1");

//extract count from database table
$query = "SELECT count_index FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_index']; 
	echo "</td></tr>";

} 




?>   
  </body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
		    <p><a href="http://www.steves-templates.com">Steves Website Templates</a></p>
<!-- Facebook Badge START --><a href="http://www.facebook.com/pages/Smith-Center-Mens-League/183933288396625" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #FFFFFF; text-decoration: none;" title="Smith Center Mens League">Smith Center Mens League</a><span style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; line-height: 16px; font-variant: normal; font-style: normal; font-weight: normal; color: #FFFFFF; text-decoration: none;">&nbsp;|&nbsp;</span><a href="http://www.facebook.com/business/dashboard/" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #FFFFFF; text-decoration: none;" title="Make your own badge!">Promote Your Page Too</a><br/><a href="http://www.facebook.com/pages/Smith-Center-Mens-League/183933288396625" target="_TOP" title="Smith Center Mens League"><img src="http://badge.facebook.com/badge/183933288396625.809.335052388.png" style="border: 0px;" /></a><!-- Facebook Badge END -->	  </div>
	</div>

</html>

 <div id="content2">
	    <div class="content-padding">
		  <!-- content blocks (three side by side), can remove if needed, this was just an example -->
		  <div class="content2-block">
		    <h2>Scoring and Format</h2> 
		  <p>Each week you will play another player according to the schedule.  We will be using the match play format, where each hole is worth
		  2 points, if you win the hole you get 2 points, if you tie the hole you each get 1 point and if you lose the hole you get 0 points. 
		  The player with the lowest Net score (subracting your handicap from what you really shot) will also get 4 points.  
		  If there is a tie on net score each player recieves 2 points.
		  There is a total of 22 points (2 points per 9 holes = 18 + 4 for low net) possible per match. 
		   4 matches per team, so each night there is a possible 88 points per match, times 6 team matchups for a
		  grand nightly total of 528.  (Unless somebody has to play the course)
		  We will keep track of your handicap and it will be updated each week.</p><p>  To figure points using handicaps, 
		  let's say for example your handicap is a 7 and your opponant is a 5, you have to give your opponant and extra stroke on the 2 hardest handicap holes,
		   keep in mind handicap holes are different from white and blue tees.  If you are a 9 and your opponant is an 18, you have to give him a stroke on all
		   9 holes.  Then if you shoot a 45 with a handicap of 7, you shot a net 38.  If your opponant is an 18 and shot a 58, he has a net score of 40.  
		   So you won the low net and get the extra 4 points.  Handicaps are on your scorecards with the handicap holes from 1 to 9 with 1 being the hardest
		   and 9 being the easiest hole.  Then add up your points, 2 for a win, and 1 for a tie plus the four points for low net, and that is your score.  Piece of cake!!
		   </p></div>
		  <div class="content-divider"></div>
		  <div class="content2-block">
		    <h3>Players of the Week.</h3>
		    <p>There will be a player of the week for the A, B, C and D divisions.  The player of the week scores the most points in that division.  In case of ties the 
			ties will be broken by the player that shot the lower score.</p>
      <br>
      <p><h3>2012 Rules</h3></p>
      	<p>As Per the business meeting held on May 26th, the League agreed to the following Rules.</p>
			<p>John Boden- League President  </p>
			<p>Lynn Zierlein- League Treasurer</p>
			<p>Greg Hobelmann- Score Keeper</p>
			<p></p>

		<p>1. We will pay out top 5 places at the end of the year.</p>
		<p>2. The End of the Year meal will not be taken out of the cost to join the league.</p>
		<p>3. The cost for playing this year will be $50.00.</p>
		<p>4. We will spend $500.00 to improve the course.</p>
		<p>5. We will pay $5.00 per player to Greg Hobelmann for being the score keeper and handicap manager.</p>
		<p>6. Make up all matches before the next week.</p>
    <p>7. If your opponant does not show up, play the course, you will get a minimum of 14 points.</p>
    <p>8. In long grass, native unmowed grass, drop a ball where it crossed into the grass. Within 2 club lengths. Take 1 penalty stroke and play from there.</p>
		<p>9. Get your own Substitutes.  </p>
		<p>11. We will play 3 weeks off of last years handicap before moving to this years.  If you don't have a handicap you play at 80 % each night for 3 weeks at which time your current avg of those 3 scores will be used.</p>
		<p>12. For makeup matches you have to play the person, you can not each play a round on different days then figure the score.</p>
		<p>13. 88 points possible for each team on match play nights. 26 points possible on scramble nights.(2 grougs, AB-CD, 13 for first, 12 for 2nd etc.)</p>
		<p>14. Each Team will play every night.</p>
		<p>15. We will have A, B, C and D players of the Year.  This will be figured off of total points scored by that person during the year. A plaque to be placed in the club house will bear the names of the winners.  There is a web page with up to date totals on the League web page.</p>
		<p>16. Scores and schedules can be found at www.usd237.com/golf</p>
		<p>17. To figure scores, </p>
		<p>a. Take the difference of the handicaps, (Player A has a 10, Player be is a 7)</p>
		<p>b. Player A gets 3 strokes on the 3 hardest holes that night. (Blue and White tees have different HC holes), on the scorecards the handicaps are shown by numbers, 1 is the hardest, 9 is the easiest.</p>
		<p>c. If a hole is tied- Each player gets 1 point per hole.</p>
		<p>d. Which ever player has the least strokes, (after figuring in handicap) gets 2 points per hole.</p>
		<p>e. After nine holes, who ever has the lowest net score gets 4 points, 2 points each if tied.</p>
		<p>f. 2 points per hole, times 9 holes is 18 points.  4 points for lowest net is 22 points per match.</p>
		<p>g. 4 matches per team times 22 points is 88 points possible per night.</p>
		<p>f. With 12 teams playing each other, that makes 6 matchups at 88 points per night is 528 points per night.</p>
		<p></p>
    
    		</div>
			
			
		  </div>
		  <div class="content-divider"></div>
  		  <div class="content2-block">
		    <h4>Sign Up</h4>
			
			
			<p>Mens League Sign Up:</p>
			<div id="subscribe">
  <form action="connectpl.php" method="post">
    <p align="center" class="style6">Name:      
      <input type="varchar" name="player_1" /><br />
      Phone:	  
      <input type="varchar" name="phone" size="20"/><br />
</p>
    <p align="center" class="style6">email:      
      <input type="varchar" name="email" /><br />
      9 hole score:
      <input type="varchar" name="hc" size="20"/><br />
</p>
    <p align="center" class="style6">Please check which you would like to be. </p>
    <p align="center" class="style6">Member
      <input type="checkbox" name="mem" value="yes"><br />
      Substitute
      <input type="checkbox" name="sub" value="yes"><br />
	  

      <span class="style5">
      <input name="" type="submit" value="Enter" /><br />
      </span> </p>
  </form>
  
 
		    </div>
			
					   
 
		  <!-- end content blocks -->
		  </div>
		  <div class="clearfloats"></div>
		</div>
      </div>

	</div>


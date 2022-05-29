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
include("menubar.php");
?>





<table width="500" height="82" border="1">
  
    <td valign="top"><div align="center"><h3>Weekly Team Scores</h3>       </div>
    <?php	
	$query = "SELECT *, sum(points) as points FROM scores WHERE date ='2008-06-11' group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points Scored to Date</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "<CENTER>";
	$i++;
} 
echo "</table>";

?></td>
    <td valign="top"><div align="center"><h3>Total Team Scores</h3>       </div>
    <?php	
	$query = "SELECT *, sum(points) as points FROM scores group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points Scored to Date</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td></tr><CENTER>";
	$i++;
} 
echo "</table>";
?></td></tr>
   
   
   
   
   
   
   
   
   
   
   
   
    <td valign="top"><h3 align="center">A Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, total from scores WHERE a = 'yes' AND sub <> 'yes' AND date ='2008-06-11' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>

















     <td valign="top"><h3 align="center">B Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, total from scores WHERE b = 'yes' AND sub <> 'yes' AND date ='2008-06-11' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>














   
  </tr>
  <tr>
  
  <td valign="top"><h3 align="center">C Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, total from scores WHERE c = 'yes' AND sub <> 'yes' AND date ='2008-06-11' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>




<td valign="top"><h3 align="center">D Player Statistics</h3>
    <?php


// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, total from scores WHERE d = 'yes' AND sub <> 'yes' AND date ='2008-06-11' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>


    <tr>
	
	
	    <td valign="top"><h3 align="center">Substitute Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, total from scores WHERE sub = 'yes' AND date ='2008-06-11' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>
    <td> <caption align="top">
  Weekly Scores
  </caption>
  <tr>
    <td valign="top"><div align="center"><h3>Weekly Individual Scores</h3>       </div>
    <?php


$query = "SELECT * FROM scores WHERE date = '2008-06-11' 
order by total asc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr><th>Place</th><th>Player</th><th>Team</th><th>Total</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<ROWSPAN=3><tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>";
	echo $row['points'];
	echo "<CENTER>"; 
	$i++;
} 

echo "</table>";


?></td>
  
  </tr>


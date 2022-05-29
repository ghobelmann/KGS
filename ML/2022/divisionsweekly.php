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



<table width="0" border="1" cellpadding="1">
  <tr>
    <td valign="top"><h3 align="center">A Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT * from scores WHERE a = 'yes' order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Place</th><th>Player</th> <th>Team</th><th>Score</th><th>Points</th><th>Match</th></tr>";
// keeps getting the next row until there are no more to get
$i=1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>";
	echo $row['points'];
	echo "</td><td><CENTER>";
	echo '<a href="messagemtch.php?mtch='.$row['mtch'].'"><font color=black>'.$row['mtch'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} 
echo "</table>";
?></td>


    <td valign="top"><h3 align="center">B Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT * from scores WHERE b = 'yes' order by total asc"; 

$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Place</th><th>Player</th> <th>Team</th><th>Score</th><th>Points</th><th>Match</th></tr>";
// keeps getting the next row until there are no more to get
$i=1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>";
	echo $row['points'];
	echo "</td><td><CENTER>";
	echo '<a href="messagemtch.php?mtch='.$row['mtch'].'"><font color=black>'.$row['mtch'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} 
echo "</table>";
?></td>
  </tr>
  <tr>
    <td valign="top"><h3 align="center">C Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT * from scores WHERE c = 'yes' order by total asc"; 

$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Place</th><th>Player</th> <th>Team</th><th>Score</th><th>Points</th><th>Match</th></tr>";
// keeps getting the next row until there are no more to get
$i=1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>";
	echo $row['points'];
	echo "</td><td><CENTER>";
	echo '<a href="messagemtch.php?mtch='.$row['mtch'].'"><font color=black>'.$row['mtch'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} 
echo "</table>";
?></td>

<td valign="top"><h3 align="center">D Player Statistics</h3>
    <?php

// Query for Driving Stats and Yardage
$query = "SELECT * from scores WHERE d = 'yes' order by total asc"; 

$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Place</th><th>Player</th> <th>Team</th><th>Score</th><th>Points</th><th>Match</th></tr>";
// keeps getting the next row until there are no more to get
$i=1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>";
	echo $row['points'];
	echo "</td><td><CENTER>";
	echo '<a href="messagemtch.php?mtch='.$row['mtch'].'"><font color=black>'.$row['mtch'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} 
echo "</table>";
?></td>
</table>

  <?php include("footer.php"); ?>
</h1>

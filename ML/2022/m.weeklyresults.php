   <html><head>
  
  <meta name="Smith Center Mens League" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <script src="style/jquery-2.1.4.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
   </head> </html>  <?php error_reporting (E_ALL ^ E_NOTICE); ?>
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


	    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
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
      
  <table width="100%" height="377"  border="1" cellpadding="1">
              <tr>
                <th width="52%" scope="row"><font size="+2">A Player Results</font></th>
                <th width="52%" scope="row"><font size="+2">B Player Results</font></th>
              </tr>
              <tr>
                <th scope="row"><?php


// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) 
as total_1 from scores WHERE a = 'yes' AND date ='$date ' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font size=4>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
   
?>
                <div align="center"></div></th>
                <td><?php


// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) 
as total_1 from scores WHERE b = 'yes' AND date ='$date' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font size=4>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
   
?>
                  <div align="center"></div>
                <div align="center"></div></td>
              </tr>
              <tr>
                <th scope="row"><font size="+2">C Player Results
                    <p></p>
                </font></th>
                <th scope="row"><font size="+2">D Player Results
           	          </font></th>

              </tr>
              <tr>
                <th scope="row"><?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 from scores 
WHERE c = 'yes' AND date ='$date ' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font size=4>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?>
                <div align="center"></div></th>
                <td><div align="center"></div>
                <?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) 
as total_1 from scores WHERE d = 'yes' AND date ='$date ' group by id order by total asc"; 
$result = mysql_query($query) or die(mysql_error());
	
	
echo "<table border='1'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font size=4>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td></tr><CENTER>"; 
} 
echo "</table>";
?></td>
              </tr>
              <tr>
                <th scope="row"><p align="left"></p>
                <h2>TOTAL TEAM SCORES</h2></th>
                <td><h2>Team Scores This Week</h2></td>
              </tr>
              <tr>
                <th scope="row"><?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points</th><th>Rounds Played</th></tr>";
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


?></th>
                <td><?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores WHERE date ='$date' group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points</th><th>Rounds Played</th></tr>";
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


?></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td>&nbsp;</td>
              </tr>
            </table>











<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
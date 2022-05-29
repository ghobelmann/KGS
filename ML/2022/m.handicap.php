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
      
   <?php


$query = "SELECT player_1, team, avg(((((hole1 + hole2 + hole3 + hole4 + 
hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)*.8) as hc80, 
avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,  
count(player_1) as rounds FROM scores WHERE scramble <> 'yes' AND sub <> 'yes' group by player_1 order by hc80 asc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Rank</th><th>Name</th> <th>Team</th><th>Handicap</th><th>Average Score</th><th>Rounds Played</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc80'], 0);
	echo "</td><td><CENTER>"; 
	echo round ($row['score'], 2);
	echo "</td><td><CENTER>";
	echo round ($row['rounds'], 0);
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>
<?php
//Increment counter
mysql_query("UPDATE countertable SET count_handicap=count_handicap+1");

//extract count from database table
$query = "SELECT count_handicap FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_handicap']; 
	echo "</td></tr>";

} 




?>
    <h2>Subs</h2>
<?php


$query = "SELECT player_1, team, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc80, 
avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,

count(player_1) as rounds FROM scores WHERE scramble <> 'yes' AND sub = 'yes' group by player_1 order by hc80 asc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Rank</th><th>Name</th> <th>Team</th><th>Handicap</th><th>Average Score</th><th>Rounds Played</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc80'], 0);
	echo "</td><td><CENTER>"; 
	echo round ($row['score'], 2);
	echo "</td><td><CENTER>"; 
	echo round ($row['rounds'], 0);
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>






  











<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
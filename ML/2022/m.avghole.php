    <meta name="Smith Center Mens League" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <script src="style/jquery-2.1.4.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
  
  
  
  
  
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
      
    	<h2>Player of the Year Race, as of <?php echo date("M d, Y"); ?>.</h2>


   <?php

$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND a = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>A</th> <th>Player</th><th>Total</th><th>Rnd</th></tr>";
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
	echo $row['count'];
	echo "</td></tr><CENTER>"; 
	$i++;
} 

echo "</table>";


?>


			<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND b = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>B</th> <th>Player</th><th>Total</th><th>Rnd</th></tr>";
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
	echo $row['count'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>
			<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND c = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>C</th> <th>Player</th><th>Total</th><th>Rnd</th></tr>";
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
	echo $row['count'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>
			<?php


$query = "SELECT player_1, count(player_1) as count, sum(points) as points FROM scores WHERE scramble <>'yes' AND sub <> 'yes' AND d = 'yes' group by player_1 order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1' align = 'left'>";
echo "<tr> <th>D</th> <th>Player</th><th>Total</th><th>Rnd</th></tr>";
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
	echo $row['count'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>















<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
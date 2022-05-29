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

	$query = "SELECT date, avg(total) as total, count(player_1) as count FROM scores
	 WHERE date > '2009-05-18' GROUP by date"; 
	 $result = mysql_query($query) or die(mysql_error());
	 

	 
echo "<table border='1'>";
echo "<tr><th>Week Number</th> <th>Click on Date to View Weekly Results</th>
<th>Average Score</th><th>Total Scores Recorded</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result)) {

	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="weeklyresults.php?date='.$row['date'].'">'.$row['date'].'</font></a>';
	echo "</td><td><CENTER>";
	echo $row['total'];
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td></tr><CENTER>";
	$i++;
	
} 


?>







<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
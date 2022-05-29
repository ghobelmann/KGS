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


$query = "SELECT player_1, phone, email, hc from person WHERE sub = 'yes' order by hc asc;"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo '<table border="1" width = "750">';
echo '<tr> <th width="60">Name</th> <th width="75">Phone</th><th width="75">Email</th><th width="75">Avg Score</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?player_1='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['phone'];
	echo "</td><td><CENTER>"; 
	echo '<a href="mailto:'.$row['email'].'?subject=Smith Center Mens League Golf">'.$row['email'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hc'];
	echo "</td></tr>"; 
	
} 

echo "</table>";


?>
    











<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
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


<?php
// PHP Search Script
// Connect to Database


//Select Players name from form 
if(!empty($_POST['team']))
{
$name = $_POST['team'];
}

$query = "SELECT * FROM person WHERE team = '$name' ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Display table on the web page
echo "<table border='1'>";
echo "<tr> <th>Player</th> <th>Position</th><<th>Team</th><th>Phone</th><th>Email</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo $row['player_p'];
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td><td><CENTER>";
	echo $row['phone'];
	echo "</td><td><CENTER>";
	echo $row['email'];
	echo "</td></tr><CENTER>"; 
} 



	



mysql_free_result($result);

mysql_close($con);			


?>







<?php include("footer.php"); ?>
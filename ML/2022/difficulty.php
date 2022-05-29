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


$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores WHERE white = 'yes'"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Week</th><th>Hole 1</th><th>Hole 2</th> <th>Hole 3</th><th>Hole 4</th><th>Hole 5</th><th>Hole 6</th><th>Hole 7</th>
<th>Hole 8</th><th>Hole 9</th></tr>";
// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "White</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	$i++;
} 


$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores WHERE blue = 'yes'"; 
	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "Blue</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	//$i++;
} 



$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores"; 
	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "Total</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	//$i++;
} 


$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores WHERE a = 'yes'"; 
	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "A Players</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	//$i++;
} 



$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores WHERE b = 'yes'"; 
	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "B Players</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	//$i++;
} 



$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores WHERE c = 'yes'"; 
	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "C Players</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	//$i++;
} 



$query = "SELECT avg(hole1) as hole1, avg(hole2) as hole2, avg(hole3) as hole3, avg(hole4) as hole4, avg(hole5) as hole5,
avg(hole6) as hole6, avg(hole7) as hole7, avg(hole8) as hole8, avg(hole9) as hole9 from scores WHERE d = 'yes'"; 
	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

//$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo "D Players</td><td>";
	echo $row['hole1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole2'];
	echo "</td><td><CENTER>"; 
	echo $row['hole3'];
	echo "</td><td><CENTER>"; 
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>"; 
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>"; 
	echo $row['hole9'];
	echo "</td><CENTER>";
	//$i++;
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


<?php include("footer.php"); ?>







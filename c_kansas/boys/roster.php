
<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
echo "You are Logged in as  ";
echo $_SESSION['username'];
$user = $_SESSION['username'];



//INITIAL PAGE SETTINGS-----------
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Redmen Golf</title>
<meta charset="utf-8">
<link href="style/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">

  <div id="content">


<p>

<?php
$query = "SELECT team, tournament, count(player_1) as count, avg(front) as front, avg(back) as back, avg(total) as avg 
from scores WHERE user = '$user' GROUP by tournament order by date desc"; 
	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Tournament</th> <th>Number of Players</th><th>Average Front</th><th>Average Back</th><th>Average Total</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="trnyroster.php?tournament='.$row['tournament'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['count'], 2);
	echo "</td><td><CENTER>"; 
	echo round ($row['front'], 2);
	echo "</td><td><CENTER>"; 
	echo round ($row['back'], 2);
	echo "</td><td><CENTER>"; 
	echo round($row['avg'], 2);
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";
?>


</p>


</div> 
</div>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


</body>
</html>



</body>
</html>
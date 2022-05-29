<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

  </head><body>
 
 
 

<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");

//INITIAL PAGE SETTINGS-----------
?>

<?php include_once("analyticstracking.php") ?>
<div id="wrapper">

  <div id="content">
<?php


$query = "SELECT *, avg(front) as front, avg(back) as back, avg(total) as total, count(player_1) 
as count, avg(total) as avg, max(front) as maxfront, min(front) as minfront,
max(back) as maxback, min(back) as minback, max(total) as maxtotal, min(total) as mintotal, avg(total) as total
FROM scores GROUP by player_1"; 
	 
$result = mysql_query($query) or die(mysql_error());
 echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Player</th> <th>Front</th><th>Back</th><th>Total</th><th>Rounds Played</th>
<th>Avg</th><th>Front High</th><th>Front Low</th><th>Back High</th><th>Back Low</th>
<th>High Total</th><th>Low Total</th><th>Average Total</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['front'], 1);
	echo "</td><td><CENTER>";
	echo round ($row['back'], 1);
	echo "</td><td><CENTER>";
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td><td><CENTER>"; 
	echo round ($row['avg'], 1);
	echo "</td><td><CENTER>";
	echo $row['maxfront'];
	echo "</td><td><CENTER>"; 
	echo $row['minfront'];
	echo "</td><td><CENTER>";
	echo $row['maxback'];
	echo "</td><td><CENTER>";
	echo $row['minback'];
	echo "</td><td><CENTER>"; 
	echo $row['maxtotal'];
	echo "</td><td><CENTER>"; 
	echo $row['mintotal'];
	echo "</td><td><CENTER>";
	echo round ($row['total'], 1);
	echo "</td><CENTER>";
} 

echo "</table>";



?>


</p>

     <div id="footer">
</p>
</div>
</div> 

	  
	           <?php
//Increment counter
mysql_query("UPDATE countertable SET count_indstats=count_indstats+1");

//extract count from database table
$query = "SELECT count_indstats FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_indstats']; 
	echo "</td></tr>";

} 




?>  
</center>



</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


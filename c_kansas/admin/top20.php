<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 

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
include_once("headerb.php");
//include("menubar.php");

?>

<div id="wrapper">

  <div id="content">
       <div align="center" ><h1><?php echo $name  ?> Top 20 by Class </h1>
<?php


//Submit Query to MySql Database
$query = "SELECT player_1, team, jv, avg(scores.total) as avg, classification FROM scores, team WHERE team.classification = '6A'
 AND team.school = scores.team   AND `jv` <> '".yes."'  GROUP by player_1 ORDER by avg asc  LIMIT 20 ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="3" align="center"><h3>'."6A Scoring Leaders".'</h3></td></tr>
<tr><th>Team</td><th>Team</td><th>Score</th><tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h2>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
  	echo "</h2></td><td><h2><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</h2></td><td><h2><CENTER>"; 
	echo round ($row['avg'], 1);
	echo "</h2></td><CENTER>";
} 
	?> 
  </table> </td><td valign='top'>
  
  <?php


//Submit Query to MySql Database
$query = "SELECT player_1, team, jv, avg(scores.total) as avg, classification FROM scores, team WHERE team.classification = '5A' 
AND team.school = scores.team  AND `jv` <> '".yes."'  GROUP by player_1 ORDER by avg asc  LIMIT 20";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="3" align="center"><h3>'."5A Scoring Leaders".'</h3></td></tr>
<tr><th>Team</td><th>Team</td><th>Score</th><tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h2>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
  	echo "</h2></td><td><h2><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>'; 
	echo "</h2></td><td><h2><CENTER>"; 
	echo round ($row['avg'], 1);
	echo "</h2></td><CENTER>";
} 
	?> 
  </table> </td><td valign='top'>
  
    <?php


//Submit Query to MySql Database
$query = "SELECT player_1, team, jv, avg(scores.total) as avg, classification FROM scores, team WHERE team.classification = '4A' 
AND team.school = scores.team  AND `jv` <> '".yes."'  GROUP by player_1 ORDER by avg asc LIMIT 20 ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="3" align="center"><h3>'."4A Scoring Leaders".'</h3></td></tr>
<tr><th>Team</td><th>Team</td><th>Score</th><tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h2>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
  	echo "</h2></td><td><h2><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</h2></td><td><h2><CENTER>"; 
	echo round ($row['avg'], 1);
	echo "</h2></td><CENTER>";
} 
	?> 
  </table> </td><td valign='top'>
  
  
    <?php


//Submit Query to MySql Database
$query = "SELECT player_1, team, jv, avg(scores.total) as avg, classification FROM scores, team WHERE team.classification = '321A'
 AND team.school = scores.team AND `jv` <> '".yes."'   GROUP by player_1 ORDER by avg asc LIMIT 20";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="3" align="center"><h3>'."321A Scoring Leaders".'</h3></td></tr>
<tr><th>Team</td><th>Team</td><th>Score</th><tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h2>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
  	echo "</h2></td><td><h2><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</h2></td><td><h2><CENTER>"; 
	echo round ($row['avg'], 1);
	echo "</h2></td><CENTER>";
} 
	?> 
  </table> </td><td valign='top'>
           </table>
  
  
  	  
	           <?php
//Increment counter
mysql_query("UPDATE countertable SET count_top20=count_top20+1");

//extract count from database table
$query = "SELECT count_top20 FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_top20']; 
	echo "</td></tr>";

} 




?>  
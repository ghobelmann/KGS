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
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
define("IN_GOLF_STATS", TRUE);
include("databaseconnect.php");



$today = date("Y-n-j"); 


?>
<body>
<center>
<?php


//Get number of Team to Search For.
if(!empty($_POST['team']))
{
$team = $_POST['team'];
echo "<h1>Search by $team</h1>";
}
//Submit Query to MySql Database
$query = "SELECT * FROM scores WHERE team = '$team' ORDER by tournament, total ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Player Name </th> <th>Team</th><th>Tournament</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <th>Front</th> 
<th>Hole 10</th> <th>Hole 11</th> <th>Hole 12</th> <th>Hole 13</th> <th>Hole 14</th> 
<th>Hole 15</th> <th>Hole 16</th> <th>Hole 17</th> <th>Hole 18</th> <th>Back</th><th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?trny='.$row['tournament'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
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
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10'];
	echo "</td><td><CENTER>"; 
	echo $row['hole11'];
	echo "</td><td><CENTER>";
	echo $row['hole12'];
	echo "</td><td><CENTER>";
	echo $row['hole13'];
	echo "</td><td><CENTER>";
	echo $row['hole14'];
	echo "</td><td><CENTER>"; 
	echo $row['hole15'];
	echo "</td><td><CENTER>"; 
	echo $row['hole16'];
	echo "</td><td><CENTER>";
	echo $row['hole17'];
	echo "</td><td><CENTER>"; 
	echo $row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><CENTER>";
} 
	?>



<?php


//Get number of Team to Search For.
if(!empty($_POST['player']))
{
$player = $_POST['player'];
echo "<h1>Search by $player</h1>";
}
//Submit Query to MySql Database
$query = "SELECT * FROM scores WHERE player_1 = '$player' ORDER by tournament, total ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Player Name </th> <th>Team</th><th>Tournament</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <th>Front</th> 
<th>Hole 10</th> <th>Hole 11</th> <th>Hole 12</th> <th>Hole 13</th> <th>Hole 14</th> 
<th>Hole 15</th> <th>Hole 16</th> <th>Hole 17</th> <th>Hole 18</th> <th>Back</th><th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?trny='.$row['tournament'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
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
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10'];
	echo "</td><td><CENTER>"; 
	echo $row['hole11'];
	echo "</td><td><CENTER>";
	echo $row['hole12'];
	echo "</td><td><CENTER>";
	echo $row['hole13'];
	echo "</td><td><CENTER>";
	echo $row['hole14'];
	echo "</td><td><CENTER>"; 
	echo $row['hole15'];
	echo "</td><td><CENTER>"; 
	echo $row['hole16'];
	echo "</td><td><CENTER>";
	echo $row['hole17'];
	echo "</td><td><CENTER>"; 
	echo $row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><CENTER>";
} 
	?>
	
<center>
<?php


//Get number of Team to Search For.
if(!empty($_POST['tournament']))
{
$tournament = $_POST['tournament'];
echo "<h1>Search by $tournament</h1>";
}
//Submit Query to MySql Database
$query = "SELECT * FROM scores WHERE tournament = '$tournament' ORDER by tournament, total ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Player Name </th> <th>Team</th><th>Tournament</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <th>Front</th> 
<th>Hole 10</th> <th>Hole 11</th> <th>Hole 12</th> <th>Hole 13</th> <th>Hole 14</th> 
<th>Hole 15</th> <th>Hole 16</th> <th>Hole 17</th> <th>Hole 18</th> <th>Back</th><th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?trny='.$row['tournament'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
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
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10'];
	echo "</td><td><CENTER>"; 
	echo $row['hole11'];
	echo "</td><td><CENTER>";
	echo $row['hole12'];
	echo "</td><td><CENTER>";
	echo $row['hole13'];
	echo "</td><td><CENTER>";
	echo $row['hole14'];
	echo "</td><td><CENTER>"; 
	echo $row['hole15'];
	echo "</td><td><CENTER>"; 
	echo $row['hole16'];
	echo "</td><td><CENTER>";
	echo $row['hole17'];
	echo "</td><td><CENTER>"; 
	echo $row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><CENTER>";
} 
	?>
	
<?php include("footer.php"); ?>

</html>

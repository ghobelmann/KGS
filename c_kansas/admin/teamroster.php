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
include("header.php");
include("menubar.php");
?>


<div align="center" class="style1">Team Results </div>






<?php


//Get number of Team to Search For.
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
//Submit Query to MySql Database
$query = "SELECT * FROM scores WHERE team = '$team' ORDER by tournament, total ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>Player Name </th> <th>Team</th><th>Tournament</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <th>Front</th> 
<th>Hole 10</th> <th>Hole 11</th> <th>Hole 12</th> <th>Hole 13</th> <th>Hole 14</th> 
<th>Hole 15</th> <th>Hole 16</th> <th>Hole 17</th> <th>Hole 18</th> <th>Back</th><th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?trny='.$row['tournament'].'"><font color=black>'.$row['tournament'].'</font></a>';
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
	echo $row['hole1'];
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
	echo "</td><td><CENTER>";
} 
	?>
	<tr><td colspan="3">Averages</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(front) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole10) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole11) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole12) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole13) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole14) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole15) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole16) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole17) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole18) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(back) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(total) FROM scores WHERE team = '$team' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td></tr> 
</table>



<?php include("footer.php");?>





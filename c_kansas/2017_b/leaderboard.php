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
//include("header.php");
//include("menubar.php");
?><?php if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}
?>
	<div align="center" class="style1 style2">
		<?php echo $tournament  ?> Tournament Results </div>
	<?php
$query = "SELECT * FROM tournament WHERE `tournament` =  '$tournament' LIMIT 1";

$result = mysql_query($query);

$data = mysql_fetch_assoc($result);

for($i=1; $i<=18; $i++)

{

   //this stores the numbers in $h1-$h18 not an array

//$h = "h{$i}";

 //${$h} = $data['hole'.$i];

 

   //or with an array which stores the numbers like this $h[1] - $h[18]

$h[$i] = $data['hole'.$i];

}
?><?php


//Get number of Team to Search For.
if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}
//Submit Query to MySql Database
$query = "SELECT * FROM scores WHERE `tournament` = '$tournament' ORDER BY total, back, last6, last3, hole".$h[1].", hole".$h[2]."
, hole".$h[3].", hole".$h[4].", hole".$h[5].", hole".$h[6].", hole".$h[7].", hole".$h[8].", hole".$h[9]."
, hole".$h[10].", hole".$h[11].", hole".$h[12].", hole".$h[13].", hole".$h[14].", hole".$h[15].", hole".$h[16]."
, hole".$h[17].", hole".$h[18]." ASC";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>Place </th><th>Player Name </th> <th>Team</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <th>Front</th> 
<th>Hole 10</th> <th>Hole 11</th> <th>Hole 12</th> <th>Hole 13</th> <th>Hole 14</th> 
<th>Hole 15</th> <th>Hole 16</th> <th>Hole 17</th> <th>Hole 18</th> <th>Total</th><th>Back</th><th>Last 6</th><th>Last 3</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'"><font color=black>'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'"><font color=black>'.$row['team'].'</font></a>';
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
echo "</td><td><strong><CENTER>"; 
	echo $row['front'];
echo "</td></strong><td><CENTER>"; 
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
echo "</td></strong><td><strong><CENTER>"; 
	echo $row['total'];
echo "</td><td><strong><CENTER>"; 
	echo $row['back'];
echo "</td><td><strong><CENTER>"; 
	echo $row['last6'];
echo "</td><td><strong><CENTER>"; 
	echo $row['last3'];
echo "</td></strong>"; 
	$i++;
} 


?>
	
	<?php include("footer.php");?>
</body>







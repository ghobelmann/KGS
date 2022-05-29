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
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headerb.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 

<?php
//INITIAL PAGE SETTINGS-----------



if(!empty($_GET['card']))
{
$card = $_GET['card'];
}

        
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

$sql = "SELECT max(id) as id from tournament WHERE uid = '$userid' "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
}

 //echo $trny;
?>


<?php
//Submit Query to MySql Database


$sql = "SELECT scores.card, scores.tid, scores.uid, max(tournament.id) as id 
FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$trny' = tournament.id 
AND 
scores.uid = '$userid' 
GROUP by scores.card 
ORDER by tournament.id DESC, scores.card ASC";


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());
//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'  >";
echo '<tr><th colspan="30">Cards: Click on the card you want to edit.</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<td><center>";
	echo '<a href="card36.php?card='.$row['card'].'">'.$row['card'].'</font></a>';
	echo "</td>"; 
	
} 
echo "</table>";



 ?>
 
 <?php
//Submit Query to MySql Database
$sql = "SELECT scores.tid, scores.uid, max(tournament.id) as id 
from scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$trny' = tournament.id AND scores.uid = '$userid' GROUP by scores.tid ORDER by scores.tmid ASC, scores.pid ASC";
$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());
//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'  >";
echo '<tr><th colspan="30">Click here for all players in the tournament.</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<td><center>";
	echo '<a href="card_all.php?tid='.$row['tid'].'">'.$row['tid'].'</font></a>';
	echo "</td>"; 
	
} 
echo "</table>";



 ?>


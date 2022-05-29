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

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 

<div id="wrapper">

  <div id="content">

<h2>KansasGolfScores Managers Page</h2>



  <?php

   $query = "SELECT id, date, tournament from tournament WHERE uid = '$userid'"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());


echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr><th><center>Edit Name or Date</th> <th><center>Tournament</th><th>Date</th>
<th><center>Edit Yardage</th><th><center>Edit Par</th><th><center>Print ScoreCards</th>
<th><center>Delete</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><Center>";
	echo '<a href="edittrny.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>"; 
	echo $row['tournament'];
	echo "</td><td><CENTER>"; 
  echo $row['date'];
  echo "</td><td><CENTER>";
  echo '<a href="edityards.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>";
  echo '<a href="editpar.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>"; 
    echo '<a href="scorecards.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="deletewarntrny.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";
?>






</body>
</html>
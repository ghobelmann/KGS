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


<?php
      $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

                  echo $userid;
//Get number of Team to Search For.


//Submit Query to MySql Database
$sql = "SELECT scores.uid, scores.tid, tournament.id, 
tournament.tournament, tournament.date from scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE scores.uid = '$userid'
GROUP by tid order by tid desc";
    $result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());



//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th><center>Tournament Name</center></th>
<th><center>Tournament ID</center></th>
<th><center>Tournament Date</center></th></tr>";

// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
  // Print out the contents of each row into a table

echo "<tr><td>"; 
echo '<a href="MasterTrnyCard.php?tid= '.$row['tid'].'">'.$row['tournament'].'</font></a>';
echo "</td><td>"; 
echo '<a href="MasterTrnyCard.php?tid= '.$row['tid'].'">'.$row['tid'].'</font></a>';
echo "</td><td>"; 
echo $row['date'];
echo "</center></td></tr>"; 



} 
?>




</body>

</html>

   
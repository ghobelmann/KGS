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
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");

//INITIAL PAGE SETTINGS-----------
?>

<div id="wrapper">

  <div id="content">
<?php

$user = $_SESSION['username'];
echo $user;

if ($user === 'grhobe') {

$query = "SELECT id, date, user, tournament from tournament"; 
	 
$result = mysql_query($query) or die(mysql_error());


echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr><th>Edit Name or Date</th> <th>Tournament</th><th>Date</th><th>User</th><th>Edit Handicap Holes</th>
<th>Edit Yardage</th><th>Edit Par</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><Center>";
	echo '<a href="edittrny.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td>"; 
	echo $row['tournament'];
	echo "</td><td><CENTER>"; 
  echo $row['date'];
  echo "</td><td><CENTER>"; 
  echo $row['user'];
  echo "</td><td><CENTER>";
  echo '<a href="edithc.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>";
  echo '<a href="edityards.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>";
  echo '<a href="editpar.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="deletewarntrny.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";

}else{

   $query = "SELECT id, date, tournament from tournament WHERE user = '$_SESSION[username]'"; 
	 
$result = mysql_query($query) or die(mysql_error());


echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr><th>Edit Name or Date</th> <th>Tournament</th><th>Date</th><th>Edit Handicap Holes</th>
<th>Edit Yardage</th><th>Edit Par</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><Center>";
	echo '<a href="edittrny.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td>"; 
	echo $row['tournament'];
	echo "</td><td><CENTER>"; 
  echo $row['date'];
  echo "</td><td><CENTER>";
  echo '<a href="edithc.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>";
  echo '<a href="edityards.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>";
  echo '<a href="editpar.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="deletewarntrny.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";
}
?></div>


</p>

     <div id="footer">
</p>
</div>
</center>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


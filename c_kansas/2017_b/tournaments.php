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
include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php");
?>


                   
  <h1><font color="white"> Tournament Results</font> </h1>    
<?php


//Get number of Team to Search For.
if(!empty($_GET['id']))
{
$trny = $_GET['id'];
}
//Submit Query to MySql Database
$query = "SELECT * from tournament
order by id desc";
$result = mysqli_query($conn,$query)
or die ('Error: Selecting from Tournament--' . mysqli_error());

//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th> </th><th>Live Scoring</th> <th>Date</th><th>4 Man 18 Hole Team Results</th>
<th>Hole by Hole Results</th><th>Print Results</th><th>Wall Sheets</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) 


  {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo $row['tournament'];
	echo "</td><td><CENTER>"; 
	echo $row['date'];
	echo "</td><td>"; 
	echo '<a href="teamresults4.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>";
	echo '<a href="holebyholetrny.php?tid='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>"; 	
	echo '<a href="teamresultsprint.php?tid='.$row['id'].'">'.$row['tournament'].'</font></a>';
  	echo "</td><td>"; 	
	echo '<a href="wallpages.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td>"; 
	$i++;
} 


?>      

</center>

</body>
</html>


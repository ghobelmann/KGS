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

  session_start();

//INITIAL PAGE SETTINGS-----------



?>




  <div id="content">

  

  <h1><font color="white"> Tournament Results</font> </h1>    

<?php





//Get number of Team to Search For.

if(!empty($_GET['trny']))

{

$trny = $_GET['trny'];

}

//Submit Query to MySql Database

$query = "SELECT * from tournament order by date desc";

$result = mysql_query($query)

or die ('Error in Query Try Again:--' . mysql_error());



//Print table to the web page

echo "<div class='CSSTableGenerator' >";

echo "<table border='1'>";

echo "<tr> <th> </th><th>Live Scoring</th> <th>Date</th></tr>";

// keeps getting the next row until there are no more to get

$i = 1;

while($row = mysql_fetch_array( $result )) 





  {

	// Print out the contents of each row into a table

	

	echo "<tr><td>"; 

	echo $i.'</td><td>';

	echo '<a href="teamresultsall.php?tournament='.$row['tournament'].'">'.$row['tournament'].'</font></a>';

	echo "</td><td><CENTER>"; 

	echo $row['date'];

	echo "</td>"; 

	$i++;

} 





?>      



	  

	           <?php

//Increment counter

mysql_query("UPDATE countertable SET count_tournaments=count_tournaments+1");



//extract count from database table

$query = "SELECT count_tournaments FROM countertable";



$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";

echo "<tr> <th>This page has been visited.</th></tr>";

// keeps getting the next row until there are no more to get



while($row = mysql_fetch_array( $result )) 

{

	// Print out the contents of each row into a table

	echo "<tr><td><center>";

	echo $row['count_tournaments']; 

	echo "</td></tr>";



} 









?>  

</div>



</center



</body>

</html>




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
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");
//INITIAL PAGE SETTINGS-----------


$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";

if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}




?>


<div id="wrapper">

     


                               

     <div id="footer">
     


</div>
</div> 

     
     	  
	           <?php
//Increment counter
mysql_query("UPDATE countertable SET count_index=count_index+1");

//extract count from database table
$query = "SELECT count_index FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_index']; 
	echo "</td></tr>";

} 




?>  

</body>
</html>




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
 ?> 

<div id="wrapper">


</div>
  <div id="content">


<h2>Welcome, Please select your Classification to create your account</h2>
	 <br>

	 <a href="signup6A.php"><h2>Class 6A</h2></a>
	  <a href="signup5A.php"><h2>Class 5A</h2></a>
	   <a href="signup4A.php"><h2>Class 4A</h2></a>
	    <a href="signup321A.php"><h2>Class 321A</h2></a>

</div> 
</div>
</body>
</html>

                                	  
	           <?php
//Increment counter
mysql_query("UPDATE countertable SET count_signup=count_signup+1");

//extract count from database table
$query = "SELECT count_signup FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_signup']; 
	echo "</td></tr>";

} 




?>  

<p><?php include("footer.php"); ?>&nbsp;</p>


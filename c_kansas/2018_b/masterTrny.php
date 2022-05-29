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
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");




 ?> 

<div id="wrapper">

  <div id="content">    
  
  <p>
  
 <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      
 ?>   

<body>

<center>



<?php





//Get number of Team to Search For.

if(!empty($_GET['tid']))

{

$trny = $_GET['tid'];

}

//Submit Query to MySql Database

$query = "SELECT tid, uid from scores GROUP by tid order by tid desc";

$result = mysqli_query($conn,$query)

or die ('Error in Query Try Again:--' . mysqli_error());



//Print table to the web page

echo "<div class='CSSTableGenerator' >";

echo "<table border='1'>";

echo "<tr> <th><center>Date</center></th><th><center>Results</center></th><th>User</th></tr>";

// keeps getting the next row until there are no more to get

$i = 1;

while($row = mysqli_fetch_array( $result )) {

	// Print out the contents of each row into a table

	

	echo "<tr><td>"; 


	echo '<a href="MasterTrnyRoster.php?tid='.$row['tid'].'">'.$row['tid'].'</font></a></td><td>';

  	echo $row['uid'];

	echo "</td><td><center>"; 

	echo "</center></td></tr>"; 



} 





?>

</DIV>





</p>



</center>

</body>

</html>

   
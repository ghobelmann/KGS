

<!DOCTYPE html>

<html lang="en">

  <head>


	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="High School Golf Results">
    <meta name="author" content="Greg Hobelmann">




<?php
require_once "config.php";
include("databaseconnect.php");
        
//include("header.php");
//include("menubar.php");


if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>
  


    <title>KansasGolfScores.com</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
        <link href="w3.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
    <style>
    body {background-color: black;}
  #grad {
  background: linear-gradient(white, gray);
}
</style>




</head>
<body>
       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">
          <h4 class="card-header bg-dark">  
<center>       
<a href="index.php">Home</a></h4>
</center> 
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>


      <h1 class="my-4"><center>Smith Center Mens League 2020
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
      
            

   <?php	

	$query = "SELECT date, avg(total) as total, count(player_1) as count FROM scores
	 WHERE date > '2009-05-18' GROUP by date"; 
	 $result = mysqli_query($conn, $query) or die(mysqli_error());
	 

	 
echo "<table class='table'>";
echo "<tr><th>Week</th> <th>Date</th>
<th>Average</th><th>Total Scores </th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result)) {

	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td>';
	echo '<a href="weeklyresults.php?date='.$row['date'].'">'.$row['date'].'</font></a>';
	echo "</td><td>";
	echo $row['total'];
	echo "</td><td>";
	echo $row['count'];
	echo "</td></tr>";
	$i++;
	
} 


?>           




  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






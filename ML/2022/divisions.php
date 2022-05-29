

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


<?php



include_once("databaseconnect.php");

?>   


</head>
<body>
       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div class="container">
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
       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">

      <h1 class="my-4"><center>Smith Center Mens League 2020
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
                   	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


  <h3>A Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE a = 'yes' AND d != 'yes'
 AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td>"; 
	echo round ($row['hc'], 0);
	echo "</td><td>";
	echo round($row['avg'], 1);		
	echo "</td></tr>"; 
} 
echo "</table>";
?>

<h3 >B Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE b = 'yes' AND d != 'yes'
 AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td>"; 
	echo round ($row['hc'], 0);
	echo "</td><td>";
	echo round($row['avg'], 1);		
	echo "</td></tr>"; 
} 
echo "</table>";
?><h3>C Player Statistics</h3>
      <?php

// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as avg, 
min(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as min, 
max(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as max, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc, 
avg(points) as avgpoints
 from scores WHERE c = 'yes' AND d != 'yes'
 AND sub <> 'yes' group by player_1 order by avg asc"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>HC</th><th>Avg</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td>"; 
	echo round ($row['hc'], 0);
	echo "</td><td>";
	echo round($row['avg'], 1);		
	echo "</td></tr>"; 
} 
echo "</table>";
?>





</td>









































</div>
</body>











                       




  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






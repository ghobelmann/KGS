

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
  background: linear-gradient(white, white);
}
</style>



<?php



include_once("databaseconnect.php");

?>   


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
      
        


  <th scope="row"><font size="+2">A Player Results</font>

<?php  
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 from scores WHERE a = 'yes' AND d != 'yes' 
AND date = '$date' group by player_1 order by total asc"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</a>';
	echo "</td><td>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</a>';
	echo "</td><td>"; 
	echo $row['total_1'];
	echo "</td></tr>"; 
} 
echo "</table>";
   
?>
  <th scope="row"><font size="+2">B Player Results</font>
            <?php


// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 from scores WHERE b = 'yes' AND d != 'yes' 
AND date = '$date' group by player_1 order by total asc"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</a>';
	echo "</td><td>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</a>';
	echo "</td><td>"; 
	echo $row['total_1'];
	echo "</td></tr>"; 
} 
echo "</table>";
   
?>
             
     <th scope="row"><font size="+2">C Player Results</font>
                    <p></p>
                </font></th>
          
              </tr>
              <tr>
                <th scope="row"><?php

// Query for Driving Stats and Yardage
// Query for Driving Stats and Yardage
$query = "SELECT player_1, team, points, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 from scores WHERE c = 'yes' 
AND d != 'yes' AND date = '$date' group by player_1 order by total asc"; 
$result = mysqli_query($conn, $query) or die(mysqli_error());
	
	
echo "<table class='table'>";
//Table setup for Driving info
echo "<tr> <th>Player</th> <th>Team</th><th>Today</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</a>';
	echo "</td><td>";
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</a>';
	echo "</td><td>"; 
	echo $row['total_1'];
	echo "</td></tr>"; 
} 
echo "</table>";

echo $date;
?>
          
          
     






    


  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






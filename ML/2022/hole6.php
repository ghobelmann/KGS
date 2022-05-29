

<!DOCTYPE html>

<html lang="en">

  <head>


	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="High School Golf Results">
    <meta name="author" content="Greg Hobelmann">




<?php
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}        
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
       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">

      <h1 class="my-4"><center>Smith Center Mens League 2020
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
      
                       
        

<th><a href="hole1.php">Hole 1</a>
<th><a href="hole2.php">Hole 2</a>
<th><a href="hole3.php">Hole 3</a>
<th><a href="hole4.php">Hole 4</a>
<th><a href="hole5.php">Hole 5</a>
<th><a href="hole6.php">Hole 6</a>
<th><a href="hole7.php">Hole 7</a>
<th><a href="hole8.php">Hole 8</a>
<th><a href="hole9.php">Hole 9</a>


<?php


$query = "SELECT player_1, team, avg(hole6) as hole6 FROM scores WHERE scramble <> 'yes'  and sub <> 'yes' group by player_1 order by hole6 asc"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo '<table class="table">';
echo '<tr> <th>Place</th><th>Player</th> <th>Avg Hole 6</th><th>Team</th></tr>';
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hole6'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>



  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






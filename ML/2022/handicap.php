

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

       
	    <!-- end header slogan -->
  <!-- Page Content -->
    <div id="grad" class="container">

      <h1 class="my-4"><center>Smith Center Mens League Player Ranking
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
           <h2>Members</h2>
    
     <?php


$query = "SELECT player_1, team, avg(((((hole1 + hole2 + hole3 + hole4 + 
hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)*.8) as hc80, 
avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,  
count(player_1) as rounds FROM scores WHERE scramble <> 'yes' AND sub <> 'yes' 
AND d != 'yes' group by player_1 order by hc80 asc"; 
	 
$result = mysqli_query($conn, $query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Rank</th><th>Name</th> <th>Team</th><th>Handicap</th><th>Average Score</th><th>Rounds Played</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc80'], 0);
	echo "</td><td><CENTER>"; 
	echo round ($row['score'], 2);
	echo "</td><td><CENTER>";
	echo round ($row['rounds'], 0);
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>
    <h2>Subs</h2>
<?php


$query = "SELECT player_1, team, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc80, 
avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,

count(player_1) as rounds FROM scores WHERE scramble <> 'yes' AND sub = 'yes' group by player_1 order by hc80 asc"; 
	 
$result = mysqli_query($conn, $query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Rank</th><th>Name</th> <th>Team</th><th>Handicap</th><th>Average Score</th><th>Rounds Played</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['hc80'], 0);
	echo "</td><td><CENTER>"; 
	echo round ($row['score'], 2);
	echo "</td><td><CENTER>"; 
	echo round ($row['rounds'], 0);
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>




                   




  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






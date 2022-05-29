<!DOCTYPE html>

<html lang="en">
	<!-- Font Awesome -->

  <!-- Page Content    -->
  <div class="container">
  
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="High School Golf Results">
    <meta name="author" content="Greg Hobelmann">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" rel="stylesheet">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SC MensLeague 2022</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://docs.google.com/spreadsheets/d/1SIOSTTPmBMfho_Pizs7TKIaiCZ7t8PbJ5tDWPwf8zxk/edit#gid=767767524">Schedule</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Stats
					
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="divisions.php">Players</a>
          <a class="dropdown-item" href="datesearch.php">Results</a>
		  <a class="dropdown-item" href="teamscores.php">Totals</a>
		  <a class="dropdown-item" href="avghole.php">Division Leaders</a>
		  <a class="dropdown-item" href="handicap.php">Handicaps</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php">Login</a>
        </div>
      </li>

    </ul>
<!--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<link href="bootstrap.min.css" rel="stylesheet">
        <link href="w3.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
    <style>
    body {background-color: white;}

</style>

<?php



include("databaseconnect.php"); 

?>   

<body>
       
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
    <div>
 



       <!--     <h4 class="card-header">Optimized for Viewing on your Phone</h4>   
         

        <br>  <br> <br> <br> <br>     
                                       
                         -->
              
						<div class="container-fluid" >

				 <div class="row">
				 <div class="col-lg-12 col-xs-12 mb-8">
      
    
                         
                


 

             </div>
				</div> 
				<h4 class="card-header">Handicaps</h4>   
				<div class="row">
				
				<div class="col-lg-12 col-xs-12 mb-8">
			  <?php


$query = "SELECT player_1, team, avg(((((hole1 + hole2 + hole3 + hole4 + 
hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)*.8) as hc80, 
avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,  
count(player_1) as rounds FROM scores WHERE scramble <> 'yes' AND sub <> 'yes'
AND d != 'yes' group by player_1 order by hc80 asc"; 
	 
$result = mysqli_query($conn, $query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Rank</th><th>Name</th> <th>Handicap</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>"; 
	echo $i.'</td><td>';
	echo '<h4><a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><h4>"; 
	echo round ($row['hc80'], 0);
	echo "</td>";
	$i++;
} 

echo "</table>";


?>

    <h4>Subs</h2>
<?php


$query = "SELECT player_1, team, 
avg(((((hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) - 35.4) * 113) / 122.5)* .8) as hc80, 
avg(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,

count(player_1) as rounds FROM scores WHERE scramble <> 'yes' AND sub = 'yes' group by player_1 order by hc80 asc"; 
	 
$result = mysqli_query($query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Rank</th><th>Name</th><th>Handicap</th></tr>";
// keeps getting the next row until there are no more to get

$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>"; 
	echo $i.'</td><td>';
	echo '<h4><a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><h4>"; 
	echo round ($row['hc80'], 0);
	echo "</td>";
	$i++;
} 

echo "</table>";


?></div></div>
        
        
        
              <!-- Marketing Icons Section -->

							<div class="row">
							<div class="col-lg-12 col-xs-4 mb-8">

                <h4 class="card-header"><center>A Team Scores</h4> 
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,
 team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND a = 'yes' AND d = 'yes' AND points > 0 ORDER by points desc, score asc "; 	 
	 
$result = mysqli_query($conn, $query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Name</th> <th>Team</th><th>Net Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
   	echo "</td><td><h4>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><h4>"; 
	echo $row['score'];
	echo "</td><td><h4>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </p>
              <h4 class="card-header"><center>B Team Scores</h4> 
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND b = 'yes'  AND d = 'yes' ORDER by points desc, score asc "; 	 
	 
$result = mysqli_query($conn, $query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Name</th> <th>Team</th><th>Net Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
       	echo "</td><td><h4>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><h4>"; 
	echo $row['score'];
	echo "</td><td><h4>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </p>
               <h4 class="card-header"><center>C Team Scores</h4> 
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score, 
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND c = 'yes'  AND d = 'yes' ORDER by points desc, score asc"; 	 
	 
$result = mysqli_query($conn, $query) or die(mysqli_error());

echo "<table class='table'>";
echo "<tr> <th>Name</th> <th>Team</th><th>Net Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
       	echo "</td><td><h4>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><h4>"; 
	echo $row['score'];
	echo "</td><td><h4>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </p>
           
   

</div></div>

















<br>
	  


                
                

<div class="col-lg-12 col-xs-4 mb-8">
              
       
                </p>                <p class="style5">&nbsp; </p>
                <h4 class="card-header"><center>Scoring Average by Division</h4> 
                <div align="left">
<?php	
	
	
	
	//A Scoring Average



	$query = "SELECT avg(total) as total_a FROM scores WHERE `a` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysqli_query($conn, $query) or die(mysqli_error());
echo "<table class='table'>";
echo "<tr> <th>A Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>"; 
	echo round($row['total_a'], 1);
	echo "</td>";
} 
echo "</table>";

?>
<?php	
	
	
	
	//BScoring Average



	$query = "SELECT avg(total) as total_b FROM scores WHERE `b` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysqli_query($conn, $query) or die(mysqli_error());
echo "<table class='table'>";
echo "<tr> <th>B Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>";  
	echo round($row['total_b'], 1);
	echo "</td>";
} 
echo "</table>";

?>


<?php	
	
	
	
	//C Scoring Average



	$query = "SELECT avg(total) as total_c FROM scores WHERE `c` = 'yes' and DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by `a` order by points desc"; 

$result = mysqli_query($conn, $query) or die(mysqli_error());
echo "<table class='table'>";
echo "<tr> <th>C Scoring Average</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><h4>";  
	echo round($row['total_c'], 1);
	echo "</td>";
} 
echo "</table>";

?>

  </p>
       
</div>        </div></div></div>
       

	
	
	
	

	
  </body>






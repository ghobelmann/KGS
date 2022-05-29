<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

  </head><body>
 
 
 
 
<?php
include_once("databaseconnect.php");
//include_once("analyticstracking.php");
?>

       <div class="container">
      <h1 class="mt-4 mb-3">Tournaments
        <small>2018</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"></li>
      </ol>
<?php


//Get number of Team to Search For.
if(!empty($_GET['id']))
{
$trny = $_GET['id'];
}
//Submit Query to MySql Database
$query = "SELECT * from tournament
order by date desc";
$result = mysqli_query($conn,$query)
or die ('Error: Selecting from Tournament--' . mysqli_error());

//Print table to the web page
echo "<table class='table'>";
echo "<tr><th>Count</th> <th>Live Scoring </th><th>Date</th><th>Results</th>
<th>Hole by Hole Results</th><th>Wall Sheets</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) 


  {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="teamresults.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['date'];
	echo "</td><td>"; 
	echo '<a href="tourneyResults.php?tid='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>";
	echo '<a href="TourneybyHoles.php?tid='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>"; 	
	echo '<a href="wallpages.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td>"; 
	$i++;
} 


?>      
     </div>
</center>

</body>
</html>


<!DOCTYPE html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tournaments</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="global_style/style/bootstrap.min.css">    
  <script src="global_style/js/jquery-2.1.4.min.js"></script>
  <script src="global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 
<?php
include_once("dbconnectg.php");
//include_once("analyticstracking.php");
?>

       <div class="container">
      <h1 class="mt-4 mb-3">Tournaments
      
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
	echo '<a href="teamresultsg.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['date'];
	echo "</td><td>"; 
	echo '<a href="tourneyResultsg.php?tid='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>";
	echo '<a href="TourneybyHolesg.php?tid='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>"; 	
	echo '<a href="wallpagesg.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td>"; 
	$i++;
} 


?>      
     </div>
</center>

</body>
</html>


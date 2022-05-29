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

//include_once("common.php");
include_once("headera.php");
include_once("databaseconnect.php");
?>

</head>
<center>
<body>
 
       <table style="width:auto" align="center" border="1">
    

  <tr>
 
  </tr>

</table>
     

         
              
     
<?php

if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Submit Query to MySql Database
$sql = "SELECT scores.tid, tournament.id, tournament.tournament, tournament.date, 
count(scores.pid) as count, avg(scores.total) as average,
 min(scores.total) as winning from scores INNER JOIN `tournament` 
 ON scores.tid = tournament.id 
 WHERE `dq` != 'DQ'   AND `dq` != 'WD'
 GROUP by scores.tid
ORDER by tournament.date desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th><center>Date</center></th><th><center>Results</center></th> <th><center>9 Hole Results</center></th>
<th><center>Number of Golfers</center></th><th><center>Average Score</center></th>
<th><center>Winning Score</center></th><th>Live Scoring Holes Played</th><th>Live Scoring All Golfers</th><th>Hole by Hole</th><></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
 while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['date'];
	echo "</td><td><center>"; 
	echo '<a href="teamresults4.php?tid='.$row['tid'].'">'.$row['tournament'].'</font></a>';
	echo "</center></td><td><center>"; 
  	echo '<a href="messagetrny9.php?tid='.$row['tid'].'">'.$row['tournament'].'</font></a>';
	echo "</center></td><td><center>"; 
	echo $row['count'];
	echo "</center></td><td><center>"; 
	echo round ($row['average'], 1);
	echo "</center></td><td><center>"; 
	echo $row['winning'];
  	echo "</td><td><center>"; 
	echo '<a href="teamresults.php?tid='.$row['tid'].'">'.$row['tournament'].'</font></a>';
    	echo "</td><td><center>"; 
	echo '<a href="teamresultsall.php?tid='.$row['tid'].'">'.$row['tournament'].'</font></a>';
      	echo "</td><td><center>"; 
	echo '<a href="holebyholetrny.php?tid='.$row['tid'].'">'.$row['tournament'].'</font></a>';
	echo "</center></td></tr>"; 
	
} echo "</table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
	</center>

  </body>


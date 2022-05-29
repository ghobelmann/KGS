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


include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 


<body>

<div id="wrapper">

  <div id="content" align="center">
  

 <?php

//Get number of Name to Search For.
if(!empty($_GET['tmid']))
{
$tmid = $_GET['tmid'];
}
?> 


<?php
  $sql = "SELECT tmid, school FROM team WHERE $tmid = tmid";
    $result = $conn->query($sql);
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div align='center' ><h1><font color ='white'> Team Results for " . $row["school"]. "</h1></font> <br>";
    }

?>  
   
<?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *, avg(total) as total, max(total) as max,
min(total) as min, count(total) as count, avg((total) - 71.1) as hc FROM scores
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id
WHERE scores.tmid = $tmid
GROUP by scores.pid";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr> <th>Player</th> <th>Avg Score</th><th>High Score</th><th>Low Score</th><th>Rounds Played</th><th>Strokes Over Par</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>"; 
	echo $row['min'];
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td><td><CENTER>";  
	echo round ($row['hc'], 1);
	echo "</td></tr><CENTER>"; 
	
} 

echo "</table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>



<?php

  //mysqli #1

$sql = "SELECT scores.pid, scores.tmid, scores.tid, scores.front, scores.back, scores.total,
roster.pid, roster.player_1, team.school, team.tmid, 
tournament.id, tournament.tournament FROM scores 
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT join tournament on scores.tid = tournament.id 
WHERE team.tmid = $tmid";
 //mysqli #2     
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

//Print table to the web page
echo "<div class='CSSTableGenerator' >";   
echo "<table border='1'>";
echo "<tr> <th>Player Name </th><th>Tournament</th> <th>Front</th> 
 <th>Back</th><th>Total</th> </tr>";
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	echo "<tr><td>"; 
	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?tid='.$row['tid'].'">'.$row['tournament'].'</a>';
	echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>";
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td><CENTER>"; 
	
} 

echo "</table>";

} 
 

  //msquli#4
 $conn->close();


?>





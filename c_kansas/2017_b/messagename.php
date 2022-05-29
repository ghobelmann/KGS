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

    

<?php

//Get number of Name to Search For.
if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}
?>    



<body>
<div id="wrapper">

  <div id="content">
  
<?php
  $sql = "SELECT pid, player_1 FROM roster WHERE $pid = pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div align='center' ><h1><font color ='white'> Tournament Results " . $row["player_1"]. "</h1></font> <br>";
    }
} else {
    echo "0 results";
}
?>



  <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM scores 
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id 
WHERE scores.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Trny </th><th>Player Name </th> <th>Team</th><th>Tournament</th> <th>Front</th> 
<th>Back</th><th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?tid='.$row['tid'].'">'.$row['tournament'].'</a>';
	echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>";
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td><CENTER>"; 
	$i++;
} 
} else {
    echo "0 results";
}
//msquli#4
 $conn->close();

?> 







</center>

    </div>
</div>

  </div>








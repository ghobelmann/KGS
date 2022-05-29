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
 
 

  <script language="JavaScript" type="text/javascript"> 
<!--//
function PopWindow(url, win) 
{ 
   var ptr = window.open(url, win,
      'width=450,height=350,top=0,left=0');
   return false;
}
//-->
</script>


</head><body>	 
 
 
    <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 


<?php

    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}


$sql = "SELECT * FROM tournament WHERE id = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tname = $row["tournament"];
    }
} else {
    echo "0 results";
}



$sql = "SELECT * FROM par WHERE course = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $h1 = $row["h1"];
        $h2 = $row["h2"];
        $h3 = $row["h3"];
        $h4 = $row["h4"];
        $h5 = $row["h5"];
        $h6 = $row["h6"];
        $h7 = $row["h7"];
        $h8 = $row["h8"];
        $h9 = $row["h9"];
        $h10 = $row["h10"];
        $h11 = $row["h11"];
        $h12 = $row["h12"];
        $h13 = $row["h13"];
        $h14 = $row["h14"];
        $h15 = $row["h15"];
        $h16 = $row["h16"];
        $h17 = $row["h17"];
        $h18 = $row["h18"];
    }
    
    echo $h1;
} else {
    echo "0 results";
}
?>
 

<center>

<div align="center" ><?php echo $tname;  ?> Tournament Results.





     <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
 }
 
 //Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;
  $sql = "SELECT * from tournament WHERE `id` = '2";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
          echo "<div class='responsive-table' >";
          echo "<table border='1'>";
while($row = mysqli_fetch_array( $result )) {

         } 
       
    $sql = "SELECT scores.pid, scores.tmid, scores.hole1, scores.hole2, 
    scores.hole3, scores.hole4, scores.hole5, scores.hole6, scores.hole7, scores.hole8,
  scores.hole9, scores.hole10, scores.hole11, scores.hole12, scores.hole13, 
  scores.hole14, scores.hole15, scores.hole16, scores.hole17, 
  scores.hole18, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = 2";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>";  
echo "<tr> <th>Place </th><th s>Player Name </th> <th>Team</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <b><th>Front</th> </b>
<th>Hole 10</th> <th>Hole 11</th> <th>Hole 12</th> <th>Hole 13</th> <th>Hole 14</th> 
<th>Hole 15</th> <th>Hole 16</th> <th>Hole 17</th> <th>Hole 18</th> <b><th>Back</th><th>Total</th><th>Last 6</th><th>Last3</th></b> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i;
  	echo "</td><td>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['tmid'].'">'.$row['abv'].'</font></a>';
switch($row['hole1']-$h1) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole1']."</td></n>"; 
switch($row['hole2']-$h2) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole2']."</td></n>"; 
switch($row['hole3']-$h3) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole3']."</td></n>"; 
switch($row['hole4']-$h4) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole4']."</td></n>"; 
echo "</td><CENTER>";
switch($row['hole5']-$h5) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole5']."</td></n>"; 

switch($row['hole6']-$h6) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole6']."</td></n>"; 
switch($row['hole7']-$h7) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole7']."</td></n>"; 
switch($row['hole8']-$h8) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole8']."</td></n>"; 
switch($row['hole9']-$h9) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td><CENTER><b><font color='red'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 
switch($row['hole10']-$h10) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole10']."</td></n>"; 
switch($row['hole11']-$h11) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole11']."</td></n>"; 
switch($row['hole12']-$h12) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole12']."</td></n>"; 
switch($row['hole13']-$h13) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole13']."</td></n>"; 
switch($row['hole14']-$h14) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole14']."</td></n>"; 
switch($row['hole15']-$h15) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole15']."</td></n>"; 
switch($row['hole16']-$h16) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole16']."</td></n>"; 
switch($row['hole17']-$h17) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole17']."</td></n>"; 
switch($row['hole18']-$h18) { 
     case "-2": 
          $class = 'eagle'; 
          break; 
     case '-1': 
          $class = 'birdie'; 
          break; 
     case '0': 
          $class = 'par'; 
          break; 
      case '1': 
          $class = 'bogie'; 
          break; 
     case '2': 
          $class = 'doublebogie'; 
          break; 
     case '3': 
          $class = 'triplebogie'; 
          break; 
     case '4': 
          $class = 'other'; 
          break;
         case '5': 
          $class = 'other'; 
          break;
             case '6': 
          $class = 'other'; 
          break;     
               case '7': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole18']."</td></n>"; 
  
  echo "<td><b><font color='red'><CENTER>";
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><b><u><CENTER><font color='blue'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
  	echo "</b></td><td><CENTER>"; 
	echo $row['last6'];
  	echo "</td><td><CENTER>"; 
	echo $row['last3'];
	echo "</td><CENTER>"; 
	$i++;
}  

         
?>



</div>
<p>&nbsp;</p>
</center>
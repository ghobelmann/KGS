<?php
           if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}

include_once("databaseconnect.php");
include_once("analyticstracking.php"); 

  $output = "http://admin.kansasgolfscores.com/c_kansas/2018_b/hbyhTourney.php?id=$trny";
    
               
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
            }
       
       $sql = "SELECT * FROM tournament WHERE id = $trny";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tname = $row["tournament"];
        $yardage = $row["yardage"];
        $par = $row["par"];
        $course = $row["course"];
        $comments = $row["comments"];
        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
        $btyb = $row["btyb"];
    }
    
    
} 
  

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Golf Team Rankings">
    <meta name="author" content="Greg Hobelmann">

    <title>Team Rankings</title>

    <!-- Bootstrap core CSS -->  
    <link href="../../global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../global_style/vendor/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    </nav>

    <!-- Page Content -->
    <div class="container">


      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php  echo $tname;  ?>
        <small></small>
      </h1>


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
       
   
      <br><h3>
 <br>Brought to You By : <?php echo $btyb; ?>
<br>Yardage : <?php echo $yardage;  ?>          Par : <?php echo $par;  ?>
<br>Slope : <?php echo $slope;  ?> Rating : <?php echo $rating;  ?>
<br>Course : <?php echo $course;  ?>  </h3>
                  <li class="mx-auto" >
           <?php   echo "<img src='../../global_style/vendor/QR/php/qr_img.php?d=$output'>";   ?>

</p>    </li>  </ol> </li>

 
    <!-- /.container -->
    
    
      

                    <?php


    if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}





     

$sql = "SELECT * FROM par WHERE course = $trny";
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
        $hfront = $row["front"];
        $back = $row["back"];
        $front_par = $h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 + $h8 + $h9;
        $back_par = $h10 + $h11 + $h12 + $h13 + $h14 + $h15 + $h16 + $h17 + $h18;
        $total_par = $front_par + $back_par;
    }
    
   
} else {
    echo "0 results";
}
 
$sql = "SELECT * FROM yardage WHERE course = $trny";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $y1 = $row["h1"];
        $y2 = $row["h2"];
        $y3 = $row["h3"];
        $y4 = $row["h4"];
        $y5 = $row["h5"];
        $y6 = $row["h6"];
        $y7 = $row["h7"];
        $y8 = $row["h8"];
        $y9 = $row["h9"];
        $y10 = $row["h10"];
        $y11 = $row["h11"];
        $y12 = $row["h12"];
        $y13 = $row["h13"];
        $y14 = $row["h14"];
        $y15 = $row["h15"];
        $y16 = $row["h16"];
        $y17 = $row["h17"];
        $y18 = $row["h18"];
        $front_yd = $y1 + $y2 + $y3 + $y4 + $y5 + $y6 + $y7 + $y8 + $y9;
        $back_yd = $y10 + $y11 + $y12 + $y13 + $y14 + $y15 + $y16 + $y17 + $y18;
        $total_yd = $front_yd + $back_yd;
    }
    
   
} else {
    echo "No Hole Yardage Entered";
}



$sql = "SELECT * FROM scores WHERE tid = $trny";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $s1 = $row["hole1"];
        $s2 = $row["hole2"];
        $s3 = $row["hole3"];
        $s4 = $row["hole4"];
        $s5 = $row["hole5"];
        $s6 = $row["hole6"];
        $s7 = $row["hole7"];
        $s8 = $row["hole8"];
        $s9 = $row["hole9"];
        $s10 = $row["hole10"];
        $s11 = $row["hole11"];
        $s12 = $row["hole12"];
        $s13 = $row["hole13"];
        $s14 = $row["hole14"];
        $s15 = $row["hole15"];
        $s16 = $row["hole16"];
        $s17 = $row["hole17"];
        $s18 = $row["hole18"];
        $front = $s1 + $s2 + $s3 + $s4 + $s5 + $s6 + $s7 + $s8 + $s9;
        $back = $s10 + $s11 + $s12 + $s13 + $s14 + $s15 + $s16 + $s17 + $s18;
        $total = $front + $back;
        $last6 = $s13 + $s14 + $s15 + $s16 + $s17 + $s18;
        $last3 = $s16 + $s17 + $s18;
    }
    
   
}

?>
 


     <div class="row">
        <div class="col-lg-12 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header">Individual Results</h4>
            <div class="card-body">
            
              <p class="card-text">


     <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;
  $sql = "SELECT * from tournament WHERE `id` = '$tid'";
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
   WHERE scores.tid = $tid AND `dq` != 'WD'
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='responsive-table' >"; 
echo "<tr> <th>Place </th><th s>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th>Front</th> </b>
<th><center>Hole 10</th> <th><center>Hole 11</th> <th><center>Hole 12</th> <th><center>Hole 13</th> <th><center>Hole 14</th> 
<th><center>Hole 15</th> <th><center>Hole 16</th> <th><center>Hole 17</th> <th><center>Hole 18</th> <b><th>Back</th><th>Total</th><th><center>Last 6</th><th><center>Last 3</th></b> </tr>";
echo "<tr> <th bgcolor='black'> </th><th  bgcolor='black'> </th> <th>Yards</th><th><Center>$y1</th> <th><Center>$y2</th> <th><Center>$y3</th> <th><Center>$y4</th> <th><Center>$y5</th> 
<th><Center>$y6</th> <th><Center>$y7</th> <th><Center>$y8</th> <th><Center>$y9</th> <b><th><Center>$front_yd</th> </b>
<th><Center>$y10</th> <th><Center>$y11</th> <th><Center>$y12</th> <th><Center>$y13</th> <th><Center>$y14</th> 
<th><Center>$y15</th> <th><Center>$y16</th> <th><Center>$y17</th> <th><Center>$y18</th> <b><th><Center>$back_yd</th><th><Center>$total_yd</th>
<th bgcolor='black'></th><th bgcolor='black'></th></b> </tr>";
echo "<tr> <th  bgcolor='black'> </th><th  bgcolor='black'> </th> <th>Par</th><th><Center>$h1</th> <th><Center>$h2</th> <th><Center>$h3</th> <th><Center>$h4</th> <th><Center>$h5</th> 
<th><Center>$h6</th> <th><Center>$h7</th> <th><Center>$h8</th> <th><Center>$h9</th> <b><th><Center>$front_par</th> </b>
<th><Center>$h10</th> <th><Center>$h11</th> <th><Center>$h12</th> <th><Center>$h13</th> <th><Center>$h14</th> 
<th><Center>$h15</th> <th><Center>$h16</th> <th><Center>$h17</th> <th><Center>$h18</th> <b><th><Center>$back_par</th><th><Center>$total_par</th>
<th bgcolor='black'></th><th bgcolor='black'></th></b> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i;
  
  
  
  
  
  
  
  
  echo "</td><td>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
  echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
switch($row['hole1']-$h1) {
          case "-4": 
          $class = 'tripleagle'; 
           break; 
 
          case "-3": 
          $class = 'doubleeagle'; 
           break; 
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
      case "-3": 
          $class = 'doubleeagle'; 
           break; 
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
          case "-4": 
          $class = 'tripleagle'; 
           break;  
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break; 
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break; 
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
	echo "</td><td bgcolor = 'yellow'><CENTER><b><font color='red'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 
switch($row['hole10']-$h10) { 
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break;  
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
          case "-4": 
          $class = 'tripleagle'; 
           break; 
  case "-3": 
          $class = 'doubleeagle'; 
           break;
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
  
  echo "<td bgcolor = 'yellow'><b><font color='red'><CENTER>";
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td  bgcolor = 'yellow'><b><u><CENTER><font color='blue'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
  	echo "</b></td><td bgcolor = 'gray'><CENTER><b><font color='black'>"; 
	echo $row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
  	echo "</td><td bgcolor = 'black'></font><CENTER><b><font color = 'white' >"; 
	echo $row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td></b></font>"; 
	$i++;
}  

         
?>



	<tr><td></td><td colspan="2">Averages</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores  WHERE `tid` = '$tid'  AND hole10 > 0 ";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores  WHERE `tid` = '$tid'  AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole1+hole2+hole3+hole4+hole5+hole6+hole7+hole8+hole9) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole10) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole11) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole12) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole13) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole14) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole15) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole16) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole17) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole18) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole10+hole11+hole12+hole13+hole14+hole15+hole16+hole17+hole18) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole1+hole2+hole3+hole4+hole5+hole6+hole7+hole8+hole9+hole10+hole11+hole12+hole13+hole14+hole15+hole16+hole17+hole18) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
  	<td align="center"><?php $query = "SELECT AVG(last6) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(last3) FROM scores WHERE `tid` = '$tid' AND hole10 > 0";        
	$result = @mysqli_query ($conn,$query); // Run the query.
	$row = mysqli_fetch_array($result);
	echo round ($row['0'], 1);?></td> </tr> 
</table>   </div>  </div> </div></div>

    <div class="col-lg-12">
          <div class="card h-100">
            <h4 class="card-header">Players Who Did Not Finish</h4>
            <div class="card-body">
              <p class="card-text">

          <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;
  $sql = "SELECT * from tournament WHERE `id` = '$tid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
  
          echo "<table>";
while($row = mysqli_fetch_array( $result )) {

         } 
    $sql = "SELECT  scores.dq, scores.pid, scores.tmid,
   roster.pid, roster.player_1, team.tmid, team.school,
   team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$trny' AND `dq` != '1'";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table class='responsive-table'";
echo "<tr><th><center> Place </th><th><center> Player Name </th> <th><center> Team</th><b><th><center>Status</th> 
</b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</a>';
  echo "</td><td><b><CENTER>"; 
  echo $row['dq'];
  echo "</td>"; 
   $i++;
} 
echo"</table>";
         
?>
 </div></div> </div>  </div>
    

</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

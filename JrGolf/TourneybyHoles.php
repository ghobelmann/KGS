<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


 session_start();
           if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
//echo $tid;


//On page 1
$_SESSION['tid'] = $tid;



include_once("databaseconnect.php");
            
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}

  $sql = "SELECT tournament, id, image FROM tournament
  WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. " ";   
     
        $school = $row['school'];
        $image = $row['image'];
        $trny = $row['tournament'];
         echo "$trny Tournament Results</h1></font>";
     //  echo $image;
    }
} else {
    echo "no players";
}



                 

       
       $sql = "SELECT * FROM tournament WHERE id = $tid";
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
    
    
} else {
    echo "0 results";
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
    <link href="../vendor/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../vendor/bootstrap/css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);


 session_start();
           if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
//echo $tid;


//On page 1
$_SESSION['tid'] = $tid;



include_once("databaseconnect.php");
            
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}

  $sql = "SELECT tournament, id, image FROM tournament
  WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. " ";   
     
        $school = $row['school'];
        $image = $row['image'];
        $trny = $row['tournament'];
       //  echo "$trny Tournament Results</h1></font>";
     //  echo $image;
    }
} else {
    echo "no players";
}



                 

       
       $sql = "SELECT * FROM tournament WHERE id = $tid";
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
    
    
} else {
    echo "0 results";
}
  

?>


  <body>
  

 
     <div class="row">
       
   
     
     

              
                    <?php


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}





     

$sql = "SELECT * FROM tournament WHERE id = $tid";
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
 
$sql = "SELECT * FROM tournament WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $y1 = $row["y1"];
        $y2 = $row["y2"];
        $y3 = $row["y3"];
        $y4 = $row["y4"];
        $y5 = $row["y5"];
        $y6 = $row["y6"];
        $y7 = $row["y7"];
        $y8 = $row["y8"];
        $y9 = $row["y9"];
        $y10 = $row["y10"];
        $y11 = $row["y11"];
        $y12 = $row["y12"];
        $y13 = $row["y13"];
        $y14 = $row["y14"];
        $y15 = $row["y15"];
        $y16 = $row["y16"];
        $y17 = $row["y17"];
        $y18 = $row["y18"];
        $front_yd = $y1 + $y2 + $y3 + $y4 + $y5 + $y6 + $y7 + $y8 + $y9;
        $back_yd = $y10 + $y11 + $y12 + $y13 + $y14 + $y15 + $y16 + $y17 + $y18;
        $total_yd = $front_yd + $back_yd;
    }
    
   
} else {
    echo "No Hole Yardage Entered";
}



$sql = "SELECT * FROM scores2 WHERE tid = $tid";
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
 



   


</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

  

 
     <div class="row">
       
   
     
     
     

              
                    <?php


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}





     

$sql = "SELECT * FROM tournament WHERE id = $tid";
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
 
$sql = "SELECT * FROM tournament WHERE id = $tid";
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



$sql = "SELECT * FROM scores WHERE tid = $tid";
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
 




  <?php


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '11' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>5-7 Girls 4 Holes</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 
}  

  
  }        
} else {
  echo "";
}



$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '1' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>5-7 Boys 4 Holes</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 
}  

  
  }        
} else {
  echo "";
}



$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '12' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>5-7 Girls 9 Holes</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}



$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
       scores.hole9, scores.total, scores.last6, scores.last3,
        roster.pid, roster.player_1, team.tmid, team.abv
        FROM `scores`
        INNER JOIN roster on scores.pid = roster.pid 
        LEFT JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = $tid AND `division` = '2' 
       ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>5-7 Boys 9 Holes</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


    
$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '13' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>8-9 Girls</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '3' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>8-9 Boys</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}



$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '14' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>10-11 Girls</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}



$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '4' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>10-11 Boys</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
       scores.hole9, scores.total, scores.last6, scores.last3,
        roster.pid, roster.player_1, team.tmid, team.abv
        FROM `scores`
        INNER JOIN roster on scores.pid = roster.pid 
        LEFT JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = $tid AND `division` = '15' 
       ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>12-13 Girls</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}
       

$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
       scores.hole9, scores.total, scores.last6, scores.last3,
        roster.pid, roster.player_1, team.tmid, team.abv
        FROM `scores`
        INNER JOIN roster on scores.pid = roster.pid 
        LEFT JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = $tid AND `division` = '5' 
       ORDER BY `total`, `back`, `last6`, `last3` ASC";

$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>12-13 Boys</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '16' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>14-15 Girls</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
       scores.hole9, scores.total, scores.last6, scores.last3,
        roster.pid, roster.player_1, team.tmid, team.abv
        FROM `scores`
        INNER JOIN roster on scores.pid = roster.pid 
        LEFT JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = $tid AND `division` = '6' 
       ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>14-15 Boys</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '17' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>16-18 Girls</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}


$sql = "SELECT division FROM scores 
WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         
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
  scores.hole9, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `division` = '7' 
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>"; 
echo "<div class='table' >"; 
echo "<h1>16-18 Boys</h1>"; 
echo "<tr> <th>Place </th><th>Player Name </th><th>Team-Hole</th> <th><center>Hole 1</th> <th><center>Hole 2</th> 
<th><center>Hole 3</th> <th><center>Hole 4</th> <th><center>Hole 5</th> 
<th><center>Hole 6</th> <th><center>Hole 7</th> <th><center>Hole 8</th> <th><center>Hole 9</th> <b><th><center>Front</th> </b></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td width='50'><center>"; 
	echo $i;

  echo "</td><td width='200'>"; 
  echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td width ='50'><CENTER>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole1']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole2']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole3']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole4']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole5']."</td></n>"; 

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
echo "<td width='40' class='".$class."'><center>".$row['hole6']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole7']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole8']."</td></n>"; 
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
echo "<td width='40' class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td width='80' bgcolor = 'black'><CENTER><b><font color='white'>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</b></td>"; 

}  

  
  }        
} else {
  echo "";
}








?>




</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

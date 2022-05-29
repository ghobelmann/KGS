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

  <div id="content">
<?php

    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}
    if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}

$sql = "SELECT btyb FROM tournament WHERE id = $trny";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $btyb = $row["btyb"];
    }
} else {
    echo "0 results";
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
    }
    
    
} else {
    echo "0 results";
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
    
   
} else {
    echo "0 results";
}


?>
 

<center>

<div align="center" ><h1><font color="white"><?php echo $tname;  ?> Tournament Results. <br>Brought to You By <br><?php echo $btyb; ?> </font></h1>
<h3><font color="black">
Yardage <?php echo $yardage;  ?> 
Par <?php echo $par;  ?> <br>
 <?php echo $course;  ?> <br>Slope <?php echo $slope;  ?> Rating <?php echo $rating;  ?><br>
 <?php echo $comments;  ?>
</font></h1>



   <?php




 
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$trny'";

$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);
                
while($trny = mysqli_fetch_assoc($tournaments))

{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
AND `noteam` <> 'yes' AND `jv` != 'yes'
AND `dq` != 'DQ'   AND `dq` != 'WD' " ;
$result=mysqli_query($conn,$sql);
$j=0;
while($team = mysqli_fetch_assoc($result))

{

{

$teams[$j] = $team['tmid'];
//$teams[$j] = $team['school'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, total, tid  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `tid` LIKE '".$trny['tid']."' 
AND `noteam` <> '".yes."' AND `jv` != 'yes'  AND `dq` != 'DQ'   AND `dq` != 'WD'
ORDER BY `total` ASC";
$result2=mysqli_query($conn,$sql2);}

    


$i=1;
    
while($i <= $limit)

{
$data[$team['tmid']][$i] = mysqli_fetch_assoc($result2);
$i++;

}

$j++;

}

$teams_size = count($teams);
$i=0;

while($i < $teams_size)

{

$k=1;

while($k <= $limit)


{

$scores[$k] = $data[$teams[$i]][$k]['total'];

//var_dump ($data);
$k++;

}

//$totals[$teams[$i]] = array_sum($scores);
$totals[$team_names[$i]] = array_sum($scores);

$i++;

//var_dump($totals);
}

//___________________________________________________
//sort($totals);

//_____________________________________________

echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="3" align="center"><h3>'.$tname.'</h3></td></tr><tr>
<th>Place</td><th>Team</td><th>Score</td><tr>';

asort($totals); $place=1; 
foreach ($totals as $key => $val)  { 
    echo "<tr><td><h4>".$place."</td><td><h4>".$key."</td><td><h4>".$val."</td></tr>";
     $place++;
 }  

 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($trny);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);




?>





     <?php
        if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}
    
//Get number of Team to Search For.

// echo $tid;
  $sql = "SELECT * from tournament WHERE `id` = '$trny'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
          echo "<div class='CSSTableGenerator' >";
          echo "<table border='1'>";
while($row = mysqli_fetch_array( $result )) {
                  
                  
                  }
         
    $sql = "SELECT scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, 
    
   ($par + (((scores.total-$rating)*113/$slope)))  as adj_score,
    
    scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.school
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$trny'
   AND `jv` != 'yes'  AND `dq` != 'DQ'   AND `dq` != 'WD'
  ORDER BY `total`, `back`, `last6`, `last3` ASC";

                          
$result = mysqli_query($conn,$sql)
                         
or die ('Error in Query Try Again:-- Get Players' . mysqli_error());  
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>";

echo '<tr><td colspan="7" align="center"><h3>'.$tname.'</h3></td></tr>
<tr><th><center> Place </th><th><center> Player Name </th> <th><center> Team</th><b><th><center> Front</th> 
</b><b><th><center> Back</th><th><center> Total</th><th>Adjusted Score</th></b> </tr>';
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
   
   
  echo '<span class="clicker"><a href="teamresults4.php?pid='.$row['pid'].'&tid='.$row['tid'].'">'.$row['player_1'].'</font></a>';

 	echo "</td></b><td><CENTER>"; 
  
  echo '<span class="clicker"><a href="teamresults4.php?tmid='.$row['tmid'].'&tid='.$row['tid'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
  
  
  
  
	echo $row['front'];
	echo "</td></b><td><CENTER>"; 
	echo $row['back'];
	echo "</td></b><td><b><CENTER>"; 
	echo $row['total'];
  	echo "</td></b><td><b><CENTER>"; 
	echo round ($row['adj_score'],2);
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
         
?>
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
          echo "<div class='CSSTableGenerator' >";
          echo "<table border='1'>";
while($row = mysqli_fetch_array( $result )) {

         } 
    $sql = "SELECT  scores.dq, scores.pid, scores.tmid,
   roster.pid, roster.player_1, team.tmid, team.school
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$trny' AND `dq` != '1'";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>";
echo "<tr><td colspan='6' align='center'><h3>Players who did not Finish</h3></td></tr>
<tr><th><center> Place </th><th><center> Player Name </th> <th><center> Team</th><b><th><center>Status</th> 
</b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?pid='.$row['pid'].'">'.$row['player_1'].'</a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</a>';
  echo "</td><td><b><CENTER>"; 
  echo $row['dq'];
  echo "</td>"; 
   $i++;
} 
echo"</table>";
         
?>



</p>  


</div>
    <p>Note on Adjusted Score:  The golf coaches association would like to give All State Honors for each classification, but needs a fair way to compare players from different parts of the state playing on different courses. So we are using the USGA modified formula of (((Score - Course Rating) * 113 / Slope) + Par) to get an adjusted score that takes into consideration course difficulty and yardage and adjusts their scores accordingly. </p>
</center>


</div>
</div>
<?php include("footer.php");?>



             
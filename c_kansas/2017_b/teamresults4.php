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
    }
} else {
    echo "0 results";
}
?>
 

<center>

<div align="center" ><h1><font color="white"><?php echo $tname;  ?> Tournament Results. <br>Brought to You By <br><?php echo $btyb; ?> </font></h1>



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
AND `noteam` <> 'yes' AND `jv` != 'yes'" ;
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
AND `noteam` <> '".yes."' AND `jv` != 'yes' AND `dq` != 'dq' AND `dq` != 'wd'
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
echo '<table border="1">';
echo "<div class='CSSTableGenerator' >";
echo '<tr><td colspan="3" align="center"><h3>'.$tname.'</h3></td></tr>
<tr><th>Place</td><th>Team</td><th>Score</td><tr>';

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
echo "<h2>";
echo $row['comments'];
echo "</h2>";
         } 
    $sql = "SELECT scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.school
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid
  ORDER BY `total`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table border='1'>";
echo "<tr><th><center> Place </th><th><center> Player Name </th> <th><center> Team</th><b><th><center> Front</th> 
</b><b><th><center> Back</th><th><center> Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
  echo "</td><td><b><CENTER>"; 
	echo $row['front'];
	echo "</td></b><td><CENTER>"; 
	echo $row['back'];
	echo "</td></b><td><b><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
         
?>




</p>  


</div>

</center>


</div>
</div>
<?php include("footer.php");?>



             
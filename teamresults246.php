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

include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 

 <table>
 <tr><th valign="top">
<?php

//2man



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
  //  echo $tournament;
//set the limit for to top scores per team to add up
$limit=2;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` 
WHERE tid = '$tid' AND man ='2'";
$tid=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tid))
{
$query = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
  AND man ='2'";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
AND man ='2' ORDER BY `total` ASC";
$result2=mysqli_query($conn,$query2);}




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
$k++;
}
//$totals[$teams[$i]] = array_sum($scores);
$totals[$team_names[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>2 Man</h3></td></tr><tr><th valign="top">Team</td>
<th valign="top">Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
    echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
 }
 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($tournament);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);

?>
    



 <table>
 <tr><th valign="top">
<?php

//2man



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
  //  echo $tournament;
//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` 
WHERE tid = '$tid' AND man ='4'";
$tid=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tid))
{
$query = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
  AND man ='4'";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
AND man ='4' ORDER BY `total` ASC";
$result2=mysqli_query($conn,$query2);}




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
$k++;
}
//$totals[$teams[$i]] = array_sum($scores);
$totals[$team_names[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>4 Man</h3></td></tr><tr><th valign="top">Team</td>
<th valign="top">Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
    echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
 }
 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($tournament);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);

?>
    
    
    
     <table>
 <tr><th valign="top">
<?php

//2man



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
  //  echo $tournament;
//set the limit for to top scores per team to add up
$limit=6;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` 
WHERE tid = '$tid'";
$tid=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tid))
{
$query = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
ORDER BY `total` ASC";
$result2=mysqli_query($conn,$query2);}




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
$k++;
}
//$totals[$teams[$i]] = array_sum($scores);
$totals[$team_names[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>6 Man</h3></td></tr><tr><th valign="top">Team</td>
<th valign="top">Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
    echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
 }
 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($tournament);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);

?>




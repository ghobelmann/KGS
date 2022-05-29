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

 <table>
 <tr><th valign="top">
<?php

//2man



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}
  //  echo $tournament;
//set the limit for to top scores per team to add up
$limit=2;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament' AND man_2 ='yes' 
AND total > 1  AND `jv` <> '".yes."'";
$tournaments=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND man_2 ='yes' 
AND total > 1  AND `jv` <> '".yes."'";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
AND man_2 ='yes' AND total > 1  AND `jv` <> '".yes."' ORDER BY `total` ASC";
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
$totals[$teams[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>2 Man '.$tournament['tid'].'</h3></td></tr><tr><th valign="top">Team</td>
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
     </th><th valign="top">
 <?php

//4man



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament' AND man_4 ='yes' 
AND total > 1  AND `jv` <> '".yes."'";
$tournaments=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND man_4 ='yes' 
AND total > 1  AND `jv` <> '".yes."'";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
AND man_4 ='yes' AND total > 1  AND `jv` <> '".yes."' ORDER BY `total` ASC";
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
$totals[$teams[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>4 Man '.$tournament['tid'].'</h3></td></tr><tr><th valign="top">Team</td>
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
         </th><th valign="top">
 <?php

//2man



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=6;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament' AND man_6 ='yes' 
AND total > 1  AND `jv` <> '".yes."'";
$tournaments=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND man_6 ='yes' 
AND total > 1  AND `jv` <> '".yes."'";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
AND man_6 ='yes' AND total > 1  AND `jv` <> '".yes."' ORDER BY `total` ASC";
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
$totals[$teams[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>6 Man '.$tournament['tid'].'</h3></td></tr><tr><th valign="top">Team</td>
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

?>        </th><th valign="top">
  <?php





//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament'";
$tournaments=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND `noteam` <> '".yes."'
 AND `jv` <> '".yes."'" ;
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 
AND `noteam` <> '".yes."' AND `jv` <> '".yes."' ORDER BY `total` ASC";
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
$totals[$teams[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tid'].' Best 4</h3></td></tr><tr><th valign="top">Team</td><th valign="top">Score</td><tr>';
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

   </th></table>









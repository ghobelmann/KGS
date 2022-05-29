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
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
include("headera.php");
//include("menubar.php");

  ?>



<div id="wrapper">

  <div id="content">
      
   <?php





//Get number of Team to Search For.
if(!empty($_GET['event']))
{
$event = $_GET['event'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
$query = "SELECT DISTINCT `event` FROM `scores` WHERE event = '$event'";
$events=mysql_query($query);
while($event = mysql_fetch_assoc($events))
{
$query = "SELECT DISTINCT `team` FROM `scores` WHERE `event` = '".$event['event']."' AND `noteam` <> '".yes."'" ;
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT *  FROM `scores` WHERE `team` = '".$team['team']."' 
AND `event` = '".$event['event']."' AND `noteam` <> '".yes."' ORDER BY `total` ASC";
$result2=mysql_query($query2);}




$i=1;
while($i <= $limit)
{
$data[$team['team']][$i] = mysql_fetch_assoc($result2);
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
echo '<tr><td colspan="2" align="center"><h3>'.$event['event'].'</h3></td></tr><tr><th>Team</td><th>Score</td><tr>';
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
 unset($trny);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);



//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
$query = "SELECT DISTINCT `event` FROM `scores` WHERE event = '$event'";
$events=mysql_query($query);
while($event = mysql_fetch_assoc($events))
{
$query = "SELECT DISTINCT `team` FROM `scores` WHERE `event` = '".$event['event']."' AND `noteam` <> '".yes."'" ;
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT *  FROM `scores` WHERE `team` = '".$team['team']."' AND `event` = '".$event['event']."' 
AND `noteam` <> '".yes."' AND `jv` <> '".yes."' ORDER BY `total` ASC";
$result2=mysql_query($query2);}




$i=1;
while($i <= $limit)
{
$data[$team['team']][$i] = mysql_fetch_assoc($result2);
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
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>'.$event['event'].'</a></h3></td></tr><th>Team</th><th>Score</td>';
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
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);




?>
   

</p>

</div>

</center>


</div>
</div>



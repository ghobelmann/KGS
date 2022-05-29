 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 








 <?php
 //authentication for coaches to get to their pages, not for public pages.

include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 

<div id="wrapper">

  <div id="content"> 
  
  <table>
  <tr>
  <th> 

     <th>
      <?php





//Get number of Team to Search For.
$trny = 1;
$tournament = 1;

//set the limit for to top scores per team to add up
$limit=4;

//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `spam` FROM `scores` WHERE spam = '1'";
             
$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);

while($trny = mysqli_fetch_assoc($tournaments))
{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.tmid, scores.spam, 
team.school, team.classification FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.spam = '1' AND classification = '321A'
AND `noteam` <> 'yes' AND `jv` != 'yes'  LIMIT 12" ;
$result=mysqli_query($conn,$sql);
$j=0;
 
while($team = mysqli_fetch_assoc($result))
{
     
{
$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, avg (scores.total) as total, spam  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `spam` LIKE '1' 
AND `noteam` <> 'yes' AND `jv` != 'yes' 
GROUP by pid ORDER BY `total` ASC";
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
echo "321A State Rankings";
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




?></th>
   <th>
      <?php





//Get number of Team to Search For.
$trny = 1;
$tournament = 1;

//set the limit for to top scores per team to add up
$limit=4;

//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `spam` FROM `scores` WHERE spam = '1'";
             
$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);

while($trny = mysqli_fetch_assoc($tournaments))
{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.tmid, scores.spam, 
team.school, team.classification FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.spam = '1' AND classification = '4A'
AND `noteam` <> 'yes' AND `jv` != 'yes'  LIMIT 12" ;
$result=mysqli_query($conn,$sql);
$j=0;
 
while($team = mysqli_fetch_assoc($result))
{
     
{
$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, avg (scores.total) as total, spam  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `spam` LIKE '1' 
AND `noteam` <> 'yes' AND `jv` != 'yes' 
GROUP by pid ORDER BY `total` ASC";
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
echo "4A State Rankings";
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




?></th>
      <th>
       <?php





//Get number of Team to Search For.
$trny = 1;
$tournament = 1;

//set the limit for to top scores per team to add up
$limit=4;

//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `spam` FROM `scores` WHERE spam = '1'";
             
$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);

while($trny = mysqli_fetch_assoc($tournaments))
{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.tmid, scores.spam, 
team.school, team.classification FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.spam = '1' AND classification = '5A'
AND `noteam` <> 'yes' AND `jv` != 'yes'  LIMIT 12" ;
$result=mysqli_query($conn,$sql);
$j=0;
 
while($team = mysqli_fetch_assoc($result))
{
     
{
$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, avg (scores.total) as total, spam  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `spam` LIKE '1' 
AND `noteam` <> 'yes' AND `jv` != 'yes' 
GROUP by pid ORDER BY `total` ASC";
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
echo "5A State Rankings";
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




?></th>
       <th> <?php





//Get number of Team to Search For.
$trny = 1;
$tournament = 1;

//set the limit for to top scores per team to add up
$limit=4;

//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `spam` FROM `scores` WHERE spam = '1'";
             
$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);

while($trny = mysqli_fetch_assoc($tournaments))
{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.tmid, scores.spam, 
team.school, team.classification FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.spam = '1' AND classification = '6A'
AND `noteam` <> 'yes' AND `jv` != 'yes'  LIMIT 12" ;
$result=mysqli_query($conn,$sql);
$j=0;
 
while($team = mysqli_fetch_assoc($result))
{
     
{
$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, avg (scores.total) as total, spam  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `spam` LIKE '1' 
AND `noteam` <> 'yes' AND `jv` != 'yes' 
GROUP by pid ORDER BY `total` ASC";
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
echo "6A State Rankings";
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




?></th>
  
  </tr>
  </table>     
 



 


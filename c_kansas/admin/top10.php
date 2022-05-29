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
include_once("headerb.php");
//include("menubar.php");
     error_reporting(0);
?>

<div id="wrapper">

  <div id="content">
       <div align="center" ><h1>Team Rankings by Class</h1>
   <?php
//Get number of Team to Search For.

$tournament = 1;


//set the limit for to top scores per team to add up
$limit=4;  
 
//nasty script begins here

$query = "SELECT DISTINCT `tournament` FROM `virtual` 
WHERE tournament = $tournament";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team`, classification FROM `virtual`, team 
WHERE team.classification = '6A' AND team.school = virtual.team
AND `tournament` = '".$tournament['tournament']."'";
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT player_1, team, avg(total) as total  FROM `virtual` WHERE `team` = '".$team['team']."' 
AND `tournament` = '".$tournament['tournament']."' AND `jv` <> '".yes."' 
GROUP by player_1 ORDER BY `total` ASC";
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
echo '<tr><td colspan="2" align="center"><h3>'."6A Rankings".'</h3></td></tr><tr><th>Team</td><th>Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
    echo "<tr><td><h2>".$key."</h2></td><td><h2>".$val."</h2></td></tr>";
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
  
  <?php
//Get number of Team to Search For.

$tournament = 1;


//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here

$query = "SELECT DISTINCT `tournament` FROM `virtual` 
WHERE tournament = $tournament";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team`, classification FROM `virtual`, team 
WHERE team.classification = '5A' AND team.school = virtual.team
AND `tournament` = '".$tournament['tournament']."'";
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT player_1, team, avg(total) as total  FROM `virtual` WHERE `team` = '".$team['team']."' 
AND `tournament` = '".$tournament['tournament']."' AND `jv` <> '".yes."' 
GROUP by player_1 ORDER BY `total` ASC";
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
echo '<tr><td colspan="2" align="center"><h3>'."5A Rankings".'</h3></td></tr><tr><th>Team</td><th>Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
    echo "<tr><td><h2>".$key."</h2></td><td><h2>".$val."</h2></td></tr>";
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
  
  
   <?php
//Get number of Team to Search For.

$tournament = 1;


//set the limit for to top scores per team to add up
$limit=4;   
 
//nasty script begins here

$query = "SELECT DISTINCT `tournament` FROM `virtual` 
WHERE tournament = $tournament";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team`, classification FROM `virtual`, team 
WHERE team.classification = '4A' AND team.school = virtual.team
AND `tournament` = '".$tournament['tournament']."'";
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT player_1, team, avg(total) as total  FROM `virtual` WHERE `team` = '".$team['team']."' 
AND `tournament` = '".$tournament['tournament']."' AND `jv` <> '".yes."'
GROUP by player_1 ORDER BY `total` ASC";
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
echo '<tr><td colspan="2" align="center"><h3>'."4A Rankings".'</h3></td></tr><tr><th>Team</td><th>Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
      echo "<tr><td><h2>".$key."</h2></td><td><h2>".$val."</h2></td></tr>";
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
  
  
   <?php
//Get number of Team to Search For.

$tournament = 1;


//set the limit for to top scores per team to add up
$limit=4;  
 
//nasty script begins here

$query = "SELECT DISTINCT `tournament` FROM `virtual` 
WHERE tournament = $tournament";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team`, classification FROM `virtual`, team 
WHERE team.classification = '321A' AND team.school = virtual.team
AND `tournament` = '".$tournament['tournament']."'";
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT player_1, team, avg(total) as total  FROM `virtual` WHERE `team` = '".$team['team']."' 
AND `tournament` = '".$tournament['tournament']."' AND `jv` <> '".yes."'  
GROUP by player_1 ORDER BY `total` ASC";
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
echo '<tr><td colspan="2" align="center"><h3>'."321A Rankings".'</h3></td></tr><tr><th>Team</td><th>Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) {
        echo "<tr><td><h2>".$key."</h2></td><td><h2>".$val."</h2></td></tr>";
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

?></td>


	  
	           <?php
//Increment counter
mysql_query("UPDATE countertable SET count_top10=count_top10+1");

//extract count from database table
$query = "SELECT count_top10 FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_top10']; 
	echo "</td></tr>";

} 




?>  
                                                        
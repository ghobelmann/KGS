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
 ?> 



<?php if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}


$team1 = $_POST[1];
$team2 = $_POST[2];
$team3 = $_POST[3];
$team4 = $_POST[4];
$team5 = $_POST[5];
$team6 = $_POST[6];
$team7 = $_POST[7];
$team8 = $_POST[8];
$team9 = $_POST[9];
$team10 =  $_POST[10];
$team11 = $_POST[11];
$team12 = $_POST[12];
$team13 = $_POST[13];
$team14 = $_POST[14];
$team15 =  $_POST[15];
$team16 =  $_POST[16];



?>

<div >
<table width="auto">
    <tr>
        <td valign ="top">
        

<table border="1" width="auto" >
    <tr>
        <td valign ="top">
        
        
        
        <?php
//Get number of Team to Search For.

$tournament = 1;


//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here

$query = "SELECT DISTINCT `tid` FROM `scores`  
WHERE tid = $tournament";
$tournaments=mysqli_query($conn,$query);
while($tournament = mysqli_fetch_assoc($tournaments))
{
$query = "SELECT s.*, avg(s.total) as total, r.pid, r.player_1, t.tmid, t.school
FROM `scores` s
INNER JOIN roster r on s.pid = r.pid
LEFT JOIN team t on s.tmid = t.tmid
WHERE s.tmid IN ('$team1') OR s.tmid IN('$team2') OR s.tmid IN('$team3') OR s.tmid IN('$team4') OR s.tmid IN('$team5')
OR s.tmid IN('$team6') OR s.tmid IN('$team7') OR s.tmid IN('$team8') OR s.tmid IN('$team9') OR s.tmid IN('$team10')
OR s.tmid IN('$team11') OR s.tmid IN('$team12') OR s.tmid IN('$team13') OR s.tmid IN('$team14') 
 OR s.tmid IN('$team15') OR s.tmid IN('$team16')
 AND s.jv != 'jv' and s.non_varsity = 'No'
GROUP by s.pid ORDER BY total ASC";
$result=mysqli_query($conn,$query);
$j=0;
while($team = mysqli_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['tmid'];
$query2 = "SELECT pid, tmid, avg(total) as total  FROM `scores` WHERE `tmid` = '".$team['tmid']."' 
AND `tid` = '".$tournament['tid']."'
AND `total` > '0' 
 GROUP by pid ORDER BY `total` ASC";
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
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>'."Virtual Tournament".'</h3></td></tr><tr><th>Team</td><th>Score</td><tr>';
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

?></td></div>
        <td valign ="top"> <?php



//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}


  //echo $team1;

//Submit Query to MySql Database
$query = "SELECT s.*, avg(s.total) as total, r.pid, r.player_1, t.tmid, t.school
FROM `scores` s
INNER JOIN roster r on s.pid = r.pid
LEFT JOIN team t on s.tmid = t.tmid
WHERE  s.tmid IN ('$team1') OR s.tmid IN('$team2') OR s.tmid IN('$team3') OR s.tmid IN('$team4') OR s.tmid IN('$team5')
OR s.tmid IN('$team6') OR s.tmid IN('$team7') OR s.tmid IN('$team8') OR s.tmid IN('$team9') OR s.tmid IN('$team10')
OR s.tmid IN('$team11') OR s.tmid IN('$team12') OR s.tmid IN('$team13') OR s.tmid IN('$team14') 
 OR s.tmid IN('$team15') OR s.tmid IN('$team16')
 AND s.jv != 'jv' and s.non_varsity = 'No'
GROUP by s.pid ORDER BY total ASC";
$result = mysqli_query($conn,$query)
or die ('Error in IND Query Try Again:--' . mysqli_error());



//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Place </th><th>Player Name </th> <th>Team</th> <th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center>"; 
	echo $i.'</td><td>';
	echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="TeamStats.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 0);
	echo "</td></strong><CENTER>"; 
	$i++;
} 



 



?>



</table>





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
error_reporting (E_Warning);
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
include_once("headera.php");

?>


<?php if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}

  $query = "SELECT comments from tournament WHERE `tournament` = '$tournament'";
       $result = mysql_query($query)
          or die ('Error in Query Try Again:--' . mysql_error()); 
          echo "<table border='1'>";
while($row = mysql_fetch_array( $result )) {
echo "<h2>";
echo $row['comments'];
echo "</h2>";
         } 
?>
<table border="1"  valign ="top">
    <tr>
        <td valign='top' width='10%'align='center' >
        
        
        
        <?php
        
        
        
//Get number of Team to Search For.
if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
$query = "SELECT DISTINCT `tournament` FROM `scores` WHERE tournament = '$tournament'";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team` FROM `scores` WHERE `tournament` = '".$tournament['tournament']."' AND `noteam` <> '".yes."'" ;
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT *  FROM `scores` WHERE `team` = '".$team['team']."' AND `tournament` = '".$tournament['tournament']."' 
AND `noteam` <> '".yes."' AND dq <> 'dq' AND `jv` <> '".yes."' ORDER BY `total` ASC";
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
$scores[$k] = $data[$teams[$i]][$k]['front'];
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
echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tournament'].'</a></h3></td></tr><th>Team</th><th>Score</td>';
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

?></div>
        <td valign='top' align='center'> 
        
	<?php
  
  if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}
$query = "SELECT * FROM tournament WHERE `tournament` =  '$tournament' LIMIT 1";

$result = mysql_query($query);

$data = mysql_fetch_assoc($result);

for($i=1; $i<=18; $i++)

{

   //this stores the numbers in $h1-$h18 not an array

//$h = "h{$i}";

 //${$h} = $data['hole'.$i];

 

   //or with an array which stores the numbers like this $h[1] - $h[18]

$h[$i] = $data['hole'.$i];

}
?>        
        
  
        
        
        
<?php



//Get number of Team to Search For.
if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}



//Submit Query to MySql Database
$query = "SELECT player_1, jv, tournament, team, dq, total, manualscore, front, back,
last6, last3, rank
FROM (SELECT player_1, jv, tournament, team, dq, total, manualscore, front, back,
last6, last3,
@curRank := IF(@prevRank = total, @curRank, @incRank) AS rank,
@incRank := @incRank +1,
@prevRank := total
FROM scores sc,
(SELECT @curRank := 0, @prevRank := NULL, @incRank :=1) r  WHERE `tournament` = '$tournament'
ORDER by front, manualscore, back, last6, last3 ASC ) s 
WHERE `tournament` = '$tournament' AND dq <> 'dq' AND `jv` != 'yes' GROUP by player_1
ORDER BY front, manualscore, back, last6, last3, team ASC, player_1 ASC";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'  >";
echo "<tr> <th>Place </th><th>Player Name </th> <th>Team</th> <th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	 	echo "<tr><td>";
	echo $row['rank'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td></tr></strong><CENTER>"; 
	$i++;
} 



 



?>

</table>





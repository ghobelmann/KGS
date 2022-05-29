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
include_once("databaseconnect.php");
//include("menubar.php");
include("headerb.php");
?>


</head>
<body>
<div id="wrapper">
<div id="content">
            <?php
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];
}

  //Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}



  $sql = "SELECT * FROM tournament WHERE `tid` =  '.$tournament['tid'].' LIMIT 1";
  
  $result = $conn->query($sql);
  $data = mysqli_fetch_assoc($result);

     for($i=1; $i<=18; $i++)

{
$h[$i] = $data['hole'.$i];
}
          ?>  
          <center>

<div align="center" ><h1><font color="white"><?php echo $tournament  ?> Tournament Results </font></h1>

<?php
//set the limit for to top scores per team to add up
$limit=4;
//nasty script begins here line 123
$sql = "SELECT DISTINCT `tid` FROM `scores` WHERE `tid` = '.$tournament['tid'].'";

$tournaments = $conn->query($sql);

while($tournament = mysqli_fetch_assoc($tournaments))
{
$sql = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '.$tournament['tid'].'";
$result = $conn->query($sql);

$j=0;
while($team = mysqli_fetch_assoc($result))
 {
 {
$teams[$j] = $team['tmid']; 

$sql2 = "SELECT * FROM `scores` WHERE `tmid` LIKE '".$team['tmid']."' AND `tid` = '.$tournament['tid'].' ORDER BY `total` ASC";
$result2 = $conn->query($sql2);
}

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
 

 echo '<table border="1">';
echo "<div class='CSSTableGenerator' >";
echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tid'].'</h3></td></tr>
<tr><th>Team</td><th>Score</td><tr>';
asort($totals);
foreach ($totals as $key => $val) 
{
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



?>


          </div></div></body></html>

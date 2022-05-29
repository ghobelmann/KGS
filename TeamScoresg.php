
<!DOCTYPE html>
<html lang="en">

  <head>


<?php
error_reporting(E_ALL);
session_start(); 
   $s_time = microtime(TRUE);

 if(!empty($_GET['db']))
{
$db = $_GET['db'];
}

$dataBase = $db;


        include_once("dbconnectg.php"); 
  
include("analyticstracking.php");

 
//include("headerg.php");
  



               
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}


?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Golf Team Rankings">
    <meta name="author" content="Greg Hobelmann">
    
    
           <!-- Custom styles for this template -->
    <link href="css/boysGolf.css" rel="stylesheet">     
          <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
   <!-- <link href="../css/KansasGirlsCss.css" rel="stylesheet">  -->
     <link rel="stylesheet" href="vendor/bootstrap/css/w3.css">
    <!-- Custom styles for this template -->

    
  </head>

  <body>
    <!-- Page Content -->
    <div class="container">   <br><br>

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php echo $state; ?> Team Rankings
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
         
        <li class="breadcrumb-item">
        
             <?php
                  
    if(!empty($_GET['state']))
{
    $state = $_GET['state'];
}
echo $state;


  $sql = "SELECT * FROM team 
  WHERE `state` = '$state' GROUP by classification";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<center><h4>';
    echo 'Ranking by Class</h4>';
    while($row = $result->fetch_assoc()) {
      echo '<font size="6">   ';  
      echo '<a href="TeamScoresg.php?classification='.$row['classification'].'&state='.$state.'&db='.$db.'">'.$row['classification'].'</font></a>';
      echo '</font>';
    }        
} else {                      
    echo "No Classifications Found";
}
?>

</li>
   
      </ol>

      <!-- Image Header   <center>
      <img class="img-fluid rounded mb-4" src="images\rankings.png" alt="">
                         -->
      <!-- Marketing Icons Section -->
      <div class="row">
      
    <!--
       <div class="alert alert-danger">
 <marquee><h1>Rankings down until all Regional and State Tournaments are Entered.</h1></marquee>
   </div>
      -->
        
   
        <div class="col-lg-12 mb-12">
            <h4 class="card-header">Class <?php echo $classification; ?> Team Rankings</h4>
            <div class="card-body">
              <p class="card-text">
              
              
              


<div id="wrapper">

  <div id="content">      

   <?php
          echo $classification;

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
$sql = "SELECT scores.tmid, scores.spam, scores.tid, 
team.school, team.classification FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.spam = '1'
AND scores.status = '1' " ;
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
WHERE `tmid` LIKE '".$team['tmid']."' AND `spam` LIKE '1' and complete = '2'

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

echo "<table class='table table-hover'>";
echo '<tr><td colspan="3" align="center"><h3>'.$tname.'</h3></td></tr><tr>
<th>Place</td><th>Team</td><th>Score</td><tr>';

asort($totals); $place=1; 
foreach ($totals as $key => $val)  { 
    echo "<tr><td>".$place."</td><td>".$key."</td><td>".round ($val, 1)."</td></tr>";
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
 unset($classification);
 }   
        
?>



   </div>


 </div>  
 
<?php
echo 'PHP Processing Time: '.(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
?>

         </div> 

           
    
          </div>   
        </div>       </p>
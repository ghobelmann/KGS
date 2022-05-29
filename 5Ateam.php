<?php


include_once("dbconnectg.php");



               
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}

                 
    $sql = "SELECT tmid, email FROM users WHERE 
     users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$tmid = $row['tmid']; }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Golf Team Rankings">
    <meta name="author" content="Greg Hobelmann">

    <title>Team Rankings</title>
    <!-- Bootstrap core CSS -->
    <link href="../../global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../global_style/vendor/portfolio-item.css" rel="stylesheet">     
    
        <style>
    h1 {
  background-color: green;
}
</style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    </nav>

    <!-- Page Content -->
    <div class="container">


                 <center> <img src="KGCA_logo_SM.jpg" alt="KGS"></center>


      <!-- Image Header -->  <center>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-6">
          <div class="card h-100">
            <h4 class="card-header">5A Team Rankings</h4>
            <div class="card-body">
              <p class="card-text">
              
              
               <?php

 //authentication for coaches to get to their pages, not for public pages.


 ?> 

<div id="wrapper">

  <div id="content">      
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
$sql = "SELECT scores.tmid, scores.tid, scores.spam, team.paid, team.school, team.classification 
FROM scores 
INNER JOIN team on scores.tmid = team.tmid 
LEFT JOIN tournament tr on scores.tid = tr.id 
WHERE scores.spam = '1' AND classification = '5A' AND tr.status = '1' 
AND scores.status = '1' and total > '0' and scores.complete='2'" ;
$result=mysqli_query($conn,$sql);
$j=0;
 
while($team = mysqli_fetch_assoc($result))
{
     
{
$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, avg(scores.total) as total FROM `scores` 
LEFT JOIN tournament tr on scores.tid = tr.id 
WHERE `tmid` LIKE '".$team['tmid']."' and total > '0' AND tr.status = '1' 
AND scores.status = '1'  and scores.complete='2'
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

echo "<table class='table'>";
echo '<tr><td colspan="3" align="center"><h3>'.$tname.'</h3></td></tr><tr>
<th>Rank</td><th>Team</td><th>Score</td><tr>';

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
 }
 

//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);




?>
       </div>  </div>

</p>
            </div>
            <div class="card-footer">
             
            </div>
          </div>
        </div>
</div>           </div>
    

</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

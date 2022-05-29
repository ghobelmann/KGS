<?php


include_once("databaseconnect.php");
include_once("analyticstracking.php");
  



               
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
    <link href="../../global_style/vendor/portfolio-item.css" rel="stylesheet">     '
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Team and Individual Rankings
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
         
        <li class="breadcrumb-item"><a href='teamRankings.php?classification=6A'> 6A </a> </li>
        
        <li class="breadcrumb-item"><a href='teamRankings.php?classification=5A'> 5A </a> </li>
        <li class="breadcrumb-item"><a href='teamRankings.php?classification=4A'> 4A </a> </li>
        <li class="breadcrumb-item"><a href='teamRankings.php?classification=321A'> 321A </a> </li>
     
      </ol>

      <!-- Image Header -->  <center>
      <img class="img-fluid rounded mb-4" src="images\rankings.png" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-6">
          <div class="card h-100">
            <h4 class="card-header"><?php echo $classification; ?>Team Rankings</h4>
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
$sql = "SELECT scores.tmid, scores.spam, team.paid, scores.tid, scores.total,
scores.par, scores.tid, scores.dq, scores.jv, scores.noteam,
team.school, team.classification FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.spam = '1' AND classification = '$classification'
AND `noteam` != 'yes' AND `jv` != 'JV'
AND dq != 'DQ' AND dq != 'WD' AND  tid > '300'  AND `par` > '60' AND `total` > '0'" ;
$result=mysqli_query($conn,$sql);
$j=0;
 
while($team = mysqli_fetch_assoc($result))
{
     
{
$teams[$j] = $team['tmid'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, avg (scores.total) as total, back, front, spam  FROM `scores` 
WHERE tid > 300 AND back > 0 AND front > 0
AND `tmid` LIKE '".$team['tmid']."' AND `spam` LIKE '1' and total != '0'
AND `noteam` <> 'yes' AND `jv` != 'JV'   
AND dq != 'DQ' AND dq != 'WD' 
 AND `non_varsity` = 'no' 
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
        <div class="col-lg-8 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><?php echo $classification; ?> Individual Rankings</h4>
            <div class="card-body">
              <p class="card-text">
              
              <?php


 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT s.pid, s.tmid, s.par, r.player_1, r.grade, 
t.school, t.abv, 
avg(s.total) as total,
avg((s.total-rating)+ par) as adj_score
FROM scores s 
INNER JOIN roster r ON s.pid = r.pid
LEFT JOIN team t on s.tmid = t.tmid
WHERE t.classification LIKE '$classification' 
AND s.total >'0' AND `non_varsity` = 'no'  AND tid > '300' 
  and jv != 'jv' and dq != 'dq' 
  AND `par` > '60'  and dq != 'wd'
GROUP by s.pid ORDER by adj_score ASC";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

echo "<table class='table'>";
echo "<tr><center> <th>Rank</th><th><center>Player Name </th><th><center>Grade</th> <th><center>Team</th><th> <center>Avg Total</th><th><center>Avg Adj </th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</a>';
    	echo "</td><td><CENTER>"; 
	echo $row['grade'];
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</a>';
  	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['adj_score'], 1);
	echo "</td><CENTER>"; 
	$i++;
} 
} else {
    echo "0 results";
}
//msquli#4
 $conn->close();

?>   
 </div></div> </div>  </div>           </div>
    

</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

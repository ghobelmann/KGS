  <!--

1. 18 Hole Varsity Tournament
 2. 36 Hole Varsity Tournament
 3. 54 Hole Varsity Tournament
 4. 72 Hole Varsity Tournament
 5. 18 Hole JV Tournament
 6. 9 Hole JV Tournament
7. Do Not Include

Status Codes: 
1 = Varsity on a Team,
 2 = Varsity No Team, 
3 = JV, 
4 = C team 
5 = DQ, 
6 = WD


    -->












    <?php       
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
if(!empty($_GET['state']))
{
$state = $_GET['state'];
}
 if(!empty($_GET['db']))
{
$db = $_GET['db'];
}
$dataBase = $db;
switch ($dataBase) {
    case "boys":
        include_once("databaseconnect.php");    
        break;
    case "girls":
        include_once("dbconnectg.php"); 
        break;
    default:
       include_once("databaseconnect.php"); 
} 



include("analyticstracking.php");


  $output = "http://www.kansasgolfscores.com/tourneyResults.php?tid=$tid&db=boys";

if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}






       $sql = "SELECT * FROM tournament WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tname = $row["tournament"];
        $yardage = $row["yardage"];
        $par = $row["par"];
        $course = $row["course"];
        $comments = $row["comments"];
        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
        $btyb = $row["btyb"];
        $date = $row["date"];
        $round = $row["rounds"];
          $status = $row["status"];
    }


} else {
    echo "0 results";
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Golf Team Rankings">
    <meta name="author" content="Greg Hobelmann">

    <title>Tournament Results</title>


       
    <style>
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #999EEC;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}

a:link {
  color: black; 
  background-color: transparent; 
  text-decoration: none;
}

a:visited {
  color: red;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: green;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

</style>

    

  </head>

  <body>

            <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
       <a class="navbar-brand" href="index.php"> Home Page</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
               <a class="nav-link" href="hbyhTourney.php?tid=<?php echo $tid; ?>&db=<?php echo $db; ?>">Hole by Hole Results</a>
               
            </li>
          </ul>
               




        </div>
      </div>
      
    </nav>
    


          <script>
function goBack() {
  window.history.back();
}
</script>

   <br><br>  
      <button class="block" onclick="goBack()">Go Back</button>

     <div class="row">


              <p class="card-text">


        <div class="col-lg-6 portfolio-item bg-light">

              <h4 class="card-header"></h4>
            <div class="card-body">

              <p class="card-text">
              
<h2><?php echo $tname; ?></h2>
<h2> <?php echo $btyb; ?>  </h2>
 </div> </div>
            
<div class="col-lg-6 portfolio-item bg-light">

              <h4 class="card-header"></h4>
            <div class="card-body">

              <p class="card-text">

 <br>Yardage : <?php echo $yardage;  ?>          Par : <?php echo $par;  ?>
 <br>Slope : <?php echo $slope;  ?> Rating : <?php echo $rating;  ?>
 <br>Course : <?php echo $course;  ?>
  <br>Date : <?php echo $date;  ?>  Tournament Status : <?php echo $status;  ?>  <br><i>
    1. 18 Hole Var, 2. 36 Hole Var, 3, 9 Hole Var, 4, Dual or Match Play, 5. 18 Hole JV (not in Ranking) 6. 9 Hole JV (Not In Rankings)</i><br>
       </div> </div>






        <div class="col-lg-6 portfolio-item">


              <h4 class="card-header">Varsity Team Results</h4>

         </a>


          <div class="card-body">

              <p class="card-text">


                    <?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}






  $front = '';
  $back = '';
$sql = "SELECT * FROM tournament WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $h1 = $row["h1"];
        $h2 = $row["h2"];
        $h3 = $row["h3"];
        $h4 = $row["h4"];
        $h5 = $row["h5"];
        $h6 = $row["h6"];
        $h7 = $row["h7"];
        $h8 = $row["h8"];
        $h9 = $row["h9"];
        $h10 = $row["h10"];
        $h11 = $row["h11"];
        $h12 = $row["h12"];
        $h13 = $row["h13"];
        $h14 = $row["h14"];
        $h15 = $row["h15"];
        $h16 = $row["h16"];
        $h17 = $row["h17"];
        $h18 = $row["h18"];
        $front = $row["front"];
        $back = $row["back"];
        $front_par = $h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 + $h8 + $h9;
        $back_par = $h10 + $h11 + $h12 + $h13 + $h14 + $h15 + $h16 + $h17 + $h18;
        $total_par = $front_par + $back_par;
    }


} else {
    echo "0 results";
}

$sql = "SELECT * FROM tournament WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $y1 = $row["y1"];
        $y2 = $row["y2"];
        $y3 = $row["y3"];
        $y4 = $row["y4"];
        $y5 = $row["y5"];
        $y6 = $row["y6"];
        $y7 = $row["y7"];
        $y8 = $row["y8"];
        $y9 = $row["y9"];
        $y10 = $row["y10"];
        $y11 = $row["y11"];
        $y12 = $row["y12"];
        $y13 = $row["y13"];
        $y14 = $row["y14"];
        $y15 = $row["y15"];
        $y16 = $row["y16"];
        $y17 = $row["y17"];
        $y18 = $row["y18"];
        $front_yd = $y1 + $y2 + $y3 + $y4 + $y5 + $y6 + $y7 + $y8 + $y9;
        $back_yd = $y10 + $y11 + $y12 + $y13 + $y14 + $y15 + $y16 + $y17 + $y18;
        $total_yd = $front_yd + $back_yd;
    }


} else {
    echo "No Hole Yardage Entered";
}



$sql = "SELECT * FROM scores WHERE tid = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $s1 = $row["hole1"];
        $s2 = $row["hole2"];
        $s3 = $row["hole3"];
        $s4 = $row["hole4"];
        $s5 = $row["hole5"];
        $s6 = $row["hole6"];
        $s7 = $row["hole7"];
        $s8 = $row["hole8"];
        $s9 = $row["hole9"];
        $s10 = $row["hole10"];
        $s11 = $row["hole11"];
        $s12 = $row["hole12"];
        $s13 = $row["hole13"];
        $s14 = $row["hole14"];
        $s15 = $row["hole15"];
        $s16 = $row["hole16"];
        $s17 = $row["hole17"];
        $s18 = $row["hole18"];  
        $front = $s1 + $s2 + $s3 + $s4 + $s5 + $s6 + $s7 + $s8 + $s9;
        $back = $s10 + $s11 + $s12 + $s13 + $s14 + $s15 + $s16 + $s17 + $s18;
        $total = $front + $back;
        $last6 = $s13 + $s14 + $s15 + $s16 + $s17 + $s18;
        $last3 = $s16 + $s17 + $s18;
    }


} else {
    echo "0 results";
}
     

?>


<?php

if ($round == '2') {


function get_round($tid,$round=1,$tied_teams=array(),$limit=4) {
    if(!$tid) return;

    global $conn;

    //tied teams is for future use. Will requre the addition of a WHERE
    //to limit result set to "tied teams"

    //set the limit for to top scores per team to add up
    //$limit=4;

    //nasty script begins here
    // Selects the tournament id (tid) from scores table
    $sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tid'";

    $tournaments=mysqli_query($conn,$sql);
    //var_dump($tournaments);

    while($tid = mysqli_fetch_assoc($tournaments))
    {

        //This Selects the Teams that have players in the tournament
        $sql = "SELECT scores.total, scores.tmid, scores.status, 
        team.school FROM scores
        INNER JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = '".$tid['tid']."' 
        AND `round` = '".$round."' 
         AND `status` = '1'" ;
        $result=mysqli_query($conn,$sql);
        $j=0;
        while($team = mysqli_fetch_assoc($result))
        {
            {
                $teams[$j] = $team['tmid'];
                //$teams[$j] = $team['school'];
                $team_names[$j] = $team['school'];
                //var_dump($team);
                   // This selects all the player from 1 team at a time and gets their scores.
                $sql2 = "SELECT pid, tmid, total, tid, status  FROM `scores`
                WHERE `tmid` LIKE '".$team['tmid']."'
                AND `tid` LIKE '".$tid['tid']."'
                AND `round` = '".$round."' AND `status` = '1'
                ORDER BY `total` ASC";
                $result2=mysqli_query($conn,$sql2);
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

                //var_dump ($data);
                $k++;

            }

            //$totals[$teams[$i]] = array_sum($scores);
            $totals[$team_names[$i]] = array_sum($scores);

            $i++;

            //var_dump($totals);
        }
    }
    return $totals;
}







//___________________________________________________
//sort($totals);

//_____________________________________________
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
   $tid = $_GET['tid'];
} else {
   $tid = FALSE;
}


 $sql = "SELECT `rounds` FROM `tournament` WHERE id = '$tid'";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rnd = $row["rounds"];
        }
        }
        else echo "No Tournament Found";

//some query to get # of rounds
$round_ct = $rnd;
for($i=1; $i <= $round_ct; $i++) {
  $rounds[$i] = get_round($tid,$i);
}

$best_4 = array();
$max_rounds = 0;
foreach ($rounds[1] as $key => $val){
    $row_tot = 0;
    $rounds_new = array();
    $round_cnt = 0;
    foreach($rounds as $round) {
        if($round[$key] != NULL) {
            $row_tot += $round[$key];
            $rounds_new[] = $round[$key];
            $round_cnt += 1;
        }
    }
    if($max_rounds < $round_cnt) $max_rounds = $round_cnt;
    $best_4[$key] = array('total'=>$row_tot,'rounds'=>$rounds_new);
}

function cmp($a, $b)
{
    return $a["total"] > $b["total"];
}

uasort($best_4, "cmp");
//var_dump($best_4);
echo "Best 4";
echo "<table class='table table-hover'>";
echo '<tr><th>Place</th><th>Team</th>';
for($i=1; $i <= $max_rounds; $i++) echo '<th>Round '.$i.'</th>';
echo '<th>Total</th></tr>';

$place=1;
foreach ($best_4 as $key => $val)  {
    if(count($val['rounds']) == $max_rounds) {
        echo "<tr><td>".$place."</td><td>".$key."</td>";
        for($i=0; $i < $max_rounds; $i++) {
            echo '<td>'.$val['rounds'][$i].'</td>';
        }
        echo "<td>".$val['total']."</td></tr>";
        $place++;
    }
 }
 echo "</table>";


} else {

  function get_round($tid,$round=1,$tied_teams=array(),$limit=4) {
    if(!$tid) return;

    global $conn;

    //tied teams is for future use. Will requre the addition of a WHERE
    //to limit result set to "tied teams"

    //set the limit for to top scores per team to add up
    //$limit=4;

    //nasty script begins here
    // Selects the tournament id (tid) from scores table
    $sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tid'";

    $tournaments=mysqli_query($conn,$sql);
    //var_dump($tournaments);

    while($tid = mysqli_fetch_assoc($tournaments))
    {

        //This Selects the Teams that have players in the tournament
        $sql = "SELECT scores.total, scores.tmid, scores.status, 
        team.school FROM scores
        INNER JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = '".$tid['tid']."' 
        AND `round` = '".$round."' 
         AND `status` = '1'" ;
        $result=mysqli_query($conn,$sql);
        $j=0;
        while($team = mysqli_fetch_assoc($result))
        {
            {
                $teams[$j] = $team['tmid'];
                //$teams[$j] = $team['school'];
                $team_names[$j] = $team['school'];
                //var_dump($team);
                   // This selects all the player from 1 team at a time and gets their scores.
                $sql2 = "SELECT pid, tmid, total, tid, status  FROM `scores`
                WHERE `tmid` LIKE '".$team['tmid']."'
                AND `tid` LIKE '".$tid['tid']."'
                AND `round` = '".$round."' AND `status` = '1'
                ORDER BY `total` ASC";
                $result2=mysqli_query($conn,$sql2);
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

                //var_dump ($data);
                $k++;

            }

            //$totals[$teams[$i]] = array_sum($scores);
            $totals[$team_names[$i]] = array_sum($scores);

            $i++;

            //var_dump($totals);
        }
    }
    return $totals;
}







//___________________________________________________
//sort($totals);

//_____________________________________________
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
   $tid = $_GET['tid'];
} else {
   $tid = FALSE;
}


 $sql = "SELECT `rounds` FROM `tournament` WHERE id = '$tid'";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rnd = $row["rounds"];
        }
        }
        else echo "No Tournament Found";

//some query to get # of rounds
$round_ct = $rnd;
for($i=1; $i <= $round_ct; $i++) {
  $rounds[$i] = get_round($tid,$i);
}

$best_4 = array();
$max_rounds = 0;
foreach ($rounds[1] as $key => $val){
    $row_tot = 0;
    $rounds_new = array();
    $round_cnt = 0;
    foreach($rounds as $round) {
        if($round[$key] != NULL) {
            $row_tot += $round[$key];
            $rounds_new[] = $round[$key];
            $round_cnt += 1;
        }
    }
    if($max_rounds < $round_cnt) $max_rounds = $round_cnt;
    $best_4[$key] = array('total'=>$row_tot,'rounds'=>$rounds_new);
}

function cmp($a, $b)
{
    return $a["total"] > $b["total"];
}

uasort($best_4, "cmp");
//var_dump($best_4);
echo "Best 4";
echo "<table class='table table-hover'>";
echo '<tr><th>Place</th><th>Team</th>';
//for($i=1; $i <= $max_rounds; $i++) echo '<th>Round '.$i.'</th>';
echo '<th>Total</th></tr>';

$place=1;
foreach ($best_4 as $key => $val)  {
    if(count($val['rounds']) == $max_rounds) {
        echo "<tr><td>".$place."</td><td>".$key."</td>";
       // for($i=0; $i < $max_rounds; $i++) {
        //    echo '<td>'.$val['rounds'][$i].'</td>';
        //}
        echo "<td>".$val['total']."</td></tr>";
        $place++;
    }
 }
 echo "</table>";

}

?>
 </div>

   


  <?php

              if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}


  ?>
              
              




            
     <h4 class="card-header">Course Stats</h4>


<?php
    echo "<table class='table' width='80%'>";
    echo "<tr><td> Hole #</td><td>Average Score</td><td>Par</td>
                        <td>Yardage</td></tr>";
    for ($x = 1; $x <= 18; $x++) {
        $sql = "SELECT avg(hole$x) as h$x FROM scores
        WHERE tid = $tid AND status <= '5'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td> $x</td><td>";
            echo round ($row["h$x"], 1);
            echo "<td>";
            echo ${"h$x"};
            echo "<td>";
            echo ${"y$x"};
            echo "</td></tr>";
          }
    }
    else {
        echo "no stats available ";
    }
} 
    echo "</table>";
?>
       <div class="col-lg-12 portfolio-item">   
            <h4 class="card-header">Individual Results</h4> 
        <div class="card-body">

              <p class="card-text">
            <?php
        if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
    
//Get number of Team to Search For.

// echo $tid;

//    ($par + (((scores.total-$rating)*113/$slope)))  as adj_score,



  $sql = "SELECT * from tournament WHERE `id` = '$tid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
     
          echo "<tableclass='table table-hover'>";
while($row = mysqli_fetch_array( $result )) {
                  
                  
                  }

   $sql = "SELECT scores.pid, scores.tmid, scores.tid, scores.total as rnd1, 
   scores.total as rnd2, sum(scores.total) - scores.total as rnd1, 
   sum(scores.total) as total, scores.last6, scores.last3, manualscore, 
   roster.pid, roster.player_1, team.tmid, team.school, roster.grade, 
   sum(round) as round FROM `scores` 
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE scores.tid = $tid AND `status` <= '5' 
   GROUP by scores.pid 
   ORDER BY `round` DESC, `total`, `manualscore`, `back`, `last6`, `last3`, hole18, `abv` ASC"; 
  
                          
$result = mysqli_query($conn,$sql)
                         
or die ('Error in Query Try Again:-- Get Players' . mysqli_error());   


// asort($standings);

//display the sorted players according to rank
$rank = 1;
$tie_rank = 0;
$prev_score = -1;

   echo  "<table class='table table-hover' style='width:100%'><th style='width:20%'>" . Place . "</th><th style='width:60%'>" . Name . "</th>
        <th style='width:10%'>" . School . "</th><th style='width:10%'>" . Total . "</th>";

foreach ($result as $row) {
    if ($row['total'] != $prev_score) {  //this score is not a tie
        $count = 0;
        $prev_score = $row['total'];
        echo  "<table style='width:100%'><td style='width:10%'>" . $rank . "</td>
        <td style='width:50%' color='black'>" . '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'-'.$row['grade'].'</font></a>' . "</td>
        <td style='width:30%'>" . '<a href="teamStats.php?tmid='.$row['tmid'].'&db='.$db.'">'.$row['school'].'</font></a>' . "</td>

        <td style='width:10%'>" .  $row['total'] . "</td>";
    
    } else { //this score is a tie
        $prev_score = $row['total'];
        if ($count++ == 0) {
            $tie_rank = $rank-1;
        }
        
        echo "<tr><td>T" . $tie_rank . "</td>
            <td style='width:30%'>" . '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'-'.$row['grade'].'</font></a>' . "</td>
            <td style='width:30%'>" . '<a href="teamStats.php?tmid='.$row['tmid'].'&db='.$db.'">'.$row['school'].'</font></a>' . "</td>
     
            <td>" .  $row['total'] . "</td></tr>";
    }  
    $rank++;
}  echo "</table>";  
?> 
               
               <div class="col-lg-12 portfolio-item">   
            <h4 class="card-header">Individual Results</h4> 
<h4 class="card-header">Sorted by Team Results</h4>
<?php
        if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
    
//Get number of Team to Search For.

// echo $tid;

//    ($par + (((scores.total-$rating)*113/$slope)))  as adj_score,



  $sql = "SELECT * from tournament WHERE `id` = '$tid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
     
          echo "<tableclass='table table-hover'>";
while($row = mysqli_fetch_array( $result )) {
                  
                  
                  }
 
   $sql = "SELECT scores.pid, scores.tmid, scores.tid, scores.total as rnd1, 
   scores.total as rnd2, sum(scores.total) - scores.total as rnd1, 
   sum(scores.total) as total, scores.last6, scores.last3, manualscore, 
   roster.pid, roster.player_1, team.tmid, team.school, roster.grade, 
   sum(round) as round FROM `scores` 
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE scores.tid = $tid AND `status` = '1' 
   GROUP by scores.pid 
   ORDER BY team.tmid, `total`, `manualscore`, `back`, `last6`, `last3`, `abv` ASC"; 
  
                          
$result = mysqli_query($conn,$sql)
                         
or die ('Error in Query Try Again:-- Get Players' . mysqli_error());   


// asort($standings);

//display the sorted players according to rank
$rank = 1;
$tie_rank = 0;
$prev_score = -1;

   echo  "<table class='table table-hover' style='width:100%'><th style='width:50%'>" . Name . "</th>
        <th style='width:30%'>" . School . "</th><th style='width:20%'>" . Total . "</th>";

foreach ($result as $row) {
    if ($row['total'] != $prev_score) {  //this score is not a tie
        $count = 0;
        $prev_score = $row['total'];
        echo  "<table style='width:100%'>
        <td style='width:50%' color='black'>" . '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'-'.$row['grade'].'</font></a>' . "</td>
        <td style='width:30%'>" . '<a href="teamStats.php?tmid='.$row['tmid'].'&db='.$db.'">'.$row['school'].'</font></a>' . "</td>

        <td style='width:20%'>" .  $row['total'] . "</td>";
    
    } else { //this score is a tie
        $prev_score = $row['total'];
        if ($count++ == 0) {
            $tie_rank = $rank-1;
        }
        
        echo "<tr>
            <td style='width:30%'>" . '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'-'.$row['grade'].'</font></a>' . "</td>
            <td style='width:25%'>" . '<a href="teamStats.php?tmid='.$row['tmid'].'&db='.$db.'">'.$row['school'].'</font></a>' . "</td>
     
            <td>" .  $row['total'] . "</td></tr>";
    }  
    $rank++;
}  echo "</table>";  
?> 


</div></div></div></body></html>   
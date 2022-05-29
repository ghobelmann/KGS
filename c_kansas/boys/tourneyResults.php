<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);


 session_start();
           if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
//echo $tid;


//On page 1
$_SESSION['tid'] = $tid;



include_once("databaseconnect.php");
            
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}

  $sql = "SELECT tournament, id, image FROM tournament
  WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. " ";   
     
        $school = $row['school'];
        $image = $row['image'];
        $trny = $row['tournament'];
         echo "$trny Tournament Results</h1></font>";
     //  echo $image;
    }
} else {
    echo "no players";
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

    <title>Team Rankings</title>

    <!-- Bootstrap core CSS -->
    <link href="../../global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../global_style/vendor/css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  

 
     <div class="row">
       
   
     
     
     
        <div class="col-lg-4 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header">Varsity Team Results</h4>
            <div class="card-body">
            
              <p class="card-text">
              
                    <?php


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}





     

$sql = "SELECT * FROM par WHERE course = $tid";
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
        $hfront = $row["front"];
        $back = $row["back"];
        $front_par = $h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 + $h8 + $h9;
        $back_par = $h10 + $h11 + $h12 + $h13 + $h14 + $h15 + $h16 + $h17 + $h18;
        $total_par = $front_par + $back_par;
    }
    
   
} else {
    echo "0 results";
}
 
$sql = "SELECT * FROM yardage WHERE course = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $y1 = $row["h1"];
        $y2 = $row["h2"];
        $y3 = $row["h3"];
        $y4 = $row["h4"];
        $y5 = $row["h5"];
        $y6 = $row["h6"];
        $y7 = $row["h7"];
        $y8 = $row["h8"];
        $y9 = $row["h9"];
        $y10 = $row["h10"];
        $y11 = $row["h11"];
        $y12 = $row["h12"];
        $y13 = $row["h13"];
        $y14 = $row["h14"];
        $y15 = $row["h15"];
        $y16 = $row["h16"];
        $y17 = $row["h17"];
        $y18 = $row["h18"];
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
    
   
} 


?>
 



   <?php




 
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tid'";

$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);
                
while($tid = mysqli_fetch_assoc($tournaments))

{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
AND `noteam` <> 'yes' AND `jv` != 'JV' AND cteam != 'JV2'
AND `round` = '1'
AND `dq` != 'DQ' AND `dq` != 'WD' " ;
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
$sql2 = "SELECT pid, tmid, total, tid  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `tid` LIKE '".$tid['tid']."' 
AND `noteam` <> 'yes' AND `jv` != 'JV' AND cteam != 'JV2' 
AND `round` = '1'
AND `dq` != 'DQ' AND `dq` != 'WD'
ORDER BY `total` ASC";
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

echo '<table>';
echo '<th>Place</td><th><center>Team</td><th>Score</td><tr>';

asort($totals); $place=1; 
foreach ($totals as $key => $val)  { 
    echo "<tr><td>".$place."</td><td>".$key."</td><td>".$val."</td></tr>";
     $place++;
 }  

 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($tid);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);




?>
</div>  </div> </div> 


        <div class="col-lg-4 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header">Round 2 Team Results</h4>
            <div class="card-body">
            
              <p class="card-text">
              
              
   <?php

//4man


//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tid'";

$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);
                
while($tid = mysqli_fetch_assoc($tournaments))

{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
AND `noteam` <> 'yes' AND `jv` = 'JV' 
AND `round` = '2'
AND `dq` != 'DQ' AND `dq` != 'WD' " ;
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
$sql2 = "SELECT pid, tmid, total, tid  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `tid` LIKE '".$tid['tid']."' 
AND `round` = '2'
AND `noteam` <> 'yes' AND `jv` = 'JV' AND `dq` != 'DQ' AND `dq` != 'WD'
ORDER BY `total` ASC";
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
}
//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table>';
echo '<th valign="top">Team</td><th valign="top">Score</td><tr>';
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

?>
              
 </div>  </div> </div> 
 
  <div class="col-lg-4 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header">Multiple Rounds</h4>
            <div class="card-body">
            
              <p class="card-text">
              
  <?php





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
        $sql = "SELECT scores.total, scores.tmid, team.school FROM scores
        INNER JOIN team on scores.tmid = team.tmid
        WHERE scores.tid = '".$tid['tid']."' AND `jv` != 'JV' AND `cteam` != 'JV2'
        AND `noteam` <> 'yes' AND `round` = '".$round."'
        AND `dq` != 'DQ'   AND `dq` != 'WD'" ;
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
                $sql2 = "SELECT pid, tmid, total, tid  FROM `scores`
                WHERE `tmid` LIKE '".$team['tmid']."'
                AND `tid` LIKE '".$tid['tid']."'
                 AND `noteam` <> 'yes' AND `jv` != 'JV' AND `cteam` != 'JV2'
                AND `dq` != 'DQ'   AND `dq` != 'WD' AND `round` = '".$round."'
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
        else echo "No Tounrmanent Found";

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




//_____________________________________________
//used to show you the structure of the final output $totals is the variable





?>
              
 </div>  </div> </div> </div>      
    
    
     <div class="row">
        <div class="col-lg-12 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header">Round 1 Individual Results</h4>
            <div class="card-body">
            
              <p class="card-text">
 <?php
 
 
     if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
 
$NoOfColumns = 4;
$dataArr = $matrixArr = array();

$query = "SELECT scores.pid, scores.tmid, scores.tid, scores.front,
  scores.jv, scores.cteam, 
    scores.back, scores.total, team.abv, 
    scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.school
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$tid' AND `dq` != 'DQ'  
   AND `round` = '1' AND `dq` != 'WD'
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";
$result = mysqli_query($conn, $query) or die("error getting data");
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    array_push($dataArr, $row);
}
$totalCnt = count($dataArr);
$NoOfRows = floor($totalCnt / $NoOfColumns);
if ($havRem = $totalCnt % $NoOfColumns) {
    $NoOfRows++;
}
$matrixArr = array_chunk($dataArr , $NoOfRows);

//echo "<pre>";print_r($dataArr);echo "</pre>";
//echo "<pre>";print_r($matrixArr);echo "</pre>";

echo "<table>";
for ($row = 0; $row < $NoOfRows; $row++) {
    echo "<tr>";
    $srno = $row+1;
    for ($col = 0; $col < $NoOfColumns; $col++) {        
    echo'<td align="center" valign="top">';
            if ($srno<=$totalCnt) {
             echo   '<table   cellspacing="0" cellpadding="0" style="border-collapse: separate;  gray; border-spacing: 1px;">
                    <tr align="center" valign="top">';
                            echo '<td class="dateis" align="left" valign="top" width="15px"> <strong>'.$srno.'</strong> </td>';
                            echo '<td class="dateis" align="left" valign="top" width="200px">'.$matrixArr[$col][$row]['player_1'].'</td>';
                            echo '<td class="dateis" align="left" valign="top" width="20px">'.$matrixArr[$col][$row]['abv'].'</td>';
                            echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['total'].'</td>'; 
                             echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['jv'].'</td>';
                             echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['cteam'].'</td>  
                                </tr>';

                   echo'</tr>
                </table>';
            }
    echo '</td>';
    $srno = $srno+$NoOfRows;
}
echo "</tr>";
}
echo "</table>";
     ?>
     
     
     
                   <h4 class="card-header">Round 2 Individual Results</h4>
            <div class="card-body">
            
              <p class="card-text">
 <?php
 
 
     if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
 
$NoOfColumns = 4;
$dataArr = $matrixArr = array();

$query = "SELECT scores.pid, scores.tmid, scores.tid, scores.front,
  scores.jv, scores.cteam, 
    scores.back, scores.total, team.abv,
    
    scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.school
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$tid' AND `dq` != 'DQ' 
   AND `round` = '2'  AND `dq` != 'WD'
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";
$result = mysqli_query($conn, $query) or die("error getting data");
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    array_push($dataArr, $row);
}
$totalCnt = count($dataArr);
$NoOfRows = floor($totalCnt / $NoOfColumns);
if ($havRem = $totalCnt % $NoOfColumns) {
    $NoOfRows++;
}
$matrixArr = array_chunk($dataArr , $NoOfRows);

//echo "<pre>";print_r($dataArr);echo "</pre>";
//echo "<pre>";print_r($matrixArr);echo "</pre>";

echo "<table>";
for ($row = 0; $row < $NoOfRows; $row++) {
    echo "<tr>";
    $srno = $row+1;
    for ($col = 0; $col < $NoOfColumns; $col++) {        
    echo'<td align="center" valign="top">';
            if ($srno<=$totalCnt) {
             echo   '<table   cellspacing="0" cellpadding="0" style="border-collapse: separate;  gray; border-spacing: 1px;">
                    <tr align="center" valign="top">';
                            echo '<td class="dateis" align="left" valign="top" width="15px"> <strong>'.$srno.'</strong> </td>';
                            echo '<td class="dateis" align="left" valign="top" width="200px">'.$matrixArr[$col][$row]['player_1'].'</td>';
                            echo '<td class="dateis" align="left" valign="top" width="20px">'.$matrixArr[$col][$row]['abv'].'</td>';
                            echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['total'].'</td>'; 
                             echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['jv'].'</td>';
                             echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['cteam'].'</td>  
                                </tr>';

                   echo'</tr>
                </table>';
            }
    echo '</td>';
    $srno = $srno+$NoOfRows;
}
echo "</tr>";
}
echo "</table>";
     ?>
     
     
     
                <h4 class="card-header">Overall Individual Results</h4>
            <div class="card-body">
            
              <p class="card-text">
 <?php
 
 
     if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
 
$NoOfColumns = 4;
$dataArr = $matrixArr = array();

$query = "SELECT scores.pid, count(scores.pid) as cpid,
scores.tmid, scores.tid, sum(scores.front) as front,
  scores.jv, scores.cteam, 
    sum(scores.back) as back, sum(scores.total) as total, team.abv,
    
    scores.last6, scores.last3,
   roster.pid, roster.player_1, team.tmid, team.school
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$tid' AND `dq` != 'DQ' 
   AND `dq` != 'WD' AND `cpid` = '2'
   GROUP by scores.pid
  ORDER BY round desc, `total`, `manualscore`, `back`, `last6`, `last3` ASC";
$result = mysqli_query($conn, $query) or die("error getting data");
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    array_push($dataArr, $row);
}
$totalCnt = count($dataArr);
$NoOfRows = floor($totalCnt / $NoOfColumns);
if ($havRem = $totalCnt % $NoOfColumns) {
    $NoOfRows++;
}
$matrixArr = array_chunk($dataArr , $NoOfRows);

//echo "<pre>";print_r($dataArr);echo "</pre>";
//echo "<pre>";print_r($matrixArr);echo "</pre>";

echo "<table>";
for ($row = 0; $row < $NoOfRows; $row++) {
    echo "<tr>";
    $srno = $row+1;
    for ($col = 0; $col < $NoOfColumns; $col++) {        
    echo'<td align="center" valign="top">';
            if ($srno<=$totalCnt) {
             echo   '<table   cellspacing="0" cellpadding="0" style="border-collapse: separate;  gray; border-spacing: 1px;">
                    <tr align="center" valign="top">';
                            echo '<td class="dateis" align="left" valign="top" width="15px"> <strong>'.$srno.'</strong> </td>';
                            echo '<td class="dateis" align="left" valign="top" width="200px">'.$matrixArr[$col][$row]['player_1'].'</td>';
                            echo '<td class="dateis" align="left" valign="top" width="20px">'.$matrixArr[$col][$row]['abv'].'</td>';
                            echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['total'].'</td>'; 
                             echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['jv'].'</td>';
                             echo '<td class="dateis" align="center" valign="top" width="50px">'.$matrixArr[$col][$row]['cteam'].'</td>  
                                </tr>';

                   echo'</tr>
                </table>';
            }
    echo '</td>';
    $srno = $srno+$NoOfRows;
}
echo "</tr>";
}
echo "</table>";
     ?>
     
     
     
     
     
     

              <h4 class="card-header">DNF</h4>

              
              
          <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;
  $sql = "SELECT * from tournament WHERE `id` = '$tid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
  
          echo "<table class='table'>";
while($row = mysqli_fetch_array( $result )) {

         } 
    $sql = "SELECT  scores.dq, scores.pid, scores.tmid,
   roster.pid, roster.player_1, team.tmid, team.school,
   team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$tid' AND `dq` != '1'";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo "<tr><td colspan='6' align='center'></td></tr>
<tr><th><center> Place </th><th><center> Player Name </th> <th><center> Team</th><b><th><center>Status</th> 
</b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</a>';
  echo "</td><td><b><CENTER>"; 
  echo $row['dq'];
  echo "</td>"; 
   $i++;
} 
echo"</table>";
         
?>






</div> </div>  </div>           </div>

</p>
        
 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

 <?php
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 
$round = '2';
?>

        <!-- Content Column -->
        
        
<?php
include_once("../databaseconnect.php");
    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  
//echo $trny; 
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}

$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "b_2020Main");
  
    include_once("cards_menu.php");   
    
   // echo "Percent Done";
   

   
    
    $sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };

$sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };


$query = "SELECT *, team.abv FROM scores 
  INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE tid = $trny AND card = $card AND round = 2";
$result = mysqli_query($connect, $query);  
      
   
?>

<html>  
 <head>  
          <title>Scorecard</title> 
          


          <link rel="stylesheet" href="../includes/bootstrap.min.css" />       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       
        <script src="../includes/jquery.tabledit.js"></script> 
    </head> 
    

    <body>  
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <div style="background-color:hsla(9, 10%, 64%, 0.5)">
    <h1 align="center"><?php echo $tourney; ?> Scorecard   # 
    <?php echo $card; ?></h1>   
    <center> 
  <input class='my-btn' type='button' onclick='location.reload();' value='Calculate Page' /></h3>
   </center>

 </div>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>1</th> <th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
       <th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th> <th>18</th>
      <th>F</th><th>B</th> <th>T</th> <th>Status</th><th>Click Pen to Enter Scores</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
       <td>'.$row["player_1"].'-'.$row["abv"].'</td>
        <td hidden>'.$row["pid"].'</td>     
       <td>'.$row["hole1"].'</td>
        <td>'.$row["hole2"].'</td>
         <td>'.$row["hole3"].'</td>
          <td>'.$row["hole4"].'</td>
           <td>'.$row["hole5"].'</td>
            <td>'.$row["hole6"].'</td>
             <td>'.$row["hole7"].'</td>
              <td>'.$row["hole8"].'</td>
               <td>'.$row["hole9"].'</td>
                <td>'.$row["hole10"].'</td>
                 <td>'.$row["hole11"].'</td>
                  <td>'.$row["hole12"].'</td>
                   <td>'.$row["hole13"].'</td>
                    <td>'.$row["hole14"].'</td>
                     <td>'.$row["hole15"].'</td>
                      <td>'.$row["hole16"].'</td>
                       <td>'.$row["hole17"].'</td>
                        <td>'.$row["hole18"].'</td>  
                        <td hidden>'.$row["tid"].'</td>
                         <td>'.$row["front"].'</td>
                          <td>'.$row["back"].'</td>
                           <td>'.$row["total"].'</td>  
                              <td>'.$row["status"].'</td>
                          
                            
                           
      </tr>
      ';
     }



     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html> 
<script>  


$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action2.php',
      columns:{
       identifier:[1, 'pid'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18'], [20, 'tid'], [24, 'status']]
      },
      	autoFocus: true,
      restoreButton:true, 
      autoRefresh: true,
         deleteButton: false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      
            {
        javascript:location.reload(true) 
      }  
        
      

     });
      
});  
 </script>  

 
 

 <div>

 
   <h4>Status Codes: 1 = Varsity on a Team, 2 = Varsity Individual, 3 = JV, 4 = C team 
   5 = DQ, 6 = WD</h4>
</div>
<hr>



        
    <?php
         if ($rounds > 1) {
      echo   "<div class='col-lg-3 col-sm-4 mb-4'>";
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND total > 0 AND round ='1'
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table class='table'>";
echo '<td colspan="3" align="center"><h3>Round 1</h3>';
echo "<tr><th><center> Place </th><th><center>Name </th> 
<th><center> Abv</th><b><th><center> F</th> 
</b><b><th><center>B</th><th><center> T</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
     } else {} 
?>        
        </div>
        
        
               
         
     <?php
       if ($rounds > 1) {
      echo   "<div class='col-lg-3 col-sm-4 mb-4'>";
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND total > 0 AND round ='2'
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table class='table'>";
echo '<td colspan="3" align="center"><h3>Round 2</h3>';
echo "<tr><th><center> Place </th><th><center>Name </th> 
<th><center> Abv</th><b><th><center> F</th> 
</b><b><th><center>B</th><th><center> T</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
   } else {
   }    
?>        
        </div>


                     
         
     <?php
       if ($rounds > 1) {
      echo   "<div class='col-lg-3 col-sm-4 mb-4'>";
  
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT count(scores.pid) as count, scores.id, scores.pid, scores.tmid, scores.tid, sum(scores.total) as total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   
   WHERE scores.tid = $tid AND total > 0
   GROUP by scores.pid
  ORDER BY count desc, `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table class='table'>";
echo '<td colspan="3" align="center"><h3>Total</h3>';
echo "<tr><th><center> Place </th><th><center>Name </th> 
<th><center> Abv</th><th><center>36 Hole Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
    } else {
    
          echo   "<div class='col-lg-6 col-sm-4 mb-4'>";
  
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT count(scores.pid) as count, scores.id, scores.pid, scores.tmid, scores.tid, sum(scores.front) as front, 
    sum(scores.back) as back, sum(scores.total) as total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   
   WHERE scores.tid = $tid AND total > 0
   GROUP by scores.pid
  ORDER BY count desc, `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table class='table'>";
echo '<td colspan="3" align="center"><h3>Total</h3>';
echo "<tr><th><center> Place </th><th><center>Name </th> 
<th><center> Abv</th><b><th><center> F</th> 
</b><b><th><center>B</th><th><center> T</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td font color='black'><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
    
    }
?>        
        </div>
        
        
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

?>



</div>
 </body></html>
 
 
 
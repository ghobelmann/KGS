 <?php
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 
$round = '1';
?>

        <!-- Content Column -->
        
        
<?php
include_once("dbconnectg.php");
    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  
//echo $trny; 
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}



     if($perm != '9')
   // if there is no valid session
{
    header("Location:glogin-system/indexg.php");
}

 $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "g_2020Main");
  
 include_once("cards_menug.php");   
    
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
   WHERE tid = $trny AND card = $card AND round = 1";
$result = mysqli_query($connect, $query);  
      
   
?>

<html>  
 <head>  
          <title>Scorecard</title> 
          
                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
    
                         
              <link rel="stylesheet" href="../includes/bootstrap.min.css" />       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                  
        <script src="../includes/jquery.tabledit.min.js"></script> 
    </head> 
    

    <body>  
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <div style="background-color:hsla(1, 0%, 0%, 1)">
    <h1 align="center"><?php echo $tourney; ?> Scorecard   # 
    <?php echo $card; ?></h1>   
    <center> 
  <input class='btn btn-danger' type='button' onclick='location.reload();' value='Calculate Page' />
    <input class='btn btn-danger' type='button' onclick="location.href='../indexg.php';" value='Go Home' /></h3></h3>      
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
       <td>'.$row["player_1"].'</td>   
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
      url:'actiong.php',
      columns:{
       identifier:[1, 'pid'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18'], [20, 'tid'], [24, 'status']]
      },
          autoSelect: true,
      	autoFocus: true,
        editButton: true,
      restoreButton: true, 
      deleteButton: true,
            
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



         <div class="col-lg-3 col-sm-4 mb-4">
    <?php

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
      
?>        
        </div>
        
        
                <div class="col-lg-3 col-sm-4 mb-4">
         
     <?php
    
        
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
       
?>        
        </div>


                        <div class="col-lg-3 col-sm-4 mb-4">
         
     <?php
    
  
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
  
?>        
        </div>
        
        
           <div class="col-lg-2 col-sm-4 mb-4">
    <?php




 
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$trny'";

$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);
                
while($trny = mysqli_fetch_assoc($tournaments))

{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
AND status ='1' " ;
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
WHERE `tmid` LIKE '".$team['tmid']."' AND `tid` LIKE '".$trny['tid']."' 
AND status ='1'
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

echo '<table class="table">';
echo '<tr> <td colspan="3" align="center"><h3>Team Scores</h3>';
echo '<tr><th>Place</td><th><center>Team</td><th>Score</td></tr>';

asort($totals); $place=1; 
foreach ($totals as $key => $val)  { 
    echo "<tr><td>".$place."</td><td>".$key."</td><td><center>".$val."</td></tr>";
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
        


</div>
 </body></html>
 
 
 
 
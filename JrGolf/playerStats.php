
  <!--

1. 18 Hole Varsity Tournament
 2. 36 Hole Varsity Tournament
 3. 9 Hole Varisty
 4. Dual
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













<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
                  

  
  
  <?php

    error_reporting(E_ALL);
 
  //include("header.php");

 if(!empty($_GET['db']))
{
$db = $_GET['db'];
}
//echo $db;

$dataBase = $db;

switch ($dataBase) {
    case "boys":
        include_once("databaseconnect.php");    
        break;
    case "girls":
        include_once("dbconnectg.php"); 
        break;
    default:
        echo "<h1>Database Unknown</h1>";
}
include("analyticstracking.php");


 
?> 

<h4 class="card-header bg-dark">  
<center>       
<a href="index.php?db=boys">  Home</a></h4>
</center>       
    
<script>
function goBack() {
  window.history.back();
}
</script>
    
    <button class="block" onclick="goBack()">Go Back</button>
  

      
    </head>
  <body>


<?php

//Get number of Name to Search For.
if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}
// $pid;
//$output = "http://www.kansasgolfscores.com/playerStats.php?pid=$pid&db=boys";

?>  


    <?php
    /*
        // no limit they did the query to get all result
        $sql = "SELECT avg(total) as total, pid
        FROM scores2 
        WHERE status = 1 
        GROUP by pid ORDER BY total ASC";
        $result = $conn->query($sql);
        $rows = '';

        $data = array();
        if (!empty($result))
           $rows = $result->num_rows;   
        else
            $rows = '';  
  

        if (!empty($rows)){
           while($row = $result->fetch_assoc()) {
                $data[] = $rows;
              
            }
        }
     

        // now they did a php loop to get the user rank by user id
        $rank = 1;
        foreach($data as $item){
            if ($item['pid'] == $pid){
                return $rank;
            }
            ++$rank;
           
        }
        echo $rank;  */
   
      
      ?>
 
 
  <?php
  $sql = "SELECT roster.pid, roster.player_1, roster.tmid,
  team.image, roster.grade, team.school FROM roster 
  INNER JOIN team on roster.tmid = team.tmid
  WHERE pid = $pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div align='center' ><h1><font color ='black'> " . $row["player_1"]. "</h1></font>";
        $name = $row['player_1'];
       echo "<h1><font color ='black'> " . $row["school"]. " High School </h1></font>";
             $tmid = $row['tmid'];
        $grade = $row['grade'];
        $league = $row['league'];
        $classification = $row['classification'];
        $image = $row['team.image'];
        $pid = $row['pid'];
       if ($grade > '12') { 
         echo "<h1><font color ='black'> Graduated </h1></font>";
             } else {
             echo $league;
             echo $classification;
             echo $image;
           echo "<h1><font color ='black'> ". $row['grade']. "th Grade</h1></font>";  
             }
     // echo $pid;
    }        
} else {
    echo "0 results";
}
?>


    <!-- Page Content -->
    <div class="container">
 

               
               
               
               
               


      <!-- Portfolio Item Heading
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>
                        -->
      <!-- Portfolio Item Row -->

      <!-- /.row  -->
      
      
      
              <div class="col-md-4">
        
        
                  <a href="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>"> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/uploads/team/<?php  echo $image; ?>" alt="<?php  echo $image; ?>"> </a>
            
             
  
        </div>
        
        
        
                     <hr>
           <h4 class="mt-4 mb-3">
            <div class="container">
        <p class="m-0 text-center text-white">
      </div>
      
      
      <!-- /.container -->
 <?php
  $sql = "SELECT roster.pid, roster.player_1, roster.tmid,
 roster.grade, team.school FROM roster 
  INNER JOIN team on roster.tmid = team.tmid
  WHERE pid = $pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<div align='center' ><h1><font color ='black'> " . $row["player_1"]. "</h1></font>";
        $name = $row['player_1'];
     //   echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. "</h1></font>";
        $tmid = $row['tmid'];
      //  echo $grade = $row['grade'];
       // echo $image = $row['image'];
        $pid = $row['pid'];
     // echo $pid;
    }        
} else {
    echo "0 results";
}
?>
 


       </p>

              </h4>
              <p class="card-text">
              
              
              
              
              
                 
  
  <h1>Stats and Scores Current Season</h1>  
<?php
   echo "<br>";
 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
(sum(front) / count(*)) as avgfront,
(sum(back) / count(*)) as avgback, 
(sum(total) / count(*)) as avgtotal, 
scores.pid, scores.tmid, scores.tid, 
min(total) as min
  FROM scores 
INNER JOIN roster ON scores.tmid = roster.tmid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id 
WHERE scores.pid = $pid and front > 0 and back > 0
AND scores.status <= '2'
AND tournament.status <= '2'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table class='table'>";
echo '<thead class="thead-dark">';
echo "<tr><th scope='col'><center><h5>Avg Front<font color='white'> </th><th scope='col'><center><h5>Avg Back<font color='white'> </th>
<th scope='col'><center><h5>Avg Total<font color='white'> </th> 
<th scope='col'><center><h5>Low Score</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h1><CENTER>"; 
	echo round ($row['avgfront'], 1);
	echo "</td><td><h1><CENTER>"; 
	echo round ($row['avgback'], 1);
	echo "</td><td><h1><CENTER>"; 
	echo round ($row['avgtotal'], 1);
	echo "</td><td><h1><CENTER>";
	echo round ($row['min'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
	$i++;
} 
} else {
    echo "0 results";
}

?> 
   <hr>             
            <?php
 /*      
      $query = $mysqli->prepare("SELECT count(*)FROM scores2 
      WHERE total IN (select avg(total)as total WHERE total < 80 AND status <= 2 GROUP by pid) ");
$query->execute();
$query->store_result();

$rows = $query->num_rows;

echo $rows;
*/
?>  
    <div class="row">



        <div class="col-md-4 col-sm-6 mb-4">
       
    <?php    /*
$sql = ("select pid, total, rank
from ( select pid, status, total, @rank := @rank + 1 as rank 
from ( select pid, status, avg(total) as total 
from scores 
WHERE status = 1 
group by pid 
order by avg(total) asc ) t1, (select @rank := 0) t2 ) t3 
where pid = $pid");
       $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table class='table'>";
echo '<thead class="thead-dark">';
echo "<tr><th scope='col'><center><h5>State Rank<font color='white'> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h1><CENTER>"; 
	echo $row['rank']; 
	echo "</table>"; 
	$i++;
} }

    */
?> 
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
  <?php      /*

$sql = ("select pid, total, rank 
from ( select pid, status, total, @rank := @rank + 1 as rank 
from ( select pid, status, avg(total) as total 
from scores 
WHERE status = 1 
group by pid 
order by avg(total) asc ) t1, (select @rank := 0) t2 ) t3 
where pid = $pid");
       $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table class='table'>";
echo '<thead class="thead-dark">';
echo "<tr><th scope='col'><center><h5>Classifcation Rank<font color='white'> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h1><CENTER>"; 
	echo $row['rank']; 
	echo "</table>"; 
	$i++;
} }             */
?> 
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
      
<?php       /*
$sql = ("select pid, total, rank 
from ( select pid, status, total, @rank := @rank + 1 as rank 
from ( select pid, status, avg(total) as total 
from scores 
WHERE status = 1 
group by pid 
order by avg(total) asc ) t1, (select @rank := 0) t2 ) t3 
where pid = $pid");
       $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table class='table'>";
echo '<thead class="thead-dark">';
echo "<tr><th scope='col'><center><h5>League Rank<font color='white'> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h1><CENTER>"; 
	echo $row['rank']; 
	echo "</table>"; 
	$i++;
} }      */
?> 


        </div>
   <hr>     
        

      </div>
      <!-- /.row -->            
              
     <div>         
              
  
  

   
     
  
  <h1>Stats and Scores Career</h1>  
<?php
   echo "<br>";
 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
(sum(front) / count(*)) as avgfront,
(sum(back) / count(*)) as avgback, 
sum(total) / count(*) as avgf, 
scores2.pid, scores2.tmid, scores2.tid, 
min(total) as min
  FROM scores2 
INNER JOIN roster ON scores2.tmid = roster.tmid
LEFT JOIN team on scores2.tmid = team.tmid
LEFT JOIN tournament on scores2.tid = tournament.id 
WHERE scores2.pid = $pid 
AND scores2.status <= '2'
AND tournament.status = '1'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table class='table'>";
echo '<thead class="thead-dark">';
echo "<tr><th scope='col'><center><h5>Avg Front<font color='white'> </th><th scope='col'><center><h5>Avg Back<font color='white'> </th>
<th scope='col'><center><h5>Avg Total<font color='white'> </th> 
<th scope='col'><center><h5>Low Score</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h1><CENTER>"; 
	echo round ($row['avgfront'], 1);
	echo "</td><td><h1><CENTER>"; 
	echo round ($row['avgback'], 1);
	echo "</td><td><h1><CENTER>"; 
	echo round ($row['avgf'], 1);
	echo "</td><td><h1><CENTER>";
	echo round ($row['min'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
	$i++;
} 
} else {
    echo "0 results";
}

?> 
                
              
       
       
       
       
       
       
       
       <!-- Career Stats Start Here------------------------------------>
     <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
 }
  if(!empty($_GET['db']))
{
$db = $_GET['db'];
}

// echo $tid;
  $sql = "SELECT * from scores2 WHERE `pid` = '$pid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
          echo "<div>";
     
          echo '<table class="table-striped"<tr><th s>Tournament </th><th>Status</th><th>Date</th><th><center>-1-</th> <th><center>-2-</th> 
<th><center>-3-</th> <th><center>-4-</th> <th><center>-5-</th> 
<th><center>-6-</th> <th><center>-7-</th> <th><center>-8-</th> <th><center>-9-</th> <b><th>Front</th> </b>
<th><center>-10-</th> <th><center>-11-</th> <th><center>-12-</th> <th><center>-13-</th> <th><center>-14-</th> 
<th><center>-15-</th> <th><center>-16-</th> <th><center>-17-</th> <th><center>-18-</th> <b><th>Back</th>
<th>Total</th></b> </tr>';
while($row = mysqli_fetch_array( $result )) {

         } 
       
    $sql = "SELECT scores2.pid, scores2.tmid, scores2.hole1, scores2.hole2, 
    scores2.hole3, scores2.hole4, scores2.hole5, scores2.hole6, scores2.hole7, 
    scores2.hole8,
  scores2.hole9, scores2.hole10, scores2.hole11, scores2.hole12, scores2.hole13, 
  scores2.hole14, scores2.hole15, scores2.hole16, scores2.hole17, 
  scores2.hole18, scores2.tid, scores2.front, tournament.date, scores2.status,
    scores2.back, scores2.total, tournament.id, scores2.tid, tournament.tournament,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores2`
   INNER JOIN roster on scores2.pid = roster.pid 
   LEFT JOIN team on scores2.tmid = team.tmid
   LEFT JOIN tournament on scores2.tid = tournament.id
   WHERE scores2.pid = $pid 
  ORDER BY `date` DESC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page

// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr >"; 
  echo "<td>"; 
  
  echo '<a href="tourneyResults.php?tid='.$row['tid'].'&db='.$db.'">'.$row['tournament'].'</font></a>';
   echo "<td><center>".$row['status']."</td>"; 
 echo "<td><center>".$row['date']."</td>"; 
 echo "<td><center>".$row['hole1']."</td>"; 
  echo "<td><center>".$row['hole2']."</td>"; 
    echo "<td><center>".$row['hole3']."</td>"; 
      echo "<td><center>".$row['hole4']."</td>"; 
        echo "<td><center>".$row['hole5']."</td>"; 
          echo "<td><center>".$row['hole6']."</td>"; 
            echo "<td><center>".$row['hole7']."</td>"; 
              echo "<td><center>".$row['hole8']."</td>"; 
                echo "<td><center>".$row['hole9']."</td>"; 
                  echo "<td><center>".$row['front']."</td>"; 
                  echo "<td><center>".$row['hole10']."</td>"; 
                    echo "<td><center>".$row['hole11']."</td>"; 
                      echo "<td><center>".$row['hole12']."</td>"; 
                        echo "<td><center>".$row['hole13']."</td>"; 
                          echo "<td><center>".$row['hole14']."</td>"; 
                            echo "<td><center>".$row['hole15']."</td>"; 
                              echo "<td><center>".$row['hole16']."</td>"; 
                                echo "<td><center>".$row['hole17']."</td>"; 
                                  echo "<td><center>".$row['hole18']."</td>"; 
                                    echo "<td><center>".$row['back']."</td>"; 
                                    echo "<td><center>".$row['total']."</td>"; 


}
  echo "</table>";
?>







  </p>
  </div>
                                                                                                                   
</center>

      <hr>
      <!-- Related Projects Row -->
      <h3 class="my-4">Overall Round Stats</h3>
      <h4 class="my-4">Goal: Par 72 = 18 Tee Shots = 25% + 18 2nd Shots = 25% + 36 Putts = 50% = Even Par 72. </h4>
      <h4 class="my-4">Note: Normally same number of par 3 and par 5 balance out 2nd shots. </h4>

      <div class="row">

     

        <div class="col-md-4 col-sm-6 mb-4">
               <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(score) as total, 
count(stats.pid) * 18 as holesplayed
FROM stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% Shots - Tee</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['holesplayed'] / $row['total'] , 3) * 100;
  echo "%";
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(score) as total, 
sum(putts) as putts, 
count(stats.pid) * 18 as holesplayed
from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% Shots - Irons/Chipping</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
  echo round (($row['total'] - 
  $row['holesplayed'] - $row['putts']) / $row['total'] , 3) * 100;
  echo "%";
	echo "</td></tr><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(score) as total, 
sum(putts) as putts
FROM stats 
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% Shots - Putting</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['putts'] / $row['total'] , 3) * 100;
  echo "%";
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 



        </div>
   <hr>     
        

      </div>
      <!-- /.row -->
      
      
      
      <!-- Related Projects Row -->
      <h3 class="my-4">Putting Stats</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT avg(putts) as putts
FROM stats 
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Tot Putts Per Round</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['putts'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
               <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(putts) as putts, count(stats.pid) * 18 as holesplayed
 from stats WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Avg Putts Per Hole </th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['putts'] /  $row['holesplayed'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT avg(Tputts) as tputts
from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Avg 3 Putts Per Round </th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['tputts'], 1);
	echo "</td></tr><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT avg(pen) as penalty
from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Avg Penalty Strokes Per Round</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['penalty'], 2);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
    
    
    
      <!-- Related Projects Row -->
      <h3 class="my-4">Hitting Stats</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(tfairways) as totfairways,
sum(fairways) as fairwayshit
from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h4>% Fairways Hit</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['fairwayshit'] / 
  $row['totfairways'], 3) * 100;
  echo "%";
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
               <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
count(stats.pid) * 18 as holesplayed,
sum(gir) as gir 
FROM stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% GIR </th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['gir'] /
  $row['holesplayed'], 3) * 100;
  echo "%";
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(updown) as updowns, sum(updownc) as updownsc
from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% Saved Par on UpDowns</th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['updowns']/$row['updownsc'], 3) * 100;
      echo "%";
	echo "</td></tr><CENTER><h1>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(ss) as ss, sum(ssc) as ssc 
from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% Saved Par on Sand Saves</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['ss']/$row['ssc'], 3) * 100;
      echo "%";
	echo "</td><CENTER><h1>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
    
          <!-- Related Projects Row -->
      <h3 class="my-4">Scoring Stats- Totals for Season</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(ace) as ace,
sum(dbleagle) as dbleagle,
sum(eagle) as eagle from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Aces<font color='white'></font></th> <th><center><h5>DblEag</th> <th><center><h5>Eagles</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center><h1>"; 
	echo round ($row['ace'], 1);
  	echo "</td><td><CENTER><h1>";
    	echo round ($row['dbleagle'], 1);
	echo "</td><td><center><h1>";  
	echo round ($row['eagle'], 1);
	echo "</td>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
               <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(birdie) as birdie,
sum(par1) as par1 from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Birdies<font color='white'>--------</font></th> <th><center><h5>Pars</th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center><h1>"; 
	echo round ($row['birdie'], 1);
  	echo "</td><td><CENTER><h1>"; 
	echo round ($row['par1'], 1);
	echo "</td>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(bogie) as bogie,
sum(doubleb) as doubleb from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Bogeys<font color='white'>--------</font></th> <th><center><h5>Doubles</th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table


	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['bogie'], 1);
  	echo "</td><td><CENTER><h1>"; 
	echo round ($row['doubleb'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(triple) as triple,
sum(other) as other from stats
WHERE stats.pid = $pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Triples<font color='white'>--------</font></th> <th><center><h5>Others</th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['triple'], 1);
  	echo "</td><td><CENTER><h1>"; 
	echo round ($row['other'], 1);
	echo "</td><CENTER><h1>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
    
    
    
    
    
    
    
     
    
      <!-- Related Projects Row -->
      <h3 class="my-4">Placing Stats</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pid, count(place) as top1
FROM stats
WHERE stats.pid = $pid
AND place = '1'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>1st Place Finishes</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['top1'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
               <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pid, count(place) as top5
FROM stats
WHERE stats.pid = $pid
AND place > '1' AND place < 6";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Top 5 Finishes</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['top5'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pid, count(place) as top10
FROM stats
WHERE stats.pid = $pid
AND place > '5' AND place < 11";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Top 10 Finishes</th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['top10'], 1);
	echo "</td></tr><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pid, count(place) as top20
FROM stats
WHERE stats.pid = $pid
AND place > '10' AND place < 21";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Top 20 Finishes</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER><h1>"; 
	echo round ($row['top20'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?>  
     
    </div> </div>
    <!-- /.container 
    
        
            <h4>Scan this image to go to this page on your phone!!</h4> -->   
         
    <?php //  echo "<img src='global_style/vendor/QR/php/qr_img.php?d=$output'>";
     
     
     ?>   
    

    <!-- Footer 
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KansasGolfScores.com 2017</p>
      </div>  

    </footer>  -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <br><br><br>
  </body>

</html>





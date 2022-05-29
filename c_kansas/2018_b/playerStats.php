

                                                                               
<?php

//Get number of Name to Search For.
if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}
//  echo $pid;
$output = "http://www.kansasgolfscores.com/p_kansas/Boys_2018/playerStats.php?pid=$pid";

?>  


<?php

include_once("databaseconnect.php");
include("analyticstracking.php");


?> 
    




 

 <?php
  $sql = "SELECT roster.pid, roster.player_1, roster.tmid,
  roster.image, roster.grade, team.school FROM roster 
  INNER JOIN team on roster.tmid = team.tmid
  WHERE pid = $pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div align='center' ><h1><font color ='black'> " . $row["player_1"]. "</h1></font> <br>";
        $name = $row['player_1'];
        $school = $row['school'];
        $tmid = $row['tmid'];
        $grade = $row['grade'];
        $image = $row['image'];
        $pid = $row['pid'];
     // echo $pid;
    }        
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="../../global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../global_style/vendor/portfolio-item.css" rel="stylesheet">     '
    
    
    <style>  
    body 
     {
    background-image: url("images/footerLight.png");
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100%;
    margin-right: 20px;
    
     }
     
     
     hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 4px;
}
    
    </style>
    
    
                
  </head>

  <body>
  
  

         
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
       <a class="navbar-brand" href="index.php"> Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="teamStats.php?tmid=<?php echo $tmid; ?>">Team Page
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tournaments.php">Tournament Results</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rankings</a>
            </li>
    
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    
   

               
               
               
               
               


      <!-- Portfolio Item Heading
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>
                        -->
      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-4">
        
          <a href="http://admin.kansasgolfscores.com/c_kansas/2018_b/uploads/player/<?php echo $image; ?>"> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/c_kansas/2018_b/uploads/player/<?php echo $image; ?>" alt="<?php echo $image; ?>"> </a>
        </div>

        <div class="col-md-8">
          <h3 class="my-3"><u>Player Profile</u></h3>
    
            <ul><h2>Name: <?php echo $name; ?></ul>
            <ul><h2>School: <?php echo $school; ?></ul>
              <ul><h2>Grade: <?php echo $grade; ?>th</ul>
            
          </ul>
          
          
          <!--   <h3 class="my-3"><u>Tournament Scores</u></h3>    -->
             
                            <?php

   $query = "SELECT scores.total, scores.pid, scores.tid, scores.tmid, 
   tournament.tournament, tournament.date, roster.tmid, tournament.id
   FROM scores 
   INNER JOIN roster on roster.tmid = scores.tmid 
   LEFT JOIN tournament on tournament.id = scores.tid 
   WHERE scores.pid = $pid AND dq != 'WD' and dq != 'DQ' GROUP by tid ORDER by date asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());

 if ($result->num_rows > 0) {
echo '<table border="1" BORDERCOLOR="gray" cellpadding="2">';
echo '<thead class="thead-dark">';
echo '<tr><th><center>Tournament</th><th scope="col"><center>Score</th></tr>';


// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><center>";
	echo '<a href="tourneyResults.php?tid='.$row['tid'].'">'.$row['tournament'].'</a>';
  	echo "</td><td><center>"; 
	echo $row['total']; 
	echo "</td></tr><CENTER>"; 
} 

echo "</thead-dark></table>";

    } 
?>
     

    
       
          </ul>
          
          
      <h4>Scan this image to go to this page on your phone!!</h4>    

           <?php   echo "<img src='../../global_style/vendor/QR/php/qr_img.php?d=$output'>";
     
     
     ?>  
 </div>
        


      </div>
      <!-- /.row -->
                     <hr>
           <h4 class="mt-8 mb-3">
            <div class="container">
        <p class="m-0 text-center text-white">
      </div>
      <!-- /.container -->
      <?php
  $sql = "SELECT pid, player_1 FROM roster WHERE $pid = pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div align='center' ><h3><font color ='black'> Tournament Stats for " . $row["player_1"]. "</h3></font> <br>";
    }
} else {
    echo "no tournaments played yet";
}
?>


<?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
(sum(front) / count(*)) as avgfront,
(sum(back) / count(*)) as avgback, 
sum(front + back) / count(*) as avgf,
min(total) as min, stats.include
  FROM scores 
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id 
LEFT JOIN stats on scores.tid = stats.tid 
WHERE scores.pid = $pid AND include != 'No'
GROUP by scores.pid";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo '<thead class="thead-dark">';
echo "<tr><th scope='col'><center><h5>Avg Front<font color='white'>----- </th><th scope='col'><center><h5>Avg Back<font color='white'>----- </th>
<th scope='col'><center><h5>Avg Total<font color='white'>----- </th>  
<th scope='col'><center><h5>Low Score</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['avgfront'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['avgback'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['avgf'], 1);
	echo "</td><td><CENTER>";
	echo round ($row['min'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
	$i++;
} 
} else {
    echo "No stats entered yet.";
}

?> 


     <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;
  $sql = "SELECT * from scores WHERE `pid` = '$pid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
          echo "<div>";
          echo "<table border='1' cellpadding='6'>";
while($row = mysqli_fetch_array( $result )) {

         } 
       
    $sql = "SELECT scores.pid, scores.tmid, scores.hole1, scores.hole2, 
    scores.hole3, scores.hole4, scores.hole5, scores.hole6, scores.hole7, scores.hole8,
  scores.hole9, scores.hole10, scores.hole11, scores.hole12, scores.hole13, 
  scores.hole14, scores.hole15, scores.hole16, scores.hole17, 
  scores.hole18, scores.tid, scores.front, tournament.date,
    scores.back, scores.total, tournament.id, scores.tid, tournament.tournament,
   roster.pid, roster.player_1, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   LEFT JOIN tournament on scores.tid = tournament.id
   WHERE scores.pid = $pid AND `dq` != 'WD'
  ORDER BY `date` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page

echo "<tr><th s>Tournament </th><th>Date</th><th><center>1</th> <th><center>2</th> 
<th><center>3</th> <th><center>4</th> <th><center>5</th> 
<th><center>6</th> <th><center>7</th> <th><center>8</th> <th><center>9</th> <b><th>Front</th> </b>
<th><center>10</th> <th><center>11</th> <th><center>12</th> <th><center>13</th> <th><center>14</th> 
<th><center>15</th> <th><center>16</th> <th><center>17</th> <th><center>18</th> <b><th>Back</th>
<th>Total</th></b> </tr>";

// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr>"; 
  echo "<td>"; 
  echo '<a href="tourneyResults.php?tid='.$row['tid'].'">'.$row['tournament'].'</font></a>';
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

?>


 <br><br><hr>



      <!-- Related Projects Row -->
      <h3 class="my-4">Overall Round Stats</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT avg(place) as place from stats
WHERE stats.pid = $pid AND include != 'No'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Avg Place</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['place'], 1);
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

$sql = "SELECT sum(score) as total, 
count(stats.pid) * 18 as holesplayed
FROM stats
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['holesplayed'] / $row['total'] , 2) * 100;
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

$sql = "SELECT sum(score) as total, 
sum(putts) as putts, 
count(stats.pid) * 18 as holesplayed
from stats
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
  echo round (($row['total'] - 
  $row['holesplayed'] - $row['putts']) / $row['total'] , 2) * 100;
  echo "%";
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

$sql = "SELECT sum(score) as total, 
sum(putts) as putts
FROM stats 
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['putts'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 



        </div>
        
        

      </div>
      <!-- /.row -->
      
     <hr> 
      
      <!-- Related Projects Row -->
      <h3 class="my-4">Putting Stats</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(putts) as putts, count(pid) as count
FROM stats 
WHERE stats.pid = $pid
AND include != 'No'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Total Putts Per Round</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['putts'] / $row['count'], 1);
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
 from stats
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['putts'] / $row['holesplayed'], 1);
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
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
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
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['penalty'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
    <hr>
    
    
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
WHERE stats.pid = $pid
AND include != 'No'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>% Fairways Hit</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['fairwayshit'] / 
  $row['totfairways'], 2) * 100;
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
WHERE stats.pid = $pid
AND include != 'No'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h4>% GIR </th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h4><CENTER>"; 
	echo round ($row['gir'] /
  $row['holesplayed'], 2) * 100;
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

$sql = "SELECT sum(updown) as updown, sum(updownc) as updownc
from stats
WHERE stats.pid = $pid
AND include != 'No'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Total UpDowns</th>  </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['updown'] /
  $row['updownc'], 2) * 100;
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

$sql = "SELECT sum(ss) as ss, sum(ssc) as ssc 
from stats
WHERE stats.pid = $pid
AND include != 'No'";
//mysqli #2
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<table>";
echo "<tr><th><center><h5>Total Sand Saves</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['ss'] /
  $row['ssc'], 2) * 100;
  echo "%";
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
       <hr>
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
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td><center>"; 
	echo round ($row['ace'], 1);
  	echo "</td><td><CENTER>";
    	echo round ($row['dbleagle'], 1);
	echo "</td><td><center>";  
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
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td>"; 
	echo round ($row['birdie'], 1);
  	echo "</td><td><CENTER>"; 
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
WHERE stats.pid = $pid
AND include != 'No'";
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


	echo "<tr><td>"; 
	echo round ($row['bogie'], 1);
  	echo "</td><td><CENTER>"; 
	echo round ($row['doubleb'], 1);
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

$sql = "SELECT sum(triple) as triple,
sum(other) as other from stats
WHERE stats.pid = $pid
AND include != 'No'";
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
	
	echo "<tr><td>"; 
	echo round ($row['triple'], 1);
  	echo "</td><td><CENTER>"; 
	echo round ($row['other'], 1);
	echo "</td>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
    
    
    
    
                                 <hr>
    
    
     
    
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
AND place = '1'
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
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
AND place > '1' AND place < 6
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
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
AND place > '5' AND place < 11
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
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
AND place > '10' AND place < 21
AND include != 'No'";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['top20'], 1);
	echo "</td><CENTER>"; 
	echo "</table>"; 
} 
} else {
    echo "0 results";
}

?> 

    </div> </div>
    <!-- /.container -->
    
    
    
    

    <!-- Footer 
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KansasGolfScores.com 2017</p>
      </div>  

    </footer>  -->

        <br><br><br>
  </body>

</html>





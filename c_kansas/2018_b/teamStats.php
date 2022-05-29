<?php


session_start();


include_once("databaseconnect.php");
include("analyticstracking.php");

 
?> 
    




<?php

//Get number of Name to Search For.
if(!empty($_GET['tmid']))
{
$tmid = $_GET['tmid'];
}
 $_SESSION['tmid'] = $tmid;
//echo $tmid;

$output = "http://www.kansasgolfscores.com/p_kansas/Boys_2018/teamStats.php?tmid=$tmid";

 //    if($perm != '9')
   // if there is no valid session
//{
 //   header("Location:login-system/index.php");
//}
?>   

 <?php
  $sql = "SELECT team.tmid, users.tmid, users.first_name, users.last_name, image, school FROM team INNER JOIN users on team.tmid = users.tmid WHERE team.tmid = $tmid LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center' ><h1><font color ='black'> " . $row["school"]. " ";
      echo "Team Page</h1></font>";
        $school = $row['school'];
        $tmid = $row['tmid'];
        $first = $row['first_name'];
        $last = $row['last_name'];
        $image = $row['image'];
      // echo $image;
    }
} else {
    echo "no players";
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
               <a class="navbar-brand" href="index.php">Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="teams.php">Team Page
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
        
        
                  <a href="http://admin.kansasgolfscores.com/c_kansas/2018_b/uploads/team/<?php echo $image; ?>"> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/c_kansas/2018_b/uploads/team/<?php echo $image; ?>" alt="<?php echo $image; ?>"> </a>
            
            
  
        </div>

        <div class="col-md-8">
     <!--     <h3 class="my-3"><u>Roster</u></h3>    -->
    
         
          </ul>
          
               <h4 class="my-3"><u>Coach: <?php echo $first; ?> <?php echo $last; ?></u></h4>
             <h4 class="my-3"><u>Roster</u></h4>
             


<?php
      $NoOfColumns = 4;
$dataArr = $matrixArr = array();

$query = "SELECT player_1, pid
   FROM roster
   WHERE tmid = $tmid ORDER by player_1 asc";
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
    echo'<td valign="top">';
            if ($srno<=$totalCnt) {
             echo   '<table cellspacing="2" cellpadding="2" style="border-collapse:collapse;">
                    <tr valign="top">';
                            echo '<td class="dateis" align="left" valign="top"  width="300px"> 
                            
                            <a href="playerStats.php?pid='.$matrixArr[$col][$row]['pid'].'">'.$matrixArr[$col][$row]['player_1'].'</a></td>';
                            echo '<td class="dateis" align="left" valign="top"  width="30px">'.$matrixArr[$col][$row][''].'</td> 
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
     <br>

      </ul>
    
      <h4>Scan this image to go to this page on your phone!!</h4>    
         
    <?php   echo "<img src='../../global_style/vendor/QR/php/qr_img.php?d=$output'>";
     
     
     ?>   
     
        Select New Picture     
 <form action="teamUpload.php?tmid=<?php echo $tmid; ?>" method="POST" enctype="multipart/form-data"> 
  <input type="file" name="file"> Upload New Picture JPG format only.
    <button type="submit" name="submit">Upload Image</button>
    </form> <?php echo $tmid; ?> 
          
        </div>
        
        


      </div>
      <!-- /.row -->
                     <hr>
           <h4 class="mt-4 mb-3">
            <div class="container">
        <p class="m-0 text-center text-white">
      </div>
      <!-- /.container -->
      <?php
  $sql = "SELECT tmid, school FROM team WHERE $tmid = tmid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div align='center' ><h3><font color ='black'> Tournament Stats " . $row["school"]. "</h3></font> <br>";
    }
} else {
    echo "0 results";
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
sum(total) / count(*) as avgf,
min(total) as min
  FROM scores 
INNER JOIN roster ON scores.tmid = roster.tmid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id 
WHERE scores.tmid = $tmid";
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
    echo "0 results";
}

?> 

       </p>

         <h4>Roster and Scoring Stats</h4>
              </h4>
              <p class="card-text">
              




   
<?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *, avg(total) as total, max(total) as max, roster.pid,
min(total) as min, count(total) as count FROM scores
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id
WHERE scores.tmid = $tmid
AND `dq` != 'DQ'   AND `dq` != 'WD' AND total > '0'
GROUP by scores.pid ORDER by total asc";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th>Player</th> <th scope="col">Avg Score</th><th scope="col">High Score</th>
<th scope="col">Low Score</th><th scope="col">Rounds Played</th>
</tr>';


// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="playerStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>"; 
	echo $row['min'];
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td></tr><CENTER>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>




  </p>
  </div>
                                                                                                                   
</center>


      <!-- Related Projects Row -->
      <h3 class="my-4">Overall Round Stats</h3>

      <div class="row">

     

        <div class="col-md-4 col-sm-6 mb-4">
               <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(score) as total, 
count(stats.tmid) * 18 as holesplayed
FROM stats
WHERE stats.tmid = $tmid";
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

        <div class="col-md-4 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(score) as total, 
sum(putts) as putts, 
count(stats.tmid) * 18 as holesplayed
from stats
WHERE stats.tmid = $tmid";
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

        <div class="col-md-4 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sum(score) as total, 
sum(putts) as putts
FROM stats 
WHERE stats.tmid = $tmid";
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
WHERE stats.tmid = $tmid";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['putts'], 2);
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
 from stats WHERE stats.tmid = $tmid";
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
	echo round ($row['putts'] /  $row['holesplayed'], 2);
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
WHERE stats.tmid = $tmid";
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
	echo round ($row['tputts'], 2);
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
WHERE stats.tmid = $tmid";
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
WHERE stats.tmid = $tmid";
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
	
	echo "<tr><td><h4><CENTER>"; 
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
count(stats.tmid) * 18 as holesplayed,
sum(gir) as gir 
FROM stats
WHERE stats.tmid = $tmid";
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
	
	echo "<tr><td><CENTER>"; 
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

$sql = "SELECT sum(updown) as updowns
from stats
WHERE stats.tmid = $tmid";
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
	echo round ($row['updowns'], 1);
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

$sql = "SELECT sum(ss) as ss 
from stats
WHERE stats.tmid = $tmid";
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
	echo round ($row['ss'], 1);
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
WHERE stats.tmid = $tmid";
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
WHERE stats.tmid = $tmid";
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
	
	echo "<tr><td><center>"; 
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
WHERE stats.tmid = $tmid";
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


	echo "<tr><td><CENTER>"; 
	echo round ($row['bogie'], 1);
  	echo "</td><td><CENTER>"; 
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
WHERE stats.tmid = $tmid";
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
	
	echo "<tr><td><CENTER>"; 
	echo round ($row['triple'], 1);
  	echo "</td><td><CENTER>"; 
	echo round ($row['other'], 1);
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
      <h3 class="my-4">Placing Stats</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <?php

 //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tmid, count(place) as top1
FROM stats
WHERE stats.tmid = $tmid
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

$sql = "SELECT tmid, count(place) as top5
FROM stats
WHERE stats.tmid = $tmid
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

$sql = "SELECT tmid, count(place) as top10
FROM stats
WHERE stats.tmid = $tmid
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

$sql = "SELECT tmid, count(place) as top20
FROM stats
WHERE stats.tmid = $tmid
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <br><br><br>
  </body>

</html>





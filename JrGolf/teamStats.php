
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
//include("header.php");
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
        echo "<h1>Database Unknown</h1>";
}
include("analyticstracking.php");

//Get number of Name to Search For.

if(!empty($_GET['tmid']))
{
$tmid = $_GET['tmid'];
}
$_SESSION['tmid'] = $tmid;
//echo $tmid;

$output = "http://www.kansasgolfscores.com/app/appTeamStats.php?tmid=$tmid";
?>   



<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     
             <style>
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #999EEC ;
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
</style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
      <center> <a class="navbar-brand" href="index.php"> Home Page</a>
        </div>
      </div>
    </nav>
    
  </head>

 
     <body>
     
     
   <button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

    <!-- Page Content -->
    <div class="container">
     <br><br>
   
      <?php
  $sql = "SELECT team.tmid, users.tmid, users.first_name, 
  users.last_name, team.image, school 
  FROM team INNER JOIN users on team.tmid = users.tmid 
  WHERE team.tmid = $tmid LIMIT 1";
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
       echo "Team ID : ";echo $tmid;
    }
} else {
    echo "<img src = images/default.jpg>";
}
?>
               
               
               
               
               


      <!-- Portfolio Item Heading
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>
                        -->
      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-4">
        
        
                  <a href="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>"> 
                  <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>" 
            alt="<?php echo $image; ?>"> </a>
            
                                           
  
        </div>

        <div class="col-md-8">
     <!--     <h3 class="my-3"><u>Roster</u></h3>    -->
    
         
          </ul>
          
               <h4 class="my-3"><u>Coach: <?php echo $first; ?> <?php echo $last; ?></u></h4>
             <h4 class="my-3"><u>Roster</u></h4>
             


<?php
      $NoOfColumns = 3;
$dataArr = $matrixArr = array();

$query = "SELECT player_1, grade, pid
   FROM roster
   WHERE tmid = $tmid AND grade < '13'
   AND active = '2'
    ORDER by grade desc";
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
                            
                            <a href="playerStats.php?pid='.$matrixArr[$col][$row]['pid'].'&db='.$db.'">'.$matrixArr[$col][$row]['player_1'].' '.$matrixArr[$col][$row]['grade'].'</a></td>';
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
     
        </div>
        
        


      </div>
      <!-- /.row 
                     <center> <img src="images/golfClub.jpg" alt="club" height="auto" width="auto">   </center>
        -->   <h4 class="mt-4 mb-3">
            <div class="container">
        <p class="m-0 text-center text-white">
      </div>
      <!-- /.container -->





       </p>

         <h3>Roster and Scoring Stats</h3>
          <h4>Stats only from 18 Hole Tournaments</h4>
             
              <p class="card-text">
              




   
<?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT avg(total) as total, scores.pid, roster.active,
min(total) as min, max(total) as max,  count(total) as count,
roster.player_1 
FROM scores
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id
WHERE scores.tmid = $tmid 
AND tournament.status <= '2' AND scores.status <= '3' 
AND roster.grade < '13' AND total != 0  AND roster.active = '2'
GROUP by scores.pid ORDER by total asc";
 //mysqli #2           
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo 'Current Season';
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
	echo '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'</font></a>';
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
  //  echo "0 results";
}



?>




  </p>
  
  
  
  
                <p class="card-text">
              




   
<?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *, avg(total) as total,
 max(total) as max, roster.pid, roster.grade, 
min(total) as min, count(total) as count FROM scores2
INNER JOIN roster ON scores2.pid = roster.pid
LEFT JOIN team on scores2.tmid = team.tmid
LEFT JOIN tournament on scores2.tid = tournament.id
WHERE scores2.tmid = $tmid 
 AND total > '0'
 AND tournament.status <= '2' AND scores2.status <= '2' 
AND roster.grade < '13' AND roster.active = '2' 
GROUP by scores2.pid ORDER by total asc";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo 'Current Roster Career Stats';
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
	echo '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'</font></a>';
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
  
  

  
  
  
         <p class="card-text">
              




   
<?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *, avg(total) as total, 
 max(total) as max, roster.pid, roster.grade, 
min(total) as min, count(total) as count FROM scores2
INNER JOIN roster ON scores2.pid = roster.pid
LEFT JOIN team on scores2.tmid = team.tmid
LEFT JOIN tournament on scores2.tid = tournament.id
WHERE scores2.tmid = $tmid AND total > '0' 
AND tournament.status <= '2' AND scores2.status <= '2' 
AND roster.grade > '12'
GROUP by scores2.pid ORDER by total asc";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo 'Graduates';
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
	echo '<a href="playerStats.php?pid='.$row['pid'].'&db='.$db.'">'.$row['player_1'].'</font></a>';
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
  
      
    <!--  <h4>Scan this image to go to this page on your phone!!</h4> -->   
         
  <?php  echo "<img src=../vendor/QR/php/qr_img.php?d=$output>"; ?>     
     
  </div>
                                                                                                                   
</center>


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





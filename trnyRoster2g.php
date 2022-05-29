                                                                     <!DOCTYPE html>  
<head>

    <title>Tournaments</title>


    <!-- Custom styles for this template -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">   
  <script src="global_style/js/jquery-2.1.4.min.js"></script>
  <script src="global_style/js/bootstrap.min.js"></script>
  
      <!-- Bootstrap core CSS -->
    <link href="global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="global_style/vendor/css/modern-business.css" rel="stylesheet">


</head><body>

 <?php
 
 if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
echo $tournmant;

 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:glogin-system/index.php");
}


include_once("dbconnectg.php");
 ?> 	 



    <?php
$sql = "SELECT * FROM `tournament` WHERE id = '$tournament' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);                                              
} else {
die('Error: '.mysqli_error());
}  
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);
   }
  $sql = "SELECT * FROM tournament WHERE id = $tournament";
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
        $rounds = $row["rounds"];
    }
   


} else {
    echo "0 results";
    }
     
    ?>
    
    <h4>
    <?php echo $tname; ?>  
    </h4>

 
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $trny;
      
 ?> 



  <div class="row">
    <div class="col-sm-6 col-sm-push-1">
    <h3>Sorted By Team</h3>
<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card, scores.total,
scores.front, scores.back, scores.total,scores.status, scores.teetime, scores.man,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' order by tmid, total"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table  width='75%'>";
echo "<tr> <th>Player</th> <th>Team</th><th>Card</th><th>Hole</th><th>Total</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  echo $row['player_1'];
	echo "</td><td>"; 
	echo $row['school'];
  echo "</td><td>";
	echo $row['card'];
  echo "</td><td>";
	echo $row['teetime'];
  echo "</td><td>";
	echo $row['total'];
	echo "</td></tr>"; 
    
	
	
} 

echo "</table>";


?>
  </div>  

    <div class="col-sm-6 col-sm-push-1"> 
    
      <h3>Sorted By Cards</h3>

<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.front, scores.back, scores.total,scores.status, scores.teetime, scores.man,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' order by card asc"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table width='75%'>";
echo "<tr> <th>Player</th> <th>Team</th><th>Card</th><th>Tee/Hole</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  	echo $row['player_1'];
	echo "</td><td>"; 
	echo $row['school'];
  echo "</td><td>";
	echo $row['card'];
  echo "</td><td>";
	echo $row['teetime'];
	echo "</td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>
  </div>  
</center>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


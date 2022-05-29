                         <!DOCTYPE html>  
<head>

    <title>Tournaments</title>


    <!-- Custom styles for this template -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">   
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>
  
      <!-- Bootstrap core CSS -->
    <link href="../../global_style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../global_style/vendor/css/modern-business.css" rel="stylesheet">


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
    header("Location:login-system/index.php");
}


include_once("databaseconnect.php");
 ?> 
 
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $trny;
      
 ?> 

<center>
<?php

if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
?>

  <div class="row">
    <div class="col-sm-6 col-sm-push-1">
    <h3>Sorted By Team</h3>
<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.front, scores.back, scores.total,scores.dq, scores.jv, scores.cteam,
scores.noteam, scores.teetime, scores.man_2, scores.man_4, scores.man_6,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' order by tid, tmid, card"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table>";
echo "<tr> <th>Player</th> <th>Team</th><th>Card</th><th>Tee/Hole</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
  echo "</td><td align='right'>";
	echo $row['card'];
  echo "</td><td align='right'>";
	echo $row['teetime'];
	echo "</td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>  

    <div class="col-sm-6 col-sm-push-1"> 
    
      <h3>Sorted By Cards</h3>

<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.front, scores.back, scores.total,scores.dq, scores.jv, scores.cteam,
scores.noteam, scores.teetime, scores.man_2, scores.man_4, scores.man_6,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' order by card asc"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table>";
echo "<tr> <th>Player</th> <th>Team</th><th>Card</th><th><center>Tee/Hole</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
  echo "</td><td align='right'>";
	echo $row['card'];
  echo "</td><td align='right'>";
	echo $row['teetime'];
	echo "</center></td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>
  </div>  
</center>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


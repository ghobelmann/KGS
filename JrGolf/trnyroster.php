 <?php
 
 error_reporting(E_ALL);
session_start(); 
 if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
 //  include_once("header.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="./vendor/bootstrap/css/w3.css">    
  
      
   
<h4 class="card-header bg-dark">  
<center>       
<a href="index.php">  Home</a></h4>
</center>       
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-light"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-12">
          
 
 
      <ol class="breadcrumb">
      
        <li class="breadcrumb-item active"></li>
        <a href="trnyRoster2.php?id=<?php echo $tournament; ?>">Printable Version</a>
      </ol>
 

 <?php
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
$sql = "SELECT tmid, tid, count(pid) as count, avg(total) as avg,
tournament.id, tournament.tournament from scores 
INNER JOIN tournament on scores.tid = tournament.id
WHERE tid = '$tournament' group by tid order by tmid asc, pid asc"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table class='table'>";
echo "<tr> <th><CENTER>Tournament ID</th> <th><CENTER>Number of Players</th><th><CENTER>Average Score</th><th><CENTER>Print Wall Sheets</th>
<th><CENTER>Back to Scorecard</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><CENTER>"; 
	echo $row['tid'];
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td><td><CENTER>"; 
	echo $row['avg'];
    echo "</td><td><CENTER>"; 
  echo '<a href="wallpages.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
      echo "</td><td><CENTER>"; 
  echo '<a href="scorecard.php?tid='.$row['id'].'">Scorecard</font></a>';
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";
?></div>


<?php

$sql="SELECT trnyteams.tmid, trnyteams.tid, roster.tmid,
roster.player_1, roster.pid, tournament.uid FROM `trnyteams` 
INNER JOIN `roster` on trnyteams.tmid = roster.tmid
LEFT JOIN `tournament` on trnyteams.tid = tournament.id
WHERE trnyteams.tmid = roster.tmid AND 
trnyteams.tid = '$data[id]'";

$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

    $pid=$row["pid"];
    $name=$row["player_1"];
    $players.="<OPTION VALUE=\"$pid\">".$name;
}

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
  WHERE tid = '$data[id]'";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
    $teams.="<OPTION VALUE=\"$team\">".$school;
}
?>




<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card, scores.tid,
scores.front, scores.back, scores.total,
scores.status, scores.teetime, scores.round, 
scores.man,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' order by round, tid, tmid, card"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table class='table'>";
echo "<tr><th>Edit</th> <th>Player/Edit Score</th> <th>Team</th><th>Round</th><th>Card</th><th>Front</th><th>Back</th><th>Total</th>
<th>Status</th><th>Tee Time - Hole</th><th>2-4-6 Man</th><th>Delete</th>
</tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>"; 
  	echo '<a href="editPlayer.php?tid='.$row['tid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
    echo "</td><td><CENTER>";
  	echo $row['round'];
	echo "</td><td><CENTER>";
	echo $row['card'];
	echo "</td><td><CENTER>";
	echo $row['front'];
	echo "</td><td><CENTER>";
	echo $row['back'];
	echo "</td><td><CENTER>";
	echo $row['total'];
    echo "</td><td><CENTER>";
	echo $row['status'];
    echo "</td><td><CENTER>";
	echo $row['teetime'];
    echo "</td><td><CENTER>";
	echo $row['man'];
     echo "</td><td><CENTER>";
	echo '<a href="deletevirtualscores.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</center></td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>
</center>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


 <?php
 if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
 
 ?>

<!DOCTYPE html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tournaments</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">    
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
        <div class="container">
      <h1 class="mt-4 mb-3">See All Players
        <small>Tournament Roster</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
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
scores.front, scores.back, scores.total, scores.dq, scores.jv, scores.cteam,
scores.noteam, scores.teetime, scores.event, scores.round, 
scores.man_2, scores.man_4, scores.man_6,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' order by round, tid, tmid, card"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table class='table'>";
echo "<tr><th>Edit</th> <th>Player/Edit Score</th> <th>Team</th><th>Round</th><th>Card</th><th>Front</th><th>Back</th><th>Total</th>
<th>DQ</th><th>JV</th><th>C Team</th><th>No Team</th><th>Event</th><th>Tee Time - Hole Number</th><th>Delete</th>
<th>2 Man</th><th>4 Man</th><th>6 Man</th></tr>";
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
	echo $row['dq'];
  	echo "</td><td><CENTER>";
	echo $row['jv'];
    	echo "</td><td><CENTER>";
	echo $row['cteam'];
	echo "</td><td><CENTER>";
	echo $row['noteam'];
  	echo "</td><td><CENTER>";
	echo $row['event'];
    	echo "</td><td><CENTER>";
	echo $row['teetime'];
  echo "</td><td><CENTER>";
	echo '<a href="deletevirtualscores.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
  	echo "</td><td><CENTER>";
	echo $row['man_2'];
  	echo "</td><td><CENTER>";
	echo $row['man_4'];
    	echo "</td><td><CENTER>";
	echo $row['man_6'];
	echo "</center></td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>
</center>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


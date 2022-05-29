                                                                                 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" media="all" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 

 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
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
WHERE tid = '$tournament' AND scores.uid = '$userid'  group by tid order by tmid asc, pid asc"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());


echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Tournament</th> <th>Number of Players</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['tid'];
	echo "</td><td><CENTER>"; 
	echo $row['count'];
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
trnyteams.tid = '$data[id]' AND tournament.uid = '$userid'";

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

$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.front, scores.back, scores.total,scores.dq, scores.jv,
scores.noteam, scores.teetime, scores.man_2, scores.man_4, scores.man_6,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tournament' AND uid = '$userid'  order by tid, tmid, card"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table border='1'>";
echo "<tr> <th>Player</th> <th>Team</th><th>Card</th><th>Tee Time - Hole Number</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  	echo '<a href="card.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
  echo "</td><td><CENTER>";
	echo $row['card'];
    	echo "</td><td><CENTER>";
	echo $row['teetime'];
	echo "</center></td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>
</center>
</body>
</html>





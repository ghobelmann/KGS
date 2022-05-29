 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
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

//include_once("headerb.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 

<?php



if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}
echo $tournament;

$sql= "SELECT tmid, tid, count(pid) as count, avg(total) as avg,
tournament.tournament from scores
INNER JOIN tournament on scores.tid = tournament.id 
WHERE tid = '$tournament' AND scores.uid = '$userid'  group by tid order by tmid asc, pid asc"; 

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Tournament</th> <th>Number of Players</th><th>Average Score</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
// Print out the contents of each row into a table
echo "<tr><td>"; 
echo $row['tournament'];
echo "</td><td><CENTER>"; 
echo $row['count'];
echo "</td><td><CENTER>"; 
echo $row['avg'];
echo "</td></tr><CENTER>"; 
} 
echo "</table>";

?></div>

<?php





$sql= "SELECT scores.pid, scores.tmid, scores.card,
scores.teetime, scores.tid, team.school,
roster.pid, roster.player_1 from scores 
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id
WHERE scores.tid = '$tournament' ORDER by card asc"; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr><th>Player</th> <th>Team</th><th>Card</th><th>Hole</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {

// Print out the contents of each row into a table

echo "<tr><td>";
echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
echo "</td><td><CENTER>"; 
echo '<a href="messageteam.php?tid='.$row['tmid'].'">'.$row['school'].'</font></a>';
echo "</td><td><CENTER>";
echo $row['card'];
echo "</td><td><CENTER>";
echo $row['teetime'];
echo "</center></td></tr>"; 
} 
echo "</table>";

?>

</DIV>
</p>
<div id="footer">
</p>
</div>
</center>
</body>
</html>

<p><?php include("footer.php"); ?>&nbsp;</p>
</body>
</html>
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


include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 


        <h1><font color="white">EKL Total Individual Results</font></h1>
<?php


$query = "SELECT s.id, s.pid, s.points, s.tmid, s.total, count(s.pid) as count, sum(s.total) as total,
r.pid, r.player_1, t.tmid, t.school 
FROM scores s 
INNER JOIN roster r ON s.pid = r.pid 
LEFT JOIN team t on s.tmid = t.tmid 
WHERE `event` = 'EKL' AND `jv` != 'yes'  
AND dq != 'wd' AND dq != 'dq' group by s.pid  
order by count desc, points desc, total asc LIMIT 40";    
      

	 
$result = mysqli_query($conn,$query) or die(mysqli_error());

echo '<table border="1">';
echo '<tr> <th>Update Points Here</th><th>Player</th>
<th>Team</th><th>Rounds Played</th><th>Total Shots</th><th>Points</th></tr>';
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="UpdateLeaguePointsGWAL.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
  echo '</td><td><center>';
	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><center><a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td><td><CENTER>"; 
  	echo $row['total'];
	echo "</td><td><CENTER>";
	echo $row['points'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";
?>






</html>
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
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");




 ?> 

<div id="wrapper">

  <div id="content">    
  
  <p>
  
 <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      
 ?>   

<body>

<center>

<?php



if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}

$query = "SELECT tmid, tid, count(pid) as count, avg(total) as avg from scores 

WHERE tid = '$tournament' AND uid = '$userid'  group by tid order by tmid asc, pid asc"; 

	 

$result = mysqli_query($conn,$query) or die(mysqli_error());





echo "<div class='CSSTableGenerator' >";

echo "<table border='1'>";

echo "<tr> <th>Tournament</th> <th>Number of Players</th><th>Average Score</th></tr>";

// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {

	// Print out the contents of each row into a table

	echo "<tr><td>"; 

	echo $row['tid'];

	echo "</td><td><CENTER>"; 

	echo $row['count'];

	echo "</td><td><CENTER>"; 

	echo $row['avg'];

	echo "</td></tr><CENTER>"; 

	

	

} 



echo "</table>";

?></div>

<?php





$query = "SELECT * from scores 
INNER JOIN roster on scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid 
WHERE tid = '$tournament'  order by tid, scores.tmid, card"; 

	 

$result = mysqli_query($conn,$query) or die(mysqli_error());





echo "<div class='CSSTableGenerator' >";

echo "<table border='1'>";

echo "<tr><th>Edit</th> <th>Player</th> <th>Team</th><th>Card</th><th>Front</th><th>Back</th><th>Total</th>

<th>DQ</th><th>JV</th><th>No Team</th><th>Event</th><th>Delete</th></tr>";

// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {

	// Print out the contents of each row into a table

	echo "<tr><td>";

	echo '<a href="edit.php?id='.$row['id'].'">'.$row['id'].'</font></a>';

	echo "</td><td><CENTER>"; 

	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';

	echo "</td><td><CENTER>"; 

	echo '<a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</font></a>';

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

	echo $row['noteam'];

  	echo "</td><td><CENTER>";

	echo $row['event'];

  echo "</td><td><CENTER>";

	echo '<a href="deletevirtualscores.php?id='.$row['tid'].'">'.$row['tid'].'</font></a>';

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







</body>

</html>
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
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");

//INITIAL PAGE SETTINGS-----------
?>

  <div id="content">

  <?php
  $query = "SELECT max(id) as id from tournament"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {

$trny = $row['id']; 
 
}

    ?>
      
  </p>

     <table>
     <tr><th valign="top">
 <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 1 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 1</h1></th>';
echo '<tr><th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>

</th><th valign="top">
	   <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 2 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 2</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
</th><th valign="top">
      <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 3 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 3</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>




</th><th valign="top">

      
      <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 4 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 4</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>



</th>   </tr>
   <th valign="top">
      <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 5 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 5</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>

</th><th valign="top">
      
      
      
      <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 6 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 6</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>



</th><th valign="top">
      
      
      
      <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 7 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 7</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>


</th><th valign="top">


<?php


      $query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 8 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 8</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
</th></tr>
<tr><th valign="top">

<?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 9 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 9</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
</th><th valign="top">

<?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 10 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 10</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 11 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 11</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 12 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 12</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th></tr>
<tr><th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 13 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 13</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 14 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 14</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>

</th><th valign="top">

<?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 15 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 15</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 16 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 16</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th> </tr>
    <tr>  <th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 17 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 17</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


      $query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 18 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 18</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
      </th><th valign="top">
     <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores,
 tournament WHERE scores.tournament = tournament.tournament AND scores.position = 19 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 19</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


      $query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores,
       tournament WHERE scores.tournament = tournament.tournament AND scores.position = 20 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 20</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
      </th></tr>
      
      
      
      
        <tr>  <th valign="top"><?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores, 
tournament WHERE scores.tournament = tournament.tournament AND scores.position = 21 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 21</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


      $query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, 
      scores.team FROM scores, tournament WHERE scores.tournament = tournament.tournament AND scores.position = 22 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 22</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
      </th><th valign="top">
     <?php


$query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores,
 tournament WHERE scores.tournament = tournament.tournament AND scores.position = 23 AND tournament.id = '$trny' ";  
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 23</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?></th><th valign="top"><?php


      $query = "SELECT scores.position, scores.*, scores.player_1, tournament.id, scores.team FROM scores,
       tournament WHERE scores.tournament = tournament.tournament AND scores.position = 24 AND tournament.id = '$trny' "; 
			

	 
$result = mysql_query($query) or die(mysql_error());
echo "<div class='CSSTableGenerator' >";
echo '<table>';
echo '<th colspan ="5"><h1>Card 24</h1></th>';
echo '<tr> <th valign="top">Player</th><th valign="top">Team</th><th valign="top">F</th><th valign="top">B</th><th valign="top">T</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="updatescores.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
		echo "</td><td><CENTER>"; 
echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	
	
} 

echo "</table>";


?>
      </th><th valign="top">

</div></td>
    </tr>
  </table>
</div>
 <br>
  <br>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>
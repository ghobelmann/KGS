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

error_reporting(E_ERROR);

//INITIAL PAGE SETTINGS-----------

$page_title = "Enter Scores";

define("IN_GOLF_STATS", TRUE);

include_once("databaseconnect.php");



if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])

{

$logged_in = FALSE;

} else {

$logged_in = TRUE;

}



$user = $_SESSION['username'];







//INITIAL PAGE SETTINGS-----------







if(!empty($_GET['position']))

{

$position = $_GET['position'];

}



$query = "SELECT max(id) as id from tournament WHERE user = '$_SESSION[username]' "; 

$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {

$trny = $row['id']; 



 

}





?>





<?php

//Submit Query to MySql Database

$query = "SELECT scores.position, scores.tid, scores.user, max(tournament.id) as id from scores, tournament

WHERE '$trny' = tournament.id AND scores.user = '$_SESSION[username]' GROUP by position ORDER by id DESC, position ASC";

$result = mysql_query($query)

or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page

echo "<div class='CSSTableGenerator' >";

echo "<table border='1'  >";

echo '<tr><th colspan="30">Cards: Click on the card you want to edit.</th></tr>';

// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {

	// Print out the contents of each row into a table

	

	echo "<td><center>";

	echo '<a href="cardmobile.php?position='.$row['position'].'">'.$row['position'].'</font></a>';

	echo "</td>"; 

	

} 

echo "</table>";







 ?>

 

 <?php

//Submit Query to MySql Database

$query = "SELECT scores.tournament, scores.tid, scores.user, max(tournament.id) as id from scores, tournament

WHERE '$trny' = tournament.id AND scores.user = '$_SESSION[username]' GROUP by scores.tournament ORDER by team ASC, player_1 ASC";

$result = mysql_query($query)

or die ('Error in Query Try Again:--' . mysql_error());

//Print table to the web page

echo "<div class='CSSTableGenerator' >";

echo "<table border='1'  >";

echo '<tr><th colspan="30">Click here for all players in the tournament.</th></tr>';

// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {

	// Print out the contents of each row into a table

	

	echo "<td><center>";

	echo '<a href="card_all.php?position='.$row['tournament'].'">'.$row['tournament'].'</font></a>';

	echo "</td>"; 

	

} 

echo "</table>";







 ?>




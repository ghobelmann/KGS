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

$page_title="Home";

define("IN_GOLF_STATS", TRUE);

define('IN_PHP_AUTH', TRUE);

include("databaseconnect.php");

include("PHP_AUTH/check_auth.php");

if(authorize("public") != "success")

{

header("Location: login.php?error=1");

die();

}

//include("menubar.php");

?>

</head>

<body>

<div id="wrapper">



  <div id="content">

<?php





  //Get number of Team to Search For.

if(!empty($_GET['trny']))

{

$tournament = $_GET['trny'];

}

   

        

//Get number of Team to Search For.

if(!empty($_GET['tournament']))

{

$tournament = $_GET['tournament'];

}





?>





       <p style="page-break-before: always">

<?php



$categories = array();

$result= mysql_query("SELECT team, player_1, front, back, total  FROM `scores`

WHERE tournament = 	'$tournament' ORDER BY `team`");

while($row = mysql_fetch_assoc($result)){

    $player_1[$row['team']][] = $row['player_1'].'<font size="3">'.'<table>'.'<td>'.'<tr>'.'  ';

    $player_1[$row['team']][] = $row['front'].'<font size="3">'.'-';

    $player_1[$row['team']][] = $row['back'].'<font size="3">'.'-';

    $player_1[$row['team']][] = $row['total'].'<font size="3">'.'</tr>'.'</td>'.'<table>';

}



// any type of outout you like

foreach($player_1 as $key => $category){

    echo '<strong>'.'<font size="4">';

    echo $key.'<font size="3">'.'<br>';

    foreach($category as $item){ 

        echo $item;

   

}

    echo '<br>';

   echo 'Team Total______________________';



  echo '<p style="page-break-before: always">';



}



?>
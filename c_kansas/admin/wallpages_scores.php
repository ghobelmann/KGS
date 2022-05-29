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
include_once("analyticstracking.php"); 

if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}

 // echo $tournament;
 // var_dump($conn);

 ?> 



<?php



//$categories= array();

$sql= "SELECT s.tmid, s.front, s.back, s.total, s.pid, t.tmid, t.school, r.pid, r.player_1
 FROM `scores` s
INNER JOIN roster r ON s.tmid = r.tmid 
LEFT JOIN team t ON s.tmid = t.tmid
WHERE tid = '$tournament' GROUP by s.pid";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
//var_dump($result);
while($row = mysqli_fetch_assoc($result)){

//var_dump($row);
    $player_1[$row['school']][] = $row['player_1'].'<center>'.'<font size="4">'.'<table>'.'<td>'.'<tr>'.'  ';

    $player_1[$row['school']][] = $row['front'].'<font size="4">'.' - ';

    $player_1[$row['school']][] = $row['back'].'<font size="4">'.' - ';

    $player_1[$row['school']][] = $row['total'].'<font size="4">'.'</tr>'.'</td>'.'<table>';
}



// any type of outout you like

foreach($player_1 as $key => $category){

    echo '<strong>'.'<center>'.'<font size="6">';

    echo $key.'<center>'.'<font size="4">';

    foreach($category as $item){ 

        echo $item;

   

}



}
 // echo $tournament;


?>
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

if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}

  echo $tournament;
 // var_dump($conn);

 ?> 

 
<?php



//$categories= array();

$sql= "SELECT s.tmid, s.pid, s.card, t.tmid, t.school, r.pid, r.player_1
 FROM `scores` s
INNER JOIN roster r ON s.tmid = r.tmid 
LEFT JOIN team t ON s.tmid = t.tmid
WHERE tid = '$tournament' AND s.pid = r.pid 
GROUP by s.card";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
//var_dump($result);
while($row = mysqli_fetch_assoc($result)){

//var_dump($row);
    $player_1[$row['school']][] = $row['player_1'].'<center>'.'<font size="3">'.'<table>'.'<td>'.'<tr>'.'  ';

    $player_1[$row['school']][] = $row['card'].'<font size="3">'.' ';

    $player_1[$row['school']][] = $row['school'].'<font size="3">'.'   ';

    $player_1[$row['school']][] = $row[''].'<font size="3">'.'</tr>'.'</td>'.'<table>';
}



// any type of outout you like

foreach($player_1 as $key => $category){

    echo '<strong>'.'<center>'.'<font size="3">';

    echo $key.'<center>'.'<font size="3">'.'<br>';

    foreach($category as $item){ 

        echo $item;

   

}

    echo '<br>';



  echo '<p style="page-break-before: always">';



}
 // echo $tournament;


?>
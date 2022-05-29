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

  //echo $tournament;
 // var_dump($conn);

 ?> 

            
<?php

    

//$categories= array();

$sql= "SELECT s.tmid, s.pid, t.tmid, s.teetime, s.division, d.id, d.division, r.pid, r.player_1
 FROM `scores` s
INNER JOIN roster r ON s.tmid = r.tmid 
LEFT JOIN team t ON s.tmid = t.tmid
LEFT JOIN divisions d ON s.division = d.id
WHERE tid = '$tournament' AND s.pid = r.pid 
GROUP by r.pid ORDER by d.id ASC, r.player_1 ASC";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
//var_dump($result);
while($row = mysqli_fetch_assoc($result)){


//var_dump($row);

   $player_1[$row['division']][] = $row['player_1'].'________ '.'<left>'.'<font size="6">'.'<table class="table">'.'<td>'.'<tr>'.'  ';

   //$player_1[$row['division']][] = $row[''].'<font size="8">';
    
 
   //$player_1[$row['division']][] = $row[''].'<font size="8">';


    $player_1[$row['division']][] = $row[''].'<font size="6">'.'</tr>'.'</td>'.'<table>';
    
}
 
           

// any type of outout you like

foreach($player_1 as $key => $category){
    
    echo '<strong>'.'<center>'.'<font size="8"><img src="logo.JPG" alt="MJGA" width="100" height="66">';

  
    echo $key.'<center>'.'<font size="6">'.'<br></center>';
    foreach($category as $item){ 

        echo $item;
        
   

}

    echo '<br>';
    echo '<br';
  // echo 'Team Total______________________';


   
  echo '<p style="page-break-before: always">';



}
 // echo $tournament;


?>
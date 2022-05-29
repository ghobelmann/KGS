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
include_once("dbconnectg.php");
include_once("analyticstracking.php"); 

if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}

  echo $tournament;
 // var_dump($conn);

 ?> 

   <h2><center><b>***Note:  Players will appear on pages in the order<br> you entered them on the cards. <br>   <br>

   So if you want the #1 player on top, <br>Enter the players in your tournament in order from #s 1-6,  <br>   <br>

   If entering by cards Start with Card #1 and work your way down.<br>

   If entering by roster, start with #1 and work your way down the roster.<br>

   then they will be listed that way on these pages for printing. <br><br> You may have to zoom out to 70 or 80%<br> 

   for them to print correctly, depending on the length of names.

   

    <br><br> If you have trouble  printing  correctly use firefox on a PC not a Mac.

    <br><br>

    

    Should print 1 page per team with the team total at the bottom of the page.<br>

    

    For you to write it in, it will not print the totals.</b></center>  </h2>

        <hr>

       <p style="page-break-before: always">

<?php



//$categories= array();

$sql= "SELECT s.tmid, s.pid, t.tmid, t.school, r.pid, r.player_1
 FROM `scores` s
INNER JOIN roster r ON s.tmid = r.tmid 
LEFT JOIN team t ON s.tmid = t.tmid
WHERE tid = '$tournament' AND s.pid = r.pid 
GROUP by r.pid";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
//var_dump($result);
while($row = mysqli_fetch_assoc($result)){

//var_dump($row);
    $player_1[$row['school']][] = $row['player_1'].'<center>'.'<font size="6">'.'<table>'.'<td>'.'<tr>'.'  ';

    $player_1[$row['school']][] = $row[''].'<font size="8">'.'____ ';

    $player_1[$row['school']][] = $row[''].'<font size="8">'.'____   _____ ';

    $player_1[$row['school']][] = $row[''].'<font size="6">'.'</tr>'.'</td>'.'<table>';
}



// any type of outout you like

foreach($player_1 as $key => $category){

    echo '<strong>'.'<center>'.'<font size="8">';

    echo $key.'<center>'.'<font size="6">'.'<br>';

    foreach($category as $item){ 

        echo $item;

   

}

    echo '<br>';

   echo 'Team Total______________________';



  echo '<p style="page-break-before: always">';



}
 // echo $tournament;


?>
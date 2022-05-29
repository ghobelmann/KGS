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
include_once("analyticstracking.php") 
 ?> 


<div id="wrapper">

  <div id="content">
  
  <p>
<?php
$sql = "SELECT * FROM `tournament` WHERE uid = '$_SESSION[email]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error: '.mysqli_error());
}

?>
  <?php

$sql="SELECT * FROM roster
INNER JOIN trnyteams ON roster.tmid = trnyteams.tmid
LEFT JOIN tournament ON trnyteams.tid = tournament.id";

$result=mysqli_query($conn,$sql);


$players="";

while ($row=mysqli_fetch_array($result)) {

    
    $name=$row["player_1"];
    $players.="<OPTION VALUE=\"$name\">".$name;
}

?>


      <script>

window.onload = function() {
    document.getElementById("player_1").focus();
};
</script>

   
   
  <center><table style="width:30%">
  <tr> 
    <td><h2><a href="EnterbyCard.php">Enter by Card</a> </h2>  </td> </tr><tr>
    <td><h2><a href="selectteam.php">Enter by Team</a></h2></td> </tr><tr>

    <td><h2><a href="EnterTrnyTeam.php">Enter Team Into My Tournament</a></td> 
  </tr>
</table>



<p><?php include("footer.php"); ?>&nbsp;</p>


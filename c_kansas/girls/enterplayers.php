<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

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


   if(!empty($_GET['id']))
{
$id = $_GET['id'];
echo $id;
}


$sql = "SELECT * FROM `tournament` WHERE `id` =  '".$_POST."' LIMIT 0 , 1 ";
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
    <td><h2><a href="EnterbyCard.php?id=<?php echo $id; ?>">Enter by Card</a> </h2>  </td> </tr><tr>
    <td><h2><a href="selectteam.php?id=<?php echo $id; ?>">Enter by Team</a></h2></td> </tr><tr>

    <td><h2><a href="EnterTrnyTeam.php?id=<?php echo $id; ?>">Enter Team Into My Tournament</a></td> 
  </tr>
</table>



<p><?php include("footer.php"); ?>&nbsp;</p>


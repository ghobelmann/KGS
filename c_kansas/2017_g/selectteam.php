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
session_start();
session_regenerate_id();
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

    <h2>Click on Team you want to Enter then Select players on that team.</h2>

  <p>
  
 <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]' LIMIT 0, 1 "; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
   //   echo $userid;
      
 ?>     

<?php
$sql = "SELECT * FROM `tournament` WHERE uid = '$userid' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);           
//print_r ($data);                              
                                                
} else {
die('Error: '.mysqli_error());
}        
    ?>


    <?php

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
  WHERE tid = '$data[id]'";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
  echo "<tr><td><center><h2>";
	echo '<a href="EnterbyTeam.php?tmid='.$row['tmid'].'">'.$row['school'].'</h2></a>';
	echo "</td></tr>";
}
?>
 

   <br><br> <br>

   <hr>

<a href="EnterTrnyTeam.php"><h2>If Team Not Listed, Enter them Here</h2></a>
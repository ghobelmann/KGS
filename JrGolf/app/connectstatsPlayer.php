                                                 <?php
 //authentication for coaches to get to their pages, not for public pages.


include_once("../databaseconnect.php");
        
$sql = "SELECT pid, player_1, email, active FROM roster WHERE roster.username = '$_SESSION[email]'"; 
  $result = mysqli_query($conn,$sql) or die(mysqli_error());
    while($row = mysqli_fetch_array( $result )) {
  $pid = $row['pid'];
  $name = $row['player_1'];
  $email = $row['email'];
  $tmid = $row['tmid'];
  $active = $row['active'];
   }
  echo $userid;

      
      if(!empty($_POST['pid']))
{
$pid = $_POST['pid'];
}
echo $pid;

if(!empty($_POST['division']))
{
$division = $_POST['division'];
}
echo $division;



 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
 <meta http-equiv="Refresh" content="2; url=http://admin.kansasgolfscores.com/JrGolf/registerPlayers.php">
</head>                                        


<?php

$golfer1 = isset($_POST['pid']) ? $_POST['pid'] : '';	
if( !empty($golfer1) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
echo 'PHP LINE: '.__LINE__.'. Epic fail Setup.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

$sql1 = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
$result = mysqli_query($conn,$sql1) or die(mysqli_error());
  while($row = mysqli_fetch_array( $result )) {
$userid = $row['id']; }

 //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[pid]' 
AND tid = $tournament;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
if(mysqli_num_rows($result)){
echo "<h1>ERROR: $name has Already been Entered into this Tournament.</h1>";
}else{
  $sql="INSERT INTO `scores` (tid, pid, division, tmid)
  VALUES
  ('$_POST[tid]','$_POST[pid]', '$division', '$tmid')";
echo "<H1>Player Successfully Entered<H1>";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player not Entered' . mysqli_error($conn));
  }}}}
  
  
  
 ?> 
  
         
		  </html>
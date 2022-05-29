                 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}



include_once("databaseconnect.php");
 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
 <meta http-equiv="Refresh" content="2; url=EnterStats.php">
</head>
  <?php
$sql = "SELECT id FROM `users` WHERE email = '$_SESSION[email]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error finding user: '.mysqli_error());
}
echo $data['id'];

?>
  
  
  
<?php


$sql="INSERT INTO `stats` (tid, tmid, pid, tfairways, fairways, gir, putts, Tputts, updown, updownc, ss, ssc, pen,
ace, dbleagle, eagle, birdie, par1, bogie, doubleb, triple, other, place, score, coursepar, include)
VALUES
('$_POST[tid]','$_POST[tmid]','$_POST[1]',
'$_POST[tfw1]','$_POST[fw1]','$_POST[gir1]','$_POST[putts1]',
'$_POST[Tputts1]','$_POST[updown1]','$_POST[updownc1]',
'$_POST[ss1]', '$_POST[ssc1]',
'$_POST[pen1]',
'$_POST[ace1]','$_POST[dbleagle1]', '$_POST[eagle1]',
'$_POST[birdie1]','$_POST[par1]',
'$_POST[bogie1]','$_POST[doubleb1]',
'$_POST[triple1]','$_POST[other1]',
'$_POST[place1]','$_POST[score1]',
'$_POST[coursepar]','$_POST[include]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 1 Insert' . mysqli_error($conn));
  }
  
  
  
 ?> 
    <h1><center> Stats Inserted Successfully</center</h1>
   
		  </html>
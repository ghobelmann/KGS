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
<META HTTP-EQUIV="Refresh" CONTENT="2;URL=enterschedule.php">
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
  
  
       



<center><H1>! New Tournament Added !</H1></center>



</BODY>
</HTML>

<?php 
$sql="INSERT INTO schedule (tmid, tournament, date)
VALUES
('$_POST[tmid]','$_POST[tournament]','$_POST[date]')";    



if
 (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }    

?>
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

include_once("databaseconnect.php");
//include_once("analyticstracking.php");  
 ?> 

   <?php
   if(!empty($_POST['confirm']))
{
$confirm = $_POST['confirm'];
}     



if ($confirm == "YES")
{
   $sql = "TRUNCATE TABLE `season`";   
mysqli_query($conn,$sql);
echo "Virtual Table Deleted <br>";  


   $sql = "TRUNCATE TABLE `tournament`";
mysqli_query($conn,$sql);
echo "Tournament Table Deleted <br>"; 


   $sql = "TRUNCATE TABLE `auto_inc`";
mysqli_query($conn,$sql);
echo "Auto Inc Table Deleted <br>"; 


   $sql = "TRUNCATE TABLE `setup`";
mysqli_query($conn,$sql);
echo "Setup Table Deleted <br>";  


   $sql = "TRUNCATE TABLE `scores`";
mysqli_query($conn,$sql);
echo "Scores Table Deleted <br>";  


   $sql = "TRUNCATE TABLE `roster`";
mysqli_query($conn,$sql);
echo "Roster Table Deleted <br>";  


   $sql = "TRUNCATE TABLE `par`";
mysqli_query($conn,$sql);
echo "Par Table Deleted <br>";  


   $sql = "TRUNCATE TABLE `trnyteams`";
mysqli_query($conn,$sql);
echo "Trnyteams Table Deleted <br>";  

   $sql = "TRUNCATE TABLE `schedule`";
mysqli_query($conn,$sql);
echo "Schedule Table Deleted <br>";  

   $sql = "TRUNCATE TABLE `users`";
mysqli_query($conn,$sql);
echo "Users Table Deleted <br>";  






   $sql = "TRUNCATE TABLE `yardage`";
mysqli_query($conn,$sql);
echo "Yardage Table Deleted <br>";  


}
else
{
	echo "Error You did not Type the correct Word.";
};
?>
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
           <META HTTP-EQUIV="Refresh" CONTENT="4;URL=index.php">
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

//include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php");



if(!empty($_GET['id']))
{
$id = $_GET['id'];
}



  
 ?> 

 <?php

   if(!empty($_POST['confirm']))
{
$id = $_POST['confirm'];
}


   $sql = "DELETE from `tournament` WHERE id = '$id'";
mysqli_query($conn,$sql);
echo "Tournament Entry Deleted <br>"; 

   $sql = "DELETE from `trnyteams` WHERE tid = '$id'";
mysqli_query($conn,$sql);
echo "Tournament Entry Deleted <br>";   


   $sql = "DELETE from `scores` WHERE tid = '$id'";
mysqli_query($conn,$sql);
echo "Tournament Scores Deleted <br>"; 


echo "Virtual Table Deleted <br>";  

?>
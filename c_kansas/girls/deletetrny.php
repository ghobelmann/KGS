<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />


  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>


 
 
 
 
 
 
 
 
 
 
  
  
  
  
  
  
  
  
  
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


   $sql = "DELETE from `par` WHERE course = '$id'";
mysqli_query($conn,$sql);
echo "Par Entries Deleted <br>";  


   $sql = "DELETE from `setup` WHERE tid = '$id'";
mysqli_query($conn,$sql);
echo "Setup Entries Deleted <br>";  


   $sql = "DELETE from `yardage` WHERE course = '$id'";
mysqli_query($conn,$sql);
echo "Yardage Entries Deleted <br>";  

   $sql = "DELETE from `season` WHERE tid = '$id'";
mysqli_query($conn,$sql);
echo "Virtual Table Deleted <br>";  

?>
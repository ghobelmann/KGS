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

//include_once("headerb.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 

<TITLE>Confirm Coach</TITLE>




<?php 
       if(!empty($_GET['email']))
{
$username = $_GET['email'];
}

echo $username; 


$sql="UPDATE users SET active = '1' WHERE email = '$username'";
 

if (mysqli_query($result))
  {
  echo "Successfully inserted '.$username.'";
  }    

  if (!mysqli_query($conn,$sql))
  {
  echo "Was not able to insert!!";
  }  
 
?>



</BODY>
</HTML>
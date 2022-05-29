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
 ?> 


<?php
if(!empty($_POST['confirm']))
{
$confirm = $_POST['confirm'];
}

if(!empty($_POST['id']))
{
$id = $_POST['id'];
}

if ($confirm == "YES")
{
$sql="DELETE FROM users WHERE id ='$_POST['id']'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
}
else
{
echo $failure;
  }

}



?>
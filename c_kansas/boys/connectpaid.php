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
 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">

</head>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=enterpayments.php">


<center><H1>! Payment Added !</H1></center>



</BODY>
</HTML>

<?php 

if(!empty($_POST['paid']))
{
$paid = $_POST['paid'];
}
  


if(!empty($_POST['amount']))
{
$amount = $_POST['amount'];
}
  


if(!empty($_POST['tmid']))
{
$tmid = $_POST['tmid'];
}
  


$sql= "UPDATE `team` SET `paid`= '$paid' ,`amount`= '$amount' WHERE `tmid` LIKE '$tmid'";

if
 (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }    

?>
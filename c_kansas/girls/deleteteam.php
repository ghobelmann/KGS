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

//include_once("headerb.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 


<a href="index.php">Go to Home Page</a>






<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
-->
</style>
<?php
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
?>  <center>
<div align="center"><H2>WARNING, THIS WILL PERMANTELY DELETE THE ENTIRE DATABASE!!!!</h2>
</div>
<form action="deleteteamid.php" method="POST">
<h2>Type YES to confirm: </h2><br>
  <input type="text" name="confirm" value="" size="6">
<input type="submit" value="send">
</form>
</center>
</body>
</html>

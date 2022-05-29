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
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
?>  <center>
<div align="center"><H1>WARNING, THIS WILL PERMANTELY DELETE THE ENTIRE DATABASE!!!!</h1>
</div>
<form action="truncate.php" method="POST">
<h1>Type YES to confirm: </h1><br>
  <input type="text" name="confirm" value="" size="6">
<input type="submit" value="send">
</form>
</center>
</body>
</html>

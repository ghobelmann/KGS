                             <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">    
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

//include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php");



if(!empty($_GET['id']))
{
$id = $_GET['id'];
}



  
 ?> 

<h3><center>
<a href="index.php">Go to Home Page</a>
</center></h3>





<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
-->
</style>
<?php


if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}

$query = "SELECT pid
from roster WHERE pid = '$pid'"; 



?>  <center>
<div align="center"><H1>WARNING, THIS WILL PERMANTELY DELETE THIS PLAYER!!!!</h1>
</div>
<form action="deleteroster.php" method="POST">
<h1>Click OK to confirm: </h1><br>
  <input type="text" name="confirm" value="<?php echo $pid; ?>" readonly size="6">
<input type="submit" value="OK">
</form>
</center>
</body>
</html>

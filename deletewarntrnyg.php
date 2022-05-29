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

//include_once("headera.php");
include_once("dbconnectg.php");
//include_once("analyticstracking.php");



if(!empty($_GET['id']))
{
$id = $_GET['id'];
}



  
 ?> 

<h3><center>
<a href="indexg.php">Go to Home Page</a>
</center></h3>





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

$query = "SELECT tid
from scores WHERE uid = '$userid' and tid = $id"; 



?>  <center>
<div align="center"><H1>WARNING, THIS WILL PERMANTELY DELETE THIS TOURNAMENT!!!!</h1>

<div align="center"><H1>DO NOT DELETE UNLESS THERE IS NO SCORES NEEDED TO SAVE!!!!</h1>
</div>
<form action="deletetrnyg.php" method="POST">
<h1>Click OK to Permantely Delete this tournament.: </h1><br>
  <input type="text" name="confirm" value="<?php echo $id; ?>" readonly size="6">
<input type="submit" value="OK">
</form>
</center>
</body>
</html>

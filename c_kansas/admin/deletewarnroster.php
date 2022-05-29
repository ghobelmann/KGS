                                    <?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Delete Repair";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
//include("header.php");
//include("menubar.php");
include("style/style.php");
//INITIAL PAGE SETTINGS-----------



$today = date("Y-n-j"); 


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
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
?>  <center>
<div align="center"><H1>WARNING, THIS WILL PERMANTELY DELETE THIS PLAYER!!!!</h1>
</div>
<form action="deleteroster.php" method="POST">
<h1>Type <?php echo $id; ?> to confirm: </h1><br>
  <input type="text" name="confirm" value="" size="6">
<input type="submit" value="send">
</form>
</center>
</body>
</html>

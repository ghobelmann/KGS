
<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Delete Player";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include("common.php");
//include("header.php");
//include("menubar.php");
//include("style/style.php");
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
<div align="center"><span class="style1">WARNING, THIS WILL PERMANTELY DELETE RECORD FROM DATABASE!!!!</span>
</div>
<p class="style1">Name:</p>
<form action="delete.php" method="POST">
Submit id to Delete: 
  <input type="text" name="id" value="<?php echo $id; ?>" size="30">
Type YES to confirm: 
  <input type="text" name="confirm" value="" size="6">
<input type="submit" value="send">
</form>
</center>
</body>
</html>

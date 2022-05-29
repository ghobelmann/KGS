                           <html>
<head>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=manageroster.php">
</head>
</html>

<?php
$page_title = "Delete Roster Entry";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
?>
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
-->
</style>

 <?php

   if(!empty($_POST['confirm']))
{
$id = $_POST['confirm'];
}


   $sql = "DELETE from `roster` WHERE id = '$id'";
mysql_query($sql);
echo "Roster Entry Deleted <br>";  


?>
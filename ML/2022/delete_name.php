<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Delete Name";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include("common.php");
//INITIAL PAGE SETTINGS-----------$page_title = "Enter Scores";

?>

<?php

//Get number of Team to Search For.
if(!empty($_POST['name']))
{
$name = $_POST['name'];
}
//Submit Query to MySql Database
$query = "Delete FROM scores WHERE player_1 = '$name' ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());
?>

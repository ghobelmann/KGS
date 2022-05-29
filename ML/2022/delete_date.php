<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Delete Date";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include("common.php");
//INITIAL PAGE SETTINGS-----------$page_title = "Enter Scores";

?>

<?php

//Get number of Team to Search For.
if(!empty($_POST['date']))
{
$date = $_POST['date'];
}
//Submit Query to MySql Database
$query = "Delete FROM scores WHERE date = '$date' limit 2100";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());
?>

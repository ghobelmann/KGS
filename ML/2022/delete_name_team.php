<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Delete Name and Team";
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
if(!empty($_POST['team']))
{
$team = $_POST['team'];
}
if(!empty($_POST['date']))
{
$date = $_POST['date'];
}
//Submit Query to MySql Database
$query="DELETE FROM scores WHERE player_1 = '$name' AND team = '$team' AND date = '$date'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());
?>

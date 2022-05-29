<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>
<?php

//Get number of Team to Search For.
if(!empty($_POST['team']))
{
$team = $_POST['team'];
}
//Submit Query to MySql Database
$query = "Delete FROM scores WHERE team = '$team' limit 20";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());
?>

<?php
$page_title = "Hole by Hole Scores";
$permission = "public";
define("IN_GOLF_STATS", TRUE);
include("common.php");
?>

<?php

//Get number of Team to Search For.
if(!empty($_POST['mtch']))
{
$trny = $_POST['mtch'];
}
//Submit Query to MySql Database
$query = "Delete FROM scores WHERE mtch = '$mtch' ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());
?>

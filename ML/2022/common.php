<?php
error_reporting (E_ALL ^ E_NOTICE); 
if(!defined('IN_GOLF_STATS')) die("haking attempt, page not available.");
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
$result = authorize($permission);


if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}


if($result != "success")
{
if($result == "nopermissions")

{
header("Location: login.php?error=2&redirect=".base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
} else {
header("Location: login.php?error=1&redirect=".base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
}
die();
}

?>
<?php

//security 
if(!defined('IN_PHP_AUTH'))
{
die("Hacking attempt.");
}
$error = $_GET['error'];
if(!isset($error))
{
$e_print = 'Quit playing with our error page!!!!!';
}

if($error == "1")
{
$e_print = 'This computer is allready logged in, you must <a href="logout.php">logout</a> before you retry.';
}

if($error == "2")
{
$e_print = 'Invalid login.';
}

if($error == "3")
{
$e_print = 'You did not fill in all the required fields.';
}

if($error == "4")
{
$e_print = 'You do not have the appropriate permissions to login this way.';
}

if($error == "5")
{
$e_print = 'You are not authorized to view this page. Your IP is: '.$_SERVER['REMOTE_ADDR'];
}
if($error == "6")
{
$e_print = 'You are allready logged in';
}
if($error == "7")
{
$e_print = 'You are not logged in';
}
if($error == "8")
{
$e_print = 'Your account has no access rights specified, please contact your system administrator.';
}
?>
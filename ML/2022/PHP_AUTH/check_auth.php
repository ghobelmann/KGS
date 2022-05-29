<?php

//security 
if(!defined('IN_PHP_AUTH'))
{
die("Hacking attempt.");
}
function authorize($permissions)
{
$check_auth['req_prmsn'] = $permissions;

session_start();
if (!$check_auth['req_prmsn'])
{
$check_auth['req_prmsn'] = "public";
}

unset($fail);
if (preg_match("/public/i", $check_auth['req_prmsn']) & !$_SESSION['username'])
{
$check_auth['access'] = "good";
$check_auth['prmsn'] = "public";
} else {
//check to see if logged in
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
//check that the permissions are specified
if(isset($_SESSION['username']) & isset($_SESSION['password']) & !$_SESSION['permissions'])
{
//logout, and kill script 
unset($_SESSION);
die("Your account has no access rights specified, please contact your system administrator.");
} else {
//not authorized error.
$permissionsmissing = TRUE;
}
}

//check to see if valid user


//validate login
$query = "SELECT * FROM `data_logins` WHERE `username` = '".$_SESSION['username']."'";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);

if(!$num)
{
//not authorized error.
$not_in_db = TRUE;
$check_auth['prmsn'] = "public";
} else {
$data['username'] = mysqli_result($result,'0','username');
$data['password'] = mysqli_result($result,'0','password');
$data['permissions'] = mysqli_result($result,'0','permissions');

$check_auth['prmsn'] = $data['permissions'];
$check_auth['user'] = $data['username'];
}
//check login info
if($data['password'] != $_SESSION['password'] | $data['username'] != $_SESSION['username'] | $data['permissions'] != $_SESSION['permissions'])
{
//not authorized error.
$invalid_account = TRUE;
} else {

if (preg_match("/".$_SESSION['permissions']."/i", $check_auth['req_prmsn']) | preg_match("/public/i", $check_auth['req_prmsn']))
{
$check_auth['access'] = "good";
} else {
$check_auth['access'] = "bad";
}
}
}

if(!$invalid_account && $check_auth['access'] == "bad")
{
$auth_result = 'nopermissions';
} else if($invalid_account && $check_auth['access'] == "bad")
{
$auth_result = 'nologin';
} else if($not_in_db)
{
$auth_result = 'notindb';
} else if($permissionsmissing)
{
$auth_result = 'missingpermissions';
} else if(!$invalid_account && $check_auth['access'] == "good")
{
$auth_result = 'success';
} else {
$auth_result = 'failure';
}
return $auth_result;
}

?>
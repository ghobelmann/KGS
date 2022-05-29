<?php

//security
if(!defined('IN_PHP_AUTH'))
{
die("Hacking attempt.");
}

//connect to db
$link = @mysqli_connect($host, $user, $password);
if (!$link) {
   die('There was a problem connecting to the MySql server.<br><br>MySql said:<table border="1"><tr><td>'.mysqli_error().'</td></tr></table>');
}
@mysqli_select_db($database) or die('There was a problem connecting to the MySql database.<br><br>MySql said:<table border="1"><tr><td>'.mysqli_error().'</td></tr></table>');
?>
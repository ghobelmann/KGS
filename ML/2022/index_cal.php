
<?php
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
include("header.php");
?>
<html>
<iframe src="http://www.google.com/calendar/embed?src=qvr7qj0s5mnaa073rbkinsi9vk%40group.calendar.google.com&ctz=America/Chicago" 
style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</html>
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
include("menubar.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Search Page</title>
</head>

<body>


<form action="messagename.php" method="GET">
Submit Name to Search for: <input type="text" name="name" value="" size="30">
<input type="submit" value="send">
</form>
<br>
<form action="messageteam.php" method="GET">
Submit Team to Search for: <input type="int" name="team" value="" size="3">
<input type="submit" value="send">
</form>
<br>
<form action="messagedate.php" method="GET">
Submit Date to Search for: <input type="date" name="date" value="" size="15">
<input type="submit" value="send">
</form>

<br>
<form action="messagemtch.php" method="GET">
Submit Match to Search for: <input type="smallint" name="mtch" value="" size="4">
<input type="submit" value="send">
</form>


<?php include("footer.php"); ?>
</body>
</html>

<?php

$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
//if(authorize("superadmin,admin") != "success") die('unauthorized');
?>

<head>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.usd237.com/golf/enterscores.php"
</head>

  <?php
$sql="INSERT INTO hc (player_1, hc)
VALUES
('$_POST[player_1]','$_POST[hc]')";


if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }


  
  ?>

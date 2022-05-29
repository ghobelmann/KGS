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


<?php 

$sql="INSERT INTO stats (name, tournament, score, place, yardage, 
hole, par, fairway, dd, dd2, driveclub, drivedirect, drivespin,
dtg, n2dclub, n2ddirect, dtg2, stg, sandsave, putts, gir, 
puttresult)
VALUES
('$_POST[name]','$_POST[tournament]','$_POST[score]','$_POST[place]','$_POST[yardage]',
'$_POST[hole]','$_POST[par]','$_POST[fairway]','$_POST[dd]','$_POST[dd2]','$_POST[driveclub]',
'$_POST[drivedirect]','$_POST[drivespin]','$_POST[dtg]','$_POST[n2dclub]','$_POST[n2ddirect]',
'$_POST[dtg2]','$_POST[stg]','$_POST[sandsave]','$_POST[putts]','$_POST[gir]',
'$_POST[puttresult]')";
  

  
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


 
?>

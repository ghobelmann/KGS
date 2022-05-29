 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>

<TITLE>Enter Roster</TITLE>
<meta http-equiv="Refresh" content="0; url=index.php">




</BODY>
</HTML>

<?php 

     $sql="INSERT INTO trnyteams (tmid, tid)
VALUES
('$_POST[tmid]', '$_POST[tid]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }

?>
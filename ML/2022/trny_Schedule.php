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



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center">
  <p>Smith Center Golf Course Tournament Schedule</p>
  <table width="80%" border="1">
    <tr>
      <td width="25%">April 20th - Sunday</td>
      <td width="31%">6 Person Scramble </td>
      <td width="19%">1:00 PM</td>
      <td width="25%">Chuck Wilson or John Boden</td>
    </tr>
    <tr>
      <td>May 3rd - Saturday</td>
      <td>Athletic Dept 4 Person Scrable</td>
      <td>9:00 AM</td>
      <td>Greg Hobelmann</td>
    </tr>
    <tr>
      <td>June 8th - Sunday</td>
      <td>3 Person Shamble</td>
      <td>9:00 AM</td>
      <td>Lynn Zierlein</td>
    </tr>
    <tr>
      <td>July 19th and 20th - Sat. Sun.</td>
      <td>2 Person Scramble</td>
      <td>7:30 AM and 1:15 PM </td>
      <td>Lynn Zierlein</td>
    </tr>
    <tr>
      <td>August 2nd and 3rd - Sat. Sun.</td>
      <td>4 Person Scramble MPK Roundup </td>
      <td>9:00 AM</td>
      <td>Chuck Wilson</td>
    </tr>
    <tr>
      <td>September 1st- Monday</td>
      <td>1 Person Scramble Boden Shootout</td>
      <td>7:30 AM and 1:15 PM</td>
      <td>Shane McCall</td>
    </tr>
    <tr>
      <td>September 21st - Sunday</td>
      <td>3 Person Scramble 27 Hole</td>
      <td>9:00 AM</td>
      <td>Fletch Bolton or John Ballhorst</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>

<html>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
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
//include("menubar.php");
include("style/style.php");
?>

<?php
if(!defined('IN_GOLF_STATS')) die("haking attempt, page not available.");
//session_start();
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>

</head>

<body>
<table width="330" height="323" border="1" align="left" bordercolor="#999999" bgcolor="black">
  <tr bgcolor="black"> 
    <th bgcolor="#333333" width="146" height="19" class="style30" scope="row"><div align="center" ><a href="index.php" > Home</a></div></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="teamscores.php" class="style26">Team Point Totals</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="handicap.php">Handicap Rankings</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="avgtotal.php">Player Stats</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="frontback.php">Front Back Comparison</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="selectall.php" class="style18">All Scores</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="frontbackteam.php">Team Statistics</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="datesearch.php">Weekly Results</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th class="style30" scope="row" bgcolor="#333333"><a href="divisions.php">A, B, C, D Players</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="membersdirectory.php">Member Directory</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="subdirectory.php">Substitute Directory</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="avghole.php">Player of the Year</a></th>
  </tr>
  <tr bgcolor="black"> 
    <th bgcolor="#333333" height="19" class="style30" scope="row"></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><span class="style5"><font color="black">
      <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    </font></span></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><strong><a href="matchups.htm">Matchups Next Week</a></strong></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><strong><a href="holeavg.php">Scoring Avg per hole</a></strong></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><strong><a href="teams.php">Teams</a></strong></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="scorecardwhte.htm">This Weeks Scorecards</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="WhiteTees.htm">White Tees Points Calculator</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="BlueTees.htm">Blue Tees Points Calculator</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="playersmessageboard.php">Players Message Board</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="admin_page.php">Admin Page</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="enterplayers.php">Sign Up </a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="playersmessageboard.php">Players Message Board</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="http://www.usd237.com/golf/2008/Golf/index.php">2008 Results</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="http://www.usd237.com/golf/2009/index.php">2009 Results</a></th>
  </tr>
  <tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="2010/index.php">2010 Results</a></th>
  </tr>
<tr bgcolor="black">
    <th bgcolor="#333333" height="19" class="style30" scope="row"><a href="2011/index.php">2011 Results</a></th>
  </tr>
			<tr bgcolor="black">
				<th bgcolor="#333333" height="19" class="style30" scope="row"><a href="schedule1.php">Schedule</a></th>
			</tr>
		</table>
<p><a href="2008/Golf/index.php" class="style1">
  <span class="style29">  </span></a></p>
<p><a href="2008/Golf/index.php" class="style1">
</a> </p>
</body>
</html>

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
//include("header.php");
//include("menubar.php");
include("style/style.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Smith Center Mens League Golf 2012</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan"><p>Mens League 2012...</p></div>
		<!-- end logo -->
		</div>
		<div id="nav">
		  <div id="nav-menu-left"></div>
		  <div id="nav-menu">
		  <!-- start of navigation -->
		    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			    <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>
			  <li><a href="admin_page.php" style="background-image: none;">admin</a></li>
			</ul>
      
			<!-- end navigation -->
          </div>
		  <div id="nav-menu-right"></div>
		</div>
	  </div>
	  <div class="clearfloats"></div>
	  <div id="header2">
	    <!-- the large header slogan which is over top of the grass image can either be changed, or removed below -->
	    <div id="header2-slogan1"><p>Update Scores</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->

 <?php
if($_POST['submit'] == "Enter Scores")
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `player_1` = '".$_POST['player_1']."' AND `team` = '".$_POST['team']."' AND `mtch` = '".$_POST['mtch']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);
$one = ($_POST[hole1]) ? $_POST[hole1] : $scores['hole1'];
$two = ($_POST[hole2]) ? $_POST[hole2] : $scores['hole2'];
$three = ($_POST[hole3]) ? $_POST[hole3] : $scores['hole3'];
$four = ($_POST[hole4]) ? $_POST[hole4] : $scores['hole4'];
$five = ($_POST[hole5]) ? $_POST[hole5] : $scores['hole5'];
$six = ($_POST[hole6]) ? $_POST[hole6] : $scores['hole6'];
$seven = ($_POST[hole7]) ? $_POST[hole7] : $scores['hole7'];
$eight = ($_POST[hole8]) ? $_POST[hole8] : $scores['hole8'];
$nine = ($_POST[hole9]) ? $_POST[hole9] : $scores['hole9'];

$_POST['front'] = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;
$_POST['back'] = $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$_POST['total'] = $_POST['front'] + $_POST['back'];
if($player_exists != 1)
{
echo '<h2><font color=red>Cannot find the player, team, and tournament combination you specified</font></h2>';
} else {
	echo '<CENTER><h2>! Scores Updated Successfully!</h2>';
	echo "<br>"; 
	echo "<h2>New Total--</h2>";
	echo $_POST['front'];
	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `scores` SET ".(( !$_POST['hole1'] ) ? "" : "`hole1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`hole2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`hole3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`hole4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`hole5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`hole6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`hole7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`hole8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`hole9` = '".$_POST[hole9]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$_POST['white'] ) ? "" : "`white` = '".$_POST[white]."', ")."
".(( !$_POST['blue'] ) ? "" : "`blue` = '".$_POST[blue]."', ")."
".(( !$_POST['points'] ) ? "" : "`points` = '".$_POST[points]."', ")."

`spam` = '1'


WHERE `player_1` = '".$_POST['player_1']."' AND `team` = '".$_POST['team']."' AND `mtch` = '".$_POST['mtch']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

}

$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}



?>
<div align="center">
    <blockquote>
      <h2 align="center" class="style1"><strong>Update Players Scores This will change their results</strong></h2>
      <h2 align="center" class="style1"><strong>Enter Player Name, Team and Match Number </strong></h2>
    </blockquote>
</div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p class="style1">Name:
        <input type="varchar" name="player_1" />
      Team:
		<input type="varchar" name="team" size="20"/>
    </p>
    <p class="style1">Match	  :
	    <input type="varchar" name="mtch" size="20" ; ?>
	<p>
      <input type="checkbox" name="white" value="no"> 
       Un-Check White Tees
      <input type="checkbox" name="blue" value="no">
Un-Check Blue Tees </p>

  <p>
      <input type="checkbox" name="white" value="yes"> 
      Check White Tees
      <input type="checkbox" name="blue" value="yes">
Check Blue Tees </p>

    </p>
    <table width="375" border="1">
  <tr>
    <th width="40"><div align="center">
      <span class="style1">1</span></th>
    <td width="38"><div align="center" class="style1">2</div></td>
    <td width="45"><div align="center" class="style1">3</div></td>
    <td width="45"><div align="center" class="style1">4</div></td>
    <td width="40"><div align="center" class="style1">5</div></td>
    <td width="45"><div align="center">
      <span class="style1">6</span></td>
    <td width="45"><div align="center">
      <span class="style1">7</span></td>
    <td width="45"><div align="center">
      <span class="style1">8</span></td>
    <td width="45"><div align="center">
      <span class="style1">9</span></td>
    </tr>
</table>
  	 
      <p>
   	    
        <input type="int" name="hole1" size="2" />
		<input type="int" name="hole2" size="2"/>
      	<input type="int" name="hole3" size="2" />
        <input type="int" name="hole4" size="2"/>
        <input type="int" name="hole5" size="2"/>
        <input type="int" name="hole6" size="2"/>
        <input type="int" name="hole7" size="2"/>
        <input type="int" name="hole8" size="2"/>
        <input type="int" name="hole9" size="2"/>
</p>
      <p>Points:
      <input type="int" name="points" size="10"/>    </p>
      <p>
      <input name="submit" type="submit" value="Enter Scores" />
</p>
  </form>






















</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
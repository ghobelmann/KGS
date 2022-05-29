
<?php error_reporting (E_ALL ^ E_NOTICE);
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
  }

  require_once "config.php";

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
		<div id="slogan"><p>Mens League 2022...</p></div>
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
			  <li>  <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
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
	    <div id="header2-slogan1"><p>Thanks for Playing</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->

    <?php
if($_POST['submit'] == "Enter Handicap")
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `hc` WHERE `player_1` = '".$_POST['player_1']."' LIMIT 1";
$result = mysqli_query($link, $sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
$one = ($_POST[hc]) ? $_POST[hc] : $scores['hc'];



if($player_exists != 1)
{
echo '<h2><font color=red>Cannot find the player you specified</font></h2>';
} else {
	echo '<CENTER><h2>! Handicap Updated Successfully!</h2>';
	echo "<br>"; 
	echo "<h2>New Handicap--</h2>";
	echo $_POST['hc'];
	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `hc` SET ".(( !$_POST['hc'] ) ? "" : "`hc` = '".$_POST[hc]."', ")."

`spam` = '1'


WHERE `player_1` = '".$_POST['player_1']."' ";

if (!mysqli_query($link, $sql))
  {
  die('Error: ' . mysqli_error());
  }

}

$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";
if($results = @mysqli_query($link, $query))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error: '.mysqli_error());
}



?>

<div align="center">
    <blockquote>
      <h2 align="center" class="style1"><strong>This Changes Handicap in HC Table only.</strong></h2>
      <h2 align="center" class="style1"><strong>Player name must match scores and hc table.</strong></h2>
    </blockquote>
    <br>
</div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p class="style1">Name:
        <input type="varchar" name="player_1" />
      New Handicap:
		<input type="int" name="hc" size="4"/>
     <input name="submit" type="submit" value="Enter Handicap" />   </p>
  </form>




























<?php include("footer.php"); ?>

</body>
</html>


</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
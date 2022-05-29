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
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.membersdirectory.php";
}
//-->
</script>


  <head>
	<title>Smith Center Mens League Golf</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan"><p>Mens League...</p></div>
		<!-- end logo -->
		</div>
		<div id="nav">
		  <div id="nav-menu-left"></div>
		  <div id="nav-menu">
		  <!-- start of navigation -->
		    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			    <li> <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>  </li>
    
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
	    <div id="header2-slogan1"><p>Members</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->



<?php


$query = "SELECT * from person WHERE mem = '!' ORDER by player_1, id asc;"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

echo '<table border="1" width = "95%">';
echo '<tr> <th width="10">#</th><th width="60">Name</th> <th width="75">Phone</th><th width="75">Email</th><th width="75">Average Score</th></tr>';
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><center>';
	echo "<td>"; 
	echo '<a href="messagename.php?player_1='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['phone'];
	echo "</td><td><CENTER>"; 
	echo '<a href="mailto:'.$row['email'].'?subject=Smith Center Mens League Golf">'.$row['email'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hc'];
	echo "</td></tr>"; 
	$i++;
} 

echo "</table>";


?>

<?php
//Increment counter
mysql_query("UPDATE countertable SET count_membersdirectory=count_membersdirectory+1");

//extract count from database table
$query = "SELECT count_membersdirectory FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_membersdirectory']; 
	echo "</td></tr>";

} 

//UPDATE `person` SET `email` = 'jburgardt@usd237.com' WHERE `person`.`id` =84 LIMIT 1 ;


?>






























</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
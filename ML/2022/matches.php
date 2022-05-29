
<?php error_reporting (E_ALL ^ E_NOTICE);
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
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
			   <li> <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
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
	    <div id="header2-slogan1"><p>Match Ups</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


 <form action="connectmatches.php" method="post">
<html>

	<head>
		<title>Enter Matches</title>
			<style type="text/css" media="screen"><!--
#layer1 { visibility: visible; position: absolute; top: 111px; left: 399px; width: 578px; height: 471px }
--></style>
		</head>
              <table>  <td>
	<body bgcolor="#ffffff">
		<p>Date: <input type="date" name="date" value="" size="8"></p> 
		<p>Match 1 : <input type="int" name="a" value="" size="4"> vs: <input type="int" name="b" value="" size="4"></p>
		<p>Match 2: <input type="int" name="c" value="" size="4"> vs: <input type="int" name="d" value="" size="4"></p>
		<p>Match 3: <input type="int" name="e" value="" size="4"> vs: <input type="int" name="f" value="" size="4"></p>
		<p>Match 4 : <input type="int" name="g" value="" size="4"> vs: <input type="int" name="h" value="" size="4"></p>
		<p>Match 5: <input type="int" name="i" value="" size="4"> vs: <input type="int" name="j" value="" size="4"></p>
		<p>Match 6: <input type="int" name="k" value="" size="4"> vs: <input type="int" name="l" value="" size="4"></p> </td><td>
    <p>Match 7 : <input type="int" name="m" value="" size="4"> vs: <input type="int" name="n" value="" size="4"></p>
		<p>Match 8: <input type="int" name="o" value="" size="4"> vs: <input type="int" name="p" value="" size="4"></p>
		<p>Match 9: <input type="int" name="q" value="" size="4"> vs: <input type="int" name="r" value="" size="4"></p>
		<p>Match 10 : <input type="int" name="s" value="" size="4"> vs: <input type="int" name="t" value="" size="4"></p>
		<p>Match 11: <input type="int" name="u" value="" size="4"> vs: <input type="int" name="v" value="" size="4"></p>
		<p>Match 12: <input type="int" name="w" value="" size="4"> vs: <input type="int" name="x" value="" size="4"></p>
		<p>Match 13: <input type="int" name="y" value="" size="4"> vs: <input type="int" name="z" value="" size="4"></p>
		<p>Match 14: <input type="int" name="aa" value="" size="4"> vs: <input type="int" name="bb" value="" size="4"></p>
	
		<p> <input type="submit" value="send"></p>       </td>   </table>
 

























</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
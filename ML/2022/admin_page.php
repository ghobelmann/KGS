<?php error_reporting (E_ALL ^ E_NOTICE);
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
  }
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
	    <div id="header2-slogan1"><p>Admin Page</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


<ul>
<li>  <th><a href="opponantsearch2.php">Make Scorecards 2 Man Teams</a></th></li>
<li>  <th><a href="opponantsearch.php">Make Scorecards 4 Man Teams</a></th></li>
<li>  <th><a href="matches.php">Enter this weeks Matches</a></th> </li>
<li>      <th>
      <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    </th>
</li>
<li> <th><a href="index.php"> Home</a></th></li>
<li><a href="updatehc.php">Update Handicaps</a></li>
 <li> <th> <a href="EnterScores.php">Enter Scores</a></th></li>
  <li> <th> <a href="EnterScorestrny.php">Enter Tournament Scores</a></th></li>
 <li> <th><a href="addmember.php">Add a Member</a></span></th> </li>
 <li> <th><a href="deletetrny.php">Delete</a></span></span></th></li>
 <li> <th><a href="EnterSchedule.php">Setup Schedules </a></span></th></li>
 <li> <th><a href="updatescores.php">Update Scores</a></span></span></th></li>
 <li> <th><a href="trnysetup.php">Change Date </a></span></th></li>
 <li> <th><a href="trny_Schedule.php">Schedule</a></span></span></th></li>
 <li> <th><a href="schedule1.php">Schedules</a> </strong></span></th></li>
 <li> <th><a href="index_cal.php">Calendar </a></strong></span></th></li>
 <li> <th> <a href="edit.php">Edit</a> </span></th></li>
 <li> <th><a href="Pointsperweek.php">Points per Week </a></th></li>
 <li> <th><a href="email.php">Email to Group </a></th></li>
</ul>































</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
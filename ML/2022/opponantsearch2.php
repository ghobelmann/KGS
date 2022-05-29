<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

require_once "config.php";
 
//include("header.php");
//include("menubar.php");
include("style/style.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Smith Center Mens League Golf 2022</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
       <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
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
			    <li><?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
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
	    <div id="header2-slogan1"><p>Scorecards</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->






    <form action="opponant2.php" method="GET">
    
      <h2> A Division </h2>
  <p>Match 1 :
    <input type="int" name="team" value="" size="4">
    vs:
    <input type="int" name="team1" value="" size="4">
  </p>
  <p>Match 2:
    <input type="int" name="team2" value="" size="4">
vs:
<input type="int" name="team21" value="" size="4">
  </p>
	<p>Match 3:
    <input type="int" name="team3" value="" size="4">
vs:
<input type="int" name="team31" value="" size="4">    
  </p>
  <p>Match 4 :
    <input type="int" name="team4" value="" size="4">
    vs:
    <input type="int" name="team41" value="" size="4">
  </p>
  <p>Match 5 :
    <input type="int" name="team5" value="" size="4">
    vs:
    <input type="int" name="team51" value="" size="4">
  </p>
  <p>Match 6 :
    <input type="int" name="team6" value="" size="4">
    vs:
    <input type="int" name="team61" value="" size="4">
  </p>
  
    <h2> B Division </h2>
  <p>Match 7:
    <input type="int" name="team7" value="" size="4">
vs:
<input type="int" name="team71" value="" size="4">
  </p>
  <p>Match 8:
    <input type="int" name="team8" value="" size="4">
vs:
<input type="int" name="team81" value="" size="4">
  </p>
    <p>Match 9:
    <input type="int" name="team9" value="" size="4">
    vs:
    <input type="int" name="team91" value="" size="4">
  </p>
  <p>Match 10:
    <input type="int" name="team10" value="" size="4">
vs:
<input type="int" name="team101" value="" size="4">
  </p>
  
  
  
  <h2> C Division </h2>
	<p>Match 11:
    <input type="int" name="team11" value="" size="4">
vs:
<input type="int" name="team111" value="" size="4">    
  </p>
  
  
  
  
  	<p>Match 12:
    <input type="int" name="team12" value="" size="4">
vs:
<input type="int" name="team121" value="" size="4">    
  </p>
  
  	<p>Match 13:
    <input type="int" name="team13" value="" size="4">
vs:
<input type="int" name="team131" value="" size="4">    
  </p>
  
  
  	<p>Match 14:
    <input type="int" name="team14" value="" size="4">
vs:
<input type="int" name="team141" value="" size="4">    
  </p>
  


  <p>    Match Number:
    <input type="int" name="match" value="" size="4">
Tees:
    <input type="varchar" name="tees" value="" size="8">
  </p>
Date: <input type="text" id="datepicker" name="date">
    <input type="submit" value="send">
    
         <br><br>
    
    Rules Line 1:
    <input type="varchar" name="rules1" value="" size="100">
  </p>
  
  Rules Line 2:
    <input type="varchar" name="rules2" value="Format: 4 ball, 1 Point per hole, 1/2 each if tied, Max Score is Triple Bogey, League Dues $50.00, pay Mark McClain." size="100">
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
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
require_once "config.php";

include("style/style.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Smith Center Mens League Golf 2012</title>
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






    <form action="opponant.php" method="GET">
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
  <p>Match 5:
    <input type="int" name="team5" value="" size="4">
vs:
<input type="int" name="team51" value="" size="4">
  </p>
  <p>Match 6:
    <input type="int" name="team6" value="" size="4">
vs:
<input type="int" name="team61" value="" size="4">
  </p>
  <p>    Match Number:
    <input type="int" name="match" value="" size="4">
Tees:
    <input type="varchar" name="tees" value="" size="8">
  </p>
Date: <input type="text" id="datepicker" name="date">
    <input type="submit" value="send">

	
</form>

  <table border="0" cellpadding="0" cellspacing="0" width="715">
    <tbody>
      <tr>
        <td class="bodyText" valign="top" width="715"><table border="0" cellpadding="1" cellspacing="1" width="100%">
          <tbody>
          <tr><th><br></th></tr>
          <tr><th><br></th></tr>
            <tr bordercolor="#111111">
              <td colspan="7" height="21"><p align="center" class="style1"><font color="#ffffff"><u>May 4th 4 Man Scramble - White Tees: Wednesday 6:00 pm </u></font></p></td>
            </tr>
            <tr bordercolor="#111111">
              <td width="25%" height="18"><div align="center" class="style1"><u>May 11th - White Tees </u></div></td>
              <td width="11%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=8">8</a></div></td>
              <td width="14%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=7">7</a></div></td>
              <td width="11%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=3">3</a>-<a href="messageteam.php?team=6">6</a></div></td>
              <td width="11%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=4">4</a>-<a href="messageteam.php?team=5">5</a></div></td>
           
            </tr>
<tr><th><br></th></tr>
            <tr bordercolor="#111111">
              <td height="18"><div align="center" class="style2"><b><u>May 18th - Blue Tees </u></b></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=7">7</a></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=5"> 5 </a></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=3">3</a>-<a href="messageteam.php?team=4">4</a></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=8">8</a></div></td>
          
            </tr>
<tr><th><br></th></tr>         

  <td height="18"><div align="center" class="style2"><b><u>May 25 - White Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2">AD BC Scramble </div></td>
      
          </tr>
<tr><th><br></th></tr>
          <tr bordercolor="#111111">
            <td height="18"><div align="center" class="style2"><b><u>June 1 - White Tees </u></b></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=6">6</a></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=3">3</a></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=7">7</a>-<a href="messageteam.php?team=5">5</a></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=4">4</a>-<a href="messageteam.php?team=8">8</a></div></td>
        
          </tr>
 <tr><th><br></th></tr>    
  <td height="18"><div align="center" class="style2"><b><u>June 8 - Blue Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=5">5</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=7">7</a>-<a href="messageteam.php?team=3">3</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=8">8</a>-<a href="messageteam.php?team=2">2</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=4">4</a></div></td>
<tr><th><br></th></tr>

  <td height="18"><div align="center" class="style2"><b><u>June 15 - Blue Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2">AC BD Scramble </div></td>

  </tr>

<tr><th><br></th></tr>

  <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>June 22 - White Tees </u></b></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=4">4</a></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=2">2</a></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=7">7</a>-<a href="messageteam.php?team=8">8</a></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=5">5</a>-<a href="messageteam.php?team=3">3</a></div></td>
  </tr>
  
    <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>June 29 - </u></b></div></td>
    <td height="18"><div align="center" class="style2">Harvest Break/Makeup Night.</div></td>
 </tr>
  
<tr><th><br></th></tr>
  <td height="18"><div align="center" class="style2"><b><u>July 6 - White Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=3">3</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=4">4</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=5">5</a>-<a href="messageteam.php?team=8">8</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=7">7</a></div></td>
 </tr>
<tr><th><br></th></tr>
  <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>July 13 - Blue Tees </u></b></div></td>
         <td height="18"><div align="center" class="style2">AB CD Scramble White Tees</div></td>
  </tr>
<tr><th><br></th></tr>
 <td height="18"><div align="center" class="style2"><b><u>July 20 - White Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=2">2</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=3">3</a>-<a href="messageteam.php?team=8">8</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=4">4</a>-<a href="messageteam.php?team=7">7</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=5">5</a></div></td>



 </tr>
<tr><th><br></th></tr>
  <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>July 27 - White Tees</u></b></div></td>
            <td height="18"><div align="center" class="style2">Low Net Tournament/Barbeque</div></td>
  
   </tr>
        </table></td>
      </tr>
    </tbody>
  </table>











</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
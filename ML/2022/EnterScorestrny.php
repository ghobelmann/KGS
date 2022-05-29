?php error_reporting (E_ALL ^ E_NOTICE); ?>
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
	    <div id="header2-slogan1"><p>Enter Tournament Scores</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->


<?php
$query = " SELECT * FROM `tournament` ORDER by `date` desc LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}

?>




  <form action="connecttrnyscores.php" method="post">
    <p>Name:
        <input type="varchar" name="player_1" />
      Team:
		<input type="varchar" name="team" size="20"/>
		
    

		<br>
		  <?php

$sql="SELECT * FROM tournaments";
$result=mysql_query($sql);

$options="";

while ($row=mysql_fetch_array($result)) {

    

	$trny=$row["tournaments"];
    $options.="<OPTION VALUE=\"$trny\">".$trny;
}
?>
Tournaments
            <select name="trny">
            
				<OPTION VALUE=><?php echo $options ?></OPTION>
		</SELECT>
		Card:
		<input type="int" name="position" size="1"/>
		Date:
        <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>"/>
</p>


    <table width="415" border="1">
  <tr>
    <th width="50"><div align="center">1</th>
    <td width="50"><div align="center">2</div></td>
    <td width="52"><div align="center">3</div></td>
    <td width="50"><div align="center">4</div></td>
    <td width="50"><div align="center">5</div></td>
    <td width="50"><div align="center">6</td>
    <td width="50"><div align="center">7</td>
    <td width="50"><div align="center">8</td>
    <td width="50"><div align="center">9</td>
    </tr>
</table>
  	 
      <p>
   	    
        <input type="varchar" name="hole1" size="2" />
		<input type="varchar" name="hole2" size="2"/>
      	<input type="varchar" name="hole3" size="2" />
        <input type="varchar" name="hole4" size="2"/>
        <input type="varchar" name="hole5" size="2"/>
        <input type="varchar" name="hole6" size="2"/>
        <input type="varchar" name="hole7" size="2"/>
        <input type="varchar" name="hole8" size="2"/>
        <input type="varchar" name="hole9" size="2"/>
      </p>
      <table width="415" border="1">
        <tr>
          <th width="40"><div align="center">10</div></th>
          <td width="38"><div align="center">11</div></td>
          <td width="45"><div align="center">12</div></td>
          <td width="45"><div align="center">13</div></td>
          <td width="40"><div align="center">14</div></td>
          <td width="45"><div align="center">15</div></td>
          <td width="45"><div align="center">16</div></td>
          <td width="45"><div align="center">17</div></td>
          <td width="45"><div align="center">18</div></td>
        </tr>
    </table>
      <p>
        <input type="varchar" name="hole10" size="2"/>
        <input type="varchar" name="hole11" size="2"/>
        <input type="varchar" name="hole12" size="2"/>
        <input type="varchar" name="hole13" size="2"/>
        <input type="varchar" name="hole14" size="2"/>
        <input type="varchar" name="hole15" size="2"/>
        <input type="varchar" name="hole16" size="2"/>
        <input type="varchar" name="hole17" size="2"/>
        <input type="varchar" name="hole18" size="2"/>
		  <input name="" type="submit" value="Enter Scores" />
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
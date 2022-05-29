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
	    <div id="header2-slogan1"><p>Individual Results</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->





 <?php

 // PHP Search Script

//Select Players name from form 
if(!empty($_GET['player_1']))
{
$name = $_GET['player_1'];
}
echo "<h1>$name</h1>";
$query = "SELECT *, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 FROM trnyscores WHERE player_1 = '$name'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Display table on the web page
echo "<table border='1' cellpadding='5' cellspacing='10'>";
echo "<tr> <th>Player Name </th><th> 1</th> <th> 2</th> <th>3</th> <th>4</th> <th>5</th> 
<th>6</th> <th>7</th> <th>8</th> <th>9</th>  <th>Front</th>
<th>10</th> <th>11</th> <th>12</th> <th>13</th> <th>14</th> 
<th>15</th> <th>16</th> <th>17</th> <th>18</th>  <th>Back</th>
<th>Total</th><th>Tournament</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo $row['hole1'];
	echo "</td><td><CENTER>";
	echo $row['hole2'];
	echo "</td><td><CENTER>";
	echo $row['hole3'];
	echo "</td><td><CENTER>";
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>";
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>";
	echo $row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
		echo "</td><td><CENTER>"; 
	echo $row['hole10'];
	echo "</td><td><CENTER>";
	echo $row['hole11'];
	echo "</td><td><CENTER>";
	echo $row['hole12'];
	echo "</td><td><CENTER>";
	echo $row['hole13'];
	echo "</td><td><CENTER>"; 
	echo $row['hole14'];
	echo "</td><td><CENTER>"; 
	echo $row['hole15'];
	echo "</td><td><CENTER>";
	echo $row['hole16'];
	echo "</td><td><CENTER>"; 
	echo $row['hole17'];
	echo "</td><td><CENTER>";
	echo $row['hole18'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
		echo "</td><td><CENTER>"; 
	echo $row['trny'];
	echo "</td><CENTER>"; 
} 

	
?>
	</table>










                
















</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

$page_title="Schedule";
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
	<title>Smith Center Mens League Golf</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {font-weight: bold}
.style3 {color: #FFFFFF; font-weight: bold; }
-->
    </style>
  </head>

  <body>
    <div id="page">
	  <div id="header">
    
    
    <script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.schedule1.php";
}
//-->
</script>

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
	    <div id="header2-slogan1"><p>Schedule---- <a href="schedule_print.php">Print</a></p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	 
  
</div>

<body>
<center><table border=0 cellpadding=0 cellspacing=0 width=1200 style='border-collapse:
 collapse;table-layout:fixed;width:1200pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=99 style='mso-width-source:userset;mso-width-alt:3620;width:74pt'>
 <col width=98 style='mso-width-source:userset;mso-width-alt:3584;width:74pt'>
 <col width=107 span=2 style='mso-width-source:userset;mso-width-alt:3913;
 width:80pt'>
 <col width=105 style='mso-width-source:userset;mso-width-alt:3840;width:79pt'>
 <col width=15 style='mso-width-source:userset;mso-width-alt:548;width:11pt'>
 <col width=74 style='mso-width-source:userset;mso-width-alt:2706;width:56pt'>
 <col width=71 style='mso-width-source:userset;mso-width-alt:2596;width:53pt'>
 <col width=59 style='mso-width-source:userset;mso-width-alt:2157;width:44pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <tr height=63 style='mso-height-source:userset;height:47.25pt'>
  <td colspan=10 height=63 class=xl74 width=848 style='height:47.25pt;
  width:636pt'><a name="Print_Area" href="http://www.usd237.com/golf/2018/"
  target="_parent"><span style='font-size:36.0pt'>www.usd237.com/golf/2018/</span></a></td>
  <td width=100 style='width:75pt'></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=10 height=36 class=xl71 style='height:27.0pt'>Smith Center Mens
  League 2018 - NEW!!!</td>
  <td class=xl75>&nbsp;</td>
 </tr>
 <tr height=45 style='height:33.75pt'>
  <td height=45 style='height:33.75pt'></td>
  <td colspan=5 class=xl72>AB Schedule</td>
  <td></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl68 style='height:15.75pt'>5/9/2018</td>
  <td colspan=5 class=xl70>Scramble</td>

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>5/16/2018</td>
  <td class=xl65>1 vs 2</td>
  <td class=xl65>3 vs 10</td>
  <td class=xl65>4 vs 9</td>
  <td class=xl65>5 vs 8</td>
  <td class=xl65>6 vs 7</td>
    <td class=xl65></td>


 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>5/23/2018</td>
  <td class=xl65>2vs3 &amp; 6vs9</td>
  <td class=xl65>1vs7 &amp; 7vs8</td>
  <td class=xl65>5vs9 &amp; 3vs1</td>
  <td class=xl65>8vs6 &amp; 4vs2</td>
  <td class=xl65><span style='mso-spacerun:yes'> </span>4vs10 &amp; 5 vs 10</td>
    
            
            
            
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl68 style='height:15.75pt'>5/30/2018</td>
  <td colspan=5 class=xl70>Game</td>
  <td class=xl66>&nbsp;</td>

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>6/6/2018</td>
  <td class=xl65>6vs10 &amp; 5vs3</td>
  <td class=xl65>2vs5 &amp; 6vs2</td>
  <td class=xl65>3vs4 &amp; 7vs10</td>
  <td class=xl65>1vs8 &amp; 8vs9</td>
  <td class=xl65>9vs7 &amp; 4vs1</td>
  
   <td class=xl65></td>
   

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>6/13/2018</td>
  <td class=xl65>1vs9 &amp; 5vs1</td>
  <td class=xl65>8vs10 &amp; 6vs4</td>
  <td class=xl65>2vs7 &amp; 7vs3</td>
  <td class=xl65>3vs6 &amp; 8vs2</td>
  <td class=xl65>4vs5 &amp; 9vs10</td>
   <td class=xl65></td>
   

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>6/20/2018</td>
  <td class=xl65>5vs6 &amp; 9vs3</td>
  <td class=xl65>1vs10 &amp; 2vs10</td>
  <td class=xl65>2vs9 &amp; 6vs1</td>
  <td class=xl65>3vs8 &amp; 7vs5</td>
  <td class=xl65>4vs7 &amp; 8vs4</td>
  
 <td class=xl65></td>


 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl68 style='height:15.75pt'>6/27/2018</td>
  <td colspan=5 class=xl70><span style='mso-spacerun:yes'> </span>Game</td>
  <td class=xl66>&nbsp;</td>
 

 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl68 style='height:15.75pt'>7/4/2018</td>
  <td colspan=5 class=xl70>July 4th No League Tonight</td>
  <td class=xl66>&nbsp;</td>



 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>7/11/2018</td>
  <td class=xl65>1 vs 2</td>
  <td class=xl65>3 vs 10</td>
  <td class=xl65>4 vs 9</td>
  <td class=xl65>5 vs 8</td>
  <td class=xl65>6 vs 7</td>
  <td class=xl65></td>
      <td class=xl65>12 vs 17</td>
        <td class=xl65>13 vs 16</td>
          <td class=xl65>14 vs 15</td>
            <td class=xl65>Team 11 Bye</td>
    
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>7/18/2018</td>
  <td class=xl65>2vs3 &amp; 6vs9</td>
  <td class=xl65>1vs7 &amp; 7vs8</td>
  <td class=xl65>5vs9 &amp; 3vs1</td>
  <td class=xl65>8vs6 &amp; 4vs2</td>
  <td class=xl65><span style='mso-spacerun:yes'> </span>4vs10 &amp; 5vs10</td>
       <td class=xl65></td>
      <td class=xl65>13 vs 11</td>
        <td class=xl65>14 vs 17</td>
          <td class=xl65>15 vs 16</td>
            <td class=xl65>Team 12 Bye</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>7/25/2018</td>
  <td class=xl65>6vs10 &amp; 5vs3</td>
  <td class=xl65>2vs5 &amp; 6vs2</td>
  <td class=xl65>3vs4 &amp; 7vs10</td>
  <td class=xl65>1vs8 &amp; 8vs9</td>
  <td class=xl65>9vs7 &amp; 4vs1</td>
         <td class=xl65></td>
      <td class=xl65>14 vs 12</td>
        <td class=xl65>15 vs 11</td>
          <td class=xl65>14 vs 15</td>
            <td class=xl65>Team 13 Bye</td>

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>8/1/2018</td>
  <td class=xl65>1vs9 &amp; 5vs1</td>
  <td class=xl65>8vs10 &amp; 6vs4</td>
  <td class=xl65>2vs7 &amp; 7vs3</td>
  <td class=xl65>3vs6 &amp; 8vs2</td>
  <td class=xl65>4vs5 &amp; 9vs10</td>
         <td class=xl65></td>
      <td class=xl65>15 vs 13</td>
        <td class=xl65>16 vs 12</td>
          <td class=xl65>17 vs 11</td>
            <td class=xl65>Team 14 Bye</td>

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl68 style='height:15.0pt'>8/8/2018</td>
  <td class=xl65>5vs6 &amp; 9vs3</td>
  <td class=xl65>1vs10 &amp; 2vs10</td>
  <td class=xl65>2vs9 &amp; 6vs1</td>
  <td class=xl65>3vs8 &amp; 7vs5</td>
  <td class=xl65>4vs7 &amp; 8vs4</td>
         <td class=xl65></td>
      <td class=xl65>16 vs 14</td>
        <td class=xl65>17 vs 13</td>
          <td class=xl65>11 vs 11</td>
            <td class=xl65>Team 15 Bye</td>

 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl68 style='height:15.75pt'>8/15/2018</td>
  <td colspan=1 class=xl70>Championship</td
         <td class=xl65></td>
      <td class=xl65>17 vs 15</td>
        <td class=xl65>11 vs 14</td>
          <td class=xl65>12 vs 13</td>
            <td class=xl65>Team 16 Bye</td>
                   <td class=xl65></td>
      <td class=xl65>11 vs 16</td>
        <td class=xl65>12 vs 15</td>
          <td class=xl65>13 vs 14</td>
            <td class=xl65>Team 17 Bye</td>

 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 colspan=11 style='height:15.0pt;mso-ignore:colspan'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 colspan=8 style='height:15.0pt;mso-ignore:colspan'>First Half
  of Season AB's will play against the person on left side and match scores
  with person on right side.</td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=31 style='height:23.25pt'>
  <td height=31 class=xl69 colspan=3 style='height:23.25pt;mso-ignore:colspan'>Example:<span
  style='mso-spacerun:yes'>     </span>6 vs 10<span style='mso-spacerun:yes'>  
  </span>&amp;<span style='mso-spacerun:yes'>   </span>6 vs 2</td>
  <td colspan=8 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 style='height:15.0pt'></td>
  <td class=xl65>left</td>
  <td class=xl65>right</td>
  <td colspan=8 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 colspan=11 style='height:15.0pt;mso-ignore:colspan'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 colspan=6 style='height:15.0pt;mso-ignore:colspan'>First half 6
  will play team 10, 2nd half team 6 will play team 2 so everyone plays against
  everyone.</td>
  <td colspan=5 style='mso-ignore:colspan'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=113 style='width:85pt'></td>
  <td width=99 style='width:74pt'></td>
  <td width=98 style='width:74pt'></td>
  <td width=107 style='width:80pt'></td>
  <td width=107 style='width:80pt'></td>
  <td width=105 style='width:79pt'></td>
  <td width=15 style='width:11pt'></td>
  <td width=74 style='width:56pt'></td>
  <td width=71 style='width:53pt'></td>
  <td width=59 style='width:44pt'></td>
  <td width=100 style='width:75pt'></td>
 </tr>
 <![endif]>
</table>

</html>


 </center>
</body>
     

<?php
//Increment counter
mysql_query("UPDATE countertable SET count_schedule=count_schedule+1");

//extract count from database table
$query = "SELECT count_schedule FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_schedule']; 
	echo "</td></tr>";

} 




?>








































</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2016, All rights reserved. </p>
	  </div>
	</div>

</html>
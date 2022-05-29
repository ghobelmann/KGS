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
  <head>
	<title>Smith Center Mens League Golf</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <style type="text/css">
<!--
.style3 {color: #FFFFFF; font-size: 24px; font-weight: bold; }
.style4 {color: #FFFFFF; font-size: 14px; font-weight: bold; }
-->
    </style>
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan">
		  <p>Mens League 2016...</p>
		</div>
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
	    <div id="header2-slogan1">
	      <p>Teams 2018</p>
	    </div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	   <table border=0 cellpadding=0 cellspacing=0 width=833 style='border-collapse:
 collapse;table-layout:fixed;width:625pt'>
 <col class=xl65 width=40 style='mso-width-source:userset;mso-width-alt:5083;
 width:20t'>
 <col width=196 style='mso-width-source:userset;mso-width-alt:7168;width:147pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:5339;width:110pt'>
 <col width=192 style='mso-width-source:userset;mso-width-alt:7021;width:144pt'>
 <col width=160 style='mso-width-source:userset;mso-width-alt:5851;width:120pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl65 width=139 style='height:15.0pt;width:104pt'></td>
  <td width=196 style='width:147pt'></td>
  <td width=146 style='width:110pt'></td>
  <td width=192 style='width:144pt'></td>
  <td width=160 style='width:120pt'></td>
 </tr>

 <tr height=20 style='height:15.0pt'>
   <td> 1. </td>
  <td class=xl65>Billy Thayer</td>
  <td class=xl65>Jim Moss</td>

 </tr>
 <tr height=20 style='height:15.0pt'>
   <td> 2. </td>
  <td class=xl65>John Boden</td>
  <td class=xl65>Jared Hayes</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 3. </td>
  <td class=xl65>John Windscheffel</td>
  <td class=xl65>Mark McClain</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 4. </td>
  <td class=xl65>Rick Hileman</td>
  <td class=xl65>Carl Vinsonhaler</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
   <td> 5. </td>
  <td class=xl65>Mike Heiland</td>
  <td class=xl65>Mickey Drake</td>
 </tr>

  <tr height=20 style='height:15.0pt'>
  <td> 6. </td>
  <td class=xl65>Shannon Favinger</td>
  <td class=xl65>Shawn Phelps</td>
 </tr>
 
 <tr height=20 style='height:15.0pt'>
   <td> 7. </td>
  <td class=xl65>Austin Hobelmann</td>
  <td class=xl65>Ken Depperschmidt</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
   <td> 8. </td>
  <td class=xl65>Kevin Laumann</td>
  <td class=xl65>Fletch Bolton</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 9. </td>
  <td class=xl65>Don Wick</td>
  <td class=xl65>Bruce Seems</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 10. </td>
  <td class=xl65>Greg Hobelmann</td>
  <td class=xl65>Shane McCall</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 11. </td>
  <td class=xl65>Curtis Peterson</td>
  <td class=xl65>Rick Bargman</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 12. </td>
  <td class=xl65>Taylor Kuhlman</td>
  <td class=xl65>Matt Teselle</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 13. </td>
  <td class=xl65>Gary Wagonblast</td>
  <td class=xl65>Don Weis</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 14. </td>
  <td class=xl65>Marion Hayes</td>
  <td class=xl65>Rober Dean</td>
 </tr>
  <tr height=20 style='height:15.0pt'>
   <td> 15. </td>
  <td class=xl65>Kalen Mace</td>
  <td class=xl65>Justin York</td>
 </tr>
   <tr height=20 style='height:15.0pt'>
   <td> 16. </td>
  <td class=xl65>Tug Keiswetter</td>
  <td class=xl65>Daniel Bennett</td>
 </tr>
    <tr height=20 style='height:15.0pt'>
   <td> 17. </td>
  <td class=xl65>Trace Haven</td>
  <td class=xl65>David Hileman</td>
 </tr>

 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=139 style='width:104pt'></td>
  <td width=196 style='width:147pt'></td>
  <td width=146 style='width:110pt'></td>
  <td width=192 style='width:144pt'></td>
  <td width=160 style='width:120pt'></td>
 </tr>
 <![endif]>
</table>
</body>

</html>

  </div>









	  <div id="footer-div"></div>
    <?php include("PHP_AUTH/check_auth.php");
    
    ?>

	</div>

</html>
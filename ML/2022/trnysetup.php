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


if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
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
      if($_POST['submit'] && $_POST['tournament'] && $_POST['date'] && $_POST['tid'])
{

$tournament = $_POST['tournament'];
$date = $_POST['date'];
$tid = $_POST['tid'];
$query="UPDATE `matches` SET `tournament` = '".$tournament."', `date` = '".$date."', `tid` = '".$tid."' WHERE `id` = '1'";
mysql_query($query);
mysql_close();
echo '<h3 align="center">Record Updated</h3>';

}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Edit Date:
        <input type="date" name="date" size="10"/>
  Edit TID:      
        <input type="tid" name="tid" size="10"/>
		Do not change this number:
		<input type="varchar" name="tournament" value="1" size="1"/>
<br>
		
		 <input name="submit" type="submit" value="Update Date" /></form>
     
    <table border="0" cellpadding="0" cellspacing="0" width="715">
    <tbody>
      <tr>
        <td class="bodyText" valign="top" width="715"><table border="0" cellpadding="1" cellspacing="1" width="100%">
          <tbody>
    
             <u>May 15th TID = 1</u> <br>

            <u>May 22 TID = 2 </u> <br>
            <u>May 29 TID = 3 </u>  <br>
            <u>June 5 TID = 4 </u> <br>
            <u>June 12 TID = 5 </u> <br>
            <u>June 19 TID = 6</u> <br>
            <u>June 25 TID = 7</u> <br>
            <u>July 3 TID = 8</u>         <br>
            <u>July 10 TID = 9 </u> <br>
            <u>July 17 TID = 10 </u> <br>
            <u>July 24 TID = 11 </u> <br>
            <u>July 31 TID = 12</u> <br>
            <u>August 7 TID = 13</u> <br>
            <u>August 14 TID = 14 </u>
            </td>
</tr>
        </table></td>
      </tr>
    </tbody>
  </table>

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
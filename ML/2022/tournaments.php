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
			    <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
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





  <h2>Tournament Sign Up:</h2>
			
 
    <?php

$sql="SELECT * FROM tournaments";
$result=mysql_query($sql);

$options="";

while ($row=mysql_fetch_array($result)) {

    

	$trny=$row["tournaments"];
    $options.="<OPTION VALUE=\"$trny\">".$trny;
}
?>


  <form action="connecttrny.php" method="post">
  <table width="100" border="1">
    <tr>
    <p align="center">Name:      
      <input type="varchar" name="name" />
      Phone:	  
      <input type="varchar" name="phone" size="20"/>

    <p>email:      
      <input type="varchar" name="email" />

	Tournaments
            <select name="trny">
            
				<OPTION VALUE=><?php echo $options ?></OPTION>
		</SELECT>
        
      </p>



      Comments or Playing Partners:	  
      <input type="varchar" name="comments" size="100"/><br />
</p>
      <input name="" type="submit" value="Enter" /><br />
 </p>
   
  </form>

                  <?php

$query = "SELECT * from tournaments ORDER by date asc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th></th><th>Tournaments</th><th>Results</th><th>Date</th><th>Comments</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="tournamententries.php?tournaments='.$row['tournaments'].'"><font size=4>'.$row['tournaments'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="tournamentresults.php?tournaments='.$row['tournaments'].'"><font size=4>'.$row['tournaments'].'</font></a>';
	echo "</td><CENTER>";
	echo "</td><td><CENTER>"; 
	echo $row['date'];
  echo "</td><td><CENTER>"; 
	echo $row['comments'];
	echo "</td><CENTER>";  
	$i++;
} 

echo "</table>";


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Tournamtent Results</title>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #006600;
}
-->
</style></head>

<body>
<div id="Layer2" style="position:absolute; width:413px; height:1460px; z-index:2; left: 18px; top: 1115px;">
  <DIV>Redmen Classic Results 2012  </DIV>
  <DIV>&nbsp;</DIV>
  <DIV><STRONG><U>1st Flight</U></STRONG></DIV>
  <DIV>60 Hobelmann, Koelsch, Burgess, Burgess</DIV>
  <DIV>63 Wick, Windscheffel, Zierlein, Ballhorst</DIV>
  <DIV>64 Wiehl, Stevenson, Seems, Seaboldt</DIV>
  <DIV>65 Ratliff, Frank, Ratliff, Vinsonhaler</DIV>
  <DIV>&nbsp;</DIV>
  <DIV><STRONG><U>2nd Flight</U></STRONG></DIV>
  <DIV>65 Hipp, Ruder, Zerfas, Hubbard</DIV>
  <DIV>66 Schurr, Roadhouse, Slothower, Walters</DIV>
  <DIV>66 Hayes, Terrill, Wieshaar, Harmon</DIV>
  <DIV>68 Gillen, Arnold, Seeman, Bennett</DIV>
  <DIV>&nbsp;</DIV>
  <DIV><STRONG><U>3rd Flight</U></STRONG></DIV>
  <DIV>70 Strine, Albert, Brooks, Stansbury</DIV>
  <DIV>70 Boden, Hommon, McCall, Burgardt</DIV>
  <DIV>77 Timmons, Allen</DIV>
  <DIV>&nbsp;</DIV>
  <DIV><STRONG><U>Sponsors</U></STRONG></DIV>
  <DIV>MPK Feeder, Steve Peterson</DIV>
  <DIV>Edward Jones, Roger Ratliff</DIV>
  <DIV>Sterling College</DIV>
  <DIV>Hobelmann Farms</DIV>
  <DIV>Larry and Barbara Wilson</DIV>
  <DIV>Darren Sasse</DIV>
  <DIV>Aflac- Jodi Hipp</DIV>
  <DIV>End Zone Sports of Norton- John Ruder</DIV>
  <DIV>James and Lori Johnson</DIV>
  <DIV>Smith Center Golf Course- John Boden</DIV>
  <DIV>Farmers Union Insurance Greg and Tamra Frank</DIV>
  <DIV>Kathy McCary- 3rd Street Designs</DIV>
  <DIV>RedCaps</DIV>
  <DIV>FCCLA - Amy Terrill</DIV>
  <DIV>Haven Manufacturing- Todd Haven</DIV>
</div>
<div id="Layer1" style="position:absolute; width:463px; height:1154px; z-index:1; left: 567px; top: 1117px;">
  <DIV>
    <p>&nbsp;</p>
  </DIV>
  </div>
</body>
















	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
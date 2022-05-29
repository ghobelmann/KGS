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

   if($_POST['submit'] == "Update Scores")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `subs` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);$id = ($_POST[id]) ? $_POST[id] : $scores['id'];



if($player_exists != 1)
{
echo '<h2><font color=red>Cannot Update Sub</font></h2>';
} else {
	echo '<CENTER><h2>! Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['member'];
	echo "<br>";
	echo $_POST['sub'];
	echo "<br>";
	echo $_POST['date'];
	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `subs` SET 
".(( !$_POST['member'] ) ? "" : "`member` = '".$_POST[member]."', ")."
".(( !$_POST['sub'] ) ? "" : "`sub` = '".$_POST[sub]."', ")."
".(( !$_POST['date'] ) ? "" : "`date` = '".$_POST[date]."', ")."
`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

}


if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

?><style type="text/css">
<!--
body {
	background-color: #006600;
}
.style1 {color: #FFFFFF}
.style3 {color: #CCCCCC}
-->
</style>



  <div align="center">
    <p class="style1"><strong>If you are accepting a sub position.</strong></p>
    <p class="style1"><strong>Enter your name in Sub Box and Click Enter. </strong></p>

  </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p class="style1">ID:
       <input type="varchar" name="id" value="<?php echo $id; ?>"/>
       

</p>

<table width="575" border="1">
  <tr>
    <th width="40"><div align="left">
      <span class="style1">Member<input type="varchar" name="member" size="32" /> </span><br> </td>       </tr><tr>
	  	    <td width="45"><div align="left"><span class="style1">sub<input type="varchar" name="sub" size="32"/> </span></td>      </tr><tr>

    <td width="38"><div align="left" class="style1">Date <input type="date" name="date" size="12"/> </div></td>	    </tr><tr>
    </tr>

    
           <?php
// PHP Search Script
//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
//Submit Query to MySql Database
$query = "SELECT * FROM subs";
$result = mysql_query($query);
$member = $row[member];
$sub = $row[sub];
$date = $row[date];

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>Date</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="subdate.php?date='.$row['date'].'">'.$row['date'].'</font></a>';
	echo "</td><CENTER>"; 
} 

	
?>
          <p>
      <input name="submit" type="submit" value="Update Scores" />
</p>
</table>
  	 
      <p>
            
  </form>
  

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
<?php
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
include("header.php");
include("style/style.php");
//include("menubar.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";

if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}



?>





<div id="Layer1" style="position:absolute; width:800px; height:460px; z-index:1; left: 100px; top: 158px; visibility: visible;">
  <div align="center" class="style2">
    <p align="center" class="style3 style4"> Sign Up . </p>
    <p align="center" class="style6"></p>
    <p align="center">Be sure to Fill in Each Field and Member or Substitute Check Box. </p>
  </div>
  <form action="connectpl.php" method="post">
    <p align="center" class="style6">First and Last Name:      
      <input type="varchar" name="player_1" />
      Phone:	  
      <input type="varchar" name="phone" size="20"/>
</p>
    <p align="center" class="style6">email:      
      <input type="varchar" name="email" />
      Average 9 hole score:
      <input type="varchar" name="hc" size="20"/>
</p>
    <p align="center" class="style6">Please check which you would like to be. </p>
    <p align="center" class="style6">Member
      <input type="checkbox" name="mem" value="yes">
      Substitute
      <input type="checkbox" name="sub" value="yes">

      <span class="style5">
      <input name="" type="submit" value="Enter Player" />
      </span> </p>
  </form>
<?php include("footer.php"); ?>
</div>
</body>


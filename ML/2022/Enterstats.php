<?php
error_reporting (E_ALL ^ E_NOTICE);
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






<div id="Layer1" style="position:absolute; width:858px; height:445px; z-index:1; left: 182px; top: 122px;">
  <div align="left"><strong>Enter Player's Stats</strong></div>
  <form action="connectstats.php" method="post">
    <p>Name:
        <input type="text" name="name" />
     Tournament:
		<input type="varchar" name="tournament" size="20"/>
    </p>
    <p>	  <strong>Score:</strong>      
      <input type="int" name="score" size="1"/>
		Place:
		<input type="int" name="place" size="1"/>
		Yardage:
        <input type="int" name="yardage" size="10"/>
    </p>
    <p>Hole Number 
      <input type="int" name="hole" size="1" />
      <strong>Par of Hole</strong>
      <input type="int" name="par" size="1"/>
Hit the Fairway 
<input type="checkbox" name="fairway" value="1">
Yes
<input type="checkbox" name="fairway" value="2">
No </p>
    <p>Driving Distance 
      <input type="int" name="dd" size="1" /> 
      Club Used 
      <input type="text" name="driveclub" size="8" />
      Direction 
      <input type="checkbox" name="drivedirect" value="1">
Right 
<input type="checkbox" name="drivedirect" value="2"> 
Left 
<input type="checkbox" name="drivedirect" value="3"> 
Center 
<input type="checkbox" name="drivespin" value="1"> 
Slice
<input type="checkbox" name="drivespin" value="2"> 
Hook
</p>
    <p>2nd Shot -- Distance to Hole 
      <input type="int" name="dtg" size="1"/>
      2nd Shot Distance 
       <input type="int" name="dd2" size="1" />
      Club Used
      <input type="text" name="n2dclub" size="8" />
Direction 
      <input type="checkbox" name="n2ddirect" value="1">
Right
<input type="checkbox" name="n2ddirect" value="2">
Left
<input type="checkbox" name="n2ddirect" value="3">
Center </p>
    <p>3rd Shot -- Distance to Hole 
      <input type="int" name="dtg2" size="1"/> 
      <strong>Total Shots to get on Green</strong>      
      <input type="int" name="stg" size="1"/>
</p>
    <p>Sand Save
      <input type="checkbox" name="sandsave" value="1">
Yes
<input type="checkbox" name="sandsave" value="2">
No </p>
    <p> <strong>Total number of Putts</strong>      
      <input type="int" name="putts" size="1"/>
Hit Green in Regulation
      <input type="checkbox" name="gir" value="1">
      Yes
      <input type="checkbox" name="gir" value="2">
    No</p>
    <p>Result of 1st Putt 
      <input type="checkbox" name="puttresult" value="1"> 
      Holed
      <input type="checkbox" name="puttresult" value="2"> 
      Right
      <input type="checkbox" name="puttresult" value="3"> 
      Left
      <input type="checkbox" name="puttresult" value="4"> 
      Long 
      <input type="checkbox" name="puttresult" value="5"> 
      Short
</p>
    <p>
        <input name="" type="submit" value="Enter Scores" />
    </p>
  </form>
<?php include("footer.php"); ?>
</div>
</body>
</html>

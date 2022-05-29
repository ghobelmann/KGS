<?php
error_reporting (E_ALL ^ E_NOTICE);
$page_title = "Hole by Hole Scores";
$permission = "superadmin,admin,player";
define("IN_GOLF_STATS", TRUE);
include("common.php");
$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}

?>






<div id="Layer1" style=" color: black; font-size: medium; font-family: serif; visibility: visible; display: block; position: absolute; z-index: 1; top: 123px; left: 156px; width: 858px; height: 524px">
  <div align="left"><strong>Enter Player's Stats</strong></div>
  <form action="connectstats.php" method="post">
    <p><b>Name:
        <input type="text" name="name" /></b></p>
		<p><b>Hole Number 
      <input type="int" name="hole" size="1" /><strong>Par of Hole</strong>      <input type="int" name="par" size="1"/></b></p>
		<p><b>
		Yardage:
        <input type="int" name="yardage" size="10"/><strong>Score:</strong>      
      <input type="int" name="score" size="1"/></b></p>
		<p><b>1st Shot -- Driving Distance <input type="int" name="dd" size="1" /> Length of 2nd Shot</b><input type="int" name="dd2" size="1" /></p>
		<p><b>
Hit the Fairway 
<input type="checkbox" name="fairway" value="yes">
Yes
<input type="checkbox" name="fairwaymiss" value="no"> No</b></p>
		<p><b>Hit Green in Regulation <input type="checkbox" name="gir" value="yes"> Yes <input type="checkbox" name="gir" value="no"> No</b></p>
		<p><b><strong>Total Shots to get on Green</strong>      
      <input type="int" name="stg" size="1"/></b></p>
		<p><b><strong>Total number of Putts</strong>      
      <input type="int" name="putts" size="1"/></b></p>
		<p><b><strong>Net Result (+ or - to par)</strong>      
      <input type="int" name="net" size="1"/></b></p>
		<p>
        <input name="" type="submit" value="Enter Scores" />
    </p>
	</form>
<?php include("footer.php"); ?>
</div>
</body>
</html>

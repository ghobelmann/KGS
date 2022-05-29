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
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
if(!empty($_GET['match']))
{
$match = $_GET['match'];
}
if(!empty($_GET['tees']))
{
$tees = $_GET['tees'];
}
?>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-size: 10px}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; }
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="107">A Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 1 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363<span class="style2"></span></div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b><?php echo $date ?></b></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team);
	unset($team1);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">B Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <div align="right" class="style2">Match # <?php echo $match + 2 ?> </div>
    </div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team);
	unset($team1);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">C Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <div align="right" class="style2">Match # <?php echo $match + 3 ?> </div>
    </div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team);
	unset($team1);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">D Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <div align="right" class="style2">Match # <?php echo $match + 4 ?> </div>
    </div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team);
	unset($team1);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p style="page-break-before: always"> 
<table width="671" border="1">
  <tr>
    <td width="107">A Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 5 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team2);
	unset($team21);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">B Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 6 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team2);
	unset($team21);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">C Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 7 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team2);
	unset($team21);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">D Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 8 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team2);
	unset($team21);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p style="page-break-before: always"> 
<table width="671" border="1">
  <tr>
    <td width="107">A Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 9 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team3);
	unset($team31);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">B Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 10 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team3);
	unset($team31);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">C Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 11 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team3);
	unset($team31);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">D Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 12 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team3);
	unset($team31);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p style="page-break-before: always"> 
<table width="671" border="1">
  <tr>
    <td width="107">A Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 13 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team4);
	unset($team41);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">B Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 14 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team4);
	unset($team41);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">C Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 15 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team4);
	unset($team41);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">D Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 16 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team4);
	unset($team41);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p style="page-break-before: always"> 
<table width="671" border="1">
  <tr>
    <td width="107">A Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 17 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team5);
	unset($team51);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">B Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 18 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team5);
	unset($team51);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">C Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 19 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team5);
	unset($team51);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">D Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 20 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team5);
	unset($team51);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p style="page-break-before: always"> 
<table width="671" border="1">
  <tr>
    <td width="107">A Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 21 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team6);
	unset($team61);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">B Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 22 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result1 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team6);
	unset($team61);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">C Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 23 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result2 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team6);
	unset($team61);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="107">D Match </td>
    <td width="38"><div align="right" class="style2">
        <div align="center">Blue </div>
    </div></td>
    <td width="33" bgcolor="#0000FF">&nbsp;</td>
    <td width="31" bgcolor="#0000FF"><div align="center" class="style3 style4 style7">191</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">387</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">165</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">561</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">345</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">365</div></td>
    <td width="38" bgcolor="#0000FF"><div align="center" class="style6">353</div></td>
    <td width="37" bgcolor="#0000FF"><div align="center" class="style6">397</div></td>
    <td width="49" bgcolor="#0000FF"><div align="center" class="style6">3204</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Match # <?php echo $match + 24 ?></div></td>
    <td><div align="center"><span class="style2">White</span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">321</div></td>
    <td><div align="center" class="style3">245</div></td>
    <td><div align="center" class="style3">366</div></td>
    <td><div align="center" class="style3">151</div></td>
    <td><div align="center" class="style3">513</div></td>
    <td><div align="center" class="style3">334</div></td>
    <td><div align="center" class="style3">343</div></td>
    <td><div align="center" class="style3">344</div></td>
    <td><div align="center" class="style3">363</div></td>
    <td><div align="center" class="style3">3082</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><b>Tees = <?php echo $tees ?></b></div></td>
    <td><div align="center"><span class="style2">Par</span></div></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td bgcolor="#000000"><div align="center" class="style6">4/3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">36</div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><?php echo $date ?>;</div></td>
    <td>&nbsp;</td>
    <td bgcolor="#FF0000">&nbsp;</td>
    <td bgcolor="#FF0000"><div align="center" class="style6">1</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">2</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">3</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">4</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">5</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">6</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">7</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">8</div></td>
    <td bgcolor="#FF0000"><div align="center" class="style6">9</div></td>
    <td bgcolor="#FF0000"><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">7/1</div></td>
    <td><div align="center" class="style3">2/2</div></td>
    <td><div align="center" class="style3">5/6</div></td>
    <td><div align="center" class="style3">3/5</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">6/7</div></td>
    <td><div align="center" class="style3">8/8</div></td>
    <td><div align="center" class="style3">1/3</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"> </span></div></td>
    <td><div align="center"><span class="style2">HC</span></div></td>
    <td bordercolor="#000000"><span class="style3">Team</span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
	

?>
  <td><div align="center"><span class="style2"></span></div></td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
      <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result3 )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	unset($team6);
	unset($team61);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div></td>
    <td><span class="style2"></span></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<p style="page-break-before: always"> 
  <tr>
    <td valign="top"><h3><?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
//echo $team;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
//echo $team1 ;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	echo "</td></tr><CENTER>";
	unset($team);
	unset($team1);

echo "</table>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?></td>
    <td valign="top"><h3><?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
//echo $team2;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
      <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
//echo $team21;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?></td>
  </tr>
  <tr>
    <td valign="top"><h3><?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
//echo $team3;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
//echo $team31;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";

$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);
	echo "</td><td><CENTER>";
	echo $row['team'];	
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?></td>
    <td valign="top"><h3><?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
//echo $team4;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
//echo $team41;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?></td>
  </tr>
  <tr>
    <td valign="top"><h3><?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
//echo $team5;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
//echo $team51;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";

$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?></td>
    <td valign="top"><h3><?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
//echo $team6;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
//echo $team61;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";

$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?>
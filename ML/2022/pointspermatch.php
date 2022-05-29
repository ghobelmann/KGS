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


?>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-size: 10px}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; }
.style7 {color: #FFFFFF}
-->
</style>


    <table width="671" border="1">
  <td width="107">
        <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d group by scores.player_1";
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
</td>
      <td width="38" bordercolor="#000000">&nbsp;</td>
      <td width="33" bordercolor="#000000">&nbsp;</td>
      <td width="31" bordercolor="#000000">&nbsp;</td>
      <td width="37" bordercolor="#000000">&nbsp;</td>
      <td width="37" bordercolor="#000000">&nbsp;</td>
      <td width="38" bordercolor="#000000">&nbsp;</td>
      <td width="37" bordercolor="#000000">&nbsp;</td>
      <td width="38" bordercolor="#000000">&nbsp;</td>
      <td width="38" bordercolor="#000000">&nbsp;</td>
	  <td width="38" bordercolor="#000000">&nbsp;</td>
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
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d group by scores.player_1";
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
    <td width="38" bordercolor="#000000">&nbsp;</td>
  </tr>
    </table>
    <p>&nbsp;</p>
    
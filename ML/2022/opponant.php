<?php
require_once "config.php";
?><?php
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
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p>
    </td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
  </span></strong></div></td>
    <td><p align="center">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span>
    </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result =  mysqli_query($link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d  AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
   </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
	    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>

  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 1 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b  AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d  AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a  AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 2 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">D Match- <span class="style10"><?php echo $match + 3 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="page-break-before: always"> 

<?php
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
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 4 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p>
    </td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
  </span></strong></div></td>
    <td><p align="center">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span>
    </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
   </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
	    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>

  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 5 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 6 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">D Match- <span class="style10"><?php echo $match + 7 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="page-break-before: always"> 







<?php
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
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 8?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p>
    </td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
  </span></strong></div></td>
    <td><p align="center">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span>
    </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
   </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
	    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>

  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 9 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 10 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">D Match- <span class="style10"><?php echo $match + 11 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="page-break-before: always"> 







<?php
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
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 12 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p>
    </td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
  </span></strong></div></td>
    <td><p align="center">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span>
    </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
   </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
	    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>

  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 13 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 14 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">D Match- <span class="style10"><?php echo $match + 15 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="page-break-before: always"> 







<?php
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
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 16 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p>
    </td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
  </span></strong></div></td>
    <td><p align="center">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span>
    </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
   </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
	    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>

  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 17 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 18 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">D Match- <span class="style10"><?php echo $match + 19 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="page-break-before: always"> 







<?php
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
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</style>

<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="671" border="1">
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 20?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p>
    </td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
  </span></strong></div></td>
    <td><p align="center">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span>
    </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
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
   </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
	    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>

  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 21 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <strong>
    <?php
//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </strong> </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result1 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 22 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result2 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="671" border="1">
  <tr>
    <td width="112">D Match- <span class="style10"><?php echo $match + 23 ?></span></td>
    <td width="33"><p align="center" class="style2">Tees = <?php echo $tees ?></p></td>
    <td width="41"><div align="center">Team</div></td>
    <td width="32" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="40" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="39" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="55" bgcolor="#000000"><div align="center" class="style8">
        <p>Total</p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
        <?php
//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></div></td>
    <td><p align="center">&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style3"></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2"><span class="style7"><strong>Points</strong></span> </span></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td bgcolor="#000000"><div align="center" class="style6">HC</div></td>
    <td bgcolor="#000000"><div align="center" class="style6"><span class="style1">Team</span></div></td>
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
  <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
      <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result3 )){
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
    </span></strong></span></td>
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
  <tr>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000" class="style2"><div align="center"><?php echo $date ?></div></td>
    <td bordercolor="#000000" bgcolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table><p style="page-break-before: always"> 


 
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";

$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";

$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";
$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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
$result =  mysqli_query($link, $link, $query)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result1 =  mysqli_query($link, $query1)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result2 =  mysqli_query($link, $query2)
or die ('Error in Query Try Again:--' .  mysqli_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d AND scores.sub <> 'yes' group by scores.player_1";

$result3 =  mysqli_query($link, $query3)
or die ('Error in Query Try Again:--' .  mysqli_error());


// keeps getting the next row until there are no more to get
while($row =  mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row =  mysqli_fetch_array( $result3 )){
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





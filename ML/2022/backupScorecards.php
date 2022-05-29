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
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match ?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team1);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td colspan="2"><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>

  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match ?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team1);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>
          
</table>  </table>  
 <p style="page-break-before: always"> </p>
























    
<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 1?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team2);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team21);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match  + 1?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team2);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team21);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
       <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>





























<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 2?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team3);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team31);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match  + 2?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team3);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team31);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>





























  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match + 3?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team4);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team41);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">A Match- <span class="style10"><?php echo $match  + 3?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team4);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team41);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>





























  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 4?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team5);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team51);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match  + 4?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team5);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team51);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>































  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 5?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team6);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
       <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team61);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match  + 5?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
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
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team6);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team61);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>




























 
















  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 6?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team7']))
{
$team7 = $_GET['team7'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team7' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team7);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team71']))
{
$team71 = $_GET['team71'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team71' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team71);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match  + 6?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team7']))
{
$team7 = $_GET['team7'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team7' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team7);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team71']))
{
$team71 = $_GET['team71'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team71' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team71);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>



    
















  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match + 7?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team8']))
{
$team8 = $_GET['team8'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team8' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team8);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team81']))
{
$team81 = $_GET['team81'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team81' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team81);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B Match- <span class="style10"><?php echo $match  + 7?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team8']))
{
$team8 = $_GET['team8'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team8' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team8);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team81']))
{
$team81 = $_GET['team81'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team81' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team81);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


 <p style="page-break-before: always"> </p>


   
















  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 8?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team9']))
{
$team9 = $_GET['team9'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team9' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team9);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team91']))
{
$team91 = $_GET['team91'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team91' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team91);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>

  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match  + 8?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team9']))
{
$team9 = $_GET['team9'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team9' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team9);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team91']))
{
$team91 = $_GET['team91'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team91' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team91);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>


 













  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 9?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team10']))
{
$team10 = $_GET['team10'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team10' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team10);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team101']))
{
$team101 = $_GET['team101'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team101' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team101);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match  + 9?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team10']))
{
$team10 = $_GET['team10'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team10' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team10);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
    <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team101']))
{
$team101 = $_GET['team101'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team101' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team101);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>



































 













  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match + 10?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team11']))
{
$team11 = $_GET['team11'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team11' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team11);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team111']))
{
$team111 = $_GET['team111'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team111' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team111);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">C Match- <span class="style10"><?php echo $match  + 10?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team11']))
{
$team11 = $_GET['team11'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team11' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team11);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team111']))
{
$team111 = $_GET['team111'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team111' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team111);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>

 <p style="page-break-before: always"> </p>














































 













  <table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B vs C Match- <span class="style10"><?php echo $match + 11?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team12']))
{
$team12 = $_GET['team12'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team12' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team12);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
   <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team121']))
{
$team121 = $_GET['team121'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team121' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team121);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>


<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
<table width="950" border="1">  
<tr colspan="14"><p>Smith Center Mens League</p></tr>
  <tr>
    <td width="112">B vs C Match- <span class="style10"><?php echo $match  + 11?></span></td>
    <td width="60"><p align="center" class="style10">HC</p>
    </td>  
    <td width="60"><div align="center"  class="style10">Strokes</div></td>
    <td width="60"><div align="center" class="style10">Team</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="45" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="65" bgcolor="#000000"><div align="center" class="style8">  
      <p>Total</p>
      </div></td>
  </tr>
  <tr>
  <td bgcolor="#000000"><div align="left" class="style7 style6"><strong><span class="style2">
    <?php
//Select Players name from form 
if(!empty($_GET['team12']))
{
$team12 = $_GET['team12'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team12' 
AND scores.player_1 = schedule.b AND scores.sub <> 'yes' group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0); 	
	echo "</td><td><CENTER>";
  	echo ""; 	
	echo "</td><td><CENTER>";
	echo $row['team'];
  echo "  <td>&nbsp;</td>    <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team12);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  </span></strong></div></td>

 
  </tr>
  <tr>
      <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
        <td bordercolor="#000000" >&nbsp;</td>    <td bordercolor="#000000" >&nbsp;</td>
     
  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td </td>   
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
         <td bordercolor="#000000" >&nbsp;</td>

  </tr>
  <tr>
    <td><div align="right" class="style2">Handicap White/Blue</div></td>
    <td ><div align="center" class="style10">HC</div></td> 
        <td ><div align="center" class="style10">Strokes</div></td> 
    <td ><div align="center" class="style10"><span class="style1">Team</span></div></td>
    <td><div align="center" class="style3">2/7</div></td>
    <td><div align="center" class="style3">3/2</div></td>
    <td><div align="center" class="style3">4/4</div></td>
    <td><div align="center" class="style3">6/6</div></td>
    <td><div align="center" class="style3">5/3</div></td>
    <td><div align="center" class="style3">7/8</div></td>
    <td><div align="center" class="style3">9/9</div></td>
    <td><div align="center" class="style3">8/5</div></td>
    <td><div align="center" class="style3">1/1</div></td>
    <td><div align="center"><span class="style1"><span class="style2"></span></span></div></td>
  </tr>
   <td bgcolor="#000000"><span class="style7 style6"><strong><span class="style2">
     <?php
//Select Players name from form 
if(!empty($_GET['team121']))
{
$team121 = $_GET['team121'];
}
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, 
schedule WHERE schedule.team = '$team121' 
AND scores.player_1 = schedule.c AND scores.sub <> 'yes'group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());



// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);
  	echo "</td><td><CENTER>";
  	echo ""; 		
	echo "</td><td><CENTER>";
	echo $row['team'];
    echo "  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td>   <td>&nbsp;</td>  <td>&nbsp;</td>  <td>&nbsp;</td><td>&nbsp;</td>";}
	unset($team);
	unset($team121);

?>
   </span></strong></span></td>
    
	
  </tr>
  <tr>
     <td colspan="3"><div align="right" class="style2"><span class="style10">We will be playing the <?php echo $tees; ?> tees. </span></div></td>
    <td><div align="right" class="style2"><span class="style10">Points</span></div></td>
    <td</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 

  </tr>
    <tr>
    <td colspan="4"><div align="right" class="style2"><span class="style10">Net Score</span></div></td>
    <td></td>
    <td bordercolor="#000000" >&nbsp;</td>
   <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000" >&nbsp;</td>
    <td>&nbsp;</td> 
  </tr>
  <tr><td colspan="14">Rules: 4 Ball, Low Net Team Score,  1 Point per hole, if hole is tied each team gets 1/2 point. Max Score is Triple Bogey</td></tr>
    <tr><td colspan="14">OB/Lost Ball - A Division Stroke & Distance. BC Division 2 clubs relief from where ball crossed and add 2 strokes.</td></tr>         
</table>  </table>
            
</table>  </table>



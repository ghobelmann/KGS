<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 


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


if(!empty($_GET['tournament']))
{
$trny = $_GET['tournament'];
}

?>














  
  
<table width="900" border="1">
	<?php $variable = '01'; 
  $query = "SELECT teetime FROM `scores` WHERE tournament = '".$trny."' 
AND position = '$variable'  LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysql_error();
else {
$setup = mysql_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID

$teetime = $setup['teetime'];
         }
  
  
  
  
  ?>
  <tr>
    <td width="200">Card <?php echo $variable; ?> Front 9 </td>

    <td width="200"><div align="center">Team</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">3</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">4</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">5</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">6</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">7</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">8</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">9</div></td>
    <td width="150" bgcolor="#000000"><div align="center" class="style8">Out</div></td>
	<td rowspan="6"><center><?php echo $trny; ?><br><?php echo $teetime; ?></center></td>
  </tr>
  <tr>

    <?php
	
	

//Select Players name from form 

$query = "SELECT player_1, tournament, team, date, position FROM scores WHERE tournament = '".$trny."' 
AND position = '$variable' ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>";
	echo $row['player_1'];
	echo "</td><td>";
	echo $row['team'];
	echo "</td><td><td><td><td><td><td><td><td><td><td></tr>";
}
$query = "SELECT scores.tid, par.* FROM scores, par WHERE scores.tid = par.id AND tournament = '".$trny."' LIMIT 1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#000000><div align=center class='style8'> Par <td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h2'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h3'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h4'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h5'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h6'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h7'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h8'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h9'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'];
	
	
	echo "</tr>";
}

$query = "SELECT scores.tid, yardage.* FROM scores, yardage WHERE scores.tid = yardage.id AND tournament = '".$trny."' LIMIT 1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#000000><div align=center class='style8'> Yardage <td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h2'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h3'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h4'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h5'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h6'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h7'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h8'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h9'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'];
	
	
	echo "</tr>";
}
?>
 <tr>
    <td width="200">Card <?php echo $variable; ?> Back 9</td>

    <td width="200"><div align="center">Team</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">10</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">11</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">12</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">13</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">14</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">15</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">16</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">17</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">18</div></td>
    <td width="150" bgcolor="#000000"><div align="center" class="style8">In</div></td>
	 <td width="150" bgcolor="#000000"><div align="center" class="style8">Total</div></td>
  </tr>
  <tr>

    <?php
//Select Players name from form 

$query = "SELECT player_1, tournament, team, date, position FROM scores WHERE tournament = '".$trny."' AND position = '$variable' ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>";
	echo $row['player_1'];
	echo "</td><td>";
	echo $row['team'];
	echo "</td><td><td><td><td><td><td><td><td><td><td><td></tr>";
}
$query = "SELECT scores.tid, par.* FROM scores, par WHERE scores.tid = par.id AND tournament = '".$trny."' LIMIT 1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#000000><div align=center class='style8'> Par <td bgcolor=#000000 align=center class='style8'>";
	echo $row['h10'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h11'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h12'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h13'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h14'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h15'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h16'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h17'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h18'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];
		echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'] + $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];

	echo "</td></tr>";
}

$query = "SELECT scores.tid, yardage.* FROM scores, yardage WHERE scores.tid = yardage.id AND tournament = '".$trny."' LIMIT 1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#000000><div align=center class='style8'> Yardage <td bgcolor=#000000 align=center class='style8'>";
	echo $row['h10'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h11'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h12'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h13'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h14'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h15'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h16'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h17'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h18'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'] + $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];
	echo "</tr>";
}
unset ($variable);
?>
  
  
  
  
  
  
  
  
  
  <br>
  
  
  
    <P CLASS="breakhere">
  
  
  
<html>
<head>
<meta http-equiv="Refresh" content="1; url=<?php echo $_SERVER['HTTP_REFERER'];?>">
</head>
<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include_once("databaseconnect.php");
include_once("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');



$sql = "SELECT * FROM `scores` WHERE `player_1` = '".$_POST['player_1']."' AND `tournament` = '".$_POST['tournament']."' 
AND `team` = '".$_POST['team']."'AND `date` = '".$_POST['date']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);
$one = ($_POST[hole1]) ? $_POST[hole1] : $scores['hole1'];
$two = ($_POST[hole2]) ? $_POST[hole2] : $scores['hole2'];
$three = ($_POST[hole3]) ? $_POST[hole3] : $scores['hole3'];
$four = ($_POST[hole4]) ? $_POST[hole4] : $scores['hole4'];
$five = ($_POST[hole5]) ? $_POST[hole5] : $scores['hole5'];
$six = ($_POST[hole6]) ? $_POST[hole6] : $scores['hole6'];
$seven = ($_POST[hole7]) ? $_POST[hole7] : $scores['hole7'];
$eight = ($_POST[hole8]) ? $_POST[hole8] : $scores['hole8'];
$nine = ($_POST[hole9]) ? $_POST[hole9] : $scores['hole9'];
$ten = ($_POST[hole10]) ? $_POST[hole10] : $scores['hole10'];
$eleven = ($_POST[hole11]) ? $_POST[hole11] : $scores['hole11'];
$twelve = ($_POST[hole12]) ? $_POST[hole12] : $scores['hole12'];
$thirteen = ($_POST[hole13]) ? $_POST[hole13] : $scores['hole13'];
$fourteen = ($_POST[hole14]) ? $_POST[hole14] : $scores['hole14'];
$fifteen = ($_POST[hole15]) ? $_POST[hole15] : $scores['hole15'];
$sixteen = ($_POST[hole16]) ? $_POST[hole16] : $scores['hole16'];
$seventeen = ($_POST[hole17]) ? $_POST[hole17] : $scores['hole17'];
$eighteen = ($_POST[hole18]) ? $_POST[hole18] : $scores['hole18'];

$_POST['front'] = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;
$_POST['back'] = $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$_POST['last6'] = $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$_POST['last3'] = $sixteen + $seventeen + $eighteen;
$_POST['total'] = $_POST['front'] + $_POST['back'];
if($player_exists != 1)
{
echo '<h2><font color=red><b>Cannot find the player, team, and tournament combination you specified</b></font></h2>';
} else {
	echo '<left><h3>! Scores Updated Successfully!</h3>';
	echo "<br>"; 
	echo "Front--";
	echo $_POST['front'];
	echo "--Back--";
	echo $_POST['back'];
	echo "--Total--";
	echo $_POST['total'];
		echo "--Last 6--";
	echo $_POST['last6'];
		echo "--Last 3--";
	echo $_POST['last3'];
}

	
	
$i=0;

$sql="UPDATE `scores` SET 


".(( !$_POST['hole1'] ) ? "" : "`hole1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`hole2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`hole3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`hole4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`hole5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`hole6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`hole7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`hole8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`hole9` = '".$_POST[hole9]."', ")."
".(( !$_POST['hole10'] ) ? "" : "`hole10` = '".$_POST[hole10]."', ")."
".(( !$_POST['hole11'] ) ? "" : "`hole11` = '".$_POST[hole11]."', ")."
".(( !$_POST['hole12'] ) ? "" : "`hole12` = '".$_POST[hole12]."', ")."
".(( !$_POST['hole13'] ) ? "" : "`hole13` = '".$_POST[hole13]."', ")."
".(( !$_POST['hole14'] ) ? "" : "`hole14` = '".$_POST[hole14]."', ")."
".(( !$_POST['hole15'] ) ? "" : "`hole15` = '".$_POST[hole15]."', ")."
".(( !$_POST['hole16'] ) ? "" : "`hole16` = '".$_POST[hole16]."', ")."
".(( !$_POST['hole17'] ) ? "" : "`hole17` = '".$_POST[hole17]."', ")."
".(( !$_POST['hole18'] ) ? "" : "`hole18` = '".$_POST[hole18]."', ")."
".(( !$_POST['front'] ) ? "" : "`front` = '".$_POST[front]."', ")."
".(( !$_POST['back'] ) ? "" : "`back` = '".$_POST[back]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$_POST['position'] ) ? "" : "`position` = '".$_POST[position]."', ")."

`spam` = '1'

WHERE `player_1` = '".$_POST['player_1']."' AND `tournament` = '".$_POST['tournament']."' AND `team` = '".$_POST['team']."'AND `date` = '".$_POST['date']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

      $sql="UPDATE `virtual` SET 
".(( !$_POST['player_1'] ) ? "" : "`player_1` = '".$_POST[player_1]."', ")."
".(( !$_POST['team'] ) ? "" : "`team` = '".$_POST[team]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
`spam` = '1'


WHERE `player_1` = '".$_POST['player_1']."' AND `id` = id AND `team` = '".$_POST['team']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }



          ?>
		  </html>
<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>

<HTML>
<HEAD>

<TITLE>Automatic Redirection - Test</TITLE>
<LINK REL=STYLESHEET HREF="../../utility/main.css" TYPE="text/css">
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.usd237.com/golf/EnterScorestrny.php">

<SCRIPT LANGUAGE="JavaScript"><!--
function redirect () { setTimeout("go_now()",10000000000); }
function go_now ()   { window.location.href = "http://www.usd237.com/golf/EnterScorestrny.php"; }
//--></SCRIPT>

</HEAD>
<BODY onLoad="redirect()">

<center><H1>! Scores Added !</H1></center>



</BODY>
</HTML>


<?php 
$one = "$_POST[hole1]";
$two = "$_POST[hole2]";
$three = "$_POST[hole3]";
$four = "$_POST[hole4]";
$five = "$_POST[hole5]";
$six = "$_POST[hole6]";
$seven = "$_POST[hole7]";
$eight = "$_POST[hole8]";
$nine = "$_POST[hole9]";
$ten = "$_POST[hole10]";
$eleven = "$_POST[hole11]";
$twelve = "$_POST[hole12]";
$thirteen = "$_POST[hole13]";
$fourteen = "$_POST[hole14]";
$fifteen = "$_POST[hole15]";
$sixteen = "$_POST[hole16]";
$seventeen = "$_POST[hole17]";
$eighteen = "$_POST[hole18]";
$tournament = "$_POST[tournament]";

$front = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;
$back = $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$last6 = $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$last3 = $sixteen + $seventeen + $eighteen;
$total = $front + $back;
	echo "<tr><td><CENTER><b><h1>"; 
	echo "Front--";
	echo $front;
	echo "</td><td><CENTER>";
	echo "Back--";
	echo $back;
	echo "</td><td><CENTER>";
	echo "Total--";
	echo $total;
	echo "</td></tr><CENTER>";


$sql="INSERT INTO trnyscores (player_1, team, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18, 
position, trny, front, back, total, last6, last3, date)
VALUES
('$_POST[player_1]','$_POST[team]','$_POST[hole1]','$_POST[hole2]','$_POST[hole3]',
'$_POST[hole4]','$_POST[hole5]','$_POST[hole6]','$_POST[hole7]','$_POST[hole8]','$_POST[hole9]',
'$_POST[hole10]','$_POST[hole11]','$_POST[hole12]','$_POST[hole13]','$_POST[hole14]','$_POST[hole15]','$_POST[hole16]'
,'$_POST[hole17]','$_POST[hole18]', 
'$_POST[position]','$_POST[trny]', $front, $back, $total, $last6, $last3,  '$_POST[date]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }






        
?>





<SCRIPT LANGUAGE="JavaScript"><!--
function go_now () {
    window.location.href = "http://www.usd237.com/locahost/EnterScores.php";
}
//-->
</SCRIPT>
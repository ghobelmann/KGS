<?php error_reporting (E_ALL ^ E_NOTICE);
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
  }
?>


<?php
$page_title = "Enter Scores";
require_once "config.php";
//include("PHP_AUTH/check_auth.php");
//if(authorize("superadmin,admin") != "success") die('unauthorized');
?>
      <META HTTP-EQUIV="Refresh" CONTENT="1;URL=EnterScores.php"

</HEAD>


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
$player_1 = "$_POST[player_1]";


$total = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;

	echo "<tr><td><CENTER><b><h1>"; 
	echo "Front--";
	echo $total;
	echo "</td></tr><CENTER>";
  $sql = "INSERT INTO scores (hole1, hole2) VALUES (4, 4)";

// $sql="INSERT INTO scores (player_1, team, mtch, tid, hole1, hole2, hole3, hole4, 
// hole5, hole6, hole7, hole8, hole9, date, total, white, blue, points, sub, a, b, c, d, scramble)
// VALUES
// ('$_POST[player_1]','$_POST[team]','$_POST[mtch]','$_POST[tid]','$_POST[hole1]',
// '$_POST[hole2]','$_POST[hole3]',
// '$_POST[hole4]','$_POST[hole5]','$_POST[hole6]','$_POST[hole7]',
// '$_POST[hole8]','$_POST[hole9]',
// '$_POST[date]', $total, '$_POST[white]','$_POST[blue]', '$_POST[points]', '$_POST[sub]',
// '$_POST[a]', '$_POST[b]', '$_POST[c]', '$_POST[d]', '$_POST[scramble]')";


if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}


  
  ?>
  



  
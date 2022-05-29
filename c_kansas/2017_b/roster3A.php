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
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 

<div id="wrapper">

  <div id="content">








<?php



$sql="SELECT * FROM team WHERE classification LIKE '3A' ORDER by school asc";
$result = $conn->query($sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>



<script>
window.onload = function() {
    document.getElementById("player_1").focus();
};</script>




 <div align="left"><strong><h3>Enter Rosters for 3A Schools. </h3></strong></div>
  <div align="left"><strong><h4>Enter all players that could play in a tournament, not just varsity. </h4></strong></div>
 <form id="myForm" action="connectpl.php" method="post">
			<p>Name:<input type="varchar" id="player_1" name="player_1" required />
			  	<p>Grade:<select name="grade">
           <OPTION VALUE=''></OPTION> 
          <OPTION VALUE='09'>Freshman</OPTION>
          <OPTION VALUE='10'>Sophomore</OPTION>
          <OPTION VALUE='11'>Junior</OPTION>
          <OPTION VALUE='12'>Senior</OPTION></SELECT>
      	<td valign="top">School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT>
		</p> <button id="sub">Enter Player</button>
</form>
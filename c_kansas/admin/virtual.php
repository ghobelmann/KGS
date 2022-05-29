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


include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 


<?php
$title = "Virtual Trny";
$sql="SELECT tmid FROM scores
INNER JOIN team ON scores.tmid = team.tmid
 GROUP by tmid";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {

    
    $team1=$row["tmid"];
    $team2=$row["school"];
    $options.="<OPTION VALUE=\"$team2\">".$team1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">



</head>
<body>
<div id="wrapper">

  <div id="content">

<h1><font color="white">Virtual Tournaments</font> </h1>




<br> <center>
 <form action="virtualtrny.php" method="post">
<table width="717" height="302" border="1">
<h3><?php echo "$title";?></h3>

  <tr>
    <td width="270" valign="top"><h3 align="left">Team 1
            <select name="1" id="drop1">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
      </h3>
        <h3 align="left">Team 2
            <select name="2" id="drop2">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
		        <h3 align="left">Team 3
            <select name="3" id="drop3">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
        <h3 align="left">Team 4
            <select name="4" id="drop3">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
        <h3 align="left">Team 5
            <select name="5" id="drop4">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
	    <h3 align="left">Team 6
            <select name="6" id="drop4">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
        <h3 align="left">Team 7
            <select name="7" id="drop5">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
      </h3>
	<h3 align="left">Team 8
            <select name="8" id="drop8">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>
      </h3>
	  	<h3 align="left">Team 9
            <select name="9" id="drop9">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>
      </h3>
          <td width="270" valign="top"><h3 align="left">Team 10
            <select name="10" id="drop10">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
      </h3>
        <h3 align="left">Team 11
            <select name="11" id="drop11">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
		        <h3 align="left">Team 12
            <select name="12" id="drop12">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
        <h3 align="left">Team 13
            <select name="13" id="drop13">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
        <h3 align="left">Team 14
            <select name="14" id="drop14">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
	    <h3 align="left">Team 15
            <select name="15" id="drop15">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
        </h3>
        <h3 align="left">Team 16
            <select name="16" id="drop16">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>
      </h3>
	
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp; </p></td>
    <td width="94" valign="top"><p align="left"></p>
        <div align="center">
		


<input type="submit" />

    </div>
        <p align="center">&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
<br>
<br>
	  
	         
</div>
</div> 


                                                                 <!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="./vendor/bootstrap/css/w3.css">    
  
      
   
<h4 class="card-header bg-dark">  
<center>       
<a href="indexg.php">  Home</a></h4>
</center>       
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-10">
          
 
 
 
 
   <?php


include_once("header.php");
include_once("dbconnectg.php");
//include_once("analyticstracking.php");  
 ?> 




<?php
       
$referrer = 'enterplayer';
//echo $referrer; 

$sql="SELECT * FROM team WHERE `state` = 'KS' ORDER by `school` asc";
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



                  Default Password = Golf2020
 <div align="left"><strong><h3>Enter Rosters for Other Schools. </h3></strong></div>
  <div align="left"><strong><h4>Enter First Name, Last Name, Grade and School </h4></strong></div>
 <form id="myForm" action="connectg.php?referrer=enterplayer" method="post">
			<p>Name:<input type="varchar" id="player_1" name="player_1" required />
			  	<p>Grade:<select name="grade">
           <OPTION VALUE=''></OPTION> 
          <OPTION VALUE='2025'>Freshman</OPTION>
          <OPTION VALUE='2024'>Sophomore</OPTION>
          <OPTION VALUE='2023'>Junior</OPTION>
          <OPTION VALUE='2022'>Senior</OPTION></SELECT>
      	<td valign="top">School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT>
		</p> <button id="sub">Enter Player</button>
</form>
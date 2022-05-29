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
<a href="index.php">  Home</a></h4>
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

   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  
    
       <!-- Load the Firebase SDKs before loading this file -->

   <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head><body>	 
 
 
 






 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("databaseconnect.php");
 echo $userid;  
 ?> 
 
<div id="wrapper">

  <div id="content">
  <div class="col-sm-1 mb-1"> 
  </div>
    <div class="col-lg-8 mb-8">  
       <?php
$sql = "SELECT users.tmid, users.email, users.id, team.state
FROM users
INNER JOIN team ON users.tmid = team.tmid 
WHERE users.email = '$userid'";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $state=$row["state"];
    $tmid=$row["tmid"];
    $cid = $row['id'];

}

   echo $state;
   echo $tmid;
   echo $cid;  
   
?>    
  
   <?php
$sql="SELECT school, tmid, state FROM team WHERE `state` = '$state' ORDER by school";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>


  <?php
$sql="SELECT id, event FROM event ORDER by event";
$result=mysqli_query($conn,$sql);

$multi="";

while ($row=mysqli_fetch_array($result)) {   
    $id=$row["id"];
    $event=$row["event"];
    $multi.="<OPTION VALUE=\"$id\">".$event;

}
?>

  


  <?php

   $query = "SELECT max(id) + 1 as tid FROM tournament"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table

 $max = $row['tid'];

	
	
} 

?>




<h1>Setup New Tournament</h1>

  <form action="connecttrny.php" method="post">
  <h4>	<font color="white">
   State:   </font>
   	<input type="varchar" name="state" size="4"  value="<?php echo $state; ?>" required/></h4>

</select>
		
<h4>	<font color="black">
			1. Tournament Name: </font>
		<input type="textfield" id="latestHotDogStatus" name="tournament" size="40" required/></h4>
    
      <h4>
    <font color="black">
    2. Name of Course  
    	</font>
		<input type="varchar" id="trnyCourse" name="course" size="50" required/>  </h4> 
                          
    
    	<h4>	
    	<font color="black">
    	3. Date of Tournament 
    	</font>
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/>   </h4>
      
    
    <h4>	<font color="black">
    		4. Par for the Course: </font>
		<input type="varchar" id="trnyPar" name="par" size="4" required/>  </h4>
    
     <h4> 	
     		<font color="black">
     		5. Yardage for the Course: </font>
		<input type="varchar" name="yardage" size="4" required/></h4>
        Slope is for information only, not figured in to adjusted scoring average.
        <h4><font color="black">	
        6. Slope of Tees Played(Adjust this number to your course)
        </font>
		<input type="varchar" name="slope" size="4" value="113"required/>  
    <br>
    		<br>
    Rating will be used in All State adjusted score calculations so 
    enter your courses numbers as close as possible<br>
    If playing 9 holes, rating will be around half of 18 hole rating, like 35.8 or 36.  <br>
        <font color="black">
    7. Rating of Tees Played(Adjust this number to your course):
    	</font>
		<input type="varchar" name="rating" size="4" value="72" required/> 
           	<h2><a href="https://ncrdb.usga.org/NCRDB/" target="_blank" >If you
  don't know your courses slope and rating you can find it here</a> </h2> 
        <br>
    <br>
        <h4><font color="black">	
 
    <br>  
    
     	<h4>

  
  
    
    
      This is how many columns will show up on live leaderboard, if only viewing on phone put in total number of golfers 
      so it is all in one column, if showing on TV in clucbhouse adjust so it fits your TV.
    	 <h4><font color="black">
       9. Number You want on the Live Leaderboard. (150 for viewing on phones, around 21 for viewing on TV's)
       </font>
		<input type="varchar" name="leaderboard" size="4" value="99" required/> 
           <br> <br>
           Change this to #s 5 or 6 if a JV tournament or 2 if a 36 hole tournament.
      <h4><font color="black">
       10. Type of Tournament
       </font>
         <br>  
         <h4> <font color="black">
<input type="radio" name="status" value="1" checked> 1.  18 Hole Varsity Tournament<br>
<input type="radio" name="status" value="2">         2.  36 Hole Varsity Tournament<br>
<input type="radio" name="status" value="3">         3.  9 Hole Varsity Tournament<br>
<input type="radio" name="status" value="4">         4.  Dual or Match Play<br>
<input type="radio" name="status" value="5">         5.  18 Hole JV Tournament<br>
<input type="radio" name="status" value="6">         6.  9 Hole JV Tournament<br>
<input type="radio" name="status" value="7">         7.  Do Not Include in Rankings<br>
 		</font>
                                </h4> 
    
                    
                 <br><br>        
                         

      Only needed for multi day totals, like league schedules that count multiple tournaments.
 	<h4>
 	<font color="black">
 	11. Multi Course or League Event:  
 	</font>       
            <select name="event" id="event">
              <OPTION VALUE=><?php echo $multi ?></OPTION>
            </SELECT> </h4>
            
            <h4>
            Optional, can be helpful if really windy or cold to remember why scores were good or bad. <br>
            <font color="black">
            12.	Course Comments (Temp, Wind, Rain, Sun etc):  
            </font>      
		<input type="varchar" name="comments" size="40"/>  </h4>
                                                 
             Optional: only needed if you have a tournament sponsor.   
            <h4>
            <font color="black">
            13. Sponsored by: </font>
            (If somebody wants to advertise or sponsor your tournament) 
		<input type="varchar" name="btyb" size="20"/> </h4>
  
    
            <br><br>
             If you have special instructions and are using website to print your scoredcards, 
             you can put special instruction here and they will print on all scorecards.
            <h4>	
            <font color="black">
            14.  Notes for Scorecards:</font>
             (Play Up or Down, Local Rules etc. 400 Characters max) <br>
          <strong>  Don't use apostrophes- it will return an error and not enter your tournament.</strong>
      <textarea name="notes" rows="2" cols="100"></textarea></h4>



          

        <br><br>

	
	 <table width="auto" border="1">
  <h4> <b>
  <font color="black">
  15. * Par: Enter Each Holes Par</font>	</b></h2>   
  (* Needed for Live scoring over under/par- this is required)
  <tr bgcolor="#FF0000" font color="white">
    <th width="43"><div align="center">1 <input type="int" name="h1" size="6" required /></div></th>
    <td width="43"><div align="center">2 <input type="int" name="h2" size="6" required/></div></td>
    <td width="43"><div align="center">3 <input type="int" name="h3" size="6" required /></div></td>
    <td width="43"><div align="center">4 <input type="int" name="h4" size="6" required/></div></td>
    <td width="43"><div align="center">5 <input type="int" name="h5" size="6" required/></div></td>
    <td width="43"><div align="center">6 <input type="int" name="h6" size="6" required/></div></td>
    <td width="43"><div align="center">7 <input type="int" name="h7" size="6" required/></div></td>
    <td width="43"><div align="center">8 <input type="int" name="h8" size="6" required/></div></td>
    <td width="43"><div align="center">9 <input type="int" name="h9" size="6" required/></div></td>
    </tr>
</table>
  	 

      <table width="445" border="1">
        <tr bgcolor="#FF0000" color="white">
          <th width="40"><div align="center">10<input type="int" name="h10" size="6" required/></div></th>
          <td width="38"><div align="center">11<input type="int" name="h11" size="6" required/></div></td>
          <td width="45"><div align="center">12<input type="int" name="h12" size="6" required/></div></td>
          <td width="45"><div align="center">13<input type="int" name="h13" size="6" required/></div></td>
          <td width="40"><div align="center">14<input type="int" name="h14" size="6" required/></div></td>
          <td width="45"><div align="center">15<input type="int" name="h15" size="6" required/></div></td>
          <td width="45"><div align="center">16<input type="int" name="h16" size="6" required/></div></td>
          <td width="45"><div align="center">17<input type="int" name="h17" size="6" required/></div></td>
          <td width="45"><div align="center">18<input type="int" name="h18" size="6" required/></div></td>
        </tr>
    </table>
                    

  
  
	   <table width="auto" border="1">    
	  <h4><b>
	  <font color="black">
	  16. Yardage: Enter Each Holes Yards</b></h4></font>	
    Enter yardage for each hole if you are going to Print Scorecards,<br> this is not required, 
    but good for viewing course stats after tournament is completed. 
  <tr bgcolor="#00FF00">
    <th width="43"><div align="center">1 <input type="int" name="y1" size="6" value = "0"/></div></th>
    <td width="43"><div align="center">2 <input type="int" name="y2" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">3 <input type="int" name="y3" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">4 <input type="int" name="y4" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">5 <input type="int" name="y5" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">6 <input type="int" name="y6" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">7 <input type="int" name="y7" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">8 <input type="int" name="y8" size="6" value = "0"/></div></td>
    <td width="43"><div align="center">9 <input type="int" name="y9" size="6" value = "0"/></div></td>
    </tr>
</table>

      <table width="auto" border="1">
        <tr bgcolor="#00FF00">
          <th width="40"><div align="center">10 <input type="int" name="y10" size="6" value = "0"/></div></th>
          <td width="38"><div align="center">11 <input type="int" name="y11" size="6" value = "0"/></div></td>
          <td width="45"><div align="center">12 <input type="int" name="y12" size="6" value = "0"/></div></td>
          <td width="45"><div align="center">13 <input type="int" name="y13" size="6" value = "0"/></div></td>
          <td width="40"><div align="center">14 <input type="int" name="y14" size="6" value = "0"/></div></td>
          <td width="45"><div align="center">15 <input type="int" name="y15" size="6" value = "0"/></div></td>
          <td width="45"><div align="center">16 <input type="int" name="y16" size="6" value = "0"/></div></td>
          <td width="45"><div align="center">17 <input type="int" name="y17" size="6" value = "0"/></div></td>
          <td width="45"><div align="center">18 <input type="int" name="y18" size="6" value = "0"/></div></td>
        </tr>
    </table>

 
          <br>  <hr>
  <?php
  $database = "g_2020Main";
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
 ?> 
 
  <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid; 
      
 
 ?>     
 

<div>
  <input name="submit" type="submit" value="Enter Tournament" />
  </div>
  
  	  
	         



</body>
</html>


                            
<!DOCTYPE html>  
<head>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-firestore.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries     -->

  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">      
   
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
$sql = "SELECT users.tmid, users.email, team.state
FROM users
INNER JOIN team ON users.tmid = team.tmid 
WHERE users.email = '$userid'";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $state=$row["state"];
    $tmid=$row["tmid"];

}

   echo $state;
   echo $tmid; 
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
$sql="SELECT event FROM event  WHERE `state` = '$state'";
$result=mysqli_query($conn,$sql);

$multi="";

while ($row=mysqli_fetch_array($result)) {   
    $event=$row["event"];
    $multi.="<OPTION VALUE=\"$event\">".$event;

}
?>

  
<?php
$sql="SELECT max(tid) as tid FROM auto_inc";
$result=mysqli_query($conn,$sql);


while ($row=mysqli_fetch_array($result)) {   
    $max=$row["tid"];

}

echo $max;
?>




<h1>Setup New Tournament</h1>

  <form action="connecttrny.php" method="post">
  <h4>	<font color="red">
   State:   </font>
   	<input type="varchar" name="state" size="4"  value="<?php echo $state; ?>" required/></h4>

</select>
		
<h4>	<font color="red">
			1. Tournament Name: </font>
		<input type="textfield" id="latestHotDogStatus" name="tournament" size="40" required/></h4>
    
      <h4>
    <font color="red">
    2. Name of Course  
    	</font>
		<input type="varchar" id="trnyCourse" name="course" size="50" required/>  </h4> 
                          
    
    	<h4>	
    	<font color="red">
    	3. Date of Tournament 
    	</font>
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/>   </h4>
      
    
    <h4>	<font color="red">
    		4. Par for the Course: </font>
		<input type="varchar" id="trnyPar" name="par" size="4" required/>  </h4>
    
     <h4> 	
     		<font color="red">
     		5. Yardage for the Course: </font>
		<input type="varchar" name="yardage" size="4" required/></h4>
        Slope is for information only, not figured in to adjusted scoring average.
        <h4><font color="red">	
        6. Slope of Tees Played(Adjust this number to your course)
        </font>
		<input type="varchar" name="slope" size="4" value="113"required/>  
    <br>
    		<br>
    Rating will be used in All State adjusted score calculations so 
    enter your courses numbers as close as possible<br>
    If playing 9 holes, rating will be around half of 18 hole rating, like 35.8 or 36.  <br>
        <font color="red">
    7. Rating of Tees Played(Adjust this number to your course):
    	</font>
		<input type="varchar" name="rating" size="4" value="72" required/> 
           	<h2><a href="https://ncrdb.usga.org/NCRDB/" target="_blank" >If you
  don't know your courses slope and rating you can find it here</a> </h2> 
        <br>
    <br>
        <h4><font color="red">	
        8. Number of Rounds:(1=18 holes, 2=36 holes, 3=54 holes, 4=72 holes)
    	</font>
		<input type="varchar" name="rounds" size="4" value="1" required/> 
    <br>    
	<hr />	

  
  
    
    
      This is how many columns will show up on live leaderboard, if only viewing on phone put in total number of golfers 
      so it is all in one column, if showing on TV in clucbhouse adjust so it fits your TV.
    	 <h4><font color="red">
       9. Number You want on the Live Leaderboard. (150 for viewing on phones, around 21 for viewing on TV's)
       </font>
		<input type="varchar" name="leaderboard" size="4" value="99" required/> 
           <br> <br>
           Change this to #s 5 or 6 if a JV tournament or 2 if a 36 hole tournament.
      <h4><font color="red">
       10. Type of Tournament
       </font>
         <br>  
         <h4> <font color="red">
<input type="radio" name="status" value="1" checked> 1.  18 Hole Varsity Tournament<br>
<input type="radio" name="status" value="2">         2.  36 Hole Varsity Tournament<br>
<input type="radio" name="status" value="3">         3.  54 Hole Varsity Tournament<br>
<input type="radio" name="status" value="4">         4.  72 Hole Varsity Tournament<br>
<input type="radio" name="status" value="5">         5.  18 Hole JV Tournament<br>
<input type="radio" name="status" value="6">         6.  9 Hole JV Tournament<br>
 		</font>
                                </h4> 
    
                    
                 <br><br>        
                         

      Only needed for multi day totals, like league schedules that count multiple tournaments.
 	<h4>
 	<font color="red">
 	11. Multi Course or League Event:  
 	</font>       
            <select name="event" id="event">
              <OPTION VALUE=><?php echo $multi ?></OPTION>
            </SELECT> </h4>
            
            <h4>
            Optional, can be helpful if really windy or cold to remember why scores were good or bad. <br>
            <font color="red">
            12.	Course Comments (Temp, Wind, Rain, Sun etc):  
            </font>      
		<input type="varchar" name="comments" size="40"/>  </h4>
                                                 
             Optional: only needed if you have a tournament sponsor.   
            <h4>
            <font color="red">
            13. Sponsored by: </font>
            (If somebody wants to advertise or sponsor your tournament) 
		<input type="varchar" name="btyb" size="20"/> </h4>
  
    
            <br><br>
             If you have special instructions and are using website to print your scoredcards, 
             you can put special instruction here and they will print on all scorecards.
            <h4>	
            <font color="red">
            14.  Notes for Scorecards:</font>
             (Play Up or Down, Local Rules etc. 400 Characters max) <br>
          <strong>  Don't use apostrophes- it will return an error and not enter your tournament.</strong>
      <textarea name="notes" rows="2" cols="100"></textarea></h4>



          

        <br><br>

	
	 <table width="auto" border="1">
  <h4> <b>
  <font color="red">
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
	  <font color="red">
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

<table  border="1" width="950px">
<h2><font color="red"><?php echo "17. Select all teams who are playing in your tournament. " ?></font>   </h2>
Click in a box start typing the team name to find it faster, then press tab to go to next box and start typing team name again.
Do this for all teams playing in your tournament. This is required to be able to assign players to scorecards.
    
 <tr bgcolor="#eeeedd">
    <td valign="top">
    Team 1
            <select name="1" id="drop1" required>
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 2
            <select name="2" id="drop2">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
		Team 3
            <select name="3" id="drop3">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 4
            <select name="4" id="drop4">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
                      <td valign="top">
    Team 5
            <select name="5" id="drop5">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
	  Team 6
            <select name="6" id="drop6">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 7
            <select name="7" id="drop7">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 8
            <select name="8" id="drop8">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select> <br>
                      <td valign="top">
    Team 9      
            <select name="9" id="drop9">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>   <br>   
    Team10
            <select name="10" id="drop10">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
    Team11
            <select name="11" id="drop11">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    Team12
            <select name="12" id="drop12">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                      <td valign="top">
    Team13
            <select name="13" id="drop13">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team14
            <select name="14" id="drop14">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
	  Team15
            <select name="15" id="drop15">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team16
            <select name="16" id="drop16">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    
          <tr bgcolor="#eeeecc">
    <td valign="top">
    Team17
            <select name="17" id="drop17">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team18
            <select name="18" id="drop18">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
		Team19
            <select name="19" id="drop19">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team20
            <select name="20" id="drop20">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
                      <td valign="top">
    Team21
            <select name="21" id="drop21">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
	  Team22
            <select name="22" id="drop22">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team23
            <select name="23" id="drop23">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team24
            <select name="24" id="drop24">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select> <br>
                      <td valign="top">
    Team25     
            <select name="25" id="drop25">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>   <br>   
    Team26
            <select name="26" id="drop26">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
    Team27
            <select name="27" id="drop27">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    Team28
            <select name="28" id="drop28">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                      <td valign="top">
    Team29
            <select name="29" id="drop29">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team30
            <select name="30" id="drop30">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
	  Team31
            <select name="31" id="drop31">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team32
            <select name="32" id="drop32">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    
    
 

</div> 
 <tr bgcolor="#eeeeaa">
    <td valign="top">
    Team33
            <select name="33" id="drop33">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team34
            <select name="34" id="drop34">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
		Team35
            <select name="35" id="drop35">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team36
            <select name="36" id="drop36">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
                      <td valign="top">
    Team37
            <select name="37" id="drop37">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
	  Team38
            <select name="38" id="drop38">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team39
            <select name="39" id="drop39">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team40
            <select name="40" id="drop40">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select> <br>
                      <td valign="top">
    Team41     
            <select name="41" id="drop41">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>   <br>   
    Team42
            <select name="42" id="drop42">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
    Team43
            <select name="43" id="drop43">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    Team44
            <select name="44" id="drop44">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                      <td valign="top">
    Team45
            <select name="45" id="drop45">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team46
            <select name="46" id="drop46">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
	  Team47
            <select name="47" id="drop47">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team48
            <select name="48" id="drop48">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    
                          </h4>
 

</div> 
       </table> <br> <br><br>
<div>


<button id ="saveButton">Save</button> </div>
  
  	 <br><br><br><br><br> 

          <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->
  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="/__/firebase/7.7.0/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="/__/firebase/7.7.0/firebase-auth.js"></script>
  <script src="/__/firebase/7.7.0/firebase-firestore.js"></script>
  
    <script src="./app/app.js"></script>
</body>
</html>



<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
   
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  
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

  
   <?php
$sql="SELECT school, tmid FROM team ORDER by school";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>


  
<?php
$sql="SELECT event FROM event";
$result=mysqli_query($conn,$sql);

$multi="";

while ($row=mysqli_fetch_array($result)) {   
    $event=$row["event"];
    $multi.="<OPTION VALUE=\"$event\">".$event;

}
?>

<h1>Setup New Tournament</h1>

  <form action="connecttrny.php" method="post">
		
<h4>	<font color="red">
			1. Tournament Name: </font>
		<input type="varchar" name="tournament" size="40" required/></h4>
    
    <h4>	<font color="red">
    		2. Par for the Course: </font>
		<input type="varchar" name="par" size="4" required/>  </h4>
    
     <h4> 	
     		<font color="red">
     		3. Yardage for the Course: </font>
		<input type="varchar" name="yardage" size="4" required/></h4>
	<hr />	
		<br>
    Slope and Rating will be used in All State adjusted score calculations so 
    enter your courses numbers as close as possible<br>
    Click on link at top of page to find your slope and rating. 
     	<h4><a href="https://ncrdb.usga.org/NCRDB/" target="_blank" >If you
  don't know your courses slope and rating you can find it here</a> </h4> 
        <br>
        <h4><font color="red">	
        4. Slope of Tees Played(Adjust this number to your course)
        </font>
		<input type="varchar" name="slope" size="4" value="113"required/>  
    <br>
        <font color="red">
    5. Rating of Tees Played(Adjust this number to your course):
    	</font>
		<input type="varchar" name="rating" size="4" value="72" required/> 
    <br>
    
        6. Number of Rounds:(1=18 holes, 2=36 holes, 3=54 holes, 4=72 holes)
    	</font>
		<input type="varchar" name="rounds" size="4" value="1" required/> 
    <br>
    
    
    	<font color="red">
       7. Number You want on the Live Leaderboard.
       </font>
		<input type="varchar" name="leaderboard" size="4" value="21" required/> 
    
    
         <br><br>   
         <font color="red">
 8. If it is a Varsity Tournament leave as No if JV type JV
 		</font>
		<input type="varchar" name="non_varsity" size="4" value="No" required/>   
                                   </h4> 
    
                    
                         
                         
    <h4>
    <font color="red">
    9. Name of Course  
    	</font>
		<input type="varchar" name="course" size="50" required/>  </h4> 
                          
    
    	<h4>	
    	<font color="red">
    	10. Date of Tournament 
    	</font>
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/>   </h4>
      
      
    <h3>NOTE: Program does not break ties at this time on 9 Hole Tournaments, 
    you will need to break them manually until we decide on a way to break them</h3>
    <h4>
    <font color="red">
    11. 18 or 9 Hole Tournament </font>
  <input type="checkbox" name="number_holes" value="18" checked> 18 Holes
  <input type="checkbox" name="number_holes" value="9"> 9 Hole or JV Tournaments   </h3>
  
                                      <br>
  
 	<h4>
 	<font color="red">
 	12. Multi Course or League Event:  
 	</font>       
            <select name="event" id="event">
              <OPTION VALUE=><?php echo $multi ?></OPTION>
            </SELECT> </h4>
            
            <h4>
            <font color="red">
            13.	Course Comments (Temp, Wind, Rain, Sun etc):  
            </font>      
		<input type="varchar" name="comments" size="20"/>  </h4>
                                                 
                
            <h4>
            <font color="red">
            14. Sponsored by: </font>
            (If somebody wants to advertise or sponsor your tournament) 
		<input type="varchar" name="btyb" size="20"/> </h4>
  
    
    
  
            <h4>	
            <font color="red">
            15.  Notes for Scorecards:</font>
             (Play Up or Down, Local Rules etc. 400 Characters max) <br>
          <strong>  Don't use apostrophes- it will return an error and not enter your tournament.</strong>
      <textarea name="notes" rows="10" cols="100">Enter text here... (You can delete this)</textarea></h4>



          



	
	 <table width="auto" border="1">
  <h4> <b>
  <font color="red">
  16. Par: Enter Each Holes Par</font>	</b></h2>
  <tr>
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
        <tr>
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
	  17. Yardage: Enter Each Holes Yards</b></h4></font>	Enter yardage for each hole if you are going to Print Scorecards. 
  <tr>
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
        <tr>
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

 


<table  border="1" width="950px">
<h2><font color="red"><?php echo "17. Select all teams who are playing in your tournament. " ?></font>   </h2>

  <tr>
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
    
            <tr>
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
  <tr>
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
       </table>
<div>
  <input name="submit" type="submit" value="Enter Tournament" />
  </div>
  
  	  
	         


<?php
  $sql = "SELECT tid
FROM auto_inc";
  
  $result1 = mysqli_query($conn,$sql) or die(mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result1 )) {

;
  $par = 1;
            }
  echo "Tournament ID #: ";
  echo $par;
?>


</body>
</html>



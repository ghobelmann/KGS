<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
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
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

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



  <form action="connecttrny.php" method="post">
		
<h4>	Tournament (Enter the Name of Your Tournament) </h4>
		<input type="varchar" name="tournament" size="40" required/> <br> <br><br>
    
    <h4>	Par for the Course  
		<input type="varchar" name="par" size="4" required/>  
    
      	Yardage for the Course 
		<input type="varchar" name="yardage" size="4" required/><br><br>  
                                                             <br><br>
    Slope and Rating will be used in All State adjusted score calculations so 
    enter your courses numbers as close as possible<br>
    Click on link at top of page to find your slope and rating. 
     	<h4><a href="http://kansasgolf.org/club-services/course-directory/" target="_blank" >If you
  don't know your courses slope and rating you can find it here</a> </h4> <br><br><br>
        
        <h4>	Slope of Tees Played
		<input type="varchar" name="slope" size="4" value="113"required/>  
    
        
    Rating of Tees Played
		<input type="varchar" name="rating" size="4" value="72" required/> 
    
         <br><br>   
 If this is a non-varsity or a tournament you do not want to include in season rankings type Yes.<br>
 If it is a regular Varsity Tournament leave as No.
		<input type="varchar" name="non_varsity" size="4" value="No" required/>   
                                   </h4> 
    
                        <br><br><br>
                         
                         
    <h4>Name of Course </h4>  
		<input type="varchar" name="course" size="50" required/>  
                            <br><br><br>
    
    	<h4>	Date of Tournament 
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/>     <br>
      
      
    <h3>NOTE: Program does not break ties at this time on 9 Hole Tournaments, you will need to break them manually until we decide on a way to break them</h3>
  <input type="checkbox" name="number_holes" value="18" checked> 18 Holes
  <input type="checkbox" name="number_holes" value="9"> 9 Holes or JV Tournament   </h4>
  
                                      <br><br><br>
  
 	<h4>Multi Course or League Event: </h4>
            <select name="event" id="event">
              <OPTION VALUE=><?php echo $multi ?></OPTION>
            </SELECT>  <br><br><br>
            
            <h4>	Course Comments (Temp, Wind, Rain, Sun etc): </h4>
		<input type="varchar" name="comments" size="60"/> 
                                                  <br><br><br>
                
            <h4>Sponsored by: (If somebody wants to advertise or sponsor your tournament) </h4>
		<input type="varchar" name="btyb" size="60"/> 
  
    
    
    
                                                       <br><br><br>
            <h4>	Notes for Scorecards: (Play Up or Down, Local Rules etc. 400 Characters max) <br>
          <strong>  Don't use apostrophes- it will return an error and not enter your tournament.</strong>
      <textarea name="notes" rows="10" cols="100">Enter text here... (You can delete this)</textarea>



          



	
	 <table width="auto" border="1">
  <h2> <b>Par: Enter Each Holes Par	</b></h2>
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
                    

  
  
	   <table width="445" border="1">    
	  <h2><b>Yardage: Enter Each Holes Yards</b></h2>	Enter yardage for each hole if you are going to Print Scorecards. 
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

      <table width="445" border="1">
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

 


<table  border="1" width="900px">
<h2><?php echo "Select all teams who are playing in your tournament. " ?>   </h2>

  <tr>
    <td valign="top">
    Team 1
            <select name="1" id="1">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 2
            <select name="2" id="2">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
		Team 3
            <select name="3" id="3">
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
    Team 10
            <select name="10" id="drop10">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
    Team 11
            <select name="11" id="drop11">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    Team 12
            <select name="12" id="drop12">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                      <td valign="top">
    Team 13
            <select name="13" id="drop13">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 14
            <select name="14" id="drop14">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
	  Team 15
            <select name="15" id="drop15">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 16
            <select name="16" id="drop16">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    
            <tr>
    <td valign="top">
    Team 17
            <select name="17" id="drop17">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 18
            <select name="18" id="drop18">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
		Team 19
            <select name="19" id="drop19">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 20
            <select name="20" id="drop20">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
                      <td valign="top">
    Team 21
            <select name="21" id="drop21">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
	  Team 22
            <select name="22" id="drop22">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 23
            <select name="23" id="drop23">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 24
            <select name="24" id="drop24">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select> <br>
                      <td valign="top">
    Team 25     
            <select name="25" id="drop25">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>   <br>   
    Team 26
            <select name="26" id="drop26">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
    Team 27
            <select name="27" id="drop27">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    Team 28
            <select name="28" id="drop28">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                      <td valign="top">
    Team 29
            <select name="29" id="drop29">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 30
            <select name="30" id="drop30">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
	  Team 31
            <select name="31" id="drop31">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 32
            <select name="32" id="drop32">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    
    
 

</div> 
  <tr>
    <td valign="top">
    Team 33
            <select name="33" id="drop33">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 34
            <select name="34" id="drop34">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
		Team 35
            <select name="35" id="drop35">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 36
            <select name="36" id="drop36">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
                      <td valign="top">
    Team 37
            <select name="37" id="drop37">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
	  Team 38
            <select name="38" id="drop38">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 39
            <select name="39" id="drop39">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT><br>
    Team 40
            <select name="40" id="drop40">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select> <br>
                      <td valign="top">
    Team 41     
            <select name="41" id="drop41">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </select>   <br>   
    Team 42
            <select name="42" id="drop42">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
    Team 43
            <select name="43" id="drop43">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
    Team 44
            <select name="44" id="drop44">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                      <td valign="top">
    Team 45
            <select name="45" id="drop45">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 46
            <select name="46" id="drop46">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
	  Team 47
            <select name="47" id="drop47">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT> <br>
    Team 48
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



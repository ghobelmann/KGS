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
     session_start(); 
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
$sql = "SELECT users.tmid, users.email, tournament.state
FROM users
INNER JOIN team ON users.tmid = team.tmid 
INNER JOIN tournament ON users.id = tournament.uid 
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
if(!empty($_GET['id']))
{
$trnysetup = $_GET['id'];
}
echo $trnysetup;
 ?>    
 
  
   <?php
$sql="SELECT school, tmid, state FROM team
WHERE state = 'ks' 
ORDER by school";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>



  <form action="insertteam.php" method="post">
  <h4>	<font color="black">


<table  border="1" width="950px">  
<h2><font color="white"><?php echo "Select all teams who are playing in your tournament. " ?></font>   </h2>
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
                          
                          
 

</div>  </div> </div> </div> 
 Tourney ID
         <input type="int" id="tid" name="tid" value=<?php echo $trnysetup; ?>
         
         
       </table> <br> <br><br>


  <input name="submit" type="submit" value="Enter Tournament" />
         </form>
  	 <br><br><br><br><br> 


</body>
</html>



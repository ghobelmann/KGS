<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

  </head><body>
 
 




 <?php
  session_start();   
  
  
          if(!empty($_GET['id']))
{
$id = $_GET['id'];
} 
          if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
} 
  
          if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}                            
   
    //print_r($_SESSION);



if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");




 ?> 

<div id="wrapper">

  <div id="content">    
  
  <p>
  
 <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      

      
 ?>   
 
   
  
  
  <?php
  

$sql = "SELECT * FROM `tournament` WHERE id = '$tid' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

 $trny = $data['id'];


} else {
die('Error: Identifying User '.mysqli_error());
}





 if(!empty($_GET['tmid']))
{
$team = $_GET['tmid'];
}

$round = 2; 

echo 'Team ID #: ';
echo $team;
echo '---User ID #: ';
echo $userid;
echo '---Tournament ID #: ';
echo $tid;

$sql = "SELECT team.tmid, team.school 
FROM `team`
WHERE tmid = '$team' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data1 = mysqli_fetch_assoc($results);
 $tmid = $data1['tmid'];
 $school = $data1['school'];
} else {
die('Error: Seleting Team '.mysqli_error());
}
      
$sql = "SELECT * FROM tournament WHERE id = $trny";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
         $non_varsity = $row["non_varsity"];
    }
    
    
} else {
    echo "0 results";
}



?>


<h1>Round 2</h1>
<h3>If entering JV players and not scoring as a team just enter them as Individuals.</h3>




<?php

$sql="SELECT roster.pid, roster.player_1, roster.grade, roster.tmid, trnyteams.tmid, trnyteams.tid,
tournament.id, tournament.tournament, tournament.date 
FROM roster
INNER JOIN trnyteams on roster.tmid = trnyteams.tmid
LEFT JOIN tournament on trnyteams.tid = tournament.id
WHERE roster.tmid = '$team' AND roster.grade < '13' AND
trnyteams.tid = '$tid'";

$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

   
    $name=$row['player_1'];
    $pid=$row['pid'];
    $players.="<OPTION VALUE=\"$pid\">".$name;
}
?>

<form action="connectcard4team2.php" method="post">
  

  
  Team ID:  	<input type="varchar" name="tmid" size="5" value="<?php echo $tmid ?>" readonly /> 
  Team Name: <input type="varchar" name="school" size="30" value="<?php echo $school ?>" readonly />
  
  Slope: <input type="int" name="slope" size="5" value="<?php echo $slope ?>" readonly />
    Rating: <input type="decimal" name="rating" size="5" value="<?php echo $rating ?>" readonly />
        Par: <input type="int" name="par" size="5" value="<?php echo $par ?>" readonly />
            <input type="int" name="non_varsity" size="5" value="<?php echo $non_varsity ?>" readonly />
   
                     <br><br>
Player 1-----> 
  		      <input type="checkbox" name="noteam1" value="yes"> 
<font color="red"> <b>
Individual - If player is Not on a team (at least 4 Players Click this Box)</b></font> <br>

 
 Name:
            <select name="1" id="drop1">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>


        
                  		Card:
		 <select name="card1" /> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

	            	

    	  
Tee Time/Hole Number:
		<input type="varchar" name="teetime1" size="10" value=""/>
  
Front 9: <input type="int" name="front1" size="3" value="0"/>
Back 9: <input type="int" name="back1" size="3" value="0"/>  <br><br>

<input type="checkbox" name="jv1" value="JV">  JV
<input type="checkbox" name="cteam1" value="JV2">  Cteam    
<input type="checkbox" name="man_21" value="yes"> 2 Man Team   
<input type="checkbox" name="man_41" value="yes"> 4 Man Team
<input type="checkbox" name="man_61" value="yes"> 6 Man Team 
  <br>




<br><hr>
Player 2-----> 
  		      <input type="checkbox" name="noteam2" value="yes">
            <font color="red"><b>
Individual - If player is Not on a team (at least 4 Players Click this Box)</b></font> <br>

 
 Name:
            <select name="2" id="drop2">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>


        
                  		Card:
		 <select name="card2" /> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

	            	

    	  
Tee Time/Hole Number:
		<input type="varchar" name="teetime2" size="10" value=""/>
  


Front 9: <input type="int" name="front2" size="3" value="0"/>
Back 9: <input type="int" name="back2" size="3" value="0"/>  <br><br>


<input type="checkbox" name="jv2" value="JV">  JV
<input type="checkbox" name="cteam2" value="JV2">  Cteam    
<input type="checkbox" name="man_22" value="yes"> 2 Man Team   
<input type="checkbox" name="man_42" value="yes"> 4 Man Team
<input type="checkbox" name="man_62" value="yes"> 6 Man Team 
  <br>




<br><hr>
Player 3-----> 
  		      <input type="checkbox" name="noteam3" value="yes">
            <font color="red"><b>
Individual - If player is Not on a team (at least 4 Players Click this Box)</b></font> <br>

 
 Name:
            <select name="3" id="drop3">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>


        
                  		Card:
		 <select name="card3" /> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

	            	

    	  
Tee Time/Hole Number:
		<input type="varchar" name="teetime3" size="10" value=""/>
  

 Front 9: <input type="int" name="front3" size="3" value="0"/>
Back 9: <input type="int" name="back3" size="3" value="0"/>  <br><br>
 
<input type="checkbox" name="jv3" value="JV">  JV
<input type="checkbox" name="cteam3" value="JV2">  Cteam    
<input type="checkbox" name="man_23" value="yes"> 2 Man Team   
<input type="checkbox" name="man_43" value="yes"> 4 Man Team
<input type="checkbox" name="man_63" value="yes"> 6 Man Team 
  <br>






<br><hr>
Player 4-----> 
  		      <input type="checkbox" name="noteam4" value="yes">
            <font color="red"><b>
Individual - If player is Not on a team (at least 4 Players Click this Box)</b></font> <br>

 
 Name:
            <select name="4" id="drop4">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>


        
                  		Card:
		 <select name="card4" /> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

	            	

    	  
Tee Time/Hole Number:
		<input type="varchar" name="teetime4" size="10" value=""/>
  
Front 9: <input type="int" name="front4" size="3" value="0"/>
Back 9: <input type="int" name="back4" size="3" value="0"/>  <br><br>


<input type="checkbox" name="jv4" value="JV">  JV
<input type="checkbox" name="cteam4" value="JV2">  Cteam    
<input type="checkbox" name="man_24" value="yes"> 2 Man Team   
<input type="checkbox" name="man_44" value="yes"> 4 Man Team
<input type="checkbox" name="man_64" value="yes"> 6 Man Team 
  <br>





<br><hr>
Player 5-----> 
  		      <input type="checkbox" name="noteam5" value="yes">
            <font color="red"><b>
Individual - If player is Not on a team (at least 4 Players Click this Box)</b></font> <br>

 
 Name:
            <select name="5" id="drop5">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>


        
                  		Card:
		 <select name="card5" /> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

	            	

    	  
Tee Time/Hole Number:
		<input type="varchar" name="teetime5" size="10" value=""/>
  

 Front 9: <input type="int" name="front5" size="3" value="0"/>
Back 9: <input type="int" name="back5" size="3" value="0"/>  <br><br>


<input type="checkbox" name="jv5" value="JV">  JV
<input type="checkbox" name="cteam5" value="JV2">  Cteam    
<input type="checkbox" name="man_25" value="yes"> 2 Man Team   
<input type="checkbox" name="man_45" value="yes"> 4 Man Team
<input type="checkbox" name="man_65" value="yes"> 6 Man Team 
 <br>




<br><hr>
Player 6-----> 
  		      <input type="checkbox" name="noteam6" value="yes">
            <font color="red"><b>
Individual - If player is Not on a team (at least 4 Players Click this Box)</b></font> <br>

 
 Name:
            <select name="6" id="drop6">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>


        
                  		Card:
		 <select name="card6" /> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

	            	

    	  
Tee Time/Hole Number:
		<input type="varchar" name="teetime6" size="10" value=""/>
  
Front 9: <input type="int" name="front6" size="3" value="0"/>
Back 9: <input type="int" name="back6" size="3" value="0"/>  <br><br>

                                   
<input type="checkbox" name="jv6" value="JV">  JV
<input type="checkbox" name="cteam6" value="JV2">  Cteam    
<input type="checkbox" name="man_26" value="yes"> 2 Man Team   
<input type="checkbox" name="man_46" value="yes"> 4 Man Team
<input type="checkbox" name="man_66" value="yes"> 6 Man Team 
 <br>        
            
            
            
            
            
            
            
            
            
            
            
            
                       <input name="" type="submit" value="Enter Players" />
		<input type="varchar" name="tournament" size="40" value="<?php echo $tid; ?>" readonly/>

		<input type="int" name="tid" size="1" value="<?php echo $tid; ?>" readonly/>


        <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>" readonly />
        
                 <input type="varchar" name="event" size="30" value="<?php echo $data['event']; ?>" readonly />
        
     
</p>
  </form>
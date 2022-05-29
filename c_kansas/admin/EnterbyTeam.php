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
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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
  

$sql = "SELECT * FROM `tournament` WHERE uid = '$userid' ORDER by `id` desc LIMIT 0 , 1 ";
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



echo 'Team ID #: ';
echo $team;
echo '---User ID #: ';
echo $userid;
echo '---Tournament ID #: ';
echo $data['id'];

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







<?php

$sql="SELECT roster.pid, roster.player_1, roster.tmid, trnyteams.tmid, trnyteams.tid,
tournament.id, tournament.tournament, tournament.date 
FROM roster
INNER JOIN trnyteams on roster.tmid = trnyteams.tmid
LEFT JOIN tournament on trnyteams.tid = tournament.id
WHERE roster.tmid = '$team' AND 
trnyteams.tid = '$data[id]' AND tournament.uid = '$userid'";

$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

   
    $name=$row['player_1'];
    $pid=$row['pid'];
    $players.="<OPTION VALUE=\"$pid\">".$name;
}
?>

<form action="connectcard4team.php" method="post">
  

  
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
  


 
 
 Front 9: <input type="int" name="front1" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 



Back 9: <input type="int" name="back1" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.back, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/>  <br>
JV <input type="checkbox" name="jv1" value="yes">
            <b> Only Check if JV player in Varsity tournament and you don't want results to show up.</b></font> <br>




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
  


 
 
 Front 9: <input type="int" name="front2" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 



Back 9: <input type="int" name="back2" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.back, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/>  




<br>
JV <input type="checkbox" name="jv2" value="yes">
            <b> Only Check if JV player in Varsity tournament and you don't want results to show up.</b></font> <br>





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
  


 
 
 Front 9: <input type="int" name="front3" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 



Back 9: <input type="int" name="back3" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.back, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/> <br>
JV <input type="checkbox" name="jv3" value="yes">
            <b> Only Check if JV player in Varsity tournament and you don't want results to show up.</b></font> <br> 






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
  


 
 
 Front 9: <input type="int" name="front4" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 



Back 9: <input type="int" name="back4" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.back, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/> <br>
JV <input type="checkbox" name="jv4" value="yes">
            <b> Only Check if JV player in Varsity tournament and you don't want results to show up.</b></font> <br> 





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
  


 
 
 Front 9: <input type="int" name="front5" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 



Back 9: <input type="int" name="back5" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.back, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/>  <br>
JV <input type="checkbox" name="jv5" value="yes">
            <b> Only Check if JV player in Varsity tournament and you don't want results to show up.</b></font> <br>









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
  


 
 
 Front 9: <input type="int" name="front6" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
}?>"/> 



Back 9: <input type="int" name="back6" size="3" value="

<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $name = $_GET['pid'];
    }
//Submit Query to MySql Database
  $sql = "SELECT scores.back, scores.tid FROM scores
  INNER JOIN `tournament` ON  scores.tid = tournament.id
   WHERE scores.tid = '$trny' AND pid = '$name' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysql_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/>  <br>                                       
JV <input type="checkbox" name="jv6" value="yes">
            <b> Only Check if JV player in Varsity tournament and you don't want results to show up.</b></font> <br>
            
            
            
            
            
            
            
            
            
            
            
            
            
                       <input name="" type="submit" value="Enter Players" />
		<input type="varchar" name="tournament" size="40" value="<?php echo $data['tournament']; ?>" readonly/>

		<input type="int" name="tid" size="1" value="<?php echo $data['id']; ?>" readonly/>


        <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>" readonly />
        
                 <input type="varchar" name="event" size="30" value="<?php echo $data['event']; ?>" readonly="readonly"/>
        
     
</p>
  </form>
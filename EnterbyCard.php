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
include_once("analyticstracking.php"); 
 ?> 

<div id="wrapper">

  <div id="content">
  
  <p>  
  
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $trny;
      
 ?>  <br />
 
 
<?php

$sql = "SELECT * FROM `tournament` WHERE uid = '$userid' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

 $trny = $data['id'];

} else {
die('Error: Identifying User '.mysqli_error());
}



$sql = "SELECT * FROM `tournament` WHERE uid = '$userid' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);
//print_r ($data);

} else {
die('Error: '.mysqli_error());
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

$sql="SELECT trnyteams.tmid, trnyteams.tid, roster.tmid, roster.grade,
roster.player_1, roster.pid, tournament.uid FROM `trnyteams` 
INNER JOIN `roster` on trnyteams.tmid = roster.tmid
LEFT JOIN `tournament` on trnyteams.tid = tournament.id
WHERE trnyteams.tmid = roster.tmid AND 
trnyteams.tid = '$data[id]' AND tournament.uid = '$userid' AND roster.grade < '13'
ORDER by roster.player_1 ASC";

$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

    $pid=$row["pid"];
    $name=$row["player_1"];
    $players.="<OPTION VALUE=\"$pid\">".$name;
}

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
  WHERE tid = '$data[id]'";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    $trny = $row['tid'];
    $team=$row["tmid"];
    $school = $row["school"];
    
    $teams.="<OPTION VALUE=\"$team\">".$school;
}
?>



  <div align="left"><strong><h3>Enter Player's Card by Card for Your Tournament</h3></strong></div>
  <form action="connectcard4team.php" method="post">
  
  
  
  
      		Card:
		 <select name="card" required/> 
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
		            <input type="varchar" name="teetime" size="10" value=""/>
  
  
       <hr>
  
  
  
  
    <p align="left">
    
Name:
            <select name="1" id="drop1">
              <OPTION VALUE=>1</OPTION>
            </SELECT>
            
            
            
            
Team:
            <select name="tmid1" id="drop2">
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>  

<font color="red"><b>Individual</b></font>    <input type="int" name="status1" value="1"> 

                      <br>

Name:
            <select name="2" id="drop1">
              <OPTION VALUE=>2</OPTION>
            </SELECT>
            
            
            
            
Team:
            <select name="tmid2" id="drop2">
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>     

<font color="red"><b>Individual</b></font>    <input type="int" name="status2" value="1"> 

                       <br>

Name:
            <select name="3" id="drop1">
              <OPTION VALUE=>3</OPTION>
            </SELECT>
            
            
            
            
Team:
            <select name="tmid3" id="drop2">
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>     

<font color="red"><b>Individual</b></font>    <input type="int" name="status3" value="1"> 
                           <br>


Name:
            <select name="4" id="drop1">
              <OPTION VALUE=>5</OPTION>
            </SELECT>
            
            
            
            
Team:
            <select name="tmid4" id="drop2" >
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>      

<font color="red"><b>Individual</b></font>    <input type="int" name="status4" value="1"> 

                       <br>

Name:
            <select name="5" id="drop1">
              <OPTION VALUE=>6</OPTION>
            </SELECT>
            
            
            
            
Team:
            <select name="tmid5" id="drop2">
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>
                         
<font color="red"><b>Individual</b></font>    <input type="int" name="status5" value="1"> 

                          <br>

Name:
            <select name="6" id="drop1">
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>
            
            
            
            
Team:
            <select name="tmid6" id="drop2">
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>     

<font color="red"><b>Individual</b></font>    <input type="int" name="status6" value="1"> 
                      <br>








      <input name="" type="submit" value="Enter Players" />    <br>
	Name: 	<input type="varchar" name="tournament" size="40" value="<?php echo $data['tournament']; ?>" readonly="readonly"/>

	ID:	<input type="id" name="tid" size="1" value="<?php echo $data['id']; ?>" readonly="readonly"/>


      Date:  <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>" readonly="readonly"/>  <br>
        
           Slope: <input type="int" name="slope" size="5" value="<?php echo $slope ?>" readonly />
    Rating: <input type="decimal" name="rating" size="5" value="<?php echo $rating ?>" readonly />
        Par: <input type="int" name="par" size="5" value="<?php echo $par ?>" readonly />     <br>
          Event:
         <input type="varchar" name="event" size="30" value="<?php echo $data['event']; ?>" readonly="readonly"/>
        SR:
         <input type="varchar" name="non_varsity" size="3" value="<?php echo $data['non_varsity']; ?>" readonly="readonly"/>
        
        
     
</p>
  </form>
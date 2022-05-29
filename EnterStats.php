<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="../vendor/bootstrap/css/w3.css">    
  
      
   
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
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/indexg.php");
}

include_once("databaseconnect.php");
//include_once("analyticstracking.php");  
 ?> 
 
        <?php         
    $sql = "SELECT id, tmid FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id'];
      $teamid = $row['tmid']; }
      //echo $trny;
      
 ?>  <br />
 
 

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Stats
        <small>Get Better Faster with data.</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="indexg.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Enter Stats by Tournament</li>
      </ol>
  <p>  
  
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $userid;
      
            $sql="SELECT stats.*, roster.tmid, roster.pid, tournament.id as id FROM `stats` INNER JOIN `roster` on stats.tmid = roster.tmid INNER JOIN `users` on users.tmid = roster.tmid LEFT JOIN `tournament` on stats.tid = tournament.id WHERE '$userid' = users.id GROUP by tournament.id ORDER by tournament.id ASC";
      $result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$tid = $row['id']; 
      //	echo '<a href="EditStats.php?id='.$row['id'].'">'.$row['id'].'</a>';
        }
      
 ?>  <br />
 




<?php

$sql="SELECT trnyteams.tmid, trnyteams.tid, roster.tmid,
roster.player_1, roster.pid, tournament.id, users.tmid 
FROM `trnyteams` 
INNER JOIN `roster` on trnyteams.tmid = roster.tmid
INNER JOIN `users` on users.tmid = roster.tmid
LEFT JOIN `tournament` on trnyteams.tid = tournament.id  
WHERE 
trnyteams.tmid = roster.tmid AND 
'$userid' = users.id 
GROUP by roster.player_1 
ORDER by roster.player_1 ASC";

$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

    $pid=$row["pid"];
    $name=$row["player_1"];
    $players.="<OPTION VALUE=\"$pid\">".$name;
}

$sql="SELECT DISTINCT trnyteams.tid, users.tmid, 
tournament.tournament FROM `trnyteams`
INNER JOIN `users` on users.tmid = trnyteams.tmid
INNER JOIN `team` ON trnyteams.tmid = team.tmid
LEFT JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE trnyteams.tmid = '$teamid'
  AND trnyteams.tid > '320'";
$result=mysqli_query($conn,$sql);

$teams="";
 //echo $teamid;
while ($row=mysqli_fetch_array($result)) {

    $trny = $row['tid'];
    $team=$row["tmid"];
    $tourney = $row["tournament"];
    $teams.="<OPTION VALUE=\"$trny\">".$tourney;
}


?>



<div align="left"><strong>Enter Player's Stats</h3></strong></div>
<form action="connectstats.php" method="post">




Select Tournament: 
<select name="tid" id="drop1" required>
<OPTION VALUE=><?php echo $teams ?></OPTION>
</SELECT>

		            
Team ID:                
<input type="varchar" name="tmid"  value="<?php echo $teamid ?>"/> </h3>
<hr>
  
<p align="left">
 
 
 
 

 
    
<B><U>Name:</B></U>
<select name="1" id="drop1" required>
<OPTION VALUE=><?php echo $players ?></OPTION>
</SELECT>  
   
 <select name="include">
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select>   

  <br><h4><b> Ball Striking</b></h4>  <br>

Total Fairways: <input type="int" name="tfw1" size="1" value="0"/> 
Fairways Hit: <input type="int" name="fw1" size="1" value="0"/>  <br> <hr>
Greens in Regulation: <input type="int" name="gir1" size="1" value="0"/>   <br><hr>
Total Putts: <input type="int" name="putts1" size="1" value="0"/> 
3 or more Putts: <input type="int" name="Tputts1" size="1" value="0"/>   <br><hr>
Up and Downs Chances: <input type="int" name="updownc1" size="1" value="0"/> 
Up and Downs Successful: <input type="int" name="updown1" size="1" value="0"/>   <br> <hr>
Sand Saves Chances:  <input type="int" name="ssc1" size="1" value="0"/>
Sand Saves Successful:  <input type="int" name="ss1" size="1" value="0"/> <br><hr>

Penalty Strokes:  <input type="int" name="pen1" size="1" value="0"/> <br><hr>

 <br><h4><b> Scoring</b></h4>  <br>  <hr>
Aces: <input type="int" name="ace1" size="1" value="0"/>
Double Eagles: <input type="int" name="dbleagle1" size="1" value="0"/> 
Eagles: <input type="int" name="eagle1" size="1" value="0"/> 
Birdie: <input type="int" name="birdie1" size="1" value="0"/>  <br>   <hr>
Par: <input type="int" name="par1" size="1" value="0"/> 
Bogie: <input type="int" name="bogie1" size="1" value="0"/> 
Double Bogie: <input type="int" name="doubleb1" size="1" value="0"/>  <br> <hr>
Triple: <input type="int" name="triple1" size="1" value="0"/> 
Other: <input type="int" name="other1" size="1" value="0"/> 

 <br><h4><b>Tournament Stats- Required for All State Calculations.</b></h4>  <br> <hr>
Place (Number Only, no Letters): <input type="int" name="place1" size="1" value="" required/> 
Score: <input type="int" name="score1" size="1" value="" required/> 
Par: <input type="int" name="coursepar" size="1" value="" required/> 










      <input name="" type="submit" value="Enter Stats" />    <br>
     
    <hr> 
</p>
  </form>
  
  
  
<h1>Directions</h1>
  <h4>These stats are a starting point for this year, please use them and give us feedback on how you think they work or what else  you would like to see.</h4>
  <h4>This year we are doing stats for the entire tournament not hole by hole. </h4>
  <hr>
  <p>1. Name if the name of the player does not show up in the list they are not on your roster. Add them to your roster</p>
  <p>2. Fairways hit- Total number of fairways hit. Have players add up total number of fairways they hit during the round</p>
  <p>3. Total Fairways - How many fairways were on the course, basically 18 - (number of par 3's)
  <p>4. Greens in Regulation (Total Number of greens hit in regulation)</p>
  <p>5. Total Number of putts on all greens.</p>
  <p>6. 3 Putts (Total Number of Greens 3 or more putted, not strokes but greens, if 3 putted 3 times that is 9 strokes so put 3 in box.)</p>
  <p>7. Penalty Strokes - (Total number of all penalty strokes, OB, unplayble etc.)</p>
  <p>8. Place (What place did player get, will be used for season and career reports.)
  <p>9. Score (What score they shot, will be used for season and career reports.)
  
  
  
             </div>
    <!-- /.container -->

      <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KansasGolfScores.com 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
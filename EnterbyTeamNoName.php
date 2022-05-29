

<?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php"); 

 if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
} 
echo $tid;  
 ?> 
 
 <?php
$sql = "SELECT * FROM `tournament` WHERE id = '$tid' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);                                              
} else {
die('Error: '.mysqli_error());
}  
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);
   }
  $sql = "SELECT * FROM tournament WHERE id = $tid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tname = $row["tournament"];
        $yardage = $row["yardage"];
        $par = $row["par"];
        $course = $row["course"];
        $comments = $row["comments"];
        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
        $btyb = $row["btyb"];
        $date = $row["date"];
        $rounds = $row["rounds"];
    }
   


} else {
    echo "0 results";
    }
     
    ?>

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
    
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
      <hr>
  <button class="block">  
<center>       
<a href="roster6A.php">Add Players for Other Teams</a></h4>
</center>  

<center>       
<a href="index.php">  Home</a></h4>
</center>   </h4>
       <h4 class="card-header bg-dark">  
<center> 
<a href = "EnterTrnyTeam.php?id=<?php echo $id; ?>">Add Team to Your Tournament</a></h4>
    <h2>
  <?php   echo $tname; ?>
  </h2>
 </head> 
 
 
 
  <body class="bg-secondary">
    <!-- Page Content -->
      <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-12">
          
 
 
  


</center> 
         </h4>

  </head>

       
  <body>
  
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
 $tournament_name = $data['tournament'];
 //echo "Output place:";
// var_dump($tournament_abb);

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
echo $tid;

$sql = "SELECT team.tmid, team.school 
FROM `team`
WHERE tmid = '$team' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data1 = mysqli_fetch_assoc($results);
 $tmid = $data1['tmid'];
 $school = $data1['school'];
 $school_abv = $data1['abv'];
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
        $status = $row["status"];
    }
    
    
} else {
    echo "0 results";
}




?>

       
             <div class="col-lg-12 mb-4">  
             
 <h4 class="card-header bg-dark">Round 1</h4>
<h3>If entering JV players and they are not scoring as a JV team just enter them as Individuals.</h3>

<h3>If this is an all JV tournament you do not neet to click JV Button.</h3>




<?php

$sql="SELECT roster.pid, roster.player_1, roster.grade, roster.tmid, 
trnyteams.tmid, trnyteams.tid,
tournament.id, tournament.tournament, tournament.date 
FROM roster
INNER JOIN trnyteams on roster.tmid = trnyteams.tmid
LEFT JOIN tournament on trnyteams.tid = tournament.id
WHERE roster.tmid = '$team' AND active = '2' AND grade > '2021'  AND 
trnyteams.tid = '$tid'";

$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

   
    $name=$row['player_1'];
    $pid=$row['pid'];
    $players.="<OPTION VALUE=\"$pid\">".$name;   
}    
?>

<form action="connectcard4teamNoNames.php" method="post" id="addForm">
  

  
  Team ID:<input type="varchar" name="tmid" size="5" value="<?php echo $tmid ?>" readonly /> 
  Team Name: <input type="varchar" name="school" size="30" value="<?php echo $school ?>" readonly />
  
  Slope: <input type="int" name="slope" size="5" value="<?php echo $slope ?>" readonly />  <br>
    Rating: <input type="decimal" name="rating" size="5" value="<?php echo $rating ?>" readonly />
        Par: <input type="int" name="par" size="5" value="<?php echo $par ?>" readonly />
          Trny Stat:  <input type="int" name="status" size="5" value="<?php echo $status ?>" readonly />
   
                     <br><br>
                     
    <hr>                 
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
 <h4 class="card-header bg-dark">  Player 1</h4>

 



        
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
		<input type="varchar" name="teetime1" size="5" value=""/>
  
Front 9: <input type="int" name="front1" size="2" value="0"/>
Back 9: <input type="int" name="back1" size="2" value="0"/> 

<br><br>

<input type="radio" name="status1" value="1" checked> Varsity On a Team
<input type="radio" name="status1" value="2"><strong> Individual </strong>
<input hidden type="radio" name="man1" value="1" checked>   
<input type="radio" name="status1" value="3">  JV
<input type="radio" name="status1" value="4">  C team   
<input type="radio" name="man1" value="2"> 2 Man Team   
<input type="radio" name="man1" value="4"> 4 Man Team
 (Only need to check if scoring as 2-4-6 man tournament.)
  <br>




<br><hr>
 <h4 class="card-header bg-dark">  Player 2</h4>

 



        
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
		<input type="varchar" name="teetime2" size="5" value=""/>
  


Front 9: <input type="int" name="front2" size="2" value="0"/>
Back 9: <input type="int" name="back2" size="2" value="0"/> 

<br><br>

<input type="radio" name="status2" value="1" checked> Varsity on a Team
<input type="radio" name="status2" value="2"><strong> Individual </strong>
<input hidden type="radio" name="man2" value="1" checked>  
<input type="radio" name="status2" value="3">  JV
<input type="radio" name="status2" value="4">  C team    
<input type="radio" name="man2" value="2"> 2 Man Team   
<input type="radio" name="man2" value="4"> 4 Man Team
  <br>




<br><hr>
 <h4 class="card-header bg-dark">  Player 3</h4>





        
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
		<input type="varchar" name="teetime3" size="5" value=""/>
  

 Front 9: <input type="int" name="front3" size="2" value="0"/>
Back 9: <input type="int" name="back3" size="2" value="0"/>  

<br><br>

<input type="radio" name="status3" value="1" checked> Varsity on a Team
<input type="radio" name="status3" value="2"><strong> Individual </strong>
<input hidden type="radio" name="man3" value="1" checked>  
<input type="radio" name="status3" value="3">  JV
<input type="radio" name="status3" value="4">  C team    
<input type="radio" name="man3" value="2"> 2 Man Team   
<input type="radio" name="man3" value="4"> 4 Man Team
  <br>






<br><hr>
 <h4 class="card-header bg-dark">  Player 4</h4>



        
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
		<input type="varchar" name="teetime4" size="5" value=""/>
  
Front 9: <input type="int" name="front4" size="2" value="0"/>
Back 9: <input type="int" name="back4" size="2" value="0"/> 

<br><br>

<input type="radio" name="status4" value="1" checked> Varsity on a Team
<input type="radio" name="status4" value="2"><strong> Individual </strong>
<input hidden type="radio" name="man4" value="1" checked>  
<input type="radio" name="status4" value="3">  JV
<input type="radio" name="status4" value="4">  C team    
<input type="radio" name="man4" value="2"> 2 Man Team   
<input type="radio" name="man4" value="4"> 4 Man Team
  <br>





<br><hr>
 <h4 class="card-header bg-dark">  Player 5</h4>



        
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
		<input type="varchar" name="teetime5" size="5" value=""/>
  

 Front 9: <input type="int" name="front5" size="2" value="0"/>
Back 9: <input type="int" name="back5" size="2" value="0"/> 

<br><br>

<input type="radio" name="status5" value="1" checked> Varsity on a Team
<input type="radio" name="status5" value="2"><strong> Individual </strong>
<input hidden type="radio" name="man5" value="1" checked>  
<input type="radio" name="status5" value="3">  JV
<input type="radio" name="status5" value="4">  C team    
<input type="radio" name="man5" value="2"> 2 Man Team   
<input type="radio" name="man5" value="4"> 4 Man Team
 <br>




<br><hr>
 <h4 class="card-header bg-dark">  Player 6</h4>



        
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
		<input type="varchar" name="teetime6" size="5" value=""/>
  
Front 9: <input type="int" name="front6" size="2" value="0"/>
Back 9: <input type="int" name="back6" size="2" value="0"/> 

<br><br>

<input type="radio" name="status6" value="1" checked> Varsity on a Team
<input type="radio" name="status6" value="2"><strong> Individual </strong>
<input hidden type="radio" name="man6" value="1" checked>  
<input type="radio" name="status6" value="3">  JV
<input type="radio" name="status6" value="4">  C team    
<input type="radio" name="man6" value="2"> 2 Man Team   
<input type="radio" name="man6" value="4"> 4 Man Team
 <br>        
            
            
            
            
            
            
            
            
            
            
            
            
                       <input name="" type="submit" value="Enter Players" onclick="writeFireStore()"/>
		<input type="varchar" name="tournament" size="40" value="<?php echo $tid; ?>" readonly/>

		<input type="int" name="tid" size="1" value="<?php echo $tid; ?>" readonly/>


        <input type="date" name="date" size="10" value="<?php echo $data['date']; ?>" readonly />
        
                 <input type="varchar" name="event" size="30" value="<?php echo $data['event']; ?>" readonly />
        
     
</p>
</form> </div>


      <!--      event.preventDefault();    -->
   
  <script type="text/javascript">    /*
    function writeFireStore() {
       
      var tname = "<?php echo $tournament_name; ?>";                  
      var tid = "<?php echo $_GET['tid']; ?>";
      var rating = "<?php echo $rating; ?>";
      var par = "<?php echo $par; ?>";
      var name = "<?php echo $pid; ?>";
      var team = "<?php echo $_GET['tmid']; ?>";
      var score = Number($("input[name=front1]").val()) + Number($("input[name=back1]").val());
      var ele = {
        trnyName: tname,
        trnyRating: rating,
        trnyPar: par,
        tid: tid, 
        playerName: name,
        playerSchool: team,
        playerScore: score,
        holes_played: 0
      };
      var firebaseConfig = {
        apiKey: "AIzaSyBRVds7BcSD9SjiArzHMckkddB8525Mm0M",
        authDomain: "leaderboard-58001.firebaseapp.com",
        databaseURL: "https://leaderboard-58001.firebaseio.com",
        projectId: "leaderboard-58001",
        storageBucket: "leaderboard-58001.appspot.com",
        messagingSenderId: "397076014204",
        appId: "1:397076014204:web:2cc69833c6ded4f60515f9",
        measurementId: "G-BE24RVGM5Y"
      };
      // Initialize Firebase
      var app = firebase.initializeApp(firebaseConfig);
      const db = firebase.firestore();

      db.collection("tournaments").add(ele)
      .then(function(docRef) {
          console.log("Document written with ID: ", docRef.id);
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
    }      */
  </script>
  
  </div>
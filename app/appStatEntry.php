
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Player Stat Entry page">
    <title>Player - Stat Entry</title>
    <!-- Favicons-->
 <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="../includes/materialize/extras/noUiSlider/prism.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>StatMaster</title>

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
  <script src="../includes/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="../includes/materialize/extras/noUiSlider/nouislider.css">
       <script src="../includes/materialize/extras/noUiSlider/nouislider.js"></script>
          <script src="../includes/materialize/extras/noUiSlider/prism.js"></script>
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
    <!-- Compiled and minified JavaScript -->
  
        <script>  

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });


  </script>
  
  
  
  </head>

  <body>


 <?php
 //ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
 include_once("../databaseconnect.php");  


?> 
        <?php         
    $sql = "SELECT pid, player_1, tmid, active FROM roster WHERE roster.username = '$_SESSION[username]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$pid = $row['pid'];
      $name = $row['player_1'];
      $teamid = $row['tmid'];
      $active = $row['active'];
       }
      echo $userid;
      
 ?>  
 

<?php


$sql="SELECT DISTINCT trnyteams.tid, users.tmid, 
tournament.tournament, tournament.date FROM `trnyteams`
INNER JOIN `users` on users.tmid = trnyteams.tmid
INNER JOIN `team` ON trnyteams.tmid = team.tmid
LEFT JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE trnyteams.tmid = '$teamid' AND tournament.id > '321'";
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
 <br />
 
      
    <!-- Page Content
     <div class="card-panel teal lighten-2"> -->
    <div class="container #ede7f6 deep-purple lighten-3">


      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Stats
        <small>Get Better Faster with data.</small>
      </h1>
  <p>  
  
 <br />
 
        <div class="slider">
          <div class="row">
      <div class="col s2">       </div>
  
      
<form 
action="../connectstatsPlayer.php" method="post">
                         
<hr>
             
   <div class="card-panel">                              
 <div class="input-field col s12  #ede7f6 deep-purple lighten-5" >
  <h5>Select Tournament- Required</h5>
    <select name="tid" id="drop1" required="required" class="validate">
   <OPTION VALUE=><?php echo $teams ?></OPTION>
    </select>
       <br><br>
  </div> <br><br>  
                
<input type="hidden" name="name"  value="<?php echo $name; ?>"/> </h3>
                
<input type="hidden" name="pid" size="2" value="<?php echo $pid; ?>"/> </h3>
		                           
<input type="hidden" name="tmid"  size="2" value="<?php echo $teamid ?>"/> </h3>
<hr>
  
<p align="left"> 




      <h5>Touch sliders very lightly to change value</h5>
  <div class="row"><div class="col s2"></div>  
        <div class="col s10  #ede7f6 deep-purple lighten-5">
         <br><h4><b> Ball Striking</b></h4>  <br>
         
         


    <p class="range-field">
    Total Fairways:     
      <input name="tfw1" type="range" id="tfw1" min="0" max="18" value="0"/>
    </p>
       <p class="range-field">
     Fairways Hit:  
      <input name="fw1" type="range" id="fw1" min="0" max="18" value="0"/>
    </p>
          <p class="range-field">
     GIR:  
      <input name="gir1" type="range" id="gir1" min="0" max="18" value="0"/>
    </p>
    
     <br><h4><b>Putting</b></h4>  <br>

        <p class="range-field">
     Total Putts:  
      <input name="putts1" type="range" id="putts1" min="0" max="60" value="0"/>
    </p>
      <p class="range-field">
    Total 3 or More Putts:  
      <input name="Tputts1" type="range" id="Tputts1" min="0" max="18" value="0"/>
    </p>
    
     <br><h4><b>Scrambling.</b></h4>  <br>

          <p class="range-field">
    Up and Down Chances:  
      <input name="updownc1" type="range" id="updownc1" min="0" max="18" value="0"/>
    </p>
         <p class="range-field">
    Up and Downs Successful:  
      <input name="updown1" type="range" id="updown1" min="0" max="18" value="0"/>
    </p>
          <p class="range-field">
    Sand Save Chances:  
      <input name="ssc1" type="range" id="ssc1" min="0" max="10" value="0"/>
    </p>
          <p class="range-field">
    Sand Saves Total:  
      <input name="ss1" type="range" id="ss1" min="0" max="10" value="0"/>
    </p>
           
     <br><h4><b>Whoops.</b></h4>  <br>
             <p class="range-field">
    Penalty Strokes:  
      <input name="pen1" type="range" id="pen1" min="0" max="25" value="0"/>
    </p>
    
     <br><h4><b> Scoring</b></h4>  <br>
        <p class="range-field">
    Aces:  
      <input name="ace1" type="range" id="ace1" min="0" max="5" value="0" />
    </p> 
        <p class="range-field">
    Double Eagle:  
      <input name="dbleagle1" type="range" id="dbleagle1" min="0" max="5" value="0"/>
    </p> 
        <p class="range-field">
    Eagle:  
      <input name="eagle1" type="range" id="eagle1" min="0" max="5"value="0" />
    </p> 
         <p class="range-field">
    Birdie:  
      <input name="birdie1" type="range" id="birdie1" min="0" max="9" value="0"/>
    </p> 
        <p class="range-field">
    Par:  
      <input name="par1" type="range" id="par1" min="0" max="18" value="0"/>
    </p> 
         <p class="range-field">
    Bogey:  
      <input name="bogie1" type="range" id="bogie1" min="0" max="18" value="0"/>
    </p> 
            <p class="range-field">
    Double Bogey:  
      <input name="doubleb1" type="range" id="doubleb1" min="0" max="18" value="0"/>
    </p> 
          <p class="range-field">
    Triple Bogey:  
      <input name="triple1" type="range" id="triple1" min="0" max="18" value="0"/>
    </p> 
         <p class="range-field">
    Other:  
      <input name="other1" type="range" id="other1" min="0" max="18" value="0" />
    </p> 
  
   <br><h4><b>Tournament Finish.</b></h4>  <br>
  
         <p class="range-field">
    Place:  
      <input name="place1" type="range" id="place1" min="0" max="100" value="0" />
    </p> 
         <p class="range-field">
    Score:  
      <input name="score1" type="range" id="score1" min="0" max="150" value="0"/>
    </p> 
            
            
            <button class="btn waves-effect waves-light" type="submit" name="">Submit Stats
    <i class="material-icons right">send</i>
  </button>
     
  </form>
         

   
    <hr> 
</p>
    </div>   
    
    
<h1>Directions</h1>

  <p>1. Name if the name of the player does not show up in the list they are not on your roster. Add them to your roster</p>
  <p>2. Fairways hit- Total number of fairways hit. Have players add up total number of fairways they hit during the round</p>
  <p>3. Total Fairways - How many fairways were on the course, basically 18 - (number of par 3's)
  <p>4. Greens in Regulation (Total Number of greens hit in regulation)</p>
  <p>5. Total Number of putts on all greens.</p>
  <p>6. 3 Putts (Total Number of Greens 3 or more putted, not strokes but greens, if 3 putted 3 times that is 9 strokes so put 3 in box.)</p>
  <p>7. Penalty Strokes - (Total number of all penalty strokes, OB, unplayble etc.)</p>
  <p>8. Place (What place did player get, will be used for season and career reports.)
  <p>9. Score (What score they shot, will be used for season and career reports.)
  
  
   </div></div>
  
  
             
    <!-- /.container -->

      <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KansasGolfScores.com 2020</p>
      </div>
      <!-- /.container -->
    </footer>
                    </div>    </div> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    
  </body>

</html>
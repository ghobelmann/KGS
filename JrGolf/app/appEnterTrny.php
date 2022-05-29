<?php session_start(); 

if(!isset($_SESSION['email']))
  // if there is no valid session
{
   header("Location:login-system/index.php");
}

echo $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Player Stat Entry page">
    <title>Player Entry</title>
    <!-- Favicons-->
 <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="../../includes/materialize/extras/noUiSlider/prism.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>StatMaster</title>

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
  <script src="../../includes/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="../../includes/materialize/extras/noUiSlider/nouislider.css">
       <script src="../../includes/materialize/extras/noUiSlider/nouislider.js"></script>
          <script src="../../includes/materialize/extras/noUiSlider/prism.js"></script>
       
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


      
      if(!empty($_POST['pid']))
{
$pid = $_POST['pid'];
}
echo $pid;

 ?> 

<?php
$sql="SELECT DISTINCT tournament.id, 
tournament.tournament FROM `tournament` GROUP by tournament.id";
$result=mysqli_query($conn,$sql);

$teams="";
 //echo $teamid;
while ($row=mysqli_fetch_array($result)) {

    $trny = $row['id'];
    $tourney = $row["tournament"];
    $teams.="<OPTION VALUE=\"$trny\">".$tourney;
}

$sql="SELECT DISTINCT roster.email  FROM `roster` GROUP by roster.email";
$result=mysqli_query($conn,$sql);


//echo $team;
?>



<?php
     $sql = "SELECT pid, player_1, email, active FROM roster WHERE roster.email = '$_SESSION[email]'"; 
     $result = mysqli_query($conn,$sql) or die(mysqli_error());
       while($row = mysqli_fetch_array( $result )) {
     $pid = $row['pid'];
     $name = $row['player_1'];
     $teamid = $row['email'];
     $tmid = $row['tmid'];
     $active = $row['active'];
      }
     echo $teamid;
$sql="SELECT roster.pid, roster.player_1, 
roster.age FROM `roster` WHERE roster.email = '$teamid' ORDER by player_1 ASC";
$result=mysqli_query($conn,$sql);

$players="";
 //echo $teamid;
while ($row=mysqli_fetch_array($result)) {

    $pid = $row['pid'];
    $player=$row["player_1"];
    $players.="<OPTION VALUE=\"$pid\">".$player;
}

?>
 <br />
 
      
    <!-- Page Content
     <div class="card-panel teal lighten-2"> -->
    <div class="container #ede7f6 deep-purple lighten-3">


      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Welcome to JrGolf Tournament Entry Form
        <small>Enjoy.</small>
        <h2><a href="../index.php">Home</a>
      </h1>
  <p>  
  
 <br />
 
        <div class="slider">
          <div class="row">
      <div class="col s2">       </div>
  
      
<form 
action="connectstatsPlayer.php" method="post">
                         
<hr>
             
   <div class="card-panel">                              
 <div class="input-field col s12  #ede7f6 deep-purple lighten-5" >
  <h5>Select Tournament- Required</h5>
    <select name="tid" id="drop1" required="required" class="validate">
   <OPTION VALUE=><?php echo $teams ?></OPTION>
    </select></div>
    

  <div class="input-field col s12  #ede7f6 deep-purple lighten-5" >
  <h5>Select Player to Enter</h5>
    <select name="pid" id="drop2" required="required" class="validate">
   <OPTION VALUE=><?php echo $players ?></OPTION>
    </select></div>

<div class="input-field col s12  #ede7f6 deep-purple lighten-5"> 
  <h5>Select Age Group to Enter</h5>
  <select id="division" name="division">
  <option value=""></option>
  <option value=1">5-7 4 Hole Boys</option>
  <option value="2">5-7 9 Hole Boys</option>
  <option value="3">8-9 Boys</option>
  <option value="4">10-11 Boys </option>
  <option value="5">12-13 Boys</option>
  <option value="6">14-15 Boys</option>
  <option value="7">16-18 Boys</option>
  <option value=11">5-7 4 Hole Girls</option>
  <option value="12">5-7 9 Hole Girls</option>
  <option value="13">8-9 Girls</option>
  <option value="14">10-11 Girls </option>
  <option value="15">12-13 Girls</option>
  <option value="16">14-15 Girls</option>
  <option value="17">16-18 Girls</option>
</select></div>



    <input type="hidden" id="tmid" name="tmid" value="<?php $tmid; ?>">
  </div><br><br>  

<hr>
  
<p align="left"> 




 
            
            <button class="btn waves-effect waves-light" type="submit" name="">Enter Tournament
    <i class="material-icons right">send</i>
  </button>
     
  </form>
         

   
    <hr> 
</p>
    </div>   
    
    

  
   </div></div>
  
  
             
    <!-- /.container -->

 
                    </div>    </div> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    
  </body>

       <!-- Footer -->
       <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; KansasGolfScores.com 2020</p>
      </div>
      <!-- /.container -->
    </footer>

</html>
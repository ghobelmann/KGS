                       
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
print_r($_SESSION);
include("../analyticstracking.php");
if(!empty($_GET['state']))
{
$state = $_GET['state'];
}
 if(!empty($_GET['db']))
{
$db = 'boys';
}
$dataBase = $db;
 include_once("../databasconnect.php");    

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>









<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Coach Home Page">
    <title>Coach Home</title>
    <!-- Favicons-->
 <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    

    <link href="../includes/materialize/extras/noUiSlider/prism.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Coach Home</title>

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="../includes/materialize/extras/noUiSlider/nouislider.css">
       <script src="../includes/materialize/extras/noUiSlider/nouislider.js"></script>
          <script src="../includes/materialize/extras/noUiSlider/prism.js"></script>
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
    <!-- Compiled and minified JavaScript -->
    
        <style>
    header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
    </style>
    
  
        <script>  

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  </script>    
        
        

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
     
  
            
     
</head>  <body>
     
    <div class = "container">
    
    
 

  <nav> 
  
      <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>KGS App</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
    
     </nav>

          
        <a href="" data-target="slide-out" class="sidenav-trigger btn">Coaching Links</a>

        <ul id="slide-out" class="sidenav">
          <li>
            <div class="user-view">
              <div class="background">
                <center> <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?>" 
            alt="<?php echo $image; ?>" style="width:200px;height:142px;border:0;"> </a>
             </center> </div>
              <a href="">
                <br><br>
              </a>
              <a href="">
                <span class="white-text name"></span>
              </a>
              <a href="">
                <span class="white-text email"></span>
              </a>
            </div>
          </li>
          <li>
          <i class="material-icons">
            <a href="../app/appIndex.php">cloud </i>Home</a> 
          </li>
          <li>
            <a href="../login-system/logout.php">Logout</a> 
          </li>   
     
          <li>
            <div class="divider"></div>
          </li>
          <li>
             <a class="waves-effect" href="./appEnterPlayer.php">Enter Player</a>
          <a class="waves-effect" href="../editteam.php">Edit School Info</a>
          <a class="waves-effect" href="http://www.kansasgolfscores.com/teamRankingsAll.php?db=boys&state=ks" class="list-group-item">Rankings All</a>
          <a class="waves-effect" href="appStatEntry.php" class="list-group-item">Enter Stats</a>
          <a class="waves-effect" href="../coachesdirectory.php" class="list-group-item">See All Coaches</a>
          <a class="waves-effect" href="./appStats.php">Player Stats</a>
          </li>
        </ul>
        
 

        <br/>       
           </h3>          
            <hr>  


      <!-- ------------------------------------------------------------------------>              
    <hr>         
              </p>
            </div>
       
        
           </body>
        


           <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    
    <!-- /.container -->
    
    
    

   


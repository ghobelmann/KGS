
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
   
  
      
   
<h4 class="card-header bg-dark">  

 <style>
/* Dropdown Button */
.dropbtn {
  background-color: red;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 260px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 2px 6px;
  text-decoration: none;
  display: block;
}


<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #b1bfb1;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button {font-size: 24px;}


.button:hover {background-color: #8cb48d}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
      </style>

 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-12">

<?php
include("databaseconnect.php"); 
if(!empty($_GET['state']))
{
$state = $_GET['state'];
}

include("../analyticstracking.php");
?> 
   


<?php
error_reporting(E_ALL);
session_start(); 

//print_r($_SESSION);



 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

$login = $_SESSION['email'];
//echo $login;

if ($login == "hobelmann@usd237.com") 
    { 
  echo '<form action="unfinalize.php">';
   echo '<label for="tid">Unfinalize Tournament:</label>';
   echo '<input type="int" id="tid" name="tid" value="">';
   echo '<input type="submit" value="Submit">';
 echo '</form>'; 
 
   echo '<form action="closeTrny.php">';
   echo '<label for="tid">Close Tournament:</label>';
   echo '<input type="int" id="tid" name="tid" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 
 
    
       echo '<form action="trnyroster.php">';
   echo '<label for="id">View Golfers:</label>';
   echo '<input type="int" id="id" name="id" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 
   
          echo '<form action="scoring/scorecard.php">';
   echo '<label for="tid">Enter Scores:</label>';
   echo '<input type="int" id="tid" name="tid" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 
    }
else {
   // echo "$login";
}

if ($login == "lsiebert@hotmail.com") 
    { 
  




   echo '<div class="container">';
   echo '<nav class="navbar navbar-inverse">';

   echo '<div>';
   echo '<a class="navbar-brand" href="index.php?db=boys">Home</a>';
   echo '<a class="navbar-brand" href="trnysetup.php?db=boys">New Tournament</a>';
   echo '<a class="navbar-brand" href="enterroster.php?db=boys">Enter/Edit Roster</a>';
   echo ' <a class="navbar-brand" href="app/appEnterTrny.php?db=boys">Enter New Tournament</a>';
  // echo '<a class="navbar-brand" href="registerPlayers.php" >View Registrations</a>';
   echo '<a class="navbar-brand" href="coachesdirectory.php" >Parent Directory</a>';
   echo '<a class="navbar-brand" href="login-system/logout.php">Logout</a>';
        echo '</div>';
            echo '</div>';

            echo "<h1>Current Live Tournaments</h1>";
   
        
$query = "SELECT id, date, tournament from tournament 
WHERE uid = '5' AND complete = 1 ORDER by date, id desc"; 
      
$result = mysqli_query($conn,$query) or die(mysqli_error());
 
// keeps getting the next row until there are no more to get
{

while($row = mysqli_fetch_array( $result )) {



echo '<div "><table class="table" >'; 
echo '<thead class="thead-dark">';
// echo '    <div class="profile-card-2 text-left"><img src="images/golf-tournament-logo.jpg "  >';
 
 echo  $row['tournament'];
 echo '<div class="dropdown">';
echo '<button class="dropbtn">Go Here for Options</font></button>';
echo '<div class="dropdown-content">';
 echo '<a href="edittrny.php?id='.$row['id'].'">Edit Tournament</font></a>';
 echo '<a href="editPlayer.php?tid='.$row['id'].'"">Assign Players to Cards</font></a>';
 echo '<a href="scorecards.php?id='.$row['id'].'">Print 18 Hole Scorecards- Use Firefox</font></a>';
 echo '<a href="scorecard9hole.php?id='.$row['id'].'">Print 9 Hole Scorecards Use Firefox</font></a>';  
 echo '<a href=teeTimes2.php?id='.$row['id'].'">Overview</font></a>';
 echo '<a href="wallpages.php?id='.$row['id'].'">Team Sheets</font></a>';
 echo '<a href="scorecard.php?tid='.$row['id'].'">Enter Scores</font></a>';   
 echo '<a href="TourneybyHoles.php?tid='.$row['id'].'">Results</font></a>';
 echo '<a href="copyGolfers.php?tid='.$row['id'].'">Copy Golfers</font></a>';
 echo '<a href="playerQRcodes.php?tid='.$row['id'].'">Player Scoring</font></a>';
 echo '<a href="deletewarntrny.php?id='.$row['id'].'">Delete</font></a>';
  echo '</div>';

echo '    <class="profile-card-2 text-left"><a href="closeTrny.php?tid='.$row['id'].'"><img src="../images/close.jpg "  ></a>';
//echo '<a href="closeTrny.php?tid='.$row['id'].'"><left><h4>Finalize:  After all scores are entered, Click here to close tournament and make available of public to see.</h4></left></font></a>';
 echo '<-- Click to Close Tournament when finished!!';
echo "</td></tr>";  

} 
     echo "</table></center></div>";
     }
      

              
 echo "<h1>Completed Tournaments</h1>";

$query = "SELECT id, date, complete, tournament from tournament WHERE uid = '5' 
AND complete = '2' ORDER by date desc"; 
//  echo $userid;
$result = mysqli_query($conn,$query) or die(mysqli_error());
             {            while($row = mysqli_fetch_array( $result )) 

{   
echo "<td><tr>";       
// Print out the contents of each row into a table 
 echo '    <div class="profile-card-2 text-left"><img src="../images/golf-tournament-logo.jpg "  >';
 echo '<font color="black"> <strong>'.$row['tournament'].'</strong>';
 echo '<div class="dropdown">';
echo '<button class="dropbtn"><h4>Edit or Copy This Tournament</h4></button>';
echo '<div class="dropdown-content">';
echo '<a href="edittrny.php?id='.$row['id'].'">'.$row['tournament'].'</a>';
 echo '<a href="copytrny.php?id='.$row['id'].'"> Copy this tournament to start a New Tournament.</a>';
 echo '<a href="unfinalize.php?tid='.$row['id'].'">UnFinalize</a>';
echo '</div>';
echo '</div>';
echo "</td></tr>"; 	
}   
     echo "</table></div>"; 
  }           
    }
else {

  echo '<div class="container">';
  echo '<nav class="navbar navbar-inverse">';

  echo '<div>';
  echo '<a class="navbar-brand" href="index.php?db=boys">Home</a>';
  echo '<a class="navbar-brand" href="enterroster.php?db=boys">Enter/Edit Roster</a>';
  echo ' <a class="navbar-brand" href="app/appEnterTrny.php?db=boys">Enter Tournament</a>';

  echo '<a class="navbar-brand" href="registerPlayers.php" >View Registrations</a>';
  echo '<a class="navbar-brand" href="login-system/logout.php">Logout</a>';
       echo '</div>';
           echo '</div>';
  
}

 


?> 
</div>


       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
     // echo $userid;
        
 /* $sql = "SELECT tmid, email FROM users WHERE 
     users.email = '$_SESSION[email]'";         
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$tmid = $row['tmid']; }
      // echo $tmid; 
      
          $sql = "SELECT paid FROM team WHERE 
     tmid = '$_SESSION[tmid]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
		$paid = $row['paid'];
       }     */
 ?> 




<?php

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>





 
  <?php
/*
if ($paid > "0") {

    echo "<center><h3><div class='alert alert-success'>Your Account has been Paid. <br>
    Thank You, Have a Great Season call if you need help 785-620-7054.</center></h3></div>";
}    else

{

echo "<div class='alert alert-danger'><h2><a href='EI/index.php'>Click Here to Print and Pay Invoice, 
then all functions of website and player and team rankings will be available to you.</a></h2></div> " ;

} */
?> 
 <!DOCTYPE html>  
<head>    

 
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />


  <title>Golf Coaches Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  
  <link rel="stylesheet" href="includes/sidemenu.css">   
  <script src="includes/jquery-2.1.4.min.js"></script>
  <script src="includes/bootstrap.min.js"></script>



        
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <script>
  /* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "450px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
   </script>         
            
            </nav>
        
        

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <style>
    h1 {
  background-color: #bfc5bf;
}
</style>
   
  </head>   
        <!-- Content Column -->
    <!-- /.container -->
    
             <div class="col-lg-12 mb-4">  
               



        
        
         <!-- Footer -->
    <footer class="py-12 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; kansasgolfscores.com 2021</p>
      </div>
      <!-- /.container -->
    </footer>



          </div>  
    <!-- /.container -->
    
    
    

   


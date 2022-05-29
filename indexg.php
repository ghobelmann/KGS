

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

      
   
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

 </head>  <body class="bg-success">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-12">

<?php
include("dbconnectg.php"); 
if(!empty($_GET['state']))
{
$state = $_GET['state'];
}


?> 
   


<?php
error_reporting(E_ALL);
session_start(); 

//print_r($_SESSION);



 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:glogin-system/index.php");
}

$login = $_SESSION['email'];
//echo $login;

if ($login == "hobelmann@usd237.com") 
    { 
  echo '<form action="unfinalizeg.php">';
   echo '<label for="tid">Unfinalize Tournament:</label>';
   echo '<input type="int" id="tid" name="tid" value="">';
   echo '<input type="submit" value="Submit">';
 echo '</form>'; 
 
   echo '<form action="closeTrnyg.php">';
   echo '<label for="tid">Close Tournament:</label>';
   echo '<input type="int" id="tid" name="tid" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 
 
    
       echo '<form action="trnyrosterg.php">';
   echo '<label for="id">View Golfers:</label>';
   echo '<input type="int" id="id" name="id" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 
   
          echo '<form action="scoring/scorecardg.php">';
   echo '<label for="tid">Enter Scores:</label>';
   echo '<input type="int" id="tid" name="tid" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 

            echo '<form action="edittrnyg.php">';
   echo '<label for="tid">Edit Tourney:</label>';
   echo '<input type="int" id="id" name="id" value="">';
   echo '<input type="submit" value="Submit">';
   echo '</form>'; 

   $referrer = 'enterplayer';
//echo $referrer; 

$sql="SELECT * FROM team ORDER by school asc";
$result = $conn->query($sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

} ?>



<script>
window.onload = function() {
    document.getElementById("player_1").focus();
};</script>



                  Default Password = golf
 <div align="left"><strong><h3>Enter Rosters for Other Schools. </h3></strong></div>
  <div align="left"><strong><h4>Enter First Name, Last Name, Grade and School </h4></strong></div>
 <form id="myForm" action="connectg.php?referrer=enterplayer" method="post">
			<p>Name:<input type="varchar" id="player_1" name="player_1" required />
			  	<p>Grade:<select name="grade">
           <OPTION VALUE=''></OPTION> 
          <OPTION VALUE='2025'>Freshman</OPTION>
          <OPTION VALUE='2024'>Sophomore</OPTION>
          <OPTION VALUE='2023'>Junior</OPTION>
          <OPTION VALUE='2022'>Senior</OPTION></SELECT>
      	<td valign="top">School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT>
		</p> <button id="sub">Enter Player</button>
</form>

<?php
    } 
else {
    echo "$login";
}

if($perm != '9')
   // if there is no valid session                                                                  
{
    header("Location:glogin-system/index.php");
}
?> 



       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
     // echo $userid;
        
    $sql = "SELECT tmid, email FROM users WHERE 
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
       }     
 ?> 




<?php

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>





 
  <?php

if ($paid > "0") {

    echo "<center><h3><div class='alert alert-success'>Your Account has been Paid. <br>
    Thank You, Have a Great Season call if you need help 785-620-7054.</center></h3></div>";
}    else

{

echo "<div class='alert alert-danger'><h2><a href='EIG/index.php'>Click Here to Print and Pay Invoice, 
then all functions of website and player and team rankings will be available to you.</a></h2></div> " ;

}
?> 
 <!DOCTYPE html>  
<head>    

 
    <meta content="Kansas Girls and girls Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Girls Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />


  <title>Golf Coaches Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  
  <link rel="stylesheet" href="includes/sidemenu.css">   



   <div class="container">
  <nav class="navbar navbar-inverse">

  <div>
  	<a class="navbar-brand" href="indexg.php?db=girls">Home</a>
    <a class="navbar-brand" href="trnysetupg.php?db=girls">New Tournament</a>
    <a class="navbar-brand" href="enterrosterg.php?db=girls">Enter/Edit Roster</a>
    <a class="navbar-brand" href="editteamg.php?db=girls">Edit School</a>
    <a class="navbar-brand" href="editcoachg.php?db=girls">Edit Coach</a>
  <a class="navbar-brand" href="EIG/index.php">Invoice</a>
    <a class="navbar-brand" href="glogin-system/logout.php">Logout</a>
     
    
    <span onclick="openNav()"><h4 style="color:white;">Additional Menu Options</h4></span>
    
     
       </div>     
                    
   

        </div> 
        
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
             
             <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               
               <a class="navbar-brand" href="teamRankingsg.php?db=girls&state=ks" class="list-group-item"><font color="white">Rankings Current Season</font></a>
            
            <a class="navbar-brand" href="coachesdirectory.php" class="list-group-item"><font color="white">See All Coaches</font></a>
            <a class="navbar-brand" href="teamStats.php?tmid=<?php echo $tmid; ?>"
            <a class="list-group-item"><font color="white">Upload Team Logo</font></a>
            <a class="navbar-brand" href="EnterStats.php" class="list-group-item"><font color="white">Enter Stats</font></a>
            <a class="navbar-brand" href="GolfStatsSheet.pdf" class="list-group-item"><font color="white">Download Stats Sheet</font></a>
             <a class="navbar-brand" href="EI/index.php" class="list-group-item"><font color="white">Print Invoice</font></a>
             <a class="navbar-brand" href="https://paypal.me/ksgolfscores?locale.x=en_US" 
             <a class="list-group-item"><font color="white">Pay with Paypal</font></a>
             <a class="navbar-brand" href="W9.pdf" class="list-group-item"><font color="white">W-9 Form</font></a>
               <a class="navbar-brand" href="https://mailchi.mp/21b0eaddd16f/kgca" class="list-group-item"><font color="white">Sign Up for Newsletter</font></a>


  
        <a class="navbar-brand"  href="Tournament Tips.pdf"><font color="white">Tournament Tips</a>
        <a class="navbar-brand"  href="Setup Tournament Instructions.pdf"><font color="white">Setting Up Tournament Instructions</a>
         <a class="navbar-brand" href="roster6Ag.php?state=KS"><font color="white">Enter Roster for Schools</a> 
         
                  <a class="navbar-brand" href="tournamentsg.php"><font color="white">Other Tournaments</a>             
             </div>          


<!-- Use any element to open the sidenav -->

<div class="container">
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main" >
 <!-- <a href="teamRankingsAll.php" ><center><h1><font color="black">2021 Team and Individual Rankings</font></h1></a>        -->
</div> </h1>
               
            

         <?php
          echo "<h1>Current Live Tournaments</h1>";
   
        
   $query = "SELECT id, date, tournament from tournament 
   WHERE uid = '$userid' AND complete = 1 ORDER by date, id desc"; 
	       
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
    echo '<a href="edittrnyg.php?id='.$row['id'].'">Edit Tournament</font></a>';
    echo '<a href="copyteamg.php?id='.$row['id'].'">Assign Teams to Tournament</font></a>';
    echo '<a href="selectteamg.php?id='.$row['id'].'"">Assign Players to Cards</font></a>';
    echo '<a href="scoring/scorecardsg.php?id='.$row['id'].'">Print Round 1 - Use Firefox</font></a>';
    echo '<a href="scoring/scorecards2g.php?id='.$row['id'].'">Print Round 2 Use Firefox</font></a>';  
    echo '<a href="scoring/scorecard9hole.php?id='.$row['id'].'">Print 9 Hole Card Use Firefox</font></a>';
   
    echo '<a href="http://www.kansasgolfscores.com/app/teeTimes2g.php?id='.$row['id'].'">Overview</font></a>';
    echo '<a href="wallpagesg.php?id='.$row['id'].'">Team Sheets</font></a>';
    echo '<a href="scoring/scorecardg.php?tid='.$row['id'].'">Enter Scores</font></a>'; 
    echo '<a href="scoring/cardtotalg.php?tid='.$row['id'].'">Enter Front/Back</font></a>';
    echo '<a href="EnterbyTeamStateg.php?tid='.$row['id'].'">Enter 2 Round Tournaments</font></a>';   
    echo '<a href="trnyrosterg.php?id='.$row['id'].'">View Golfers</font></a>';  
    echo '<a href="TourneybyHolesg.php?tid='.$row['id'].'">Results</font></a>';
    echo '<a href=" teamresults246g.php?tid='.$row['id'].'">246 Results</font></a>'; 
    echo '<a href="playerQRcodesg.php?tid='.$row['id'].'">Player Scoring</font></a>';
    echo '<a href="deletewarntrnyg.php?id='.$row['id'].'">Delete</font></a>';
     echo '</div>';

 echo '    <class="profile-card-2 text-left"><a href="closeTrnyg.php?tid='.$row['id'].'"><img src="images/close.jpg "  ></a>';
//echo '<a href="closeTrny.php?tid='.$row['id'].'"><left><h4>Finalize:  After all scores are entered, Click here to close tournament and make available of public to see.</h4></left></font></a>';
    echo '<-- Click to Close Tournament when finished!!';
	echo "</td></tr>";  

} 
        echo "</table></center>";
        }
         
       
    echo "<h1>Completed Tournaments</h1>";

   $query = "SELECT id, date, complete, tournament from tournament WHERE uid = '$userid' 
   AND complete = '2' ORDER by date desc"; 
	 //  echo $userid;
$result = mysqli_query($conn,$query) or die(mysqli_error());
                {            while($row = mysqli_fetch_array( $result )) 

 {   
 echo "<td><tr>";       
	// Print out the contents of each row into a table 
    echo '    <div class="profile-card-2 text-left"><img src="images/golf-tournament-logo.jpg "  >';
    echo '<font color="black"> <strong>'.$row['tournament'].'</strong>';
    echo '<div class="dropdown">';
  echo '<button class="dropbtn"><h4>Edit or Copy This Tournament</h4></button>';
  echo '<div class="dropdown-content">';
   echo '<a href="edittrnyg.php?id='.$row['id'].'">'.$row['tournament'].'</a>';
    echo '<a href="copytrnyg.php?id='.$row['id'].'"> Copy this tournament to start a New Tournament.</a>';
    echo '<a href="unfinalizeg.php?tid='.$row['id'].'">UnFinalize</a>';
  echo '</div>';
echo '</div>';
echo "</td></tr>"; 	
}   
        echo "</table></div>"; 
     }                 
?> 

</p>

</div> </div>
           
           <div class="col-sm-6 mb-0">           
      
      
  
     </div> </div>


   
   
              <div class="col-lg-12 mb-4">   
           
   <div class="alert alert-info">
 <h1> <center><strong><font color="black">Have your players Enter Stats to Use this Section!! </strong> </h1></center>
                           </div>
     


     <h2>Team Averages</h2>
 <?php
 
 
 

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT avg(score) as score, avg(place) as place, sum(score) as total, 
count(stats.pid) * 18 as holesplayed, sum(putts) as putts, avg(stats.par1) as par1, 
avg(bogie) as bogie, avg(doubleb) as doubleb, avg(triple) as triple, 
avg(other) as other, roster.player_1 
FROM stats 
INNER JOIN roster ON stats.pid = roster.pid 
LEFT JOIN team on stats.tmid = team.tmid 
LEFT JOIN tournament on stats.tid = tournament.id 
WHERE stats.tmid = '$_SESSION[tmid]'  AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-light">';
echo '<tr>  <th><center><h3>% Shots - Tee</th>
<th><center><h3>% Shots Irons - Chipping</th>
<th><center><h3>% Shots - Putting</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center><h4>"; 
	echo round ($row['holesplayed'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER><h4>";
  echo round (($row['total'] - $row['holesplayed'] - $row['putts']) / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER><h4>"; 
	echo round ($row['putts'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td></tr>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>

<hr>
          <h2>Player Averages</h2>                                    
          
 <?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stats.id, avg(score) as score, avg(place) as place, sum(score) as total, 
count(stats.pid) * 18 as holesplayed, sum(putts) as putts, avg(stats.par1) as par1, 
avg(bogie) as bogie, avg(doubleb) as doubleb, avg(triple) as triple, 
avg(other) as other, roster.player_1, stats.pid 
FROM stats 
INNER JOIN roster ON stats.pid = roster.pid 
LEFT JOIN scores on stats.pid = scores.pid 
LEFT JOIN team on stats.tmid = team.tmid 
LEFT JOIN tournament on stats.tid = tournament.id 
WHERE stats.tmid = '$_SESSION[tmid]' AND $paid ='1' GROUP by stats.pid
ORDER by score ";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th><center><h4>Player</th> <th><center><h4>Avg Score</th>
<th><center><h4>Avg Place</th><th><center><h4>% Shots - Tee</th>
<th><center><h4>% Shots Irons - Chipping</th>
<th><center><h4>% Shots - Putting</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><h4><font = 'white'"; 
	echo $row['player_1'];
	echo "</td><td><CENTER><h4>"; 
	echo round ($row['score'], 1);
	echo "</td><td><CENTER><h4>"; 
	echo round ($row['place'], 1);
	echo "</td><td><CENTER><h4>"; 
	echo round ($row['holesplayed'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER><h4>";
  echo round (($row['total'] - $row['holesplayed'] - $row['putts']) / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER><h4>"; 
	echo round ($row['putts'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td></tr>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
          
          
           </p>
          
  

      <!-- /.row -->
     

    <!-- Page Content -->

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-6 mb-3">Stats
        <small>Dashboard</small>
         <img src="images/stats.png" alt="Stats" style="width:100px;height:100px;">
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Coaching Tools</li>
      </ol>
       
       
       
       
       
       
       
       
<!-- ------------------------------------------------------------------------>       
       
       
       
       
       
       
       
       
       
       
          
      <div class="row">
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#">   </a>
            <div class="card-body">
              <h4 class="card-title">
                <h4>Roster and Scoring Stats</h4>
              </h4>
              <p class="card-text">
              




   
<?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *, avg(total) as total, max(total) as max,
min(total) as min, count(total) as count, avg((total) - 71.1) as hc FROM scores
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id
WHERE scores.tmid = '$_SESSION[tmid]' and $paid = '1'
GROUP by scores.pid ORDER by total asc";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th>Player</th> <th scope="col">Avg Score</th><th scope="col">High Score</th><th scope="col">Low Score</th><th scope="col">Rounds Played</th><th scope="col">Strokes Over Par</th></tr>';


// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo round ($row['total'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['max'];
	echo "</td><td><CENTER>"; 
	echo $row['min'];
	echo "</td><td><CENTER>";
	echo $row['count'];
	echo "</td><td><CENTER>";  
	echo round ($row['hc'], 1);
	echo "</td></tr><CENTER>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
              
<!-- ------------------------------------------------------------------------>              
    <hr>          
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                Average Player Stats Per Round
              </h4>
              <p class="card-text">
              
              <?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stats.pid, avg(gir) as gir, avg(putts) as putts, avg(fairways) as fairways, 
avg(tfairways) as tfairways,
stats.pid, avg(Tputts) as tputts, avg(updown) as updown, avg(updownc) as updownc, avg(ss) as ss, avg(ssc) as ssc, avg(fairways) as avgfairways,
avg(gir) as avggir, avg(pen) as avgpenalty, 
count(stats.pid) * 18 as hp, sum(putts) as totputts, roster.player_1, count(stats.pid) as count
 FROM stats
INNER JOIN roster ON stats.pid = roster.pid
LEFT JOIN team on stats.tmid = team.tmid
LEFT JOIN tournament on stats.tid = tournament.id
WHERE stats.tmid = '$_SESSION[tmid]' AND $paid = '1'
GROUP by stats.pid";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th><center>Player</th> <th><center>3 Putts</th><th><center>Up Downs</th>
<th><center>Sand Saves</th><th><center>Putts Per Hole</th><th><center>Fairway</th><th><center>GIR</th><th><CENTER>Penalty Strokes</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo round ($row['tputts'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['updown'] / $row['updownc'], 2) * 100;
    echo "%";
	echo "</td><td><CENTER>"; 
	echo round ($row['ss'] / $row['ssc'], 3) * 100;
    echo "%";
	echo "</td><td><CENTER>";
	echo round ($row['totputts'] / $row['hp'], 2);
	echo "</td><td><CENTER>";  
	echo round ($row['avgfairways'], 1);
  echo "</td><td><CENTER>";  
	echo round ($row['avggir'], 1);
  	echo "</td><td><CENTER>"; 
	echo round ($row['avgpenalty'], 1);
	echo "</td></tr>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
              
   <!-- ------------------------------------------------------------------------>              
    <hr>            
              
              </p>
            </div>
          </div>
        </div>
       
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
               Totals per Round
              </h4>
              <p class="card-text">
              
                            <?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stats.pid, sum(gir) as gir, sum(putts) as putts, avg(tfairways) as tfairways, 
avg(fairways) as fairways,
stats.pid, sum(Tputts) as tputts, sum(updown) as updown, sum(updownc) as updownc,
 sum(ss) as ss,  sum(ssc) as ssc,
sum(gir) as avggir,  sum(pen) as penalty,
count(stats.pid) * 18 as hp, avg(putts) as totputts, roster.player_1, count(stats.pid) as count
 FROM stats
INNER JOIN roster ON stats.pid = roster.pid
LEFT JOIN team on stats.tmid = team.tmid
LEFT JOIN tournament on stats.tid = tournament.id
WHERE stats.tmid = '$_SESSION[tmid]' AND $paid ='1'
GROUP by stats.pid";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th><center>Player</th> <th><center>Total 3 Putts</th><th><center>Up Downs</th>
<th><center>Sand Saves</th><th><center>Putts Per Round</th><th><center>Fairway %</th><th><center>GIR %</th>
<th><CENTER>Penalty Strokes</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo round ($row['tputts'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['updown'] / $row['updownc'], 2) * 100;
    echo "%";
	echo "</td><td><CENTER>"; 
	echo round ($row['ss'] / $row['ssc'], 2) * 100;
    echo "%";
	echo "</td><td><CENTER>";
	echo round ($row['totputts'], 1);
	echo "</td><td><CENTER>";  
	echo round ($row['fairways'] / $row['tfairways'], 2) * 100;
  echo "%";
  echo "</td><td><CENTER>";  
	echo round ($row['avggir'] / $row['hp'], 1) * 100;
  echo "%";
  	echo "</td><td><CENTER>"; 
	echo $row['penalty'];
	echo "</td></tr><CENTER>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
              
                            
             
   <!-- ------------------------------------------------------------------------>              
    <hr> 

              
              </p> </div>
          </div>
        </div>  
        
        
        
        
        
        
        
      
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#">  </a>
            <div class="card-body">
              <h4 class="card-title">
                <h4>Average Scoring Stats</h4>
          
              
              
                            <?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT avg(ace) as ace, avg(eagle) as eagle, avg(birdie) as birdie,
avg(stats.par1) as par1, avg(bogie) as bogie, avg(doubleb) as doubleb,
avg(triple) as triple, avg(other) as other,
roster.player_1, stats.pid
 FROM stats
INNER JOIN roster ON stats.pid = roster.pid
LEFT JOIN team on stats.tmid = team.tmid
LEFT JOIN tournament on stats.tid = tournament.id
WHERE stats.tmid = '$_SESSION[tmid]' and $paid = '1'
GROUP by stats.pid";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th>Player</th> <th>Ace</th><th>DEag</th><th>Eag</th><th>Bird</th><th>Par</th><th>Bog</th><th>DBog</th><th>Trip</th><th>Other</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo round ($row['ace'], 1);
  	echo "</td><td><CENTER>"; 
	echo round ($row['dbleagle'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['eagle'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['birdie'], 1);
	echo "</td><td><CENTER>";
  echo round ($row['par1'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['bogie'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['doubleb'], 1);  
  echo "</td><td><CENTER>"; 
  echo round ($row['triple'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['other'], 1);
	echo "</td></tr><CENTER>"; 
	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
         </div>
          </div>
        </div>   </div>
        
        

        
        
    <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#">  </a>
            <div class="card-body">
              <h4 class="card-title">
                <h4>State Stats by Class</h4>
              </h4>
              <p class="card-text">
              
                 <?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




  //6A Top 20 Average


  $sql = "SELECT scores.tmid, avg(total) as aaaaaa from scores 
  INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '6A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th></th><th>Class 6A</th> <th>Class 5A</th><th>Class 4A</th>
<th>Class 321A</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<b>Average Score</b>';
	echo "<td><CENTER>"; 
	echo round ($row['aaaaaa'],1);
	echo "</td><td><CENTER>"; }
  
  
  
  
  
  
  //5A Top 20 Average
  
  $sql = "SELECT scores.tmid, avg(total) as aaaaa from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '5A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo round ($row['aaaaa'], 1);
	echo "</td><td><CENTER>"; }
  
  
  
  
  
    
  //4A Top 20 Average
  
  $sql = "SELECT scores.tmid, avg(total) as aaaa from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '4A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo round ($row['aaaa'], 1);
	echo "</td><td><CENTER>"; } }
  
  
  
      
  //3A Top 20 Average
  
  $sql = "SELECT scores.tmid, avg(total) as aaa from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '321A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo round ($row['aaa'], 1);
	echo "</td><td><CENTER>"; } }
  



  
  
  
  
  
    

  	echo "<tr><td>"; 
	echo '<b>Total Rounds Played</b>';
  	echo "</td><td><CENTER>"; 
    
  //Count 6A Golfers
  
  $sql = "SELECT scores.tmid, count(pid) as c6 from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '6A' AND $paid = '1' ";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 
  
  //Count 6A Golfers
  
  $sql = "SELECT scores.tmid, count(pid) as c6 from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '5A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
echo "</td><td><CENTER>"; 











  //Count 4A Golfers
  
  $sql = "SELECT scores.tmid, count(pid) as c6 from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '4A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 





     //Count 3A Golfers
  
  $sql = "SELECT scores.tmid, count(pid) as c6 from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '3A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 




  
  
  
  
  
  

  echo "</td><td><CENTER>"; 
  
  
  
  
  
  
  
  
  
    	echo "<tr><td>"; 
	echo '<b>Number of Golfers by Class</b>';
	echo "<td><CENTER>"; 

  //Count 6A Golfers
  
  $sql = "SELECT roster.tmid, count(pid) as c6 from roster INNER JOIN team ON roster.tmid = team.tmid WHERE team.classification = '6A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 




  //Count 6A Golfers
  
  $sql = "SELECT roster.tmid, count(pid) as c6 from roster INNER JOIN team ON roster.tmid = team.tmid WHERE team.classification = '5A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 



  //Count 6A Golfers
  
  $sql = "SELECT roster.tmid, count(pid) as c6 from roster INNER JOIN team ON roster.tmid = team.tmid WHERE team.classification = '4A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 


  //Count 6A Golfers
  
  $sql = "SELECT roster.tmid, count(pid) as c6 from roster INNER JOIN team ON roster.tmid = team.tmid WHERE team.classification = '3A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo $row['c6'];  
  }}
  echo "</td><td><CENTER>"; 


  echo "</td><td><CENTER>"; 


	
} 

echo "</thead-dark></table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>

      <!-- ------------------------------------------------------------------------>              
    <hr>         
              </p>
            </div>
          </div>
        </div>     
        
        
        
         <!-- Footer -->
    <footer class="py-12 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; kansasgolfscores.com 2021</p>
      </div>
      <!-- /.container -->
    </footer>



          </div>  
    <!-- /.container -->
    
    
    

   


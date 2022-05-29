                                              
<?php

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

?>

  


<?php
error_reporting(E_ALL);
session_start(); 

//print_r($_SESSION);



 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:../glogin-system/index.php");
}


if($perm != '9')
   // if there is no valid session                                                                  
{
    header("Location:../glogin-system/index.php");
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
       
        $sql = "SELECT image, tmid FROM team WHERE 
     tmid = '$_SESSION[tmid]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
		$image = $row['image'];
        $tmid = $row['tmid'];
       }     
 ?> 




<?php

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>







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
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  
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
     

          
        <a href="#" data-target="slide-out" class="sidenav-trigger btn">Editing Links</a>

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
            <a href="../glogin-system/logout.php">Logout</a> 
          </li>   
     
          <li>
            <div class="divider"></div>
          </li>
          <li>
             <a class="waves-effect" href="./appEnterPlayer.php">Enter Player</a>
          <a class="waves-effect" href="../editteam.php">Edit School Info</a>
          <a class="waves-effect" href="http://www.kansasgolfscores.com/teamRankingsAll.php?db=boys&state=ks" class="list-group-item">Rankings All</a>
          <a class="waves-effect" href="../EnterStats.php" class="list-group-item">Enter Stats</a>
          <a class="waves-effect" href="../coachesdirectory.php" class="list-group-item">See All Coaches</a>
          <a class="waves-effect" href="./appEnterPlayer.php">Enter Player</a>
          <a class="waves-effect" href="../editcoach.php">Edit Coach</a>
          </li>
        </ul>
        
 

        <br/>       
         
            <hr>  
   
   <div class="alert alert-info">
 <h4 class='#f3e5f5 purple lighten-5'> <center><strong>Have your players Enter Stats to Use this Section!! </strong> </h4></center>
                           </div>
     


     <center><h5 class='#f3e5f5 purple lighten-3'>Team Averages</h5>
     <h5>Shot Percentages</h5></center>
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
echo '<thead class="thead-dark" Shots %>';
echo '<tr>  <th><center><p>Tee</th>
<th><center><p>Irons</th>
<th><center><p>Putting</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center><p>"; 
	echo round ($row['holesplayed'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER><p>";
  echo round (($row['total'] - $row['holesplayed'] - $row['putts']) / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER><p>"; 
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
        <h4 class='#f3e5f5 purple lighten-5'> <center><strong>Player Averages</strong></h4></center> 
         <center> <h5 class='#f3e5f5 purple lighten-3'>Shot Percentages</h5></center>                                     
          
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
echo '<tr> <th><center>Player</th> <th><center>Score</th>
<th><center>Place</th><th><center>Tee</th>
<th><center>Irons</th>
<th><center>Putting</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="../editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['score'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['place'], 1);
	echo "</td><td><CENTER>"; 
	echo round ($row['holesplayed'] / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER>";
  echo round (($row['total'] - $row['holesplayed'] - $row['putts']) / $row['total'] , 2) * 100;
  echo "%";
	echo "</td><td><CENTER>"; 
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
          
  
  
        
       
          
      <div class="row">
        <div class="col-lg-6 portfolio-item">
      
            <div class="card-body">
              <h4 class="card-title">
            <center>    <h5 class='#f3e5f5 purple lighten-3'>Roster and Scoring Stats</h5>
                 <h5>Averages</h5> </center>
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
	echo '<a href="../editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
        
              <h4 class='#f3e5f5 purple lighten-3'>
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
echo '<tr> <th><center>Player</th> <th><center>3 Putts</th><th><center>UpDowns</th>
<th><center>SandSaves</th><th><center>PPH</th><th><center>FW</th><th><center>GIR</th><th><CENTER>Pen</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="../editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
       
              <h4 class='#f3e5f5 purple lighten-3'>
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
echo '<tr> <th><center>Player</th> <th><center>3 Putts</th><th><center>UpDowns</th>
<th><center>SS</th><th><center>Putts</th><th><center>FW</th><th><center>GIR</th>
<th><CENTER>Pen</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="../editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
         
            
            <div class="card-body">
              <h4 class="card-title">
                <h4 class='#f3e5f5 purple lighten-3'>Average Scoring Stats</h4>
          
              
              
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
echo '<tr> <th>Player</th> <th>Ace</th><th>Dbl Eagle</th><th>Eagle</th><th>Birdie</th><th>Par</th><th>Bogie</th><th>Double</th><th>Triple</th><th>Other</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="../editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
      
            <div class="card-body">
              <h4 class="card-title">
                <h4 class='#f3e5f5 purple lighten-3'>State Stats by Class</h4>
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
<th>Class 3A</th><th>Class 2A</th><th>Class 1A</th></tr>';

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
  
  $sql = "SELECT scores.tmid, avg(total) as aaa from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '3A' AND $paid = '1'";
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
  




    
  //2A Top 20 Average
  
  $sql = "SELECT scores.tmid, avg(total) as aa from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '2A' AND $paid = '1'";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo round ($row['aa'], 1);
	echo "</td><td><CENTER>"; } }
  
  
  
  
  
    
  //1A Top 20 Average
  
  $sql = "SELECT scores.tmid, avg(total) as a from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '1A' AND $paid = '1' ";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row  
// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
  
	echo round ($row['a'], 1);
  
  
  
  
  
  
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





  $sql = "SELECT scores.tmid, count(pid) as c6 from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '2A' AND $paid = '1' ";
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
  
  $sql = "SELECT scores.tmid, count(pid) as c6 from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '1A' AND $paid = '1'";
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


  //Count 6A Golfers
  
  $sql = "SELECT roster.tmid, count(pid) as c6 from roster INNER JOIN team ON roster.tmid = team.tmid WHERE team.classification = '2A' AND $paid = '1'";
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
  
  $sql = "SELECT roster.tmid, count(pid) as c6 from roster INNER JOIN team ON roster.tmid = team.tmid WHERE team.classification = '1A' AND $paid = '1'";
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
        
           </body>
        
         <!-- Footer -->
    <footer class="py-12 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; kansasgolfscores.com 2019</p>
      </div>
      <!-- /.container -->
    </footer>

           <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    

          </div>  
    <!-- /.container -->
    
    
    

   


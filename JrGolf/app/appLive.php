                       
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
    header("Location:../login-system/index.php");
}


if($perm != '9')
   // if there is no valid session                                                                  
{
    header("Location:../login-system/index.php");
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
              <a href="#user">
                <br><br>
              </a>
              <a href="#name">
                <span class="white-text name"></span>
              </a>
              <a href="mailto: hobelmann@usd237.com">
                <span class="white-text email"></span>
              </a>
            </div>
          </li>
          <li>
          <i class="material-icons">
            <a href="../app/appIndex.php">cloud </i>Home</a> 
          </li>
          <li>
            <a href="../app/login-system/logout.php">Logout</a> 
          </li>   
     
          <li>
            <div class="divider"></div>
          </li>
          <li>
          <a class="waves-effect" href="../enterroster.php">Edit Roster</a>
          <a class="waves-effect" href="../editteam.php">Edit School Info</a>
          <a class="waves-effect" href="http://www.kansasgolfscores.com/teamRankingsAll.php?db=boys&state=ks" class="list-group-item">Rankings All</a>
          <a class="waves-effect" href="../EnterStats.php" class="list-group-item">Enter Stats</a>
          <a class="waves-effect" href="../coachesdirectory.php" class="list-group-item">See All Coaches</a>
          <a class="waves-effect" href="../editcoach.php">Edit Coach</a>
          <a class="waves-effect" href="../editcoach.php">Edit Coach</a>
          </li>
        </ul>
        <br/>
      <div>
 
     
        <!-- Content Column -->
    <!-- /.container -->
       
        
        
    <div class="col-lg-9 mb-4">  
    
         <div class="col-lg-12 portfolio-item">
          <div class="card h-100">
              <h4 class="card-header"><center>Live Tournament Scores for My Team</center></h4>
       
      <?php
$query = "SELECT * FROM tournament
WHERE `id` =  '$tournament' LIMIT 1";

$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);
 $tname = $data['tournament'];
 $btyb = $data['btyb'];
 $c = $data['leaderboard'];



echo '<h2><font color="black">'.$tname.'</font></h2>';  
//echo '- BTYB -'.$btyb.''; 
//echo '<br>Ties Not Broken On This Page, go to Tournament Results.</h2></center>';
for($i=1; $i<=18; $i++)

{
 $h[$i] = $data['hole'.$i];

}



?>        




<?php 



if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
echo $tournanament;
?>



<html>
<body>

  <div class="row" >
    <div  class="col-lg-12 col-md-8 col-sm-8 align-self-start" >
            
<?php
$query = "SELECT * FROM tournament
WHERE `id` =  '$tournament' LIMIT 1";

$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);
 $tname = $data['tournament'];
 $btyb = $data['btyb'];
 $c = $data['leaderboard'];



echo '<center><h5><font color="black">'.$tname.'</font></h5></center>';  
//echo '- BTYB -'.$btyb.''; 
//echo '<br>Ties Not Broken On This Page, go to Tournament Results.</h2></center>';
for($i=1; $i<=18; $i++)

{
 $h[$i] = $data['hole'.$i];

}



?>


         
<?php
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];




}
//new stuff

//get data
//get tournament name and ID
$query = "SELECT * FROM `tournament` WHERE `id` = '$tournament'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
 //Course ID
$cid = $setup['id'];
$tname = $setup['id'];
unset($setup);

if(empty($cid))
	echo 'ERROR: No course defined in setup table for this tournament!';
	else {
$query = "SELECT h1, h2, h3, h4, h5, h6, h7, h8, h9, 
h10, h11, h12, h13, h14, h15, h16, h17, h18, id
 FROM `tournament` WHERE `id` = '".$cid."' LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 2.'. mysqli_error();
else {
$sql_par = mysqli_fetch_assoc($result);

$pid = $sql_par['id'];


$query = "SELECT scores.*, scores.tmid, 
scores.manualscore, roster.pid, 
roster.player_1, team.tmid, team.school 
FROM `scores` 
INNER JOIN roster ON scores.pid = roster.pid 
LEFT JOIN team on scores.tmid = team.tmid 
WHERE `tid` = '$tid' AND total > '0' AND scores.tmid = '$tmid' 
GROUP by scores.pid";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 3.'. mysqli_error();
else {

$running_score = array();
$player_i = 0;

//calculate for each player
while($scores = mysqli_fetch_assoc($result))
{
$total = 0;
$holes_played = 0;
$score = 0;
//calculate for each hole
	for($i=1; $i<=18; $i++)
	{
	//$par[$i] = $sql_par['h'.$i]; 
	$hole_par = $sql_par['h'.$i];
	if(empty($scores['hole'.$i]) || $scores['hole'.$i] < 1)
	{
	$hole_par = 0;
	$scores['hole'.$i] = 0;
	} else {
	$holes_played++;
	}
  $score = $score + $scores['hole'.$i];
	$total = $total + $scores['hole'.$i] - $hole_par;
	}


$running_score[$player_i] = array("tname" => $data['tournament'], 
"tmid" => $scores['tmid'],"tid" => $scores['tid'],"name" => $scores['player_1'], "team" => $scores['abv'],
 "total" => $total, "score" => $score, "holes_played" => $holes_played);
//echo json_encode($running_score);
$player_i++;
}
function array_orderby()
{
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}
$running_score_sorted = array_orderby($running_score, 'total',  'back', 'last6', 'last3', SORT_ASC);

$i = 0;
$count = count($running_score_sorted);
$place = 1;
$table_size = $c[0];;
  

//echo $count;
echo '<div class="table" >';
echo '<table class="table">
<tr>';
while($i < $count)
{
echo '<td valign="top" align="center">';

echo '<table class="table">
<tr>
<th>Name</th>
<th>To Par</th>
<th>Score</th>
<th>Plyd</th>
</tr>';

while($i < $count && $table_i < $table_size)
{
$player = $running_score_sorted[$i];

if($player['holes_played'] < 18)
	$highlight = ' bgcolor="#cccccc"';
  
  

if($player['total'] == 0)
	$player['total'] = "E";
else if($player['total'] > 0)
	$player['total'] = (string) '+'.$player['total'];
else if($player['total'] < 0)
	$player['total'] = (string) $player['total'];



echo '<tr'.$highlight.'>
<td><a href="appHbh.php?tid='.$player['tid'].'&tmid='.$player['tmid'].'">'.$player['name'].'</a></td>
<td>'.$player['total'].'</td>
<td>'.$player['score'].'</td>
<td> '.$player['holes_played'].'</td>
</tr>';
$place++;
$i++;
$table_i++;
//unset($highlight);
}

echo '</table>';
echo '</td>';
$table_i = 0;
}
echo '</tr>
</table>';
}
}
}
}
 // echo json_encode($running_score_sorted);

?>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    


       <center>  <button onClick="window.location.reload();">Refresh Page</button>    </center>
             
             <br /><br />
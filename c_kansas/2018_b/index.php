<?php

session_start(); 

include_once("databaseconnect.php");


//print_r($_SESSION);



 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}


if($perm != '9')
   // if there is no valid session
{
    header("Location:login-system/index.php");
}


 
?> 

       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $userid;
        
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
  // echo $paid;
      
 ?> 




<?php include_once("analyticstracking.php") ?>

<?php

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>





 
  <?php

if ($paid > "0") {

    echo "<center><h3><div class='alert alert-success'>Your Account has been Paid. 
    Thank You, Have a Great Season call if you need help 785-620-7054.</center></h3></div>";
}    else

{

echo "<div class='alert alert-danger'><h2><a href='EI/index.php'>Click Here to Print and Pay Invoice, 
then all functions of website and player and team rankings will be available to you.</a></h2> " ;

}
?> 
 <!DOCTYPE html>  
<head>    

 
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />


  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>



  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.kansasgolfscores.com">KansasGolfScores.com</a>
	    <?php echo $user; ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>

		  
		  

		  
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">My Team <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="enterroster.php">Enter/Edit Roster</a></li>
            <li><a href="editteam.php">Edit School Info</a></li>
            <li><a href="editcoach.php">Edit Coach</a></li>
          </ul>
	</li>
  
  		  
  <li class="active"><a href="trnysetup.php">Setup New Tournament</a></li>
	</li>

                
  		<ul class="nav navbar-nav navbar-right">
        <li><a href="login-system/login.php"> Login</a></li>
        <li><a href="login-system/logout.php">Log Out</a></li>
          <!--   <li><a href="login-system/forgot.php">Forgot or Change Password</a></li>   -->
		
      </ul>

          
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

     
	
    </div>
  </div>
</nav>

</head>


    <!-- Page Content -->
    <div class="container">
       <center>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Coaches Only Page
        <small></small>
        <img src="images/swing.png" alt="Stats" style="width:200px;height:100px;">
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://www.kansasgolfscores.com/p_kansas/index.html">Home----</a>
                           <li class="breadcrumb-item active"></li>
                <a href="Tournament Tips.pdf">Tournament Tips----</a>
                 <a href="Setup Tournament Instructions.pdf">Setting Up Tournament Instructions----</a>

        
      
         <a href="roster6A.php">Enter Roster for Other Schools</a>
      </ol>  </li>

    </center>
    </div>
    

          <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-2 mb-4">
          <div class="list-group">
            <a href="index.php" class="list-group-item">Home</a>
            <a href="tournaments.php" class="list-group-item">Results</a>
            <a href="coachesdirectory.php" class="list-group-item">See All Coaches</a>
            <a href="teamStats.php?tmid=<?php echo $tmid; ?>" class="list-group-item">Team Page- Upload Team Logo</a>
            <a href="EnterStats.php" class="list-group-item">Enter Stats</a>
            <a href="GolfStatsSheet.pdf" class="list-group-item">Download Stats Sheet</a>
             <a href="EI/index.php" class="list-group-item">Print Invoice</a>
             <a href="../../global_style/vendor/form-w-9.pdf" class="list-group-item">W-9 Form</a>
                    
  

          </div>
        </div>
        
        <!-- Content Column -->
    <!-- /.container -->
    

        
        
               <div class="col-lg-9 mb-4">  
               
                      
          <h2>My Tournaments</h2>
          <p>
               <?php

   $query = "SELECT id, date, tournament from tournament WHERE uid = '$userid' ORDER by date desc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());


echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr><th scope="col"><center>Edit Tournament Details</th><th scope="col">Date</th>
<th scope="col"><center>Edit Yardage</th><th scope="col"><center>Edit Par</th><th scope="col"><center>Enter Players</th>
<th scope="col"><center>Print ScoreCards (Use Firefox)</th><th scope="col"><center>Print Wall Sheets</th>
<th scope="col"><center>Enter Hole by Hole Scores</th>
<th scope="col"><center>Enter Front/Back Scores</th>
<th scope="col"><center>View Entered Golfers</th><th scope="col"><center>Results</th>
<th scope="col"><center>Upload Picture</th><th scope="col"><center>Delete</th></tr>';


// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><Center>";
	echo '<a href="edittrny.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>"; 
  echo $row['date'];
  echo "</td><td><CENTER>";
  echo '<a href="edityards.php?id='.$row['id'].'">Edit</font></a>';
	echo "</td><td><CENTER>";
  echo '<a href="editpar.php?id='.$row['id'].'">Edit Par</font></a>';
	echo "</td><td><CENTER>"; 
    echo '<a href="selectteam.php?id='.$row['id'].'"">Assign to Card</font></a>';
  echo "</td><td><CENTER>"; 
  echo '<a href="scorecards.php?id='.$row['id'].'">C1 -</font></a>';
   echo '<a href="scorecardsLong.php?id='.$row['id'].'">C2 -</font></a>';
      echo '<a href="scorecardLong3.php?id='.$row['id'].'">C3 </font></a>';
  echo "</td><td><CENTER>"; 
    echo '<a href="wallpages.php?id='.$row['id'].'">Print</font></a>';
  echo "</td><td><CENTER>"; 
 //   echo '<a href="trnypairing.php?id='.$row['id'].'">View Golfers</font></a>';
//	echo "</td><td><CENTER>"; 
  echo '<a href="scorecard.php?tid='.$row['id'].'">Enter Scores</font></a>';
  echo "</td><td><CENTER>"; 
  echo '<a href="cardtotal.php?tid='.$row['id'].'">Enter Front/Back</font></a>';
  echo "</td><td><CENTER>"; 
  echo '<a href="trnyroster.php?id='.$row['id'].'">View Golfers</font></a>';
	echo "</td><td><CENTER>"; 
  echo '<a href="tourneyResults.php?tid='.$row['id'].'">Results</font></a>';
	echo "</td><td><CENTER>"; 
    echo '<a href="tourneyPicture.php?tid='.$row['id'].'">Upload Picture</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="deletewarntrny.php?id='.$row['id'].'">Delete</font></a>';
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</thead-dark></table>";
?>


  </div>  </div>
  
  <div class="alert alert-danger">
  
  <h3><a href="https://us14.campaign-archive.com/home/?u=5ae6a9fe8f6547097eb49bf1f&id=0084a64cb1">Past Newsletters</a></h3>
  <center><h1><strong>IMPORTANT</strong> Sign up For Newsletter!! </center></h1>
</div>

        
       <h3>Subscribe to New Email list- Old Group email will be discontinued this April 1st 2018, No Fooling!! Sign up Today.</h3> 
                <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://kansasgolfscores.us14.list-manage.com/subscribe/post?u=5ae6a9fe8f6547097eb49bf1f&amp;id=0084a64cb1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5ae6a9fe8f6547097eb49bf1f_0084a64cb1" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
   
   
   
   
   <div class="alert alert-success">
 <h1> <center><strong>Enter your tournament on Upcoming Tournaments Calendar!!! </strong> </h1>
 <h3><center>Coaches, Players and Parents enjoy seeing and knowing when your tournament is!!</h3>
 </center>

          
       
  
<?php

$sql="SELECT * FROM team ORDER by school asc";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>

<script>

window.onload = function() {
    document.getElementById("school").focus();
};
</script>

    
     







        
       
    <center>
  
<form id="myForm" action="connectschedule.php" method="post">
      <td valign="top">Host School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT>
      
         	Course:
        <input type="varchar" name="tournament" size="20" value=" " required/>    
        
        
    		Date of Tournament 
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/> 


            
  <input name="" type="submit" value="Enter Tournament" />
  
  
   <h3><center>This is not setting up to Host a tournament, but for the front page calendar.</h3>
      <h2><center>If you are going to a tournament and it is not on the list, feel free to add it.</h2>
  </div>         </h4>
  
  
</form>  
          
   
   
   
              <div class="col-lg-12 mb-4">   
           
   <div class="alert alert-info">
 <h1> <center><strong>Have your players Enter Stats to Use this Section!! </strong> </h1></center>
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
echo '<thead class="thead-dark">';
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
	
	echo "<tr><td><h4>"; 
	echo '<a href="editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
AND `dq` != 'DQ'   AND `dq` != 'WD'
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
	echo '<a href="editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
	echo '<a href="editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
	echo '<a href="editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
echo '<tr> <th>Player</th> <th>Ace</th><th>Dbl Eagle</th><th>Eagle</th><th>Birdie</th><th>Par</th><th>Bogie</th><th>Double</th><th>Triple</th><th>Other</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editStats.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
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
            <a href="#"> </a>
            <div class="card-body">
              <h4 class="card-title">
               <h4>Full Individual and Team Rankings </h4>
              </h4>
              <p class="card-text">
              
                                <?php

  //mysqli #1
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *, avg(total) as total, max(total) as max, scores.pid,
min(total) as min, count(total) as count, avg((total) - 71.1) as hc FROM scores
INNER JOIN roster ON scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
LEFT JOIN tournament on scores.tid = tournament.id
WHERE scores.tmid = '$_SESSION[tmid]' AND $paid = '1'
GROUP by scores.pid LIMIT 1";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row 
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th></th><th>Class 6A</th> <th>Class 5A</th><th>Class 4A</th>
<th>Class 3A</th><th>Class 2A</th><th>Class 1A</th><th>Sand</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<b>Team Rankings</b>';
	echo "<td><CENTER>"; 
	echo "<a href='teamRankings.php?classification=6A'>6A</a>";
	echo "</td><td><CENTER>"; 
	echo "<a href='teamRankings.php?classification=5A'>5A</a>";
	echo "</td><td><CENTER>"; 
	echo "<a href='teamRankings.php?classification=4A'>4A</a>";
	echo "</td><td><CENTER>"; 
	echo "<a href='teamRankings.php?classification=3A'>3A</a>";
	echo "</td><td><CENTER>";
	echo "<a href='teamRankings.php?classification=2A'>2A</a>";
	echo "</td><td><CENTER>";  
	echo "<a href='teamRankings.php?classification=1A'>1A</a>";
	echo "</td><td><CENTER>"; 
  	echo "<a href='teamRankings.php?classification=sand'>Sand</a>";
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


  $sql = "SELECT scores.tmid, avg(total) as aaaaaa from scores INNER JOIN team ON scores.tmid = team.tmid WHERE team.classification = '6A' AND $paid = '1'";
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
WHERE scores.tmid = '$_SESSION[tmid]'
GROUP by scores.pid LIMIT 1";
 //mysqli #2     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row 
echo "<div class='mt-4 mb-3' >";
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr> <th><center>Total Tournaments</th> <th><center>Total Rounds Played</th></tr>';

// keeps getting the next row until there are no more to get
$i = 1;
      //msqli #3
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><CENTER>"; 
	echo '399';
	echo "</td><td><CENTER>"; 
	echo '12564';
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
        
          </div>  </div>
      </div>
      <!-- /.row -->
      
       


    </div>
    <!-- /.container -->
    
    
    

    <!-- Footer -->
    <footer class="py-12 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; kansasgolfscores.com 2018</p>
      </div>
      <!-- /.container -->
    </footer>



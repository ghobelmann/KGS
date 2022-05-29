




 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 

$sql = "SELECT id FROM `users` WHERE email = '$_SESSION[email]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error: '.mysqli_error());
}


?>






       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      
 ?> 


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
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Virtual Tournament <span class="caret"></span></a>
          <ul class="dropdown-menu">
    
			       <li><a href="virtual.php">Run a Virtual Tournament</a></li>
 
          </ul>
		  
		  
                              		  
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tournaments.php">Tournaments</a></li>
          </ul>
	</li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Coaches <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="signup.php">1. Sign Up</a></li>
          <li><a href="enterroster.php">2. Enter Roster</a></li>
			<li><a href="trnysetup.php">3. Setup New Tournament</a></li>       
		       <li><a href="enterplayers.php"> 4. Enter Golfers In Your Tournament</a></li>
            <li><a href="EnterTrnyTeam.php"> 4. Enter Team In Your Tournament</a></li>
     		  	<li><a href="opponantsearch.php">5. Print Score Cards</a></li>
            <li><b>Your Tournaments</b></li>  
            <?php


//Get number of Team to Search For.
if(!empty($_GET['id']))
{
$trny = $_GET['id'];
}
//Submit Query to MySql Database
$sql = "SELECT * from tournament  WHERE uid = '$userid' order by id desc";
$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page

// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) 
                                                 

  {
	// Print out the contents of each row into a table
	
	echo "6."; 
	echo '<a href="trnyroster.php?id='.$row['id'].'">'.$row['tournament'].'</font></a><br>';
} 


?>
      <li><b>Varsity Tournaments</b></li>
			<li><a href="card.php">7. Enter hole by hole 18 Hole Varsity Tournament</a></li>
      	<!--		<li><a href="cardmobile.php">7. Enter hole by hole 18 Hole Varsity Tournament Ipad</a></li>   -->
  <li><a href="cardtotal.php">8. Enter Front 9 Back 9 Scores 18 Hole Varsity Tournament</a></li>
  <li><b>JV Tournaments</b></li>
        <li><a href="card9.php">9. Enter hole by hole 9 Hole JV Tournament</a></li>
  <li><a href="cardtotal.php">10. Enter Front 9 Back 9 Hole JV TournamentScores</a></li>
  <li><b>View your Entries by Card</b></li>
			<li><a href="masterCard.php">11. View Golfers by Scorecard</a></li>
			<li><a href="manager.php">12. Edit Tournament</a></li>  
    <li><a href="manageroster.php">13. Manage My Roster</a></li>
      <li><a href="card36.php">14. 27 and 36 Hole tournaments</a></li>
          
          
          
          <li><h4><a href="coachesdirectory.php">Coaches Directory</a></h4></li>
          <li><h4><a href="allplayers.php">View All Players</a></h4></li>
      
          <li><a href=""></a></li>
          <li><a href="entryform.pdf">Print Entry Form</a></li>
	        <li><a href="cardassignments.pdf">Print Card Assignments Form</a></li>
        
           
                  <li><a href="admin.php">Administrator Tools</a></li>
			<li><a href="logout.php">Log Out</a></li>
      </ul>


              
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">League Standings - 36 Hole Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="GWAL_League.php">GWAL Standings</a></li>
          <li><a href="Sunflower_League.php">Sunflower League Standings</a></li>
          <li><a href="SEK.php">Southeast Kansas League</a></li>
          <li><a href="WAC.php">Western Athletic Conference</a></li>
          <li><a href="EKL.php">Eastern Kansas League</a></li>
          <li><a href="EKL2.php">Eastern Kansas League Round 2 Results</a></li>
          <li><a href="SF2.php">Sunflower League Round 2 Results</a></li>
          <li><a href="Marion36.php">Marion Co 36 Hole Invitational</a></li>
          <li><a href="I70.php">I- 70 Ellis Trego</a></li>
          <li><a href="teamresults246.php?tid=">Republic County 2-4 Man Results</a></li>
          <li><a href="teamresults246.php?tid=">Beloit 2-4 Man Results</a></li>
          <li><a href="teamresults36.php?tid=">Topeka West Invitational</a></li>
          <li><a href="teamresults36.php?tid=">Topeka City League Championship</a></li>
          <li><a href="I-135.php">I-135 Shootout</a></li>
          <li><a href="teamresults246.php?tid="</a>Phillipsburg 2-4-6 Man</li>
          <li><a href="teamresults246.php?tid=">MCL Tournament 2-4 Man</a></li>
			
      </ul>  
      
      
      
      
                            <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="help.php">Help<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login-system/forgot.php">Forgot or Change Password</a></li>
		
			<li><a href="login-system/logout.php">Log Out</a></li>
          </ul>
		</li>
          </ul>
		</li>
	</li>
     
	
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-system/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-system/index.php"> Login</a></li>
        <li><a href="login-system/logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  

</body>
</html>
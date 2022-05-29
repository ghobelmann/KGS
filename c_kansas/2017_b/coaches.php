<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	














 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
 ?> 
 
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      echo $_SESSION['email'];
      
 ?> 

<div id="wrapper">

  <div id="content">
  
  <table">
    <tr><td>
     <!--
      <tr>
     <center><h1><font color="white"> Live Leaderboards</font> </h1></center>
    <td> <center><a href="leaderboards.php"><h3>Live Leaderboard With Scores Only</h3></a> </td>
    <td><center><a href="leaderboardall.php"><h3>Live Leaderboard with All Players in Tournament</h3></a> </td> 
       <td><center> <a href="holebyhole.php"><h3>Hole by Hole Results</h3></a> </td>
    <td> <center><a href="printresults.php"><h3>Print Results</h3></a>  </td> 

  </tr>
  
  -->
  
  
  

     <!--          <li><a href="http://www.usd237.com/scgolf/kca/index.php"><h2>Take Coaches Survey</h2></a></li>  -->


             <li><a href="login-system/index.php">1. Sign Up</a></li>
          <li><a href="enterroster.php">2. Enter Roster</a></li>
			<li><a href="trnysetup.php">3. Setup New Tournament</a></li>       
		       <li><a href="enterplayers.php"> 4. Enter Golfers In Your Tournament</a></li>
         <li><a href="EnterTrnyTeam.php"> 4. Enter Team In Your Tournament</a></li>
     		  	<li><a href="opponantsearch.php">5. Print Score Cards</a></li>
              <li><b>Your Tournaments</b></li>
            
            
            <?php


//Get number of Team to Search For.
if(!empty($_GET['trny']))
{
$trny = $_GET['trny'];
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
            			<li><a href="cardmobile.php">7. Enter hole by hole 18 Hole Varsity Tournament Ipad</a></li>
  <li><a href="cardtotal.php">8. Enter Front 9 Back 9 Scores 18 Hole Varsity Tournament</a></li>
  <li><b>JV Tournaments</b></li>
        <li><a href="card9.php">9. Enter hole by hole 9 Hole JV Tournament</a></li>
  <li><a href="cardtotal.php">10. Enter Front 9 Back 9 Hole JV TournamentScores</a></li>
  <li><b>View your Entries by Card</b></li>
			<li><a href="masterCard.php">11. View Golfers by Scorecard</a></li>
		<!--	<li><a href="manager.php">12. Edit Tournament</a></li>  
      <li><a href="manageroster.php">13. Manage My Roster</a></li>    -->
      <li><a href="card36.php">14. 27 and 36 Hole tournaments</a></li>
        
          <h4><a href="coachesdirectory.php">Coaches Directory</a></h4>
         <h4><a href="allplayers.php">View All Players</a></h4>

          
			   <a href="logout.php">Log Out</a><br> 
          
          
           </td></tr><tr><td>
              
              <?php

//Get number of Team to Search For.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Submit Query to MySql Database
$sql = "SELECT tournament.id, tournament.tournament,
tournament.date from `tournament`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$i = 1;

 //Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th> </th><th>Live Scoring</th> <th>Date</th><th>4 Man 18 Hole Team Results</th>
<th>Hole by Hole Results</th><th>Print Results</th><th>Wall Sheets</th></tr>";
// keeps getting the next row until there are no more to get

 while($row = $result->fetch_assoc()) 
  {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="teamresults.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['date'];
	echo "</td><td>"; 
	echo '<a href="teamresults4.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>";
	echo '<a href="holebyholetrny.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td>"; 	
	echo '<a href="teamresultsprint.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
  	echo "</td><td>"; 	
	echo '<a href="wallpages.php?id='.$row['id'].'">'.$row['tournament'].'</font></a>';
	echo "</td></tr>"; 
	$i++;
} echo "</table>"; 
} 
 else {
    echo "0 results";
}


?>  

</td>     </tr>
</table>
          
          
          
          
          
          
          
          
          
  </div>
</div>

	

            </h2>
            
            </div>
            </div>
            </body>
            </html>
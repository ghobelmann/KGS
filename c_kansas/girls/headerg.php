<?php
include_once("databaseconnect.php");
?> 

       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

      
 ?> 
<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

  </head><body>
 
 
 
  <style>
.dropbtn {
    background-color: #cccccc;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body> 
 <!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.kansasgolfscores.com">KansasGolfScores.com</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>


	
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-system/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-system/index.php"> Login</a></li>
        <li><a href="login-system/logout.php">Log Out</a></li>
        <li></li>
        <li> <font color = "white"><?php echo $_SESSION['email']; ?> </font></li>
      </ul> 
    </div>
  </div>
</nav>
-->
  
<div class="container"> 
    <h1>Coaches Only Site...</h1> 


  <div class="row">
    <div class="col-md-2">
     <h4>
              
<?php

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>





       <?php         
    $sql = "SELECT team.paid, team.tmid FROM team INNER JOIN users
     ON team.tmid = users.tmid WHERE 
     users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$paid = $row['paid']; }

      
 ?> 
 
 
  <?php

if ($paid > "0") {
    echo "Your Account has been Paid, Thank You.<br><br>";
}    else

{
echo "Note: Individual and Team Rankings will be available for your team after your payment has been credited to your account.  Thanks.    <br>
                                         
       Click here to print and pay your invoice.  <br>" ;

}
?> 




   
                    	<a href="EI/index.php">Print Your Invoice </a>




                        <h2>My Team</h2>
                        

<div class="dropdown">
  <button class="dropbtn">Team Details</button>
  <div class="dropdown-content">
 <a href="enterroster.php">Enter Roster</a>
    <a href="edit_roster.php"> Manage My Roster</a>
  <a href="editteam.php"> Edit School</a>
    <a href="editcoach.php"> Edit Coach</a>
  </div>
</div>
           
               

              


</div>
    
    
  
    
    <div class="col-md-3"> 
    
                      <h2>My Tournament</h3>
    <div class="dropdown">
  <button class="dropbtn">Setup New Tournament</button>
  <div class="dropdown-content">
			<a href="trnysetup.php">Setup New Tournament</a>      
		       <a href="enterplayers.php"> Enter Golfers In Your Tournament</a>
     		  	<a href="opponantsearch.php">Print Score Cards</a>
         
<?php
              //Get number of Team to Search For.

                //Submit Query to MySql Database
        $sql = "SELECT * from tournament  WHERE uid = '$userid' order by id desc";
              $result = mysqli_query($conn,$sql)
                    or die ('Error in Query Try Again:--' . mysqli_error());

                //Print table to the web page
                // keeps getting the next row until there are no more to get
              while($row = mysqli_fetch_array( $result )) 
                 {
          // Print out the contents of each row into a table
	         
	             echo '<a href="trnyroster.php?id='.$row['id'].'"><font color= "red">'.$row['tournament'].'</font></a>';
                  } 
?> 

      	       <a href="tournaments.php"> Print Wall Sheets</a>
	<a href="masterCard.php">View Golfers by Scorecard</a>
		<a href="manager.php">Edit Tournament</a></li>  
    <a href="card36.php">27 and 36 Hole tournaments</a>
  </div>
</div>





         <h2>Coaches</h2>         

<div class="dropdown">
  <button class="dropbtn">Coaching Tools</button>
  <div class="dropdown-content">
  <a href="coachesdirectory.php">Coaches Directory</a>
  <a href="enterschedule.php">Enter Tournament on Calendar</a>
  <a href="entryform.pdf">Print Entry Form</a>
	<a href="cardassignments.pdf">Print Card Assignments Form</a>
	<a href="EI/index.php">Print Your Invoice </a>
  </div>
</div>






                      <h2>Check Results</h2>
    <div class="dropdown">
  <button class="dropbtn">Results</button>
  <div class="dropdown-content">   
		       <a href="tournament.php"> List of Tournaments</a>
  </div>
</div>






</div>




<div class="col-md-3"> 


    <b><h2>18 Hole</h2></b>
  <div class="dropdown">
  <button class="dropbtn">Run 18 Hole Varsity</button>
  <div class="dropdown-content">
			<a href="card.php">Enter hole by hole</a>
<a href="cardtotal.php">Enter Front 9 Back 9</a>
  </div>
</div>

    <b><h2>9 Hole</h2></b>
  <div class="dropdown">
  <button class="dropbtn">Run 9 Hole</button>
  <div class="dropdown-content">
<a href="card9.php">Enter hole by hole</a>
<a href="cardtotal.php">Enter Front 9</a>
  </div>
</div>




      
   

      
      </ul>
      
     </li> 

      
     


    </div>
    
  <!--  
        <div class="col-md-2"> 
        
                                           <h2>Drills and Coaching Ideas</h2>
    <div class="dropdown">
  <button class="dropbtn">Coaching Resources</button>
  <div class="dropdown-content">   
		       <a href="drills.php">Coaching Drills and Ideas</a>
  </div>
</div>
       
                                   <h2>Rankings</h2>
    <div class="dropdown">
  <button class="dropbtn">Rankings</button>
  <div class="dropdown-content">   
		       <a href="stateTeam.php">State Team Rankings Top 12</a>
            <a href="stateTeamAll.php">State Team Rankings All</a>
  </div>
</div>

             
      -->
          
    </div>
        
     
  </div>  
<h4> <center> <a href="enterschedule.php">Enter My Tournament On Yearly Calendar</a></h4>         



   <center>
  <?php

   $query = "SELECT id, date, tournament from tournament WHERE uid = '$userid'"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());


echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr><th><center>Edit Tournament Details</th><th>Date</th>
<th><center>Edit Yardage</th><th><center>Edit Par</th><th><center>Enter Players</th>
<th><center>Print ScoreCards</th><th><center>Print Wall Sheets</th><th>Tee Time Pairings Sheet</th>
<th><center>Enter Scores 18</th><th><center>Enter Scores 9</th>
<th><center>View Entered Golfers</th><th><center>Enter Stats</th><th><center>Results</th><th><center>Delete</th></tr>";
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
    echo '<a href="enterplayers.php">Assign to Card</font></a>';
  echo "</td><td><CENTER>"; 
  echo '<a href="scorecards.php?id='.$row['id'].'">Print</font></a>';
  echo "</td><td><CENTER>"; 
    echo '<a href="wallpages.php?id='.$row['id'].'">Print</font></a>';
  echo "</td><td><CENTER>"; 
    echo '<a href="trnypairing.php?id='.$row['id'].'">View Golfers</font></a>';
	echo "</td><td><CENTER>"; 
  echo '<a href="scorecard.php?tid='.$row['id'].'">18 Hole</font></a>';
  echo "</td><td><CENTER>"; 
  echo '<a href="scorecard9.php?tid='.$row['id'].'">9 Hole</font></a>';
  echo "</td><td><CENTER>"; 
  echo '<a href="trnyroster.php?id='.$row['id'].'">View Golfers</font></a>';
	echo "</td><td><CENTER>"; 
    echo '<a href="enterstats.php?id='.$row['id'].'">Enter Stats</font></a>';
	echo "</td><td><CENTER>"; 
  echo '<a href="messagetrny.php?tid='.$row['id'].'">Results</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="deletewarntrny.php?id='.$row['id'].'">Delete</font></a>';
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";
?>




</div>



</body>
</html>
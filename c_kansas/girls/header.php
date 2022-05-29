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
 
 









<?php
include_once("databaseconnect.php");

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

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">                                    
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>


	
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-system/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-system/login.php"> Login</a></li>
        <li><a href="login-system/logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container"> 


   <!----
<div class="container">
  <div class="jumbotron">
  <a href="http://www.tgw.com">
         <img src="ads/Btm_PINGpricedrops_031217.jpg" alt="TGW" style="width:1060px;height:150px;">
           </a>
  </div>
  -->
     
  <div class="jumbotron">
    <h1>Kansas Golf Results!</h1>   
      <form action="tournament.php">
    <input type="submit" value="Go to Tournament Results" />
</form>
      <form action="coaches.php">
    <input type="submit" value="Go to Coaches Page" />
</form>
    

     <hr>

 
 

     
  </div>

  <div class="row">
    <div class="col-md-2">
     <h4>
              <br><br>
              
<?php

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count(id) as trny FROM tournament";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Number of Tournaments: <h2>" . $row["trny"]. "</h2><br>";
    }
} else {
    echo "0 results";
}
?>


<?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count(roster.pid) as golfers FROM roster";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Number of Golfers: <h2>" . $row["golfers"]. "</h2><br>";
    }
} else {
    echo "0 results";
}
?>

<?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count(scores.pid) as rounds FROM scores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Number of Rounds: <h2>" . $row["rounds"]. "</h2><br>";
    }
} else {
    echo "0 results";
}
?>



     
    </div>
    
    
  
    
    <div class="col-md-2"> 
       
       
   <h2><center>Upcoming Tournaments</center></h2>
   <p>Coaches, Click <a href="enterschedule.php">Here</a> to put your tournament on this calendar</P>
  
  
  
  <?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM schedule 
WHERE DATE_SUB(CURDATE(),INTERVAL 1 day) < date ORDER by date asc
LIMIT 25";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
  echo "<table border='1' width='300'>";
  echo "<th>School</th><th>Course</th><th>Date</th>";
  echo "<tr><td>";
	echo $row['school']; 
  echo "</td><td>";
	echo $row['tournament']; 
  echo "</td><td>";
	echo $row['date'];
	echo "</td></tr>";
  echo "</table>";

    }
} else {
    echo "0 results";
}
?>        

             
      
          
    </div>
      
      
    <div class="col-md-2"> 
        


    </div>
      
      
    <div class="col-md-2"> 
    
       <h2><center>Live Tournament Scoring</center></h2>
    
    <br />         

<?php


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT scores.tid, course.tid 
FROM `scores` 
INNER JOIN `tournament` on  scores.tid = tournament.tid
WHERE scores.total > 0 AND
DATE_SUB(CURDATE(),INTERVAL 0 day) = tournament.date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
    echo "<table border='1' width='300'>"; {
	// Print out the contents of each row into a table
		echo "<tr><td><h3><center>";
	echo '<a href="teamresults.php?tid='.$row['tid'].'">'.$row['tid'].'</font></a>';
	echo "</center></h3></td></tr>";

}   echo "</table>";
} else {
    echo "No Live Tournaments at this time";
}
?>


      
        
           <h3> Top 10 Scores for last 7 days. </h3>
 <?php
  


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `scores`
INNER JOIN `tournament` on scores.tid = tournament.id
LEFT JOIN `roster` on scores.pid = roster.pid
LEFT JOIN `team` on scores.tmid = team.tmid
WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= tournament.date  
AND DATE_SUB(CURDATE(),INTERVAL -1 day) > tournament.date 
AND scores.total > '0' ORDER by scores.total asc LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<table border='1'>";
 echo "<tr> <th>Name</th><th>Team</th> <th>Score</th><th>Tournament</th></tr>";
    while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['school'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td><td><CENTER>"; 
	echo $row['tournament'];
	
} 
echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();
?>  


    </div>

  </div>
        <div class="col-md-4"> 
  
 
     </div>
  
</div>

</body>
</html>


<?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:glogin-system/index.php");
}

include_once("dbconnectg.php"); 

 if(!empty($_GET['id']))
{
$id = $_GET['id'];
} 
echo $id;  
 ?> 
 
 <?php
$sql = "SELECT * FROM `tournament` WHERE id = '$id' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);                                              
} else {
die('Error: '.mysqli_error());
}  
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);
   }
  $sql = "SELECT * FROM tournament WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tname = $row["tournament"];
        $yardage = $row["yardage"];
        $par = $row["par"];
        $course = $row["course"];
        $comments = $row["comments"];
        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
        $btyb = $row["btyb"];
        $date = $row["date"];
        $rounds = $row["rounds"];
    }
   


} else {
    echo "0 results";
    }
     
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="./vendor/bootstrap/css/w3.css">    
  
      
   
<h4 class="card-header bg-dark">  
    
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
      <hr>
  <button class="block">  
<center>       
<a href="roster6Ag.php">Add Players for Other Teams</a></h4>
</center>  

<center>       
<a href="indexg.php">  Home</a></h4>
</center>   </h4>
       <h4 class="card-header bg-dark">  
<center> 
<a href = "EnterTrnyTeamg.php?id=<?php echo $id; ?>">Add Team to Your Tournament</a></h4>
    <h2>
  <?php   echo $tname; ?>
  </h2>
 </head> 
 
 
 
  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-10">
          
 
 
  


</center> 
         </h4>

  </head>

       
  <body>
   

    <!-- Navigation -->
    <center>    <h1> <b>Assign Players to Cards</b>    </h1>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->

     
      <div class="row">
       <div class="col-lg-3 portfolio-item">
          <div class="card h-100">
         
            <div class="card-body">
           
              <p class="card-text">
  
  
    <h2>Round 1.</h2>   
<?php
$sql = "SELECT * FROM `tournament` WHERE id = '$id' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);                                              
} else {
die('Error: '.mysqli_error());
}  
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);
   }
  $sql = "SELECT * FROM tournament WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tname = $row["tournament"];
        $yardage = $row["yardage"];
        $par = $row["par"];
        $course = $row["course"];
        $comments = $row["comments"];
        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
        $btyb = $row["btyb"];
        $date = $row["date"];
        $rounds = $row["rounds"];
    }
   


} else {
    echo "0 results";
    }
     
    ?>


    <?php

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
INNER JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE tournament.id = $id GROUP by trnyteams.tmid";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
  echo "<tr><p>";
	echo '<a href="EnterbyTeamg.php?tmid='.$row['tmid'].'&tid='.$id.'">'.$row['school'].'</a></p>';
	echo "</tr>";
}
?>
            </div>
          </div>
        </div>
        <div class="col-lg-3 portfolio-item">
          <div class="card h-100">
         
            <div class="card-body">
           
              <p class="card-text">
       <h2>Round 2.</h2>          
<?php               
                         
$sql = "SELECT * FROM `tournament` WHERE id = '$id' AND status = 2 LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);           
//print_r ($data);                              
    }                                            
   
   

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
INNER JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE tournament.id = '$id' AND status = 2";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
  echo "<tr><p>";
	echo '<a href="EnterbyTeam2.php?tmid='.$row['tmid'].'&tid='.$id.'">'.$row['school'].'</a></p>';
	echo "</tr>";
}
?>

  
              
              </p>  
            </div>   
          </div>
        </div>
    
            <div class="col-lg-3 portfolio-item">
          <div class="card h-100">
         
            <div class="card-body">
           
              <p class="card-text">
       <h2>Enter 2 Rounds 36 Holes</h2>          
<?php               
                         
$sql = "SELECT * FROM `tournament` WHERE id = '$id' AND status = 2 LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);           
//print_r ($data);                              
    }                                            
   
   

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
INNER JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE tournament.id = '$id' AND status = 2";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
  echo "<tr><p>";
	echo '<a href="EnterbyTeamStateg.php?tmid='.$row['tmid'].'&tid='.$id.'">'.$row['school'].'</a></p>';
	echo "</tr>";
}
?>

  
              
              </p>  
            </div>   
          </div>
        </div>
                <div class="col-lg-3 portfolio-item">
          <div class="card h-100">
         
            <div class="card-body">
           
              <p class="card-text">
       <h2>Round 4.</h2>          
<?php               
                         
$sql = "SELECT * FROM `tournament` WHERE id = '$id' AND status = 2 LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);           
//print_r ($data);                              
    }                                            
   
   

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
INNER JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE tournament.id = '$id' AND status = 2";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
  echo "<tr><p>";
	echo '<a href="EnterbyTeam2.php?tmid='.$row['tmid'].'&tid='.$id.'">'.$row['school'].'</a></p>';
	echo "</tr>";
}
?>

  
              
              </p>  
            </div>   
          </div>
        </div>
      </div>
      <!-- /.row -->



    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

 
 
 


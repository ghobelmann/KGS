<!DOCTYPE html>
<html lang="en">


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



  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>



  </head>
   <?php   
 if(!empty($_GET['id']))
{
$id = $_GET['id'];
} ?>

  <body>

    <!-- Navigation -->
  
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Assign Players to Cards
        <small>by Round</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
                <li class="breadcrumb-item active"> <form action="index.php" class="btn btn-default">
    <input type="submit" value="Home" />
</form>
        <li class="breadcrumb-item active"> <form action="roster6A.php" class="btn btn-default">
    <input type="submit" value="To Add a Player to Roster Click Here" />
</form>
   <?php   
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]' LIMIT 0, 1 "; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
   //   echo $userid;
      
 ?>  </li>
 
   <a href = "EnterTrnyTeam.php?id=<?php echo $id; ?>"><h4> Click Here to Add a Team to your Tournament</h4> </a>
 


   <?php   
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]' LIMIT 0, 1 "; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
   //   echo $userid;
      
 ?>  </li>  <br>
 <h2>Click on Team to Enter Players from that team onto Cards by Round.</h2>
      </ol>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
          
            <div class="card-body">
             
              <p class="card-text">  

 
 
  
  
    <h2>Round 1.</h2>   
<?php
$sql = "SELECT * FROM `tournament` WHERE id = '$id' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);           
//print_r ($data);                              
                                                
} else {
die('Error: '.mysqli_error());
}        
    ?>


    <?php

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
INNER JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE tournament.id = '$id'";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
  echo "<tr><p>";
	echo '<a href="EnterbyTeam.php?tmid='.$row['tmid'].'&tid='.$id.'">'.$row['school'].'</a></p>';
	echo "</tr>";
}
?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
         
            <div class="card-body">
           
              <p class="card-text">
       <h2>Round 2.</h2>          
                <?php
$sql = "SELECT * FROM `tournament` WHERE id = '$id' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))        
{                                               
$data = mysqli_fetch_assoc($results);           
//print_r ($data);                              
                                                
} else {
die('Error: '.mysqli_error());
}        
    ?>


    <?php

$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
INNER JOIN `tournament` ON trnyteams.tid = tournament.id
  WHERE tournament.id = '$id'";
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

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; kansasgolfscores.com 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

 
 
 



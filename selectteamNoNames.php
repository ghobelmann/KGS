

<?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php"); 

 if(!empty($_GET['id']))
{
$id = $_GET['id'];
} 
 ?> 


       
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
    //echo $rounds;


} else {
    echo "0 results";
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
	echo '<a href="EnterbyTeamNoName.php?tmid='.$row['tmid'].'&tid='.$id.'">'.$row['school'].'</a></p>';
	echo "</tr>";
}
?>
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

 
 
 



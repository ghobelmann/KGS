 
 
 
 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">   
    <link href="../css/modern-business.css" rel="stylesheet">  
    
       
   
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  
    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head>



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
    
    
       $query = "SELECT id, date, tournament from tournament WHERE uid = '$userid' GROUP by id ORDER by date desc "; 
	        $result = mysqli_query($conn,$query) or die(mysqli_error());
              while($row = mysqli_fetch_array( $result )) {
              echo '<table class="table">';
  ?>



<button type="button"  <?php echo '<a href="scorecard.php?tid='.$row['id'].'">Enter Scores</font></a>'; ?> class="block">Round 1</button>
<button type="button"  <?php echo '<a href="scorecard2.php?tid='.$row['id'].'">Enter Scores</font></a>'; ?> class="block">Round 2</button>
<button type="button"  <?php echo '<a href="scorecard3.php?tid='.$row['id'].'">Enter Scores</font></a>'; ?> class="block">Round 3</button>
<button type="button"  <?php echo '<a href="scorecard4.php?tid='.$row['id'].'">Enter Scores</font></a>'; ?> class="block">Round 4</button>

                                   <?php
                                   
                                   echo "</table>";
                                   
                                    }; ?>




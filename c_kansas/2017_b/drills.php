<?php
include_once("databaseconnect.php");
include_once("headera.php");
?> 

       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

      
 ?> 
<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
    <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
    <script src="../../global_style/js/bootstrap.min.js"></script>

</head>

<body>                                    
                                    
<h1>Future Site of Coaching resources and Drills.</h1>

<h2>KSHSAA Coaching Clinic - Jared Goerhing - Drills - Drills - Drills</h2>

  </body>
  </html>
                                    
                              
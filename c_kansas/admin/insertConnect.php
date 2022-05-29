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


include_once("databaseconnect.php");
 ?> 


<?php
$data = json_decode(file_get_contents("php://input"));

 if(count($data) > 0)
 {
 $first_name = mysqli_real_escape_string($conn, $data->firstname);
 $last_name = mysqli_real_escape_string($conn, $data->lastname);
   $query = "INSERT INTO users(first_name, last_name) VALUES ('$first_name,' '$last_name')";
 
   if(mysqli_query($conn, $query))
   {
    echo "Player Inserted...";
   }
   else
   {
    echo 'Error Inserting Player';
   }
 }




?>




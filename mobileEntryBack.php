<!DOCTYPE html>
<html lang="en">



<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$trny = 0;
$card = 0;
   include_once("databaseconnect.php");           
       // include_once("mobile_menu.php");   


$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "b_2020Main");
   // echo "Percent Done";
    


        $query = "SELECT scores.hole1, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

   


?>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
     <head>
     
    <title>MobileScoreEntry</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
    <!-- Custom styles for this template  --> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">                     
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
   <link rel="stylesheet" href="includes//bootstrap.min.css">     

  <script src="includes/bootstrap.min.js"></script>

   <script src="includes/jquery.tabledit.min.js"></script>  
  
      <script src="includes//jquery.tabledit.min.js"></script> 
      
<style>
      body {
  font-size: 16px;
}
input[type="text"] {
  font-size: inherit;
}

.holes {
  background-color: green;
  color: white;
  margin: 20px;
  padding: 20px;
} 

     .my-btn, 
    
        .my-btn {
          line-height: 50px;        /* Adjust this so the text is vertically aligned in the middle of the button */
          padding-left: 20px;        /* Can be any value. It's the distance of the button text from left side */
          margin-right: 30px;        /* Make this as wide as the width of the span */
          color: black;                /* The color of the button text */
          text-decoration: none;
        }
        a.my-btn:hover {
          color: black;                /* The color of the button text when hovering */
          font-weight: bold;        /* This example has a bold text when hovering. Can be anything, really */
        }
        .my-btn span {
          margin-right: -30px;         /* Make this as wide as the witdh of the span */    
          width: 30px;                /* The width of the right edge of the button */
        }
 
</style> 
 
</head>
   
  <body>
  

  <?php
//INITIAL PAGE SETTINGS-----------
   $card = 0;
   $tid = 0;


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
//echo $tid;
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}




        


$sql = "SELECT id, tournament from tournament WHERE id = $tid "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
$tournament = $row['tournament']; 
}

 //echo $trny;
?>
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">
<?php 
  echo $tournament;
   echo '<a href="mobileEntryFront.php?tid='.$trny.'&card='.$card.'"><h3>Front Nine--</font></a>';
    echo '<a href="mobileEntryBack.php?tid='.$trny.'&card='.$card.'">Back Nine</h3></font></a>';
 ?> </h3>



   <!-- Hole 1    -->
  <div id="my-slider" class="carousel slide"
  data-interval="false">
   <div class="carousel-inner">
    <div class="carousel-item active" >

  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 10' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 
   
      <table id="editable_table10" 
      class="table table-bordered table-striped text-center">
  
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Enter Score</th>
            <th>Edit Score</th>

          </tr>
        </thead>
        <tbody>  
     <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td contenteditable="true">'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
            </div></div> 
        </tbody>
      </table>
      
    </div>
 

     
   </div></div>    </div></div>
    
    
    
    
    
    

    
    
    
    
       <!-- Hole 11    -->
    
    <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 11' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table11" 
      class="table table-bordered table-striped text-center">
     <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
     <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td contenteditable="true">'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>
    
    
    
    
  
  
  
  
  
  
  
  
  
  
  
  
     <!-- Hole 12    -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 12' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table12" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
       <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td contenteditable="true">'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>        
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      
  
     <!-- Hole 13    -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 13' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table13" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
      <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td contenteditable="true">'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
     <!-- Hole 14    -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 14' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable">  

   
      <table id="editable_table14" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
       <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td contenteditable="true">'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>
    
    
    
    
    
    
    
    
    
    
    
 
  
     <!-- Hole 15    -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 15' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table15" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
           <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
      <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td contenteditable="true">'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>   
    
    
    
    
    
    
    
    
    
    
    
 
  
     <!-- Hole 16    -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 16' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table16" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
           <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
       <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td contenteditable="true">'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>   
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  
     <!-- Hole 17    -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 17' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table17" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
          <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
     <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td  contenteditable="true">'.$row["hole17"].'</td> 
        <td hidden>'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
     <!-- Hole 18   -->  
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="col-12" class="container">  <center>
<h3 class="holes" class="card-header text-center font-weight-bold text-uppercase py-3"> 
 <input class='my-btn' type='button' onclick='location.reload();' value='Click to Enter Hole 18' /></h3>
</center>  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table18" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
           <th class="text-center">Enter Score</th>

          </tr>
        </thead>
        <tbody>
      <?php    
          


        $query = "SELECT scores.*, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td><h4>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td hidden>'.$row["hole1"].'</h4></td> 
        <td hidden>'.$row["hole2"].'</td>  
        <td hidden>'.$row["hole3"].'</td> 
        <td hidden>'.$row["hole4"].'</td> 
        <td hidden>'.$row["hole5"].'</td> 
        <td hidden>'.$row["hole6"].'</td> 
        <td hidden>'.$row["hole7"].'</td> 
        <td hidden>'.$row["hole8"].'</td> 
        <td hidden>'.$row["hole9"].'</td> 
        <td hidden>'.$row["hole10"].'</td>  
        <td hidden>'.$row["hole11"].'</td> 
        <td hidden>'.$row["hole12"].'</td> 
        <td hidden>'.$row["hole13"].'</td> 
        <td hidden>'.$row["hole14"].'</td> 
        <td hidden>'.$row["hole15"].'</td> 
        <td hidden>'.$row["hole16"].'</td> 
        <td hidden>'.$row["hole17"].'</td> 
        <td contenteditable="true">'.$row["hole18"].'</td> 
                   
      </tr>
      ';
     }
     ?>      
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>
    
        
    
      
      <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
       <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
    
        


            <footer> <center> <h4>

           </h4></center</footer>
           
           
  </body>

</html>


<script>  


$(document).ready(function(){  
     $('#editable_table10').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
      },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 

      } 

     });     
});   
</script> 


<script>  


$(document).ready(function(){  
     $('#editable_table11').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
     },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 


<script>  


$(document).ready(function(){  
     $('#editable_table12').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
      },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 
 
 
 
 
<script>  


$(document).ready(function(){  
     $('#editable_table13').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
     },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 




<script>  


$(document).ready(function(){  
     $('#editable_table14').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
     },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 







<script>  


$(document).ready(function(){  
     $('#editable_table15').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
      },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 







<script>  


$(document).ready(function(){  
     $('#editable_table16').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
         editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
    },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 







<script>  


$(document).ready(function(){  
     $('#editable_table17').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
     },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 




<script>  


$(document).ready(function(){  
     $('#editable_table18').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
        editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18']]
     },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });     
});   
</script> 

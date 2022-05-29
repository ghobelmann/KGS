<!DOCTYPE html>
<html lang="en">


<?php
$pid = 0;
$tid = 0;
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 
 

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
 ?>


 

<?php
$trny = 0;
include_once("databaseconnect.php");
    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  
//echo $trny; 
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}




$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_testg");
  
   include_once("mobile_menu.php");   
    
   // echo "Percent Done";
    
    $sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };

$sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };

        $query = "SELECT scores.hole1, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

   


?>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MobileScoreEntry</title>

                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               
    <!-- Custom styles for this template  --> 
     
   <script src="../../includes/jquery.tabledit.min.js"></script>  
       <style>  
     .sticky-image-wrapper{
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .sticky-image-wrapper img{
        display: table;
        position: relative;
        margin: auto;
        width: 100%;
   }
   
   
     hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 4px;
}
    
    </style>

  
           
       
  </head>

  <body>
  
  
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
  <div class="row">

        
<div class="container"> 

  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Hole 1</h3>
  <div class="table-responsive">  
    <div id="editable_table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success">
      <i> <span class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 1</th>
             <th class="text-center">School</th>

          </tr>
        </thead>
        <tbody>
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr> 
      <td>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td class="text-center" contenteditable="true">'.$row["hole1"].'</td> 
        <td>'.$row["abv"].'</td>
                   
      </tr>
      ';
     }
     ?>
        </div>  </div> 
           
        </tbody>
      </table>
               </div>
 
   
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
 
      
  </div>
</div>
<!-- Editable table -->
    </div>
    
    
    
    
    
    
    
    
    
    <div class="carousel-item">
  <div class="row">
    <div class="container"> 
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Hole 2</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-4 mr-2"><a href="#!" class="text-success"><i>
            <class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 2</th>
            <th class="text-center">School</th>

          </tr>
        </thead>
        <tbody>
        <?php    
        
                $query = "SELECT scores.hole2, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

   
   
   
  while($row = mysqli_fetch_array($result))
  {
   echo '
      <tr> 
      <td>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td class="text-center" contenteditable="true">'.$row["hole2"].'</td> 
        <td>'.$row["abv"].'</td>
                   
      </tr>
   ';
  }
  ?>
              
        </tbody>
      </table>
    </div>
 
      
  </div>
</div>
<!-- Editable table -->
    </div></div>
    
    
    
    
    
    
    
        <div class="carousel-item">
  <div class="row">
    <div class="container"> 
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Hole 3</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-4 mr-2"><a href="#!" class="text-success"><i>
            <class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 3</th>
            <th class="text-center">School</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole3, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

   
   
     
  while($row = mysqli_fetch_array($result))
  {
   echo '
      <tr> 
      <td>'.$row["player_1"].'</td> 
       <td hidden>'.$row["id"].'</td> 
        <td class="text-center" contenteditable="true">'.$row["hole3"].'</td> 
        <td>'.$row["abv"].'</td>
                   
      </tr>
   ';
  }
  ?>
              
        </tbody>
      </table>
    </div>
 
      
  </div>
</div>
<!-- Editable table -->
    </div></div>
    
    
    
    
    
    
    
    
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


  </body>

</html>


<script>  


$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'actionMobile.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole1']]
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
 
 

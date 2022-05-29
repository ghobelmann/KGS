<!DOCTYPE html>
<html lang="en">



<?php
$trny = 0;
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
                
    <!-- Custom styles for this template  --> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">                     
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
   <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     

  <script src="../../global_style/js/bootstrap.min.js"></script>

   <script src="../../global_style/vendor/jquery.tabledit.min.js"></script>  
  
      <script src="../../global_style/vendor/jquery.tabledit.min.js"></script>  
    
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

        


$sql = "SELECT id from tournament WHERE id = $tid "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
}

 //echo $trny;
?>













   <!-- Hole 10    -->
    
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" 
  data-interval="false">
   <div class="carousel-inner">
    <div class="carousel-item">

  <div class="row">
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 10</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table10" 
      class="table table-bordered table-striped text-center">
  
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 10</th>

          </tr>
        </thead>
        <tbody>
     <?php    
          


        $query = "SELECT scores.hole10, scores.id, roster.*, team.abv FROM scores 
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
        <td input type="number" min="0" inputmode="numeric" 
        contenteditable="true">'.$row["hole10"].'</td>
                   
      </tr>
      ';
     }
     ?>
            </div></div> 
        </tbody>
      </table>
    </div>
 
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>  
    
    
  
     ?>   
           
    </div></div></div></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       <!-- Hole 11    -->
    
    <div class="carousel-item">
 <div class="row">
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 11</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table11" 
      class="table table-bordered table-striped text-center">
     <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 11</th>

          </tr>
        </thead>
        <tbody>
        <?php    
        
                $query = "SELECT scores.hole11, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true">'.$row["hole11"].'</td> 
       
                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 12</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table12" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 12</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole12, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole12"].'</td>  

                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 13</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table13" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 13</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole13, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole13"].'</td>  

                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 14</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table14" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 14</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole14, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole14"].'</td>  

                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 15</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table15" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 15</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole15, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole15"].'</td>  

                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 16</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table16" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 16</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole16, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole16"].'</td>  

                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 17</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table17" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 17</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole17, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole17"].'</td>  

                   
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
    <div class="col-12" class="container">
<h3  class="card-header text-center font-weight-bold text-uppercase py-3">Hole 18</h3>
  <div class="table-responsive">  
    <div  class="col-6" class="table-editable"> 

   
      <table id="editable_table18" 
      class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Hole 18</th>

          </tr>
        </thead>
        <tbody>
        <?php  
        
                $query = "SELECT scores.hole18, scores.id, roster.*, team.abv FROM scores 
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
        <td class="text-center" contenteditable="true"  >'.$row["hole18"].'</td>  

                   
      </tr>
   ';
  }
  ?>
              
        </tbody></table></div>
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
     
        </div></div></div></div>
    
        
    
    
    
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


<script>  


$(document).ready(function(){  
     $('#editable_table2').Tabledit({
      url:'actionMobile2.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole2']]
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
     $('#editable_table3').Tabledit({
      url:'actionMobile3.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[2, 'hole3']]
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
 
 

                              <?php
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 
 
 ?>
 
 
 
 
 
 
 
          <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-8 mb-4">
        <table border="1">
            <tr><td><a href="index.php">Home</a></td>
                    
               </div>

          </div>
        </div>
        <!-- Content Column -->







<?php
include_once("databaseconnect.php");
    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  
//echo $trny; 
    if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}



     if($perm != '9')
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");

$sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };


$query = "SELECT *, team.abv FROM scores 
  INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE tid = $trny ORDER by school asc";
$result = mysqli_query($connect, $query);  

   
?>

<html>  
 <head>  
          <title>Scorecard</title>  

 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     

  <script src="../../global_style/js/bootstrap.min.js"></script>

   <script src="../../global_style/vendor/jquery.tabledit.min.js"></script>  
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
     
     <div class="sticky-image-wrapper">
       <img src="images/footerLight.png" />
    </div>
    
         
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <h3 align="center"><?php echo $tourney; ?> Scorecard   # <?php echo $card; ?></h3> 
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th><th>ID</th><th>TID</th>
       <th>School</th>
       <th>Card</th> <th>JuniorVarsity (JV)</th><th>Individual (type yes)</th><th>Tie Breaker Place</th><th>DQ/WD</th><th>TeeTime-Hole</th>
       <th>2 Man</th>
       <th>4 Man</th><th>6 Man</th><th>Points</th> <th>Event</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
          <td>'.$row["player_1"].'</td>
       <td>'.$row["id"].'</td>  
         <td>'.$row["tid"].'</td>    
       <td>'.$row["school"].'</td>  
       <td>'.$row["card"].'</td>
        <td>'.$row["jv"].'</td>
         <td>'.$row["noteam"].'</td>
          <td>'.$row["manualscore"].'</td>
           <td>'.$row["dq"].'</td>
            <td>'.$row["teetime"].'</td>
             <td>'.$row["man_2"].'</td>
              <td>'.$row["man_4"].'</td>
              <td>'.$row["man_6"].'</td> 
              <td>'.$row["points"].'</td>  
                <td>'.$row["event"].'</td>                    
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html> 
<script>  


$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'actionPlayer.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[4, 'card'], [5, 'jv'], [6, 'noteam'], [7, 'manualscore'], [8, 'dq'], [9, 'teetime'], [10, 'man_2'], [11, 'man_4'], [12, 'man_6'], [13, 'points'], [14, 'event']]
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
 
 </div></div> 
 <div>
 

</div>
<hr>
   
    
    
    
    
    
    
    

 
 </body></html>
 
 
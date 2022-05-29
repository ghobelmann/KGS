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
    if(!empty($_GET['id']))
{
$trny = $_GET['id'];
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



$query = "SELECT *, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
LEFT JOIN team on scores.tmid = team.tmid 
WHERE event = 'EKL' AND total > '0'
ORDER by total ASC";
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
       <th>ID</th><th>Name</th><th>School</th> <th>Count</th><th>Total Strokes</th><th>Points</th></tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
      <td>'.$row["id"].'</td>    
      <td>'.$row["player_1"].'</td>   
       <td>'.$row["school"].'</td>  
      <td>'.$row["count"].'</td>
            <td>'.$row["total"].'</td> 
       <td>'.$row["points"].'</td>
                     
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
      url:'actionEKL.php',
      columns:{
       identifier:[0, 'id'],
       editable:[[5, 'points']]
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
 
 
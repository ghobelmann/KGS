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
            <tr><td ><a href="index.php">Home</a></td>
                    
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
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}



     if($perm != '9')
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");
  
    include_once("cards_menu.php");   
    
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


$query = "SELECT *, team.abv FROM scores 
  INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE tid = $trny AND card = $card";
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
    <div style="background-color:hsla(9, 10%, 64%, 0.5)"><h1 align="center"><?php echo $tourney; ?> Scorecard   # <?php echo $card; ?></h1>    </div>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>School</th>
       <th>Hole 1</th> 
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
       <td>'.$row["player_1"].'</td>
        <td hidden>'.$row["pid"].'</td>    
       <td>'.$row["abv"].'</td>  
       <td align="center">'.$row["hole1"].'</td>

                          
                            
                           
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
      url:'action.php',
      columns:{
       identifier:[1, 'pid'],
       editable:[[3, 'hole1']]
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

    
    
    

 
 </body></html>
 
 
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
            <tr><td><a href="indexg.php">Home</a></td>
                    
               </div>

          </div>
   
        <!-- Content Column -->







<?php
include_once("dbconnectg.php");
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

$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "g_2020Main");

$sql = "SELECT * FROM tournament";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };


$query = "SELECT * FROM tournament ORDER by id desc";
$result = mysqli_query($connect, $query);  

   
?>

<html>  
 <head>  
          <title>Edit Player</title>  
          
            <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">     
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../includes/jquery.tabledit.min.js"></script> 
   
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
     
    
         
  <div class="col-md-12">  
  
  <p>Status Codes: 
1 = Varsity on a Team,
 2 = Varsity No Team, 
3 = JV, 
4 = C team 
5 = DQ, 
6 = WD
</p>
             
            <div class="table-responsive">  
    <h1 align="center"><font color="white"><?php echo $tourney; ?>  Scorecard   # <?php echo $card; ?></h1> 
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th><th>Status</th><th>Par</th> <th>Rating</th> <th>Date</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
          <td>'.$row["id"].'</td>
             <td>'.$row["status"].'</td>
       <td>'.$row["par"].'</td>  
         <td>'.$row["rating"].'</td>    
       <td>'.$row["date"].'</td>                  
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
      url:'scoring/actionTrny.php',
      columns:{
       identifier:[0, 'id'],
       editable:[[1, 'status'], [2, 'par'], [3, 'rating'], [4, 'date']]
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
 

<hr>
   
    
    
    

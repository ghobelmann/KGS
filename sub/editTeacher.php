<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include_once("db.php");

 
 ?>
 
 
 
 
 
 
 




<?php






$query = "SELECT * FROM personnel ORDER by name asc";
$result = mysqli_query($conn, $query);  

  // echo $trny;
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
  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
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
     
    
         
  <div class="col-md-12">  
  

             
            <div class="table-responsive">  
    <h1 align="center"><font color="black"><?php echo $tourney; ?> </h1> 

 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th><th>ID</th>
       <th>Phone</th> <th>email</th>

      <th>Click to Edit</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '<tr><td>'.$row["name"].'</td>';
      echo '<td>'.$row["id"].'</td>';  
      echo '<td>'.$row["phone"].'</td>';
      echo '<td>'.$row["email"].'</td> ';  
     /* echo '<td>';
      switch($row['division']) {
        case "1": 
          echo "5-7 4 Holes Boys"; 
           break; 
    
          case "2": 
            echo "5-7 9 Holes Boys";
           break; 
     case "3": 
      echo "8-9 Boys";
          break; 
     case '4': 
      echo "10-11 Boys";
          break; 
     case '5': 
      echo "12-13 Boys";
          break; 
      case '6': 
        echo "14-15 Boys";
          break; 
      case '7': 
        echo "16-18 Boys";
            break; 
            case "11": 
                echo "5-7 4 Holes Girls"; 
                 break; 
          
                case "12": 
                  echo "5-7 9 Holes Girls";
                 break; 
           case "13": 
            echo "8-9 Girls";
                break; 
           case '14': 
            echo "10-11 Girls";
                break; 
           case '15': 
            echo "12-13 Girls";
                break; 
            case '16': 
              echo "14-15 Girls";
                break; 
            case '17': 
              echo "16-18 Girls";
                  break; 
       
       */
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
       editable:[ [2, 'card'], [3, 'teetime']]
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
   
    
    
    

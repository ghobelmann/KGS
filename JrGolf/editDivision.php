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
            <td><a href="editPlayer.php?tid=<?php echo $trny; ?>">Edit Player</a></td>   
                    
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





$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "JrGolf");

$sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };


$query = "SELECT * FROM scores 
  INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE tid = $trny ORDER by division asc";
$result = mysqli_query($connect, $query);  

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

    <h4> Divisions 1 = 5-7 4 Holes Boys: 2 = 5-7 9 Holes Boys: 3 = 8-9 Boys: 4 = 10-11 Boys: 5 = 12-13 Boys: 6 = 14-15 Boys: 7 = 16-18 Boys: </h4>
    <h4> Divisions 11 = 5-7 4 Holes Girls: 12 = 5-7 9 Holes Girls: 13 = 8-9 Girls: 14 = 10-11 Girls: 15 = 12-13 Girls: 16 = 14-15 Girls: 17 = 16-18 Girls: </h4>
    <h2>Edit Divisions.</h2>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th><th>ID</th>
       <th>Card</th> <th>TeeTime-Hole</th><th>Division (1-7)</th>
 
      <th>Click to Edit</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '<tr><td>'.$row["player_1"].'</td>';
      echo '<td>'.$row["id"].'</td>';  
      echo '<td>'.$row["card"].'</td>';
      echo '<td>'.$row["teetime"].'</td> ';  
     echo '<td>';
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
        }
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
      url:'actionPlayerDiv.php',
      columns:{
       identifier:[1, 'id'],
       editable:[ [4, 'division']]
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
   
    
    
    

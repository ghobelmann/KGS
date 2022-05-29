 <?php
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 
$round = '1';
?>

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

$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "JrGolf");
  
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
   WHERE tid = $trny AND card = $card AND round = 1";
$result = mysqli_query($connect, $query);  
      
   
?>

<html>  
 <head>  
          <title>Scorecard</title> 
          

              <link rel="stylesheet" href="../includes/bootstrap.min.css" />       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       
        <script src="../includes/jquery.tabledit.js"></script> 
    <style>    
        @media print {
  a[href]:after {
    content: none !important;
  }
}   </style>
    </head> 
    

    <body>  
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <div style="background-color:hsla(9, 10%, 64%, 0.5)">
    <h1 align="center"><?php echo $tourney; ?> Scorecard   # 
    <?php echo $card; ?>  
     </h1> 
    <center> 
  <input class='my-btn' type='button' onclick='location.reload();' value='Calculate Page' />  </h3>
   </center>
  
 </div>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>1</th> <th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
       <th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th> <th>18</th>
      <th>F</th><th>B</th> <th>T</th> <th>Division</th><th>Click Pen to Enter Scores</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
       <td>'.$row["player_1"].'-'.$row["abv"].'</td>
        <td hidden>'.$row["pid"].'</td>     
       <td>'.$row["hole1"].'</td>
        <td>'.$row["hole2"].'</td>
         <td>'.$row["hole3"].'</td>
          <td>'.$row["hole4"].'</td>
           <td>'.$row["hole5"].'</td>
            <td>'.$row["hole6"].'</td>
             <td>'.$row["hole7"].'</td>
              <td>'.$row["hole8"].'</td>
               <td>'.$row["hole9"].'</td>
                <td>'.$row["hole10"].'</td>
                 <td>'.$row["hole11"].'</td>
                  <td>'.$row["hole12"].'</td>
                   <td>'.$row["hole13"].'</td>
                    <td>'.$row["hole14"].'</td>
                     <td>'.$row["hole15"].'</td>
                      <td>'.$row["hole16"].'</td>
                       <td>'.$row["hole17"].'</td>
                        <td>'.$row["hole18"].'</td>  
                        <td hidden>'.$row["tid"].'</td>
                         <td>'.$row["front"].'</td>
                          <td>'.$row["back"].'</td>
                           <td>'.$row["total"].'</td>  
                              <td>'.$row["division"].'</td>
                          
                            
                           
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
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18'], [20, 'tid'], [24, 'division']]
      },
      	autoFocus: true,
      restoreButton:true, 
      autoRefresh: true,
         deleteButton: false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      
            {
        javascript:location.reload(true) 
      }  
        
      

     });
      
});  
 </script>  

 
 

 <!--<div>
 <h2>
 Divisions:<br>
1 = 5-7 4 Hole__
2 = 5-7 9 Hole__
3 = 8-9__
4 = 10-11__
5 = 12-13__
6 = 14-15__
7 = 16-18.</h2>
</div>-->
<hr>



 </body></html>
 
 
 
 <?php
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 


$round = '1';

 
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
   WHERE tid = $trny AND card = $card AND round = 2";
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
        width: 90%;
    }

    .sticky-image-wrapper img{
        display: table;
        position: relative;
        margin: auto;
        width: 90%;
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
                 body {
    background-color: #f0e2bd;
}


    </style>

        
    </head> 
    

    <body>  
   <!--  
     <div class="sticky-image-wrapper">
       <img src="images/footerLight.png" />
    </div>
    
    -->
    
         
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <div style="background-color:hsla(9, 10%, 64%, 0.5)"><h1 align="center"><?php echo $tourney; ?> Scorecard   # <?php echo $card; ?></h1>    </div>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>1</th> <th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
       <th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th> <th>18</th>  
      <th>F</th><th>B</th>  <th>Tot</th><th>DQ/WD</th><th>Click Pen to Enter Scores</th>
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
                              <td>'.$row["dq"].'</td>
                          
                            
                           
                             
                          
                            
                           
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
      url:'action2.php',
      columns:{
       identifier:[1, 'pid'],
            editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18'], [20, 'tid'], [24, 'dq']]
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
      <div class="row">

        <div class="col-lg-3 col-sm-5 mb-5">
         
     <?php
    
     /*
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `dq` != 'DQ'   AND `dq` != 'WD' AND
   total > 0 AND round ='1'
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo '<td colspan="3" align="center"><h3>Round 1</h3>';
echo "<tr><th><center> Place </th><th><center>  Name </th> <th><center> Team</th><b><th><center> Front</th> 
</b><b><th><center>Back</th><th><center> Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
      */ 
?>        
        </div>
        
        
                <div class="col-lg-3 col-sm-4 mb-4">
         
     <?php
    
        /*
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `dq` != 'DQ'   AND `dq` != 'WD' AND
   total > 0 AND round ='2'
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo '<td colspan="3" align="center"><h3>Round 2</h3>';
echo "<tr><th><center> Place </th><th><center>  Name </th> <th><center> Team</th><b><th><center> Front</th> 
</b><b><th><center>Back</th><th><center> Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
        */
?>        
        </div>


                        <div class="col-lg-3 col-sm-4 mb-4">
         
     <?php
    
     /*
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT count(scores.pid) as count, scores.id, scores.pid, scores.tmid, scores.tid, sum(scores.front) as front, 
    sum(scores.back) as back, sum(scores.total) as total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   
   WHERE scores.tid = $tid AND `dq` != 'DQ'   AND `dq` != 'WD' AND
   total > 0
   GROUP by scores.pid
  ORDER BY count desc, `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo '<td colspan="3" align="center"><h3>Total</h3>';
echo "<tr><th><center> Place </th><th><center>  Name </th> <th><center> Team</th><b><th><center> Front</th> 
</b><b><th><center>Back</th><th><center> Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
     */  
?>        
        </div>
        
        
        
        


</div>
</div>
  
      </div>
 
 
 

    
    
    
    
    
    
    
    
    

 
 </body></html>
 
 
<?php
  if(!empty($_GET['tid']))
    {
      $trny = $_GET['tid'];
    } 
 ?>
 
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



    $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "b_2020Main");

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
        <title>Edit Players</title>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="High School, Golf, Scores, Tournaments">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css"> 
       
        <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../includes/jquery.tabledit.min.js"></script> 
        
    <style>
table {
  border-collapse: collapse;
}
th,
td {
  padding: 1rem;
}
thead,
tfoot {
  background: #eee;
}
thead {
  position: sticky;
  top: 0;
  border-bottom: 2px solid #ccc;
}
tfoot {
  position: sticky;
  bottom: 0;
  border-top: 2px solid #ccc;
}

body {
  font: 110%/1.4 system-ui;
  margin: 0;
  padding: 10rem 2rem 50rem;
}
    </style>
</head> 
    
<body>  


<div class="row">
  <!-- Editable Table Div-->
      <div class="col-lg-7 mb-4">   
      <div>  
        <div class="table-responsive"; style="height:550px; overflow:auto;">  
          <h1><color="black"><?php echo $tourney; ?></h1> 
      
        <table id="editable_table" class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>PID</th><th>Name</th>
            <th>School</th>
            <th>Card</th> <th>Tie Breaker Place</th><th>Status</th><th>TeeTime-Hole</th>
            <th>2-4-6 Man</th>
            <th>Click to Edit</th>
          </tr>
        </thead>
        <tbody>    <hr> 
        <?php    
        while($row = mysqli_fetch_array($result))
        {
          echo '
          <tr>  
            <td>'.$row["pid"].'</td>
            <td hidden>'.$row["id"].'</td>  
            <td>'.$row["player_1"].'</td>    
            <td>'.$row["school"].'</td>  
            <td>'.$row["card"].'</td>
            <td>'.$row["manualscore"].'</td>
            <td>'.$row["status"].'</td>
            <td>'.$row["teetime"].'</td>
            <td>'.$row["man"].'</td>                  
          </tr>
          ';
        }
        ?>
        </tbody>
        </table>
      </div> 
    </div>       
  </div>

        <!-- Content Column -->
  <div class="col-lg-5 mb-4">
    <div style="height:550px; overflow:auto;">
   
    <?php



$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid, team.tmid, 
team.abv, roster.pid, roster.grade, roster.player_1 
FROM `trnyteams` 
INNER JOIN `team` ON trnyteams.tmid = team.tmid 
INNER JOIN `roster` ON trnyteams.tmid = roster.tmid 
INNER JOIN `tournament` ON trnyteams.tid = tournament.id 
WHERE tournament.id = '$trny' AND roster.grade >= '2022'
ORDER by school ASC";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["abv"];
    $pid = $row["pid"];
    $player_1 = $row["player_1"];
    
 echo "<table width='400px' border='1'>";
 //echo "<thead><tr><th>School</th><th>Player ID</th><th>PlayerName</th></tr></thead>";
 echo "<tbody><td> $school </td><td> $pid </td><td> $player_1</td></tbody>"; 
  echo "</table>";
}
?>
            </div>
          </div>
        </div>    
      </div>
    </div>

 </body>  
</html> 
<script>  


$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'scoring/actionPlayer.php',
      columns:{
       identifier:[1, 'id'],
       editable:[[0, 'pid'], [4, 'card'], [5, 'manualscore'], [6, 'status'], [7, 'teetime'], [8, 'man']]
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
   
    
    
    

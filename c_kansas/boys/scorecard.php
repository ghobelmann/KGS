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
            <tr><td ><a href="../../index.php">Home</a></td>
                    
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

$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_test");
  
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

 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     

  <script src="../../includes/bootstrap.min.js"></script>

   <script src="../../includes/jquery.tabledit.min.js"></script>  
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
    background-color: #ccd9cf;
}

</style> 

    
    </style>

    </head> 
    

    <body>  
  
   <!--  
     <div class="sticky-image-wrapper">
       <img src="images/footerLight.png" />
    </div>
 -->   
     <form id="add-trny-form">     
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <div style="background-color:hsla(9, 10%, 64%, 0.5)"><h1 align="center"><?php echo $tourney; ?> Scorecard   # <?php echo $card; ?></h1>    </div>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>1</th> <th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
       <th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th> <th>18</th>
      <th>F</th><th>B</th> <th>T</th> <th>Status</th><th>Click Pen to Enter Scores</th>
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
                              <td>'.$row["status"].'</td>
                          
                            
                           
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
       editable:[[2, 'hole1'], [3, 'hole2'], [4, 'hole3'], [5, 'hole4'], [6, 'hole5'], [7, 'hole6'], [8, 'hole7'], [9, 'hole8'], [10, 'hole9'], [11, 'hole10'], [12, 'hole11'], [13, 'hole12'], [14, 'hole13'], [15, 'hole14'], [16, 'hole15'], [17, 'hole16'], [18, 'hole17'], [19, 'hole18'], [20, 'tid'], [24, 'status']]
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
 
   
 
 

 <div>
 
   <h4>Status Codes: 1 = Varsity on a Team, 2 = Varsity Individual, 3 = JV, 4 = C team 
   5 = DQ, 6 = WD</h4>
</div>
<hr>


<html>
    <head>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-firestore.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

    </head>
    <body>
        <div class="content">

               TourneyName <input type="text" name="trnyName" 
                 value="">
               Course  <input type="text" name="trnyCourse" 
                value="">
               Date <input type="text" name="trnyDate" 
                 value="">
                <button></button>
            </form>

          <!--  <ul id="trny-list"></ul> -->

        </div>

        <script>
            // Initialize Firebase
const config = {
  apiKey: "AIzaSyBRVds7BcSD9SjiArzHMckkddB8525Mm0M",
  authDomain: "leaderboard-58001.firebaseapp.com",
  databaseURL: "https://leaderboard-58001.firebaseio.com",
  projectId: "leaderboard-58001",
  storageBucket: "leaderboard-58001.appspot.com",
  messagingSenderId: "397076014204",
  appId: "1:397076014204:web:2cc69833c6ded4f60515f9",
  measurementId: "G-BE24RVGM5Y"
};
            firebase.initializeApp(config);
            const db = firebase.firestore();
            db.settings({ timestampsInSnapshots: true }); 
        </script>
        <script src="app.js"></script>
    </body>
</html>
 

<?php
    if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}  


$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");


$sql = "SELECT (stats.id) as id, roster.player_1 FROM stats 
INNER JOIN tournament on stats.tid = tournament.id
LEFT JOIN roster on stats.tmid = roster.tmid
WHERE stats.pid = $pid GROUP by stats.pid";
$result = mysqli_query($connect, $sql);
                  while($row = $result->fetch_assoc()) {
       $name = $row['player_1'];
                             };










$query = "SELECT *, (stats.id) as id, roster.player_1 FROM stats 
INNER JOIN tournament on stats.tid = tournament.id
LEFT JOIN roster on stats.tmid = roster.tmid
WHERE stats.pid = $pid";
$result = mysqli_query($connect, $query);

?>
<html>  
 <head>  
          <title>EditStats</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="../../global_style/js/jquery.tabledit.min.js"></script>  
    
    
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.kansasgolfscores.com">KansasGolfScores.com</a>
	    <?php echo $user; ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>

		  
		  



  
                
  		<ul class="nav navbar-nav navbar-right">
        <li><a href="login-system/login.php"> Login</a></li>
        <li><a href="login-system/logout.php">Log Out</a></li>
      </ul>

          
      

     
	
    </div>
  </div>
</nav>
    
       <style>  
    body 

     
     
     hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 4px;
}

 .fix{
    position:fixed;
    bottom:0px;
    width:100%;
    }

    
    </style>
    
    
    
    
    
    </head>  
    <body>  
  <div class="mt-4 mb-3">  
  
            <div class="table-responsive">  
           <h2><CENTER><?php echo $name; ?></h2>
    <h3 align="center">Edit Stats  </h3><br />   
   
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
    <th>Tournament</th>
       <th>Total Fwys</th> <th>Fwys Hit</th><th>GIR</th><th>Total Putts</th><th>3 Putts</th><th>Up Down</th><th>Sand Save</th><th>Penalty</th><th>Ace</th><th>Dbl Eagle</th>
       <th>Eagle</th><th>Bird</th><th>Par</th><th>Bog</th><th>Dbl Bogey</th><th>Triple Bog</th><th>Other</th><th>Place</th> <th>Score</th><th>Inlude Stats</th>
    
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
      <td hidden>'.$row["id"].'</td> 
       <td>'.$row["tournament"].'</td>
        <td>'.$row["tfairways"].'</td>
        <td>'.$row["fairways"].'</td>
         <td>'.$row["gir"].'</td>
          <td>'.$row["putts"].'</td>
           <td>'.$row["Tputts"].'</td>
            <td>'.$row["updown"].'</td>
             <td>'.$row["ss"].'</td>
              <td>'.$row["pen"].'</td>
               <td>'.$row["ace"].'</td>
               <td>'.$row["dbleagle"].'</td>
                <td>'.$row["eagle"].'</td>
                 <td>'.$row["birdie"].'</td>
                  <td>'.$row["par1"].'</td>
                   <td>'.$row["bogie"].'</td>
                    <td>'.$row["doubleb"].'</td>
                     <td>'.$row["triple"].'</td>
                      <td>'.$row["other"].'</td>
                       <td>'.$row["place"].'</td>
                        <td>'.$row["score"].'</td>
                        <td>'.$row["include"].'</td>
                        
                        <td hidden>'.$row["tid"].'</td>                     
      </tr>';}  ?>
     </tbody>
    </table>
   </div>  
  </div>  
  
      
 </body>  
</html> 
<script>  


$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'actionStats.php',
      columns:{
       identifier:[0, 'id'],
       editable:[[2, 'tfairways'], [3, 'fairways'], [4,'gir'], [5, 'putts'], 
       [6, 'Tputts'], [7, 'updown'], [8, 'ss'], [9, 'pen'], [10, 'ace'], 
       [11, 'dbleagle'], [12, 'eagle'], [13, 'birdie'], [14, 'par1'], [15, 'bogie'], 
       [16, 'doubleb'], [17, 'triple'], [18, 'other'], [19, 'place'], 
       [20, 'score'], [21, 'include']]
      },
      	autoFocus: true,
      restoreButton:true, 
      autoRefresh: true,
         deleteButton: true,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      }  
      

     });
      
});  
 </script>    
 
 <img src="images/footer.png" class="fix"/>
 
 </BODY></HTML>
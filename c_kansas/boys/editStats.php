<?php
    if(!empty($_GET['pid']))
{
$id = $_GET['pid'];
}  
//echo $id;
$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");


$sql = "SELECT stats.id, stats.pid, roster.pid, roster.player_1 FROM stats 
INNER JOIN tournament on stats.tid = tournament.id
LEFT JOIN roster on stats.pid = roster.pid
WHERE stats.pid = '$id'";
$result = mysqli_query($connect, $sql);
                  while($row = $result->fetch_assoc()) {
       $name = $row['player_1'];
                             };










$query = "SELECT *, stats.id, roster.player_1, tournament.id FROM stats 
INNER JOIN tournament on stats.tid = tournament.id
LEFT JOIN roster on stats.tmid = roster.tmid
WHERE stats.pid = $id AND tournament.id > '321'
 GROUP by stats.tid ORDER by stats.tid desc";
$result = mysqli_query($connect, $query);

?>
<html>  
 <head>  
          <title>EditStats</title>  
<script src="../../global_style/vendor/jquery/jquery.min.js"></script>

              <link rel="stylesheet" href="../../global_style/vendor/css/bootstrap.min.css" />  
          <script src="../../global_style/vendor/js/bootstrap.min.js"></script>            
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
	    <?php echo $name; ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="http://www.kansasgolfscores.com/p_kansas/Boys_2018/playerStats.php?pid=<?php echo $pid; ?>">Home</a></li>
        
          

		  
		  



  
                
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
    <h3 align="center">Edit Tournament Stats  </h3><br />   
   
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
    <th>Tournament</th>
       <th>Total Fwys</th> <th>Fwys Hit</th><th>GIR</th><th>Total Putts</th>
       <th>3 Putts</th><th>Up Down Chance</th><th>Up Down</th><th>Sand Save Chance</th><th>Sand Save</th><th>Penalty</th><th>Ace</th><th>Dbl Eagle</th>
       <th>Eagle</th><th>Bird</th><th>Par</th><th>Bog</th><th>Dbl Bogey</th>
       <th>Triple Bog</th><th>Other</th><th>Place</th> <th>Score</th><th>Inlude In Stats Average (Yes or No)</th>
       <th>Click Pencil to Edit Stats</th>
    
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
        <td align="center">'.$row["tfairways"].'</td>
        <td align="center">'.$row["fairways"].'</td>
         <td align="center">'.$row["gir"].'</td>
          <td align="center">'.$row["putts"].'</td>
           <td align="center">'.$row["Tputts"].'</td>
            <td align="center">'.$row["updownc"].'</td>
            <td align="center">'.$row["updown"].'</td>
             <td align="center">'.$row["ssc"].'</td>
             <td align="center">'.$row["ss"].'</td>
              <td align="center">'.$row["pen"].'</td>
               <td align="center">'.$row["ace"].'</td>
               <td align="center">'.$row["dbleagle"].'</td>
                <td align="center">'.$row["eagle"].'</td>
                 <td align="center">'.$row["birdie"].'</td>
                  <td align="center">'.$row["par1"].'</td>
                   <td align="center">'.$row["bogie"].'</td>
                    <td align="center">'.$row["doubleb"].'</td>
                     <td align="center">'.$row["triple"].'</td>
                      <td align="center">'.$row["other"].'</td>
                       <td align="center">'.$row["place"].'</td>
                        <td align="center">'.$row["score"].'</td>
                        <td align="center">'.$row["include"].'</td>
                        
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
       [6, 'Tputts'], [7, 'updownc'], [8, 'updown'], [9, 'ssc'], [10, 'ss'], [11, 'pen'], [12, 'ace'], 
       [13, 'dbleagle'], [14, 'eagle'], [15, 'birdie'], [16, 'par1'], [17, 'bogie'], 
       [18, 'doubleb'], [19, 'triple'], [20, 'other'], [21, 'place'], 
       [22, 'score'], [23, 'include']]
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
 
 <img src="images/footerLight.png" class="fix"/>
 
 </BODY></HTML>    
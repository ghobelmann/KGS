          <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head>





 <?php
 //authentication for coaches to get to their pages, not for public pages.

include_once("databaseconnect.php");
 ?> 
 
 <body>	 
 
      <table>

  <tr>
    <td>
    
    
    
      <?php
$query = "SELECT byTeam FROM columns WHERE id = '1' LIMIT 1"; 
			

	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
$c = mysqli_fetch_row( $result )  

?>
      
    
    
    
    
    
    
    
    
    
 
    <?php    
    
         

  if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
  $table_size = $c[0];;   
 // echo $table_size;  

//$categories= array();
                 
$sql= "SELECT s.tmid, s.pid, t.tmid, t.school, r.pid, r.player_1,
s.front, s.back, s.total
 FROM `scores` s
INNER JOIN roster r ON s.tmid = r.tmid 
LEFT JOIN team t ON s.tmid = t.tmid
WHERE tid = '$tid' GROUP by r.pid";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
//var_dump($result);        
while($row = mysqli_fetch_assoc($result)){
                                
//var_dump($row);
    $player_1[$row['school']][] = $row['player_1'].'<center>'.'<font size="2">'.'<table>'.'<td>'.'<tr>'.'  ';

    $player_1[$row['school']][] = $row['front'].'<font size="2">'.' - ';

    $player_1[$row['school']][] = $row['back'].'<font size="2">'.' -';

    $player_1[$row['school']][] = $row['total'].'<font size="2">'.'</tr>'.'</td>'.'<table>';
    
      
}     
      
         
    
// any type of outout you like
                    while($table_i < $table_size)      
foreach($player_1 as $key => $category){
                                          
    echo '<strong>'.'<center>'.'<font size="2">';
            
    echo $key.'<center>'.'<font size="2">'.'<br>';
                        
    foreach($category as $item ){ 
                    
        echo $item;
                    
        
               
}
         $table_i++;      
    echo '<br>';
            
   echo 'Team Total______________________';
                
}        
         
         
 // echo $tournament;  
   echo '</td>';
$table_i = 0;      
        
?></td>
 
</table> 
 




</body></html>
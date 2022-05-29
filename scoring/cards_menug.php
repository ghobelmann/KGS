                                    <html>
      
<head>
           <link href="../includes/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="../includes/w3.css">    
  
      
<h4 class="card-header bg-dark">  
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
<style>  
  body {
    background-color: #ccd9cf;
        }
</style> </head>
<body>
 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("../dbconnectg.php");
//include_once("analyticstracking.php"); 

 ?> 
<?php
//INITIAL PAGE SETTINGS-----------
   $card = 0;


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
//echo $tid;
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}
    if(!empty($_GET['round']))
{
$round = $_GET['round'];
}
 
 
        


$sql = "SELECT * from tournament WHERE id = $tid "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
}

 //echo $trny;
?>


<?php
//Submit Query to MySql Database


$sql2 = "SELECT count(hole1 and hole2 and hole3 and hole4 and hole5 and 
hole6 and hole7 and hole8 and hole9 and hole10 and 
hole11 and hole12 and hole13 and hole14 and hole15 and hole16 and 
hole17 and hole18) as count 
FROM scores 
WHERE card = $card AND scores.tid = '$tid' AND hole1 = 0 or hole2 = 0 or 
hole3 = 0 or hole4 = 0 or hole5 = 0 or hole6 = 0 or 
hole7 = 0 or hole8 = 0 or hole9 = 0 or 
hole10 = 0 or hole11 = 0 or hole12 = 0 or hole13 = 0 or 
hole14 = 0 or hole15 = 0 or hole16 = 0 or hole17 = 0 or 
hole18 = 0";
$result = mysqli_query($conn,$sql2)
or die ('Error in Query Try Again count:--' . mysqli_error());
        while($row = mysqli_fetch_array( $result ))
        $count = $row['count'];
       
        

$sql = "SELECT scores.card, scores.tid, scores.uid
FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$tid' = tournament.id 
AND  round ='1'  AND
scores.tid = '$tid' 
GROUP by scores.card 
ORDER by scores.card ASC";


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again 2:--' . mysqli_error());
//Print table to the web page

echo "<table width='100%' border='2'>";
echo '<tr><th colspan="30" bgcolor=#000000><center><h2><font font color ="white">Round 1 Score Cards.</h2></center></th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	           
      
    //echo $count;
    if ( $count < "1") 
   
    {  
    echo '<td bgcolor=green><center> <h4>';
   	echo '<a href="scorecardg.php?tid='.$row['tid'].'&card='.$row['card'].'&round=1">
       <font color="white">'.$row['card'].'</font></a>';
     //echo $count;
} else   
    
    {
     echo '<td bgcolor=red><center> <h4>';
   	echo '<a href="scorecardg.php?tid='.$row['tid'].'&card='.$row['card'].'&round=1">
       <font color="white">'.$row['card'].'</font></a>';
     //echo $count;
}
 // echo $count;
	echo "</td>"; 
	
} 
echo "</table>";



 ?>
 
 <?php
//Submit Query to MySql Database
    

$sql = "SELECT scores.card, scores.tid, scores.uid
FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$tid' = tournament.id 
AND  round = '2' AND
scores.tid = '$tid' 
GROUP by scores.card 
ORDER by scores.card ASC";

 
$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again 1:--' . mysqli_error());
//Print table to the web page
        
echo "<table width='100%' border='2'>";
echo '<tr><th colspan="30" bgcolor=#000000><center><h2><font font color ="white">Round 2 Score Cards.</h2></center></th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<td bgcolor=#f0e2bd><center> <h4>";
	echo '<a href="scorecard2g.php?tid='.$row['tid'].'&card='.$row['card'].'&round=2">'.$row['card'].'</font></a>';
	echo "</td>"; 
	
}       
echo "</table>";



 ?>

      </div>
      </div>
      </body></html>
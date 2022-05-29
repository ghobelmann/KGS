                        <html>
       <head>
       


</head>
 </html>
 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 

 ?> 
    <div class="col-lg-12 portfolio-item">
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

        


$sql = "SELECT id from tournament WHERE id = $tid "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
}

 //echo $trny;
?>


<?php
//Submit Query to MySql Database


$sql = "SELECT scores.card, scores.tid, scores.uid
FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$tid' = tournament.id 
AND 
scores.tid = '$tid' 
GROUP by scores.card 
ORDER by scores.card ASC";


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again 1:--' . mysqli_error());
//Print table to the web page

echo "<table width='100%' border='2'>";
echo '<tr><th colspan="30">Cards: Click on the card you want to edit.</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<td bgcolor=#72f4bd><center> <h4>";
	echo '<a href="scorecard9.php?tid='.$row['tid'].'&card='.$row['card'].'">'.$row['card'].'</font></a>';
	echo "</td>"; 
	
} 
echo "</table>";



 ?>

      </div>
      </div>
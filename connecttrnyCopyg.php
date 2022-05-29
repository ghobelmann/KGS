                       




  
  
  

<?php 


  ini_set('display_errors', 1); 
  ini_set('display_startup_errors', 1); 
  error_reporting(E_ALL);


include_once("dbconnectg.php");
 ?> 
 
  <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid; 
      
 
 ?>    
 
 
 
        <?php
$sql="SELECT max(id) as id, date, uid FROM tournament 
WHERE  `uid` = '$userid'";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $trnysetup=$row["id"];
    echo $trnysetup;
}
?>

<HTML>
<HEAD>
  <META HTTP-EQUIV="Refresh" CONTENT="5;URL=indexg.php">


</HEAD>

<center>
  <H1>! Tournament Added - Great Job!!!</H1>
  <h2>You can now enter the golfers names and what scorecards they are on</h2><br>
  
  <h2>Click on Assign to Card to enter by Team or by Card.</h2> <br>
  
  
    <h2>This page will automatically redirect, please do not click refresh.</h2> <br>
</center>



</BODY>
</HTML>




<?php 







$sql="INSERT INTO tournament (state, tournament, status, event, date,
par, yardage, rounds, 
 uid, comments, btyb, notes, course, slope, rating, leaderboard,
 h1, h2, h3, h4, h5, h6, h7, h8, h9, 
h10, h11, h12, h13, h14, h15, h16, h17, h18,
y1, y2, y3, y4, y5, y6, y7, y8, y9, 
y10, y11, y12, y13, y14, y15, y16, y17, y18)
VALUES
('$_POST[state]', '$_POST[tournament]', '$_POST[status]', '$_POST[event]', 
'$_POST[date]','$_POST[par]','$_POST[yardage]','$_POST[rounds]',
'$userid','$_POST[comments]','$_POST[btyb]',
'$_POST[notes]','$_POST[course]',
'$_POST[slope]','$_POST[rating]','$_POST[leaderboard]',
'$_POST[h1]','$_POST[h2]','$_POST[h3]',
'$_POST[h4]','$_POST[h5]','$_POST[h6]','$_POST[h7]','$_POST[h8]','$_POST[h9]',
'$_POST[h10]','$_POST[h11]','$_POST[h12]','$_POST[h13]','$_POST[h14]',
'$_POST[h15]','$_POST[h16]','$_POST[h17]','$_POST[h18]',
'$_POST[y1]','$_POST[y2]','$_POST[y3]',
'$_POST[y4]','$_POST[y5]','$_POST[y6]','$_POST[y7]','$_POST[y8]','$_POST[y9]',
'$_POST[y10]','$_POST[y11]','$_POST[y12]','$_POST[y13]','$_POST[y14]',
'$_POST[y15]','$_POST[y16]','$_POST[y17]','$_POST[y18]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error:  Tournament not entered, You messed something up :)' . mysqli_error($conn));
  }

?>

     
                           
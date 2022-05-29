                      <?php     
                    error_reporting(E_ALL);

include_once("dbconnectg.php");
 ?>  
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">



</head>

<TITLE>Copy Tournament</TITLE>




<?php 

if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}
echo $tid;
$copy = 1;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  
  


$sql = "SELECT * from tournament where id ='$tid' ";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;


$sql = "INSERT INTO tournament (state, tournament, status, complete, date, par, yardage, rounds, uid, 
comments, btyb, notes, course, slope, rating, leaderboard,
image, 
h1, h2, h3, h4, h5, h6, h7, h8, h9, h10, h11, h12, h13, h14, h15, h16, h17, h18, 
y1, y2, y3, y4, y5, y6, y7, y8, y9, y10, y11, y12, 
y13, y14, y15, y16, y17, y18) 
SELECT state, concat('Copy - ', tournament), '$copy', '1', date, par, yardage, rounds, uid, 
comments, btyb, notes, course, slope, rating, leaderboard,
image, 
h1, h2, h3, h4, h5, h6, h7, h8, h9, h10, h11, h12, h13, h14, h15, h16, h17, h18, 
y1, y2, y3, y4, y5, y6, y7, y8, y9, y10, y11, y12, 
y13, y14, y15, y16, y17, y18
FROM tournament WHERE id = $tid";    

if ($conn->query($sql) === TRUE) {



    echo "<h1>Tournament Copied Successfully</h1>";   
    
        echo "<h1>Now Click on Edit Tournament to Renamd</h1>";  
            echo "<h1>And to Change the Date.</h1>";  


  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}         
            
            

      }    

?> 
           <?php         
    $sql = "SELECT max(id) as id FROM tournament"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$max_id = $row['id']; 
            }
      echo $max_id;
      
 ?>  
 
 
<?php 


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  
  


$sql = "SELECT * from trnyteams where id ='$tid' ";
	while($row = mysqli_fetch_array( $result )) {
			$tmid = $row['tmid']; 
            }
     echo $tmid;

$sql = "INSERT INTO trnyteams (tmid, tid) 
SELECT $tmid, $max_id
FROM trnyteams WHERE id = $tid";    

if ($conn->query($sql) === TRUE) {



    echo "<h1>Tournament Copied Successfully</h1>";   
    


  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}         
            
            

        

?>   



            
<meta http-equiv="Refresh" content="2; url=indexg.php">




      </BODY>
</HTML>


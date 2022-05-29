sl           <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 

<?php

//include_once("common.php");
include_once("headera.php");
include_once("databaseconnect.php");
?>

</head>
<center>
<body>
 
       <table style="width:auto" align="center" border="1">
    

  <tr>
 
  </tr>

</table>
     

         
              
     
<?php

if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Submit Query to MySql Database
$sql = "SELECT * from tournament
ORDER by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//Print table to the web page
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th><center>ID</center></th><th><center>Tournament</center></th> 
<th><center>Date</center></th>
<th><center>Par</center></th><th><center>Yardage</center></th>
<th><center>UID</center></th><th>Course</th>
<th>Slope</th><th>Rating</th><th>JV</th><th>Leaderboard Length</th><th># of Holes</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
 while($row = $result->fetch_assoc()) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="edittrny.php?id='.$row['id'].'">'.$row['id'].'</a>';
	echo "</td><td><center>"; 
	echo $row['tournament'];
	echo "</td><td><center>";  
    echo $row['date'];
	echo "</td><td><center>"; 
        echo $row['par'];
	echo "</td><td><center>"; 
        echo $row['yardage'];
	echo "</td><td><center>"; 
        echo $row['uid'];
	echo "</td><td><center>"; 
        echo $row['course'];
	echo "</td><td><center>"; 
        echo $row['slope'];
	echo "</td><td><center>"; 
            echo $row['rating'];
	echo "</td><td><center>"; 
            echo $row['non_varsity'];
	echo "</td><td><center>"; 
            echo $row['leaderboard'];
            	echo "</td><td><center>"; 
            echo $row['number_holes'];
	echo "</center></td>"; 	 
	
} echo "</table>";
 echo "</div>";
} 
 else {
    echo "0 results";
}



?>
	</center>

  </body>


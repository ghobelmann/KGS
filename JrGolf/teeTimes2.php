<!DOCTYPE html>
    <html>
      <head>
        <title>Tee Times</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../includes/bootstrap.min.css" rel="stylesheet" media="screen">
      </head>
      <body>
    
    </html>

 <?php
 
 if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}
//echo $tid;

 //authentication for coaches to get to their pages, not for public pages.


include_once("databaseconnect.php");
 ?> 
 
<div class="container">
  <div class="row">


    <div class="col-sm-6 col-m-6  col-l-6"> 
    
      <h3>Sorted By Tee Times</h3>

<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.status, scores.teetime, scores.division,
roster.pid, roster.player_1, team.school, team.abv from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tid' order by card asc"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table  width='100%'>";
echo "<tr> <th align=left>Player</th> <th align=left>Division</th><th align=left>Card</th><th align=left>Time/Hole</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  echo $row['player_1'];
	echo "</td>"; 
	echo '<td>';
      switch($row['division']) {
        case "1": 
          echo "5-7 4 Holes Boys"; 
           break; 
    
          case "2": 
            echo "5-7 9 Holes Boys";
           break; 
     case "3": 
      echo "8-9 Boys";
          break; 
     case '4': 
      echo "10-11 Boys";
          break; 
     case '5': 
      echo "12-13 Boys";
          break; 
      case '6': 
        echo "14-15 Boys";
          break; 
      case '7': 
        echo "16-18 Boys";
            break; 
            case "11": 
                echo "5-7 4 Holes Girls"; 
                 break; 
          
                case "12": 
                  echo "5-7 9 Holes Girls";
                 break; 
           case "13": 
            echo "8-9 Girls";
                break; 
           case '14': 
            echo "10-11 Girls";
                break; 
           case '15': 
            echo "12-13 Girls";
                break; 
            case '16': 
              echo "14-15 Girls";
                break; 
            case '17': 
              echo "16-18 Girls";
                  break; 
        }
      
 
  echo "</td><td>";
	echo $row['card'];
  echo "</td><td>";
	echo $row['teetime'];
	echo "</td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>


  
  <div class="col-sm-6 col-m-6  col-l-6"> 
    
    <h3>Sorted By Name</h3>

<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.status, scores.teetime, scores.division,
roster.pid, roster.player_1, team.school, team.abv from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '$tid' order by player_1 asc"; 
 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table  width='100%'>";
echo "<tr> <th align=left>Player</th> <th align=left>Division</th><th align=left>Card</th><th align=left>Time/Hole</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
// Print out the contents of each row into a table
echo "<tr><td>";
echo $row['player_1'];
echo "</td>"; 
echo '<td>';
    switch($row['division']) {
      case "1": 
        echo "5-7 4 Holes Boys"; 
         break; 
  
        case "2": 
          echo "5-7 9 Holes Boys";
         break; 
   case "3": 
    echo "8-9 Boys";
        break; 
   case '4': 
    echo "10-11 Boys";
        break; 
   case '5': 
    echo "12-13 Boys";
        break; 
    case '6': 
      echo "14-15 Boys";
        break; 
    case '7': 
      echo "16-18 Boys";
          break; 
          case "11": 
              echo "5-7 4 Holes Girls"; 
               break; 
        
              case "12": 
                echo "5-7 9 Holes Girls";
               break; 
         case "13": 
          echo "8-9 Girls";
              break; 
         case '14': 
          echo "10-11 Girls";
              break; 
         case '15': 
          echo "12-13 Girls";
              break; 
          case '16': 
            echo "14-15 Girls";
              break; 
          case '17': 
            echo "16-18 Girls";
                break; 
      }
    

echo "</td><td>";
echo $row['card'];
echo "</td><td>";
echo $row['teetime'];
echo "</td></tr>"; 


} 

echo "</table>";


?>
</div>
  </div>  
</body>
</html>



<p><?php include("../footer.php"); ?>&nbsp;</p>


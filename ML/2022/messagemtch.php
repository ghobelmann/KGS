

<!DOCTYPE html>

<html lang="en">

  <head>


	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="High School Golf Results">
    <meta name="author" content="Greg Hobelmann">

    <title>KansasGolfScores.com</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">
    <link href="w3.css" rel="stylesheet">

<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
<style>
body {background-color: black;}
#grad {
background: linear-gradient(white, gray);
}
</style>




<?php
require_once "config.php";
include("databaseconnect.php");
        
//include("header.php");
//include("menubar.php");
include("style/style.php");

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

//Select Players name from form 
if(!empty($_GET['mtch']))
{
$mtch = $_GET['mtch'];
}
?>
  



      <h1 class="my-4"><center>Smith Center Mens League Match Stats
			</h1>

      <!-- Marketing Icons Section        -->

      

              
						<div class="container-fluid">
            
				 
				 <div class="row">
				 <div class="col-lg-12 col-xs-3 mb-8">
                     <h4 class="card-header bg-dark">  
<center>       
<a href="index.php">Home</a></h4>
</center> 
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
   
         


    <center><h1 align="left">Match <?php echo $mtch; ?></h1>
</center>
<?php
 // PHP Search Script


// PHP Search Script

//Submit Query to mysqli Database
$query = "SELECT *, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 
FROM scores WHERE mtch = '$mtch' ORDER by mtch asc, team asc";
$result = mysqli_query($conn, $query)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
echo "<table class='table'>";
echo "<tr> <th>Player Name </th> <th>Team</th><th>Match</th><th>H 1</th> <th>H 2</th> <th>H 3</th> <th>H 4</th> <th>H 5</th> 
<th>H 6</th> <th>H 7</th> <th>H 8</th> <th>H 9</th> <th>Total</th><th>Points</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messagemtch.php?mtch='.$row['mtch'].'">'.$row['mtch'].'</font></a>';	
if ($row['blue']<>"")
  {

  
  echo "</td><CENTER>";
switch($row['hole1']) { 
     case "1": 
          $class = 'eagle'; 
          break; 
     case '2': 
          $class = 'birdie'; 
          break; 
     case '3': 
          $class = 'par'; 
          break; 
      case '4': 
          $class = 'bogie'; 
          break; 
     case '5': 
          $class = 'doublebogie'; 
          break; 
     case '6': 
          $class = 'triplebogie'; 
          break; 
     case '7': 
          $class = 'other'; 
          break;
         case '8': 
          $class = 'other'; 
          break;
             case '9': 
          $class = 'other'; 
          break;     
               case '10': 
          $class = 'other'; 
          break;
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole1']."</td></n>"; 

}
else
{

  echo "</td><CENTER>";
switch($row['hole1']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole1']."</td></n>"; 
}
	echo "</td><CENTER>";
switch($row['hole2']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole2']."</td></n>"; 
                  
	echo "</td><CENTER>";
switch($row['hole3']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole3']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole4']) { 
     case "1": 
          $class = 'eagle'; 
          break; 
     case '2': 
          $class = 'birdie'; 
          break; 
     case '3': 
          $class = 'par'; 
          break; 
      case '4': 
          $class = 'bogie'; 
          break; 
     case '5': 
          $class = 'doublebogie'; 
          break; 
     case '6': 
          $class = 'triplebogie'; 
          break; 
     case '7': 
          $class = 'other'; 
          break;
         case '8': 
          $class = 'other'; 
          break;
             case '9': 
          $class = 'other'; 
          break;     
               case '10': 
          $class = 'other'; 
          break;
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole4']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole5']) { 
     case "3": 
          $class = 'eagle'; 
          break; 
     case '4': 
          $class = 'birdie'; 
          break; 
     case '5': 
          $class = 'par'; 
          break; 
      case '6': 
          $class = 'bogie'; 
          break; 
     case '7': 
          $class = 'doublebogie'; 
          break; 
     case '8': 
          $class = 'triplebogie'; 
          break; 
     case '9': 
          $class = 'other'; 
          break;
         case '10': 
          $class = 'other'; 
          break;
             case '11': 
          $class = 'other'; 
          break;     
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;
               case '16': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole5']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole6']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole6']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole7']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole7']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole8']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole8']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole9']) { 
     case "2": 
          $class = 'eagle'; 
          break;
           
     case '3': 
          $class = 'birdie'; 
          break;
           
     case '4': 
          $class = 'par'; 
          break; 
          
      case '5': 
          $class = 'bogie'; 
          break; 
          
     case '6': 
          $class = 'doublebogie'; 
          break; 
          
     case '7': 
          $class = 'triplebogie'; 
          break;
           
     case '8': 
          $class = 'other'; 
          break;
          
    case '9': 
          $class = 'other'; 
          break;
          
    case '10': 
          $class = 'other'; 
          break;
               
    case '11': 
          $class = 'other'; 
          break;
          
    case '12': 
          $class = 'other'; 
          break;
              
    case '13': 
          $class = 'other'; 
          break;
    case '14': 
          $class = 'other'; 
          break;
   case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole9']."</td></n>"; 
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
    echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td><CENTER>"; 
} 

	
?>

  </p>
       
</div>        </div></div>
       

	
	
	
	

	
  </body>






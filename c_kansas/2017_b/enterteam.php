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

</head><body>	
  
  
  
  
  
  
  
  
   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 


<script>

window.onload = function() {
    document.getElementById("school").focus();
};
</script>


<div id="Layer1" style="position:absolute; width:551px; height:453px; z-index:1; left: 188px; top: 230px;">
<div align="center"><strong>Enter School</strong></div>

   <?php
$sql="SELECT class FROM classification";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $class=$row["class"];
    $options.="<OPTION VALUE=\"$class\">".$class;

}
?>
  
  
  
<form id="myForm" action="connectteam.php" method="post">
      School:  <input type="text" id="school" name="school" /> <br>
       	Class:
            <select name="classification" id="classification">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>  <br>
                  State: 2 Letters <input type="varchar" id="state" name="state" size="2"/> <br>
                  Abbreviation: 3-4 Letters <input type="varchar" id="abv" name="abv" size="4"/>   <br>
                   Conference <input type="varchar"  name="conference" size="8"/>   <br>
                League <input type="varchar"  name="league" size="8"/>   <br>
                 Coach <input type="varchar"  name="coach" size="8"/> <br>
                     <br>
      <button id="sub">Enter Team</button>
</form>
  
<span id="result"></span>
  
  
     <script src="style/jquery-2.1.4.min.js"></script> 
  <script src="style/insertteam.js"></script>
  
 </body> 
  
<?php include("footer.php"); ?>
</div>
</body>
</html>
                                                                                
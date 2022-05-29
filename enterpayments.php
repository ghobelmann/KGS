                <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	
  
  
  
  
  
  
  

<?php

$referrer = 'enterpayments';

include("databaseconnect.php");

if(!empty($perm))
{
$perm;
echo $perm;
}
 //authentication for coaches to get to their pages, not for public pages.
if ($perm > '5') {
    echo "Permission Granted";
} else {
header("Location: index.php", TRUE, 303);
exit;
}

//include_once("headera.php");
//include_once("analyticstracking.php");  
 ?> 


<script>

window.onload = function() {
    document.getElementById("school").focus();
};
</script>


<div id="Layer1" style="position:absolute; width:551px; height:453px; z-index:1; left: 188px; top: 230px;">
<div align="center"><strong>Enter Payments</strong></div>

   <?php
$sql="SELECT * FROM team order by school asc";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $class=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$class;

}
?>
  
       <h2>  Total to Date: $
  
           <?php         
    $sql = "SELECT sum(amount) as sum FROM team "; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$total = $row['sum']; }
      
      echo $total;
 
      
 ?>         </h2>
          <br>
 
             <a href="paid.php">Check Payments</a>      <a href="accounts.php">Accounts</a>
             <br><br>
  
<form id="myForm" action="connect.php?referrer=enterpayments" method="post">
      School:

            <select name="tmid" id="school">
              <OPTION VALUE=><?php echo $options; ?></OPTION>
            </SELECT>  <br>

    KCA:
     <select name="paid">
  <option value="1">Yes</option>
  <option value="0">No</option>
</select> 

   <br>
Amount Paid <input type="int"  name="amount" size="8"/>   <br>
                                     <br>
      <button id="sub">Enter Payment</button>
</form>
  
<span id="result"></span>
  
  
     <script src="style/jquery-2.1.4.min.js"></script> 
  <script src="style/insertteam.js"></script>
  
 </body> 
  
<?php include("footer.php"); ?>
</div>
</body>
</html>
                                                                                
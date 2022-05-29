


                       <?php

session_start(); 

include_once("databaseconnect.php");


//print_r($_SESSION);


 
?> 









 <h1> <center><strong>Enter your tournament on Upcoming Tournaments Calendar!!! </strong> </h1>
 <h3><center>Coaches, Players and Parents enjoy seeing and knowing when your tournament is!!</h3>
 </center>

          
       
  
<?php

$sql="SELECT * FROM team ORDER by school asc";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>

<script>

window.onload = function() {
    document.getElementById("school").focus();
};
</script>

    
     







        
       
    <center>
  
<form id="myForm" action="connectschedule.php" method="post">
      <td valign="top">Host School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT>
      
         	Course:
        <input type="varchar" name="tournament" size="20" value=" " required/>    
        
        
    		Date of Tournament 
      <input type="date" name="date" id="datepicker" size="10" value="<?php echo date('Y-m-d'); ?>" required/> 


            
  <input name="" type="submit" value="Enter Tournament" />
  
  
   <h3><center>This is not setting up to Host a tournament, but for the front page calendar.</h3>
      <h2><center>If you are going to a tournament and it is not on the list, feel free to add it.</h2>
  </div>         </h4>
  
  
</form>  
         
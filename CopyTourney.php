       <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
   
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  
    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head><body>	 


 

 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("databaseconnect.php");
   
 ?>   
 
          <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
   //  echo $userid; 
      
 
 ?>    
 
<div id="wrapper">

  <div id="content">
  <div class="col-sm-1 mb-1"> 
  </div>
    <div class="col-lg-8 mb-8">  
    
 
        <?php
$sql="SELECT max(id) as id, date, uid FROM tournament";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $trnysetup=$row["id"];
   // echo $trnysetup;
}
?>
       <?php
$sql="SELECT * FROM tournament WHERE id = $tid";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $tournament=$row["tournament"];
    $course=$row["course"];
    $state=$row["state"];
    $par=$row["par"];
}
?>
  






<h1>Setup New Tournament Details</h1>

  <form action="connecttrnyCopy.php" method="post">
  <h4>	<font color="red">
   State:   </font>
  <select name="state" required>
  <option value="KS">Kansas</option>
  <option value="NE">Nebraska</option>
  <option value="OK">Oklahoma</option>
  <option value="MT">Montana</option>
</select>
ID: 
<input type="int" name="id" value="<?php echo $trnysetup; ?>">
		
<h4>	<font color="red">
			1. Tournament Name: </font>
		<input type="varchar" name="tournament" size="40" required/></h4>
    
      <h4>
    <font color="red">
    2. Name of Course  
    	</font>
		<input type="varchar" name="course" size="50"
     value="<?php echo $course; ?>" required/>  </h4> 
                          
    
    	<h4>	
    	<font color="red">
    	3. Date of Tournament 
    	</font>
      <input type="date" name="date" id="datepicker" size="10" value="" required/>   </h4>
      

  
        <h4><font color="red">	
        8. Number of Rounds:(1=18 holes, 2=36 holes, 3=54 holes, 4=72 holes)
    	</font>
		<input type="varchar" name="rounds" size="4" value="1" required/> 
  
	<hr />	
		<br>

    
    	 <h4><font color="red">
       9. Number You want on the Live Leaderboard. (150 for viewing on phones, around 21 for viewing on TV's)
       </font>
		<input type="varchar" name="leaderboard" size="4" value="99" required/> 
           <br> <br>
      <h4><font color="red">
       10. Type of Tournament
       </font>
         <br>  
         <h4> <font color="red">
<input type="radio" name="status" value="1" checked> 1.  18 Hole Varsity Tournament<br>
<input type="radio" name="status" value="2">         2.  36 Hole Varsity Tournament<br>
<input type="radio" name="status" value="3">         3.  54 Hole Varsity Tournament<br>
<input type="radio" name="status" value="4">         4.  72 Hole Varsity Tournament<br>
<input type="radio" name="status" value="5">         5.  18 Hole JV Tournament<br>
<input type="radio" name="status" value="6">         6.  9 Hole JV Tournament<br>
 		</font>
                                </h4> 
    
                    
                 <br><br>        
                         

  
              <h4>
            <font color="red">
            12.	Course Comments (Temp, Wind, Rain, Sun etc):  
            </font>      
		<input type="varchar" name="comments" size="20"/>  </h4>
                                                 
                
            <h4>
            <font color="red">
            13. Sponsored by: </font>
            (If somebody wants to advertise or sponsor your tournament) 
		<input type="varchar" name="btyb" size="20"/> </h4>
  
    
            <br><br>
  
            <h4>	
            <font color="red">
            14.  Notes for Scorecards:</font>
             (Play Up or Down, Local Rules etc. 400 Characters max) <br>
          <strong>  Don't use apostrophes- it will return an error and not enter your tournament.</strong>
      <textarea name="notes" rows="10" cols="100">Enter text here... (You can delete this)</textarea></h4>



          

        <br><br>

	
 
<div>


  <h2><input name="submit" type="submit" value="Click Here When you are ready to Submit. " />  </h2>
  </div>
  
  	 <br><br><br><br><br> 
	

</body>
</html>



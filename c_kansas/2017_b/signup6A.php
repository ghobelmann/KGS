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


include_once("headera.php");
include_once("databaseconnect.php");
 ?> 

<div id="wrapper">


</div>
  <div id="content" class="container">


<h2>Welcome, Please fill out the following information to create an Account</h2>
	 <br>
<p>

<?php
$sql="SELECT * FROM team WHERE classification LIKE '6A'";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}
?>




  <div align="left"><h2><strong>Fill Out All Fields</h2></strong></div>
  <h3>321A Coach Sign up Page</h3>
  <form id="myForm" action="connectsignup.php" method="post"> <h3>
    <p>First Name:  <input type="varchar" name="first_name" required/>  <br>
       Last Name:   <input type="varchar" name="last_name" required/> <br>
       <input type="hidden" name="password"  value="Golf2017"/> <br>
      Email:  	<input type="int" name="email" size="30" required/> <br> 
     			    <td valign="top">School
            <select name="tmid" id="drop1">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
      Phone:     <input type="int" name="phone"  required/>
		     </h3>
		


      <button id="sub">Enter Team</button>
</form>
  
<span id="result"></span>

  
     <script src="style/jquery-2.1.4.min.js"></script> 

  	 
      <p>
</div> 

</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


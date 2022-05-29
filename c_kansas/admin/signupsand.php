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
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";      
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");



//INITIAL PAGE SETTINGS-----------
?>

<div id="wrapper">


</div>
  <div id="content" class="container">


<h2>Welcome, Please fill out the following information to create an Account</h2>
	 <br>
<p>

<?php
$sql="SELECT * FROM team WHERE classification LIKE 'sand'";
$result=mysql_query($sql);

$options="";

while ($row=mysql_fetch_array($result)) {   
    $school=$row["school"];
    $options.="<OPTION VALUE=\"$school\">".$school;

}
?>




  <div align="left"><h2><strong>Fill Out All Fields</h2></strong></div>
  <h2>Sand Greens Coach Sign up Page</h2>
  <form id="myForm" action="connectsignup.php" method="post"> <h3>
    <p>First Name:  <input type="varchar" name="first_name" required/>
       Last Name:   <input type="varchar" name="last_name" required/> 
    	 Username: (no spaces)  	<input type="int" name="username" " required/>  
       <input type="hidden" name="password"  value="Golf2015"/>
      Email:  	<input type="int" name="email" required/>  
     			    <td valign="top">School
            <select name="school" id="drop1">
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


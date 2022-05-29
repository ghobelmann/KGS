                                          <html><head>


                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
    
     
              <link rel="stylesheet" href="../includes/bootstrap.min.css" />       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       
        <script src="../includes/jquery.tabledit.min.js"></script> 
</head><html>
   
<?php

    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  


 // echo $trny;
$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "g_2020Main");




$input = filter_input_array(INPUT_POST);             
$hole1 = mysqli_real_escape_string($connect, $input["hole1"]);
$hole2 = mysqli_real_escape_string($connect, $input["hole2"]);
$hole3 = mysqli_real_escape_string($connect, $input["hole3"]);
$hole4 = mysqli_real_escape_string($connect, $input["hole4"]);
$hole5 = mysqli_real_escape_string($connect, $input["hole5"]);
$hole6 = mysqli_real_escape_string($connect, $input["hole6"]);
$hole7 = mysqli_real_escape_string($connect, $input["hole7"]);
$hole8 = mysqli_real_escape_string($connect, $input["hole8"]);
$hole9 = mysqli_real_escape_string($connect, $input["hole9"]);
$hole10 = mysqli_real_escape_string($connect, $input["hole10"]);
$hole11 = mysqli_real_escape_string($connect, $input["hole11"]);
$hole12 = mysqli_real_escape_string($connect, $input["hole12"]);
$hole13 = mysqli_real_escape_string($connect, $input["hole13"]);
$hole14 = mysqli_real_escape_string($connect, $input["hole14"]);
$hole15 = mysqli_real_escape_string($connect, $input["hole15"]);
$hole16 = mysqli_real_escape_string($connect, $input["hole16"]);
$hole17 = mysqli_real_escape_string($connect, $input["hole17"]);
$hole18 = mysqli_real_escape_string($connect, $input["hole18"]);
$tid = mysqli_real_escape_string($connect, $input["tid"]);
$front = mysqli_real_escape_string($connect, $input["front"]);
$back = mysqli_real_escape_string($connect, $input["back"]);
$total = mysqli_real_escape_string($connect, $input["total"]); 
$status = mysqli_real_escape_string($connect, $input["status"]);




if($input["action"] === 'edit')
{
 $query = "
 UPDATE scores 
 SET  
hole1 = '".$hole1."', 
hole2 = '".$hole2."', 
hole3 = '".$hole3."', 
hole4 = '".$hole4."', 
hole5 = '".$hole5."', 
hole6 = '".$hole6."', 
hole7 = '".$hole7."', 
hole8 = '".$hole8."', 
hole9 = '".$hole9."', 
front = '".$hole1."'+'".$hole2."'+'".$hole3."'+'".$hole4."'+'".$hole5."'+'".$hole6."'+'".$hole7."'+'".$hole8."'+'".$hole9."',
hole10 = '".$hole10."', 
hole11 = '".$hole11."', 
hole12 = '".$hole12."', 
hole13 = '".$hole13."', 
hole14 = '".$hole14."', 
hole15 = '".$hole15."', 
hole16 = '".$hole16."', 
hole17 = '".$hole17."', 
hole18 = '".$hole18."',  
back = '".$hole10."'+'".$hole11."'+'".$hole12."'+'".$hole13."'+'".$hole14."'+'".$hole15."'+'".$hole16."'+'".$hole17."'+'".$hole18."',
total = '".$hole1."'+'".$hole2."'+'".$hole3."'+'".$hole4."'+'".$hole5."'+'".$hole6."'+'".$hole7."'+'".$hole8."'+'".$hole9."' + '".$hole10."'+'".$hole11."'+'".$hole12."'+'".$hole13."'+'".$hole14."'+'".$hole15."'+'".$hole16."'+'".$hole17."'+'".$hole18."',
last6 = '".$hole13."'+'".$hole14."'+'".$hole15."'+'".$hole16."'+'".$hole17."'+'".$hole18."',
last3 =  '".$hole16."'+'".$hole17."'+'".$hole18."',
status = '".$status."'
 WHERE pid = '".$input["pid"]."' and tid = '".$input["tid"]."'  and round = '1'";




 
 mysqli_query($connect, $query);

}

 if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM scores 
 WHERE pid = '".$input["pid"]."'
 ";
 mysqli_query($connect, $query);
}  



echo json_encode($input);

?>   




  
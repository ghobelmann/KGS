<?php

    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}  


 // echo $trny;
 $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "b_2020Main");




$input = filter_input_array(INPUT_POST);   

$pid = mysqli_real_escape_string($connect, $input["pid"]);         
$card = mysqli_real_escape_string($connect, $input["card"]);
$manualscore = mysqli_real_escape_string($connect, $input["manualscore"]);
$status = mysqli_real_escape_string($connect, $input["status"]);
$teetime = mysqli_real_escape_string($connect, $input["teetime"]);
$man = mysqli_real_escape_string($connect, $input["man"]);
$id = mysqli_real_escape_string($connect, $input["id"]); 





if($input["action"] === 'edit')
{
 $query = "
 UPDATE scores 
 SET  
 pid = '".$pid."', 
card = '".$card."', 
manualscore = '".$manualscore."', 
status = '".$status."', 
teetime = '".$teetime."', 
man = '".$man."'
 WHERE id = '".$input["id"]."'";




 
 mysqli_query($connect, $query);

}

/* if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM scores 
 WHERE pid = '".$input["pid"]."'
 ";
 mysqli_query($connect, $query);
}   */

echo json_encode($input);

?>   
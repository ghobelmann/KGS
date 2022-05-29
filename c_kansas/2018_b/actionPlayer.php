                                              <?php

    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}  


 // echo $trny;
$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_b_2018");




$input = filter_input_array(INPUT_POST);    
$id = mysqli_real_escape_string($connect, $input["id"]);      
$card = mysqli_real_escape_string($connect, $input["card"]);
$jv = mysqli_real_escape_string($connect, $input["jv"]);
$noteam = mysqli_real_escape_string($connect, $input["noteam"]);
$manualscore = mysqli_real_escape_string($connect, $input["manualscore"]);
$dq = mysqli_real_escape_string($connect, $input["dq"]);
$teetime = mysqli_real_escape_string($connect, $input["teetime"]);
$man_2 = mysqli_real_escape_string($connect, $input["man_2"]);
$man_4 = mysqli_real_escape_string($connect, $input["man_4"]);
$man_6 = mysqli_real_escape_string($connect, $input["man_6"]);
$points = mysqli_real_escape_string($connect, $input["points"]);
$event = mysqli_real_escape_string($connect, $input["event"]);





if($input["action"] === 'edit')
{
 $query = "
 UPDATE scores 
 SET  
card = '".$card."', 
jv = '".$jv."', 
noteam = '".$noteam."', 
manualscore = '".$manualscore."', 
dq = '".$dq."', 
teetime = '".$teetime."', 
man_2= '".$man_2."', 
man_4 = '".$man_4."', 
man_6 = '".$man_6."',
points = '".$points."',
event = '".$event."'
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
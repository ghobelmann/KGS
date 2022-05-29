     <?php

    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  


 // echo $trny;
$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_testg");




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
$tid = mysqli_real_escape_string($connect, $input["tid"]);
$front = mysqli_real_escape_string($connect, $input["front"]);
$total = mysqli_real_escape_string($connect, $input["total"]);
$dq = mysqli_real_escape_string($connect, $input["dq"]);
$manualscore = mysqli_real_escape_string($connect, $input["manualscore"]);




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
total = '".$hole1."'+'".$hole2."'+'".$hole3."'+'".$hole4."'+'".$hole5."'+'".$hole6."'+'".$hole7."'+'".$hole8."'+'".$hole9."',
last6 = '".$hole4."'+'".$hole5."'+'".$hole6."'+'".$hole7."'+'".$hole8."'+'".$hole9."',
last3 =  '".$hole7."'+'".$hole8."'+'".$hole9."',
dq = '".$dq."', 
manualscore = '".$manualscore."' 
 WHERE pid = '".$input["pid"]."' and tid = '".$input["tid"]."'";




 
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
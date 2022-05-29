<?php



// echo $trny;
$connect = mysqli_connect("localhost", "root", "usd_237", "sub2021");




$input = filter_input_array(INPUT_POST);    
$id = mysqli_real_escape_string($connect, $input["id"]);      
$name_id = mysqli_real_escape_string($connect, $input["name_id"]);
$sub_id = mysqli_real_escape_string($connect, $input["sub_id"]);
$type = mysqli_real_escape_string($connect, $input["type"]);






if($input["action"] === 'edit')
{
$query = "
UPDATE sickdays 
SET  
name_id = '".$name_id."',  
sub_id = '".$sub_id."',
type = '".$type."'
WHERE id = '".$input["id"]."'";





mysqli_query($connect, $query);

}

if($input["action"] === 'delete')
{
$query = "
DELETE FROM sickdays 
WHERE id = '".$input["id"]."'
";
mysqli_query($connect, $query);
}  

echo json_encode($input);

?>   
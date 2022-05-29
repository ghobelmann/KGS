<?php

//action.php

include('db.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':date'  => $_POST['date'],
  ':name_id'  => $_POST['name_id'],
  ':sub_id'   => $_POST['sub_id'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE sickdays 
 SET date = :date,
 name_id = :name_id, 
 sub_id = :sub_id
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM sickdays
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>
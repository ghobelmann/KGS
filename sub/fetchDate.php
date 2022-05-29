
<?php

//Initiang variable
$query = '';
$name_id = '';


$connect = new PDO("mysql:host=localhost; dbname=sub2021", "root", "4Chr!5t3|6");

$row["id"] = '';
$row["name_id"] = '';
$row["date"] = '';
$row["type"] = '';
$row["length"] = '';
$row["sub_id"] = '';

$month = date('m');


if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM sickdays 
 LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
 LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
 LEFT JOIN personnel ON sickdays.sub_id = personnel.sub_id 
 LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
 LEFT JOIN time ON sickdays.length = time.time_id 
 WHERE name_id IN (".$search_text.") 
 ORDER BY date DESC
 ";
}
else
{
 $query = "SELECT date
 FROM sickdays 
 LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
 LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
 LEFT JOIN personnel ON sickdays.sub_id = personnel.sub_id 
 LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
 LEFT JOIN time ON sickdays.length = time.time_id 
 GROUP by Date
 ORDER BY date DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';


if($total_row > 0)
{
 foreach($result as $row)
 {

 
  $output .= '
  <tr >
   <td><a href="dateQuery.php?date='.$row["date"].'" style="color:#0000FF">'.$row["date"].'</a></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">Select Teacher From Dropdown.</td>
 </tr>
 ';
}

echo $output;


?>
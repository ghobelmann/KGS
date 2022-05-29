
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
$row["tc_id"] = '';

$month = date('m');


if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM sickdays 
 LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
 LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
 LEFT JOIN personnel ON sickdays.tc_id = personnel.tc_id 
 LEFT JOIN total_sick ON sickdays.name_id = total_sick.tsick_id 
 LEFT JOIN time ON sickdays.length = time.time_id 
 WHERE name_id IN (".$search_text.") 
 GROUP by sickdays.name_id
 ORDER BY date DESC
 ";
}
else
{
 $query = "SELECT DISTINCT *, sickdays.name_id, sickdays.tc_id, total_sick.name as name
 FROM sickdays 
 LEFT JOIN pay ON sickdays.pay_id = pay.pay_id
 LEFT JOIN leavetype ON sickdays.type = leavetype.lv_id 
 LEFT JOIN total_sick ON sickdays.tc_id = total_sick.tsick_id 
 LEFT JOIN time ON sickdays.length = time.time_id 
 GROUP by sickdays.tc_id
 ORDER BY sickdays.tc_id asc";
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
   <td><a href="tcQuery.php?tc_id='.$row["tc_id"].'" style="color:#0000FF">'.$row["name"].'</a></td>
   <td style="color:#000000">'.$row["date"].'</td>
   <td style="color:#000000">'.$row["type"].'</td>
   <td style="color:#000000">'.$row["pay"].'</td>
   <td style="color:#000000">'.$row["length"].'</td>
   <td><a href="subQuery.php?tc_id='.$row["tc_id"].'" style="color:#0000FF">'.$row["sub_name"].'</a></td>
   <td><a href="editEntry.php?id='.$row["id"].'" style="color:#0000FF">'.$row["id"].'</a></td>
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
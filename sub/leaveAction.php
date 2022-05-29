<?php
include_once("db.php");
if ($_POST['action'] == 'edit' && $_POST['lv_id']) {	
	$updateField='';
	if(isset($_POST['type'])) {
		$updateField.= "type='".$_POST['type']."'";
	} 
	}
	if($updateField && $_POST['lv_id']) {
		$sqlQuery = "UPDATE leavetype SET $updateField WHERE lv_id='" . $_POST['lv_id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['lv_id']) {
	$sqlQuery = "DELETE FROM leavetype WHERE lv_id='" . $_POST['lv_id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>
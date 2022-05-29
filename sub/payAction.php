<?php
include_once("db.php");
if ($_POST['action'] == 'edit' && $_POST['pay_id']) {	
	$updateField='';
	if(isset($_POST['pay'])) {
		$updateField.= "pay='".$_POST['pay']."'";
	} else if(isset($_POST['job'])) {
		$updateField.= "job='".$_POST['job']."'";
	}
	if($updateField && $_POST['pay_id']) {
		$sqlQuery = "UPDATE pay SET $updateField WHERE pay_id='" . $_POST['pay_id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['pay_id']) {
	$sqlQuery = "DELETE FROM pay WHERE pay_id='" . $_POST['pay_id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>
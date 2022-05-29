<?php
include_once("db.php");
if ($_POST['action'] == 'edit' && $_POST['tsick_id']) {	
	$updateField='';
	if(isset($_POST['sickdays'])) {
		$updateField.= "sickdays='".$_POST['sickdays']."'";
	} else if(isset($_POST['perdays'])) {
		$updateField.= "perdays='".$_POST['perdays']."'";
	} else if(isset($_POST['profdays'])) {
		$updateField.= "profdays='".$_POST['profdays']."'";
	} else if(isset($_POST['bereavdays'])) {
		$updateField.= "bereavdays='".$_POST['bereavdays']."'";
	}
	if($updateField && $_POST['tsick_id']) {
		$sqlQuery = "UPDATE total_sick SET $updateField WHERE tsick_id='" . $_POST['tsick_id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['tsick_id']) {
	$sqlQuery = "DELETE FROM total_sick WHERE tsick_id='" . $_POST['tsick_id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>
<?php
include 'conn.php';
$id = $_POST['id'];
$msg = $_POST['msg'];
if( $msg != ""){
	$sql = $conn->query("INSERT INTO discussion (parent_comment, student, post)
			VALUES ('$id', 'Saadman', '$msg')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>
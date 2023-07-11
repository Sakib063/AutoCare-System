<?php
    $conn = mysqli_connect('localhost', 'cmss', '1234', 'car_management_system');
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'car_management_system');
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>
<?php 
session_start();
include("dbcon/conn.php");

	$name = $_POST["name"]; 
    $address = $_POST["address"];
	$email = $_POST["email"]; 
    $phone = $_POST["phone"]; 
	$vendor = $_SESSION["id"];
	
	$sql="INSERT INTO garage(name,address,phone,email,vendor_id) 
			VALUES ('$name','$address','$phone','$email','$vendor')";

	$run= mysqli_query($conn,$sql);

	if ($run){
		header("Location:vendor_dashboard.php");	
	}
	else {
		echo "unsuccessful" ;
	}

?>
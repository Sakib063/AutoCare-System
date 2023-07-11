<?php 
	include("dbcon/conn.php");

	$name=$shop=$email=$phone=$password=' ';
	
		$name=$_POST['vendor_name'];
		$email=$_POST['vendor_email'] ;
		$phone=$_POST['vendor_phone_number'];
		$password=$_POST['password']; 
		

		$sql="INSERT INTO vendor_info(vendor_name,vendor_phone_number,vendor_email,password)  
				VALUES ('$name','$phone','$email','$password')";
		$run=mysqli_query($conn,$sql);

		if ($run){
			header("Location:vender_login.php");
		}
		else {
			echo "unsuccessful";
		}
?>
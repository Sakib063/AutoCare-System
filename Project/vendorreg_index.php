<?php 
	include("dbcon/conn.php");

	$name=$shop=$address=$phone=$password=' ';
	
		$name=$_POST['vendor_name'];
		$shop=$_POST['vendor_shop_name'];
		$address=$_POST['vendor_address'] ;
		$phone=$_POST['vendor_phone_number'];
		$password=$_POST['password']; 
		

		$sql="INSERT INTO vendor_info(vendor_name,vendor_shop_name,vendor_phone_number,vendor_address,password)  
				VALUES ('$name','$shop','$phone','$address','$password')";
		$run=mysqli_query($conn,$sql);

		if ($run){
			header("Location:vender_login.php");
		}
		else {
			echo "unsuccessful";
		}
?>
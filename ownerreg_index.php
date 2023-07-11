<?php 
	include("dbcon/conn.php");

	$name=$address=$phone=$password=' ';

		$name=$_POST['owner_name'];
		$address=$_POST['owner_address'] ;
		$email=$_POST['owner_email'];
		$phone=$_POST['owner_phone'];
		$password=$_POST['password']; 
		

		$sql="INSERT INTO owners_info(owner_name,owner_email,owner_phone_number,owner_address,password)  
				VALUES ('$name','$email','$phone','$address','$password')";
		$run=mysqli_query($conn,$sql);

		if ($run){
			header("Location:owner_login.php");
		}
		else {
			echo "unsuccessful";
		}
?>
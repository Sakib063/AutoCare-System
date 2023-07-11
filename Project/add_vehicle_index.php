<?php 
session_start();

include("dbcon/conn.php");

	 $brand = $_POST["brand"]; 
     $model = $_POST["model"];
	 $year = $_POST["cyear"]; 
     $mileage = $_POST["mil"]; 
	 $owner = $_SESSION["owner_id"];
	
	$sql="INSERT INTO vehicle (brand,model,cyear,mil,owner_id) 
			VALUES ('$brand','$model','$year','$mileage','$owner')";

	$run= mysqli_query($conn,$sql);

	if ($run){
		header("Location:owner_dashboard.php");	
	}
	else {
		echo "unsuccessful" ;
	}

?>
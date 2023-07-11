<?php
    session_start();
    include("dbcon/conn.php");
    
    $ocar=$vphone=' ';
    $title='Engine Diagnosis';

    $ocar=$_SESSION['car'];
    $vphone=$_SESSION['vnumber'];

    $sql="INSERT INTO cservice(ca_id,vphone,title) 
			VALUES ('$ocar','$vphone','$title')";

	$run=mysqli_query($conn,$sql);

	if ($run){
        echo 'Successful';
		header("Location:owner_dashboard.php");	
	}
	else {
		echo "unsuccessful" ;
	}
?>
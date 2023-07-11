<?php
    session_start();
    include("dbcon/conn.php");
    
    $ocar=$vphone=' ';
    $title='oil change';

    $ocar=$_SESSION['number'];
    $vphone=$_SESSION['vnumber'];

    $sql="INSERT INTO cservice(owner_phone,vphone,title) 
			VALUES ('$ocar','$vphone','$title')";

	$run=mysqli_query($conn,$sql);

	if ($run){
		header("Location:owner_dashboard.php");	
        echo 'Successful';
	}
	else {
		echo "unsuccessful" ;
	}



?>
<?php
    session_start();
    include("dbcon/conn.php");
    
    $ocar=$vphone=' ';
    $title=$_POST['title'];

    $ocar=$_SESSION['owner_phone'];
    $vphone=$_POST['vphone'];
    $vid=$_POST['vid'];
    $oid=$_SESSION['owner_id'];
    $address=$_SESSION['address'];
    $garage=$_POST['garage'];

    $sql="SELECT service_id,vendor_id,owner_id,status,title,date FROM cservice WHERE vendor_id=$vid AND owner_id=$oid AND title='$title' AND garage='$garage'";
	$result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['service_id'];
        $status=$row['status'];
    }

    if(mysqli_num_rows($result)==0){
        $sql="INSERT INTO cservice(owner_phone,vphone,title,vendor_id,owner_id,address,garage) 
        VALUES ('$ocar','$vphone','$title','$vid','$oid','$address','$garage')";
        $run=mysqli_query($conn,$sql);
    }
    else if($status!='pending'){
        $sql="UPDATE cservice SET date=CURRENT_DATE(),status='pending' WHERE service_id=$id";
        $run=mysqli_query($conn,$sql);
    }
    else{
        $sql="UPDATE cservice SET date=CURRENT_DATE() WHERE service_id=$id";
        $run=mysqli_query($conn,$sql);
    }

	if ($run){
		header("Location:owner_dashboard.php");	
	}
	else {
		echo "unsuccessful" ;
	}
?>
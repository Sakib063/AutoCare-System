<?php
    session_start();
    include("dbcon/conn.php");

    $vid=$_POST['vid'];
    $sname=$_POST['sname'];
    $garage=$_POST['garage'];
    $price=$_POST['price'];
    $title=$_POST['sname'];

    $sql="SELECT phone,email,address FROM garage WHERE vendor_id=$vid AND name='$garage'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $phone=$row['phone'];
        $email=$row['email'];
        $address=$row['address'];
    }

    $sql="INSERT INTO sservice(vendor_id,garage,address,vphone,title,price,email) VALUES('$vid','$garage','$address','$phone','$sname','$price','$email')";
    $run=mysqli_query($conn,$sql);
	if($run){
		header("Location:vendor_dashboard.php");	
	}
	else {
		echo "unsuccessful" ;
	}


?>
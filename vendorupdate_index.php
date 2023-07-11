<?php
    session_start();
    include("dbcon/conn.php");
    $id=$_SESSION['id'];
    
    if($_POST['uname']!=null){
        $name=$_POST['uname'];
        $sql="UPDATE vendor_info SET vendor_name='$name' WHERE vendor_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if($_POST['phone']!=null){
        $phone=$_POST['phone'];
        $sql="UPDATE vendor_info SET vendor_phone_number='$phone' WHERE vendor_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if($_POST['email']!=null){
        $email=$_POST['email'];
        $sql="UPDATE vendor_info SET vendor_email='$email' WHERE vendor_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if($_POST['address']!=null){
        $address=$_POST['address'];
        $sql="UPDATE owners_info SET vendor_address='$address' WHERE vendor_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if ($run){
        header("Location:vendor_dashboard.php");	
    }
    else {
        echo "unsuccessful";
    }
?>
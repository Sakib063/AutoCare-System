<?php
    session_start();
    include("dbcon/conn.php");
    $id=$_SESSION['owner_id'];
    
    if($_POST['uname']!=null){
        $name=$_POST['uname'];
        $sql="UPDATE owners_info SET owner_name='$name' WHERE owner_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if($_POST['phone']!=null){
        $phone=$_POST['phone'];
        $sql="UPDATE owners_info SET owner_phone_number='$phone' WHERE owner_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if($_POST['email']!=null){
        $email=$_POST['email'];
        $sql="UPDATE owners_info SET owner_email='$email' WHERE owner_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if($_POST['address']!=null){
        $address=$_POST['address'];
        $sql="UPDATE owners_info SET owner_address='$address' WHERE owner_id='$id'";
        $run=mysqli_query($conn,$sql);
    }
    if ($run){
        header("Location:owner_dashboard.php");	
    }
    else {
        echo "unsuccessful" ;
    }
?>
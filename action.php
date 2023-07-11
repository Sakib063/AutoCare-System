<?php
    session_start();
    include("dbcon/conn.php");

    $actid=$_POST['service'];

    if(array_key_exists('done', $_POST)) {
        ddone($actid,$conn);
    }
    else if(array_key_exists('reject', $_POST)) {
        rreject($actid,$conn);
    }
    function ddone($act,$conn){
        $sql="UPDATE cservice SET status='done' WHERE service_id='$act'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:vendor_dashboard.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }
    function rreject($act,$conn){
        $sql="UPDATE cservice SET status='reject' WHERE service_id='$act'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:vendor_dashboard.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }
    

?>
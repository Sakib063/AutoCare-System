<?php
    session_start();
    include("dbcon/conn.php");

    $orderid=$_POST['orderid'];

    if(array_key_exists('done', $_POST)){
        ddone($orderid,$conn);
    }
    else if(array_key_exists('reject', $_POST)){
        rreject($orderid,$conn);
    }
    function ddone($act,$conn){
        $sql="UPDATE customer_order SET status='done' WHERE order_id='$act'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:vendor_dashboard.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }
    function rreject($act,$conn){
        $sql="UPDATE customer_order SET status='reject' WHERE order_id='$act'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:vendor_dashboard.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }

?>
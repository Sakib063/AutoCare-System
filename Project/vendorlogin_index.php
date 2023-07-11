<?php
    session_start();
    include "dbcon/conn.php";


    $uname=$psw="";


    if(isset($_POST['uname'])&&isset($_POST['psw'])){
        $uname=trim($_POST['uname']);
        $psw=trim($_POST['psw']);


        if(empty($uname)){
            header("Location:vender_login.php?error=User Name is required");
            exit();
        }
        else if(empty($psw)){
            header("Location:vender_login.php?error=Password is required");
            exit();
        }
        else{
            $sql="SELECT vendor_id,vendor_name,password FROM vendor_info WHERE vendor_name='$uname' AND password='$psw'";
            $result=mysqli_query($conn,$sql);
            
            if (mysqli_num_rows($result)===1){
                $row=mysqli_fetch_assoc($result);
                if($row['vendor_name']===$uname&&$row['password']===$psw){
                    $_SESSION['vname']=$uname;
                    $_SESSION['vnumber']=$row['vendor_phone_number'];
                    $_SESSION['vshop']=$row['vendor_shop_name'];
                    $_SESSION['id']=$row['vendor_id'];
                    header("Location:vendor_dashboard.php");
                }
            }
            else{
                header("Location:vender_login.php?error=Incorect User name or password");
	            exit();
            }
        }
    } 
    else{
        header("Location:vender_login.php");
        exit();
    }
?>
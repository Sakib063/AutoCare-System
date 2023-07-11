<?php
    session_start();
    include "dbcon/conn.php";

    $uname=$psw="";


    if(isset($_POST['uname'])&&isset($_POST['psw'])){
        $uname=trim($_POST['uname']);
        $psw=trim($_POST['psw']);


        if(empty($uname)){
            header("Location:owner_login.php?error=User Name is required");
            exit();
        }
        else if(empty($psw)){
            header("Location:owner_login.php?error=Password is required");
            exit();
        }
        else{
            $sql="SELECT * FROM owners_info WHERE owner_name='$uname' AND password='$psw'";
            $result=mysqli_query($conn,$sql);
            
            if (mysqli_num_rows($result)===1){
                $row=mysqli_fetch_assoc($result);
                if($row['owner_name']===$uname&&$row['password']===$psw){
                    // $_SESSION['name']=$uname;
                    // $_SESSION['number']=$row['owner_phone_number'];
                    $_SESSION['owner_id']=$row['owner_id'];

                    // $name=$_SESSION['name'];
                    // $number=$_SESSION['number'];
                    // $own_id=$_SESSION['owner_id'];
                    header("Location:owner_dashboard.php");
                }
            }
            else{
                header("Location:owner_login.php?error=Incorect User name or password");
	            exit();
            }
        }
    } 
    else{
        header("Location:owner_login.php");
        exit();
    }
?>
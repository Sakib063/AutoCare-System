<?php
    session_start();
    include("dbcon/conn.php");

    $oid=$_SESSION['owner_id'];
    $ophone=$_SESSION['owner_phone'];
    $oaddress=$_SESSION['address'];
    $title=$_POST["title"];
    $garage=$_POST["garage"];
    $vid=$_POST['vid'];

    $sql="SELECT * FROM special_list WHERE oid=$oid AND title='$title' AND garage='$garage'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $sid=$row['sid'];
        
        $status=$row['status'];
    }
    if(mysqli_num_rows($result)==0){
        $sql="INSERT INTO special_list(onumber,title,vid,oid,oaddress,garage) 
        VALUES ('$ophone','$title','$vid','$oid','$oaddress','$garage')";
        $run=mysqli_query($conn,$sql);
    }
    else if($status!='pending'){
        $sql="UPDATE cservice SET date=CURRENT_DATE(), status='pending' WHERE 'sid' = $sid";
        $run=mysqli_query($conn,$sql);
    }
    else{
        $run=mysqli_query($conn,$sql);
    }

	if ($run){
		header("Location:owner_dashboard.php");	
	}
	else {
		echo "unsuccessful" ;
	}

?>
<?php
    session_start();
    include("dbcon/conn.php");
    $vid=$_SESSION['id'];
    // $ssid=$_POST['sid'];
    if(array_key_exists('done', $_POST)){
        done($_POST['sid'],$conn);
    }
    else if(array_key_exists('reject', $_POST)){
        reject($_POST['sid'],$conn);
    }
    function done($act,$conn){
        $sql="UPDATE special_list SET status='done' WHERE sid='$act'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:vendor_dashboard.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }
    function reject($act,$conn){
        $sql="UPDATE special_list SET status='reject' WHERE sid='$act'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:vendor_dashboard.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }
    
    $sql="SELECT * FROM special_list WHERE vid=$vid";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        if($row['status']=='pending'){
            $sid=$row['sid'];
            echo $row['onumber'];
            echo "\n";
            echo $row['oaddress'];
            echo "\n";
            echo $row['garage'];
            echo "\n";
            echo $row['title'];
            echo "\n";
            echo 
            "<form method='POST' action=";echo $_SERVER['PHP_SELF'];echo " >
                <input type='hidden' value='$sid' name='sid'/>
                <input style='background-color:#45FF24' type='submit' name='done' value='Done'/>
                <input style='background-color:#FF482B' type='submit' name='reject' value='Reject'/>
            </form>
            ";   
        }
        else{
            echo 'No Special Service Request';
        }
    }
?>
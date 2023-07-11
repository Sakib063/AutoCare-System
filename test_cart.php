
<?php
 session_start();
 $con = mysqli_connect("localhost","root","",'car_management_system');
$id=$_SESSION['owner_id'];
$sql="SELECT * FROM owners_info WHERE owner_id='$id'";
$result=mysqli_query($con,$sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $uname=$row['owner_name'];
        $num=$row['owner_phone_number'];
        $email=$row['owner_email'];
    }
  }
  $num= $_SESSION['owner_phone'];
  $_SESSION['owner_email']=$email;


foreach($_SESSION["cart"] as $cart) {
    print_r($cart);
    $id= $cart["id"];

    extract($cart);
    

    $sql="INSERT INTO customer_order (title,price,owner_phone,vendor_id,customer_name) 
			VALUES ('$title','$price','$num','1','$uname')";

	$run= mysqli_query($con,$sql);

	if ($run){
    header("Location:success.php");
        echo $uname;
     
        echo $num;
        
         echo $email;
	}
	else {
		echo "unsuccessful" ;
	}

} 

?>

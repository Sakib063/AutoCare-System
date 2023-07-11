<?php 
session_start();
    $con = mysqli_connect("localhost","cmss","1234",'car_management_system_1');

if(isset($_POST['submit'])){

        $title= $value["title"] ;
        $price= $value["price"];
        $phone= $_SESSION['number'];
        

     if (isset($_SESSION["cart"])){
        $checkout = "INSERT INTO customer_order('title','price','owner_phone','vendor_id')
           VALUES ('$title', '$price', '$phone', '1')";
             mysqli_query($con,$checkout);


}
}
    ?>
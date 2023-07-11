<?php 
            
 session_start();
 $con = mysqli_connect("localhost","root","",'car_management_system');


        if(isset($_POST['submit'])){

            $title= $value["title"] ;
            $price= $value["price"];
            
    
         if (isset($_SESSION["cart"])){
            $checkout = "INSERT INTO customer_order('title','price','owner_phone','vendor_id')
               VALUES ('$title', '$price', '0', '1')";
                 mysqli_query($con,$checkout);
    
    
    }
         
         $item_array_id = array_column($_SESSION["cart"],"id");
         if (!in_array($_GET["id"],$item_array_id)){
             $count = count($_SESSION["cart"]);
             $item_array = array(
                 'id' => $_GET["id"],
                 'title' => $_POST["hidden_name"],
                 'price' => $_POST["hidden_price"],
                 'quantity' => $_POST["quantity"],

             );
             $_SESSION["cart"][$count] = $item_array;
            
         }
     }else{
         $item_array = array(
             
                 'id' => $_GET["id"],
                 'title' => $_POST["hidden_name"],
                 'price' => $_POST["hidden_price"],
                 'quantity' => $_POST["quantity"], 
         );

         $_SESSION["cart"][0] = $item_array;
     }
 



    ?>
    


    <h1> </h1>
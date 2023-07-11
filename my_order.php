
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
      $_SESSION['owner_phone']=$num;
      $_SESSION['owner_email']=$email;
        
            if (isset($_POST["add"])){
        
                if (isset($_SESSION["cart"])){
                    
                    $item_array_id = array_column($_SESSION["cart"],"id");
                    if (!in_array($_GET["id"],$item_array_id)){
                        $count = count($_SESSION["cart"]);
                        $item_array = array(
                            'id' => $_GET["id"],
                            'title' => $_POST["hidden_name"],
                            'price' => $_POST["hidden_price"],
                            'quantity' => $_POST["quantity"],
                            'date'=> $_GET["date"],
                        );
                        $_SESSION["cart"][$count] = $item_array;
                        echo '<script>window.location="shopping.php"</script>';
                    }else{
                        echo '<script>alert("Product is already Added to Cart")</script>';
                        echo '<script>window.location="shopping.php"</script>';
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
            }
        
            
                ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my_order.css">


    <title>My Orders</title>
</head>
<body>
<div class="card">
            <div class="title">Order Details</div>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                        <span >Date</span><br>
                        <span id="details">5 May 2023</span>
                    </div>
                    <div class="col-5 pull-right">
                       <h3> <span id="heading"><?php echo $uname ?></h3>
                        <span id="details"><?php echo $num ?></span>
                    </div>
                </div>      
            </div>      



           
                          
              

            <div class="pricing">
                <div class="row">
                    <div class="col-9">
                    <?php if(!empty($_SESSION["cart"])){
                    $total = 0;

                    foreach ($_SESSION["cart"] as $key => $value) {
                        

                        ?>

                        <span id="name"><?php echo $value["title"]; ?></span>  
                        <span id="quantity"> x <?php echo $value["quantity"]; ?></span> 

                        <span id="price">৳ <?php echo $value["price"]; ?></span> 
                       <?php $total = $total + ($value["quantity"] * $value["price"]); ?>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                       <?php } ?>
                    </div>
                </div>
            </div> <?php } ?>
            <div class="total">
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3"><big> ৳ <?php echo $total ?></big></div>
                </div>
            </div> 
           <br> <br>
           <h2 class="title"> Order Tracking </h2>
           <div class="container">
						<div class=" col-md-10 hh-grayBox pt45 pb20">
							<div class=" r">
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Ordered</p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Accepted</p>
								</div>
								<div class="order-tracking">
									<span class="is-complete"></span>
									<p>Delivered</p>
								</div>
							</div>
						</div>
</div>
            <div class="footerr">
                <div class="row">
                    <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
                </div>
                
               <h4> AUTOCARE </h4>
            </div>
        </div>
       
</body>
</html>
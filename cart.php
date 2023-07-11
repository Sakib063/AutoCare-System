<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link rel="stylesheet" href="cart.css">
<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #194376;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color:  #194376;
            color: white;

;
        }
        #total{ background-color:  #46C6CE;
                color: black;
                font-weight: bold;
            }
    </style>
</head>
<body>
    

    
    <!-- Navbar Start -->
    
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">

            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">AUTO</span>CARE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
                        <a href="home.php" class="nav-item nav-link">JOIN US!</a>
                            
                        <a href="shopping.php" class="nav-item nav-link">Marketplace</a>
                        <a href="#about" class="nav-item nav-link">About</a>

                    </div>
                
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<div style="height: 600px;">
<div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

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
        
            if (isset($_GET["action"])){
                if ($_GET["action"] == "delete"){
                    foreach ($_SESSION["cart"] as $keys => $value){
                        if ($value["id"] == $_GET["id"]){
                            unset($_SESSION["cart"][$keys]);
                            echo '<script>window.location="cart.php"</script>';
                        }
                    }
                }
            }
        
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["title"]; ?></td>
                            <td><?php echo $value["quantity"]; ?></td>
                            <td> ৳ <?php echo $value["price"]; ?> </td>
                            <td>
                                ৳ <?php echo number_format($value["quantity"] * $value["price"], 2); ?></td>
                            <td><a href="shopping.php?action=delete&id=<?php echo $value["id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["quantity"] * $value["price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th id="total" align="right">৳ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>

                        <?php
                    }
                ?>

            </table>
                </div>
        <form action="test_cart.php" method="POST">

            <div class="buttonn" >
           
             <input type="submit" 
                  name="submit"
                  value="checkout">         
                 


        </div>
        
    </form>

    </div>
                 
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">AUTOCARE </a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="https://htmlcodex.com">Flying Whales </a>
        </p>
    </div>
    <!-- Footer End -->
</body>

</html>
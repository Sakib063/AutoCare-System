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
?>

<!doctype html>
<html>
<head>
    <title>AutoCare-Marketplace</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cart.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
        }
        .container{ margin-top: 40px;  }
        .product{
            border: 1px solid #eaeaec;
            padding: 10px;
            text-align: center;
            background-color: white;
            margin: 20px;
        }
        .btn-success{
            background-color:#194376;
            border: none;
            position: relative;
            color: white;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            height: 50px;
}
        #shopimg{
            height: 230px;
        }
        table, th, tr{
            text-align: center;
            background-color: blue;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #194376;
            background-color: #efefef;
            padding: 2%;
            font-weight: lighter;


        }
        table th{
            background-color: #46C6CE

;
        }
        .button {
        cursor: pointer;
        border-radius: 6px;
        background-color: #194376;
        height: 60px;
        width: 70px;
        font-size: 15px;
        color: white;
    }

        .text-info
                {   font-size: 18px;
                    
                    text-align: justify;
            padding: auto;
            padding-bottom: 10px;
    
        }

        #logo{
            background-color:black;
            
        }
    </style>
</head>
<body>
   
        <!-- Navbar Start -->
        <div class="nav" style= " background-color: #194376; width: 1000; height: 60px;">

        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                     <h3 class="m-0 text-secondary"> <h1 class="m-0 text-secondary"><span class="text-primary">AUTO</span>CARE</h1>Marketplace</h3> 
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                      <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                        <a href="landing.php" class="nav-item nav-link active">Home</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
                        <a href="home.php" class="nav-item nav-link">JOIN US!</a>
                            
                        <a href="shopping.php" class="nav-item nav-link">Marketplace</a>
                        <a href=" " class="nav-item nav-link">About</a>
                        <div  style="  color: grey; padding-left: 20px; padding-top: 20px; line-height: 12px; float: right; width: 150px; margin-left:180px; margin-top: 20px; font-size: 15px; font-weight: bold;"> 
                        <p> Hello <?php echo $uname?>! <p>
                        </div>

                        </div>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


<!product>
<br>

    <div style="  display:flex; width:100%; height: 800px;">
        <div id= "product" style=" border:1px solid grey; float:left; width: 80%; margin-left: 200px; margin-top:70px; ">   
            <?php
            $query = "SELECT * FROM images ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {


                    ?>
                    <div  class="col-md-3">

                        <form method="post" action="shoppingcart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">

                                <img id="shopimg" src="uploads/<?=$row['image_url']?>" class="img-responsive"alt="">
              
                                <p class="text-info"> <?php echo $row["title"]; ?></p>
                                <p class="text-danger"> ৳ <?php echo  $row["price"]; ?></p>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add"  class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                        
                    </div>
                    
                    <?php
                }
            }
            
        ?>
        </div>
        <div id="cart">
            
<form action="cart.php" method="POST">
          
                
           <div class="cart" >
                   
              
            <button id="addcart" href="cart.php;"><i class="fa fa-shopping-cart" style="font-size:30px;color:white;margin-top: 5px;"></i>View Cart</button>
                   
                  </div>

        
    </form>
    
</div>


        </div>


</body>

</html>

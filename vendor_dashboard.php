<?php 
    session_start();
    include("dbcon/conn.php");
    $vid=$_SESSION['id'];
    $sql="SELECT * FROM vendor_info WHERE vendor_id='$vid'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $uname=$row['vendor_name'];
            $num=$row['vendor_phone_number'];
            $email=$row['vendor_email'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor page</title>
    
    <div class="container-fluid position-relative nav-bar p-0">
        <link href="css/style.css" rel="stylesheet">

    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="landing.php" class="navbar-brand">
                <h1 style= "color: #46C6CE;;" ><span  style= "color: #194376;" ; ">AUTO</span>CARE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="marketplace.php" class="nav-item nav-link">Marketplace</a>
                </div>
            </div>
        </nav>
    </div>
</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="color.css">
    
<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
</head>
<body>
<style>
    @media (min-width: 768px)
.col-md-5 {
    flex: 0 0 auto;
    width: 50%;
}
       
    </style>
</head>
<body>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">
                    <?php echo $uname?>
                    <br>
                    <?php echo $num ?>
                    <br>
                    <?php echo $email ?>
                </span>
            </div>
                
              
                <div class="proo" style="text-decoration:none;">
                    <a href="update_vendor.php"><Button id="upd" >Update Profile</Button></a>
                    <br><br>
                    <a href="upload.html"><Button id="upd" >Add a product</Button></a>
                    <br><br>
                    <a href="update_garage.php"><Button id="upd" >Add a garage</Button></a>
                    <br><br>
                    <a href="sp_service_form.php"><Button id="upd" >Special service</Button></a>


                    
                </div>  
        </div>
        <div style= "width: 50%" class="col-md-5 border-right">
            <div class="row mt-4">
            <div style="height:50px;"> </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-left">Service Requested by User details</h3>
                   

                </div>
                <div class="row mt-2">
                    <?php
                        $sql="SELECT * FROM cservice 
                        WHERE vendor_id=$vid";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            echo "<table class='center'>
                            <tr><th>Service</th> 
                            <th>Phone</th> 
                            <th>Action</th>
                            </tr>";
                            while($row=mysqli_fetch_assoc($result)){
                                $_SESSION['car']=$row['service_id'];
                                if($row['status']=="pending"){
                                    $iid =$row['service_id'];
                                    echo"
                                    <tr>
                                    <td>".$row["title"]."</td>
                                    <td style='width:50%;'>".$row["owner_phone"]."</td>
                                    <td>
                                        <form method='POST' action='action.php'>
                                            <input type='hidden' value='$iid' name='service'>
                                            <input style='background-color:rgb(87, 255, 118)
                                            ; border-radius:5px;' type='submit' name='done' value='Done'/>
                                            <input id='inp' style='background-color:rgb(255, 96, 96); border-radius:5px;' type='submit' name='reject' value='Reject'/>
                                        </form>
                                    </td>
                                    </tr>";
                                }
                            }
                            echo "</table>";
                        }
                        else{
                            echo "No Service requests";
                        }
                    ?>
                </div>
                <div class="row mt-3">

                </div>
                <div class="row mt-3">

                </div>
                <div class="row mt-2">
                    <h3>Your Orders</h3>
                    <?php
                       

                       

                        $sql = "SELECT customer_name,owner_phone,price,title FROM customer_order";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                        echo "<table class='center'>
                        <tr><th>Customer</th> 
                        <th>Phone</th> 
                        <th>Product</th> 
                        <th>Price</th>
                        <th>Action</th>

                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row["customer_name"]."</td>
                            <td>".$row["owner_phone"]."</td>
                            <td>".$row["title"]."</td>
                            <td style='width:20%;'>".$row["price"]."</td>
                            <td style='width:30%;'>
                                        <form method='POST' action='action.php'>
                                            <input type='hidden'  name='service'>
                                            <input style='background-color:#45FF24; border-radius:5px;' type='submit' name='done' value='Done'/>
                                            <input id='inp' style='background-color:#FF482B; border-radius:5px;' type='submit' name='reject' value='Reject'/>
                                        </form>
                                    </td>
                            </tr>";

                        }
                        echo "</table>";
                        } else {
                        echo "0 results";
                        }
                        // $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <div style= "width: 25%" class="col-md-4 border-right">
            <div class="p-3 py-5 ">
                <div class="px-3 p-1 add-experience" style="text-decoration:none;">
                
                    <form action="odash_index.php" method="Post">

                        <button style="font-size:20px" id="log" name="submit" type="submit"><i class="fa fa-sign-out"></i></button>
                    </form>
                </div>
                <br>
                
                
                <br>
                <div id="garage" >
               
                    <h3> My Garage Details </h3>
                    <br>
                    <?php
                        $id=$_SESSION['id'];
                        $sql="SELECT * FROM garage
                        WHERE vendor_id IN (SELECT vendor_id From vendor_info WHERE vendor_id=$id)";
                        $result=mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                $_SESSION['name']=$row['name'];
                                echo "<tr style='background-color: blue;'><td>" . $row["phone"]."<tr><td>"."<br>".$row["email"]."<br>"."<tr><td>".$row["address"]."<br>";
                                echo "<br>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "No garage added";
                        }
                    ?>
                    <!-- Popup of service -->
                        <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
                        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
                           <?php include("spec_req2.php"); ?>
                        </div>


                        <button class="r" onclick="w3_open()">Special Service</button>

                        




                        <script>
                        function w3_open() {
                        document.getElementById("mySidebar").style.display = "block";
                        }

                        function w3_close() {
                        document.getElementById("mySidebar").style.display = "none";
                        }
                        </script>








                </div>
                </div>
                <br>
                <div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="foot" class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">AUTOCARE </a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="https://htmlcodex.com">Flying Whales </a>
        </p>
    </div>
</body>
</html>
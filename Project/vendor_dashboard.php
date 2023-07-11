<?php 
    session_start();
    include("dbcon/conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">


    
    <style>
        body {
            background: cyan;
        }
        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }
        .profile-button:hover {
            background: #682773
        }
        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }
        .profile-button:active {
            background: #682773;
            box-shadow: none
        }
        .back:hover {
            color: #682773;
            cursor: pointer
        }
        .labels{
            font-size: 11px
        }
        .add-experience:hover{
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
        .button{
            top:20%;
            left:30%;
            width:130px;
            height:90px;
            margin-right:40px; 
            margin-bottom:20px; 
            border: none;
            color:#00008b;
            background-color:#46C6CE;
            border-radius: 5px;
            box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2);
        }
        table, th, td {
  border: 1px solid black;
}
        .button2{
            margin-right:10px; 
            margin-bottom:10px; 
            width:120px;
            height:50px;
            color:#00008b;
            background-color:orange;
            border:none;
            border-radius:15px;
        }
    </style>
</head>
<body>
<div class="container-fluid position-relative nav-bar p-0">
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
                    <a href="shopping.php" class="nav-item nav-link">Marketplace</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">
                    <?php echo $_SESSION['vname']?>
                </span>
                <span class="text-black-50">
                    <?php echo $_SESSION['vnumber']?>
                </span>
                <span class="text-black-50"> 
                <?php echo $_SESSION['vshop']?>
                </span>
            </div>
                <div class="px-3 p-1 add-experience" style="text-decoration:none;">
                    <form action="odash_index.php" method="Post">
                        <button name="submit" type="submit">Logout</button>
                    </form>
                </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Service Request details</h4>
                </div>
                <div class="row mt-2">
                    <?php
                        $sql="Select * from cservice 
                        Join vendor_info on cservice.vphone=vendor_info.vendor_phone_number";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                $_SESSION['car']=$row['owner_phone'];
                                echo "<tr><td>"."&nbsp;&nbsp;<tr><td>".$row["title"]."&nbsp;&nbsp;".$row['owner_phone']."<br>";
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
                <div class="row mt-3">
                    <h3>Your Orders</h3>
                    <?php
                        $servername = "localhost";
                        $username = "cmss";
                        $password = "1234";
                        $dbname = "car_management_system_1";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error){
                        die("Connection failed: ".$conn->connect_error);
                        }

                        $sql = "SELECT customer_name,owner_phone,price,title FROM customer_order";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        echo "<table class='center'>
                        <tr><th>Customer</th> 
                        <th>Phone</th> 
                        <th>Product</th> 
                        <th>Price</th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row["customer_name"]."</td>
                            <td>".$row["owner_phone"]."</td>
                            <td>".$row["title"]."</td>
                            <td>".$row["price"]."</td>
                            </tr>";
                        }
                        echo "</table>";
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span></span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;<a href="upload.html" style="text-decoration:none; color:black;">Add a Product</a></span></div><br>
                <div>
                </div>
                <br>
                <div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
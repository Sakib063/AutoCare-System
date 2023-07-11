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
    <title>Owner page</title>

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
                    <?php echo $_SESSION['name'] ?>
                </span><span class="text-black-50"><?php echo $_SESSION['number']?></span><span> </span></div>
                <div class="px-3 p-1 add-experience" style="text-decoration:none;">
                    <form action="odash_index.php" method="Post">
                        <button name="submit" type="submit">Logout</button>
                    </form>
                </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Order services</h4>
                </div>
                <div class="row mt-2">
                    <button class="button" onclick="location.href='vswash.php'">CAR WASH</button>
                    <button class="button" onclick="location.href='brake.php'">BRAKE CHANGE</button>
                    <button class="button" onclick="location.href='oil.php'">OIL CHANGE</button>
                </div>
                <div class="row mt-3">
                    <button class="button" onclick="location.href='tire.php'">TIRE CHANGE</button>
                    <button class="button" onclick="location.href='battery.php'">BATTERY REPLACE</button>
                    <button class="button" onclick="location.href='spark.php'">SPARK PLUG CHANGE</button>  
                </div>
                <div class="row mt-3">
                    <button class="button" onclick="location.href='wax.php'">WAX VEHICLE</button>
                    <button class="button" onclick="location.href='filter.php'">AIR FILTER REPLACE</button>
                    <button class="button" onclick="location.href='shock.php'">INSPECT SHOCKS AND STRUTS</button>    
                </div>
                <div class="row mt-3">
                    <button class="button" onclick="location.href='wiper.php'">REPLACE WINDSHIELD WIPERS</button>
                    <button class="button" onclick="location.href='wheel.php'">WHEEL ALIGN</button>
                    <button class="button" onclick="location.href='engine.php'">ENGINE DIAGNOSIS</button>    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Car details</span><span class="border px-3 p-1 add-experience"><a href="addcar.php" style="text-decoration:none; color:black;">Add a car</a>
                <br>   
            </span></div>
            <br>
                <div>
                    <?php
                        $id=$_SESSION['owner_id'];
                        $sql="Select * from vehicle 
                        Where owner_id in (Select o_id From owners_info where o_id=$id)";
                        $result=mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                $_SESSION['car']=$row['ca_id'];
                                echo "<tr><td>". $row["brand"]."&nbsp;&nbsp;<tr><td>".$row["model"]."<br>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "No cars added";
                        }
                    ?>
                </div>
                <br>
                <div>
                    <h3>Suggested</h3>
                    <?php
                        $sql="Select * from vehicle 
                        Where owner_id in (Select o_id From owners_info)";
                        $result=mysqli_query($conn,$sql);
                            if(isset($row["wash"])==1){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">CAR WASH</button>
                                <br>
                                <?php
                            }
                            if(isset($row["brake"])==1){
                                ?>
                                <button class="button2" onclick="location.href='brake.php'">BRAKE CHANGE</button>
                                <?php
                            }
                            if(isset($row["engine"])==1){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">ENGINE DIAGNOSIS</button>
                                <?php
                            }
                            if(isset($row["oil"])==1){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">OIL CHANGE</button>
                                <?php
                            }
                            if(isset($row["tire"])==1){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">TIRE CHANGE</button>
                                <?php
                            }
                            if(isset($row["wiper"])==0){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">WINDSHIELD WIPERS</button>
                                <?php
                            }
                            if(isset($row["filter"])==0){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">AIR FILTER REPLACE</button>
                                <?php
                            }
                            if(isset($row["wheel"])==0){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">WHEEL ALIGN</button>
                                <?php
                            }
                            if(isset($row["spark plug"])==0){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">SPARK PLUG</button>
                                <?php
                            }
                            if(isset($row["shock"])==0){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">SHOCKS AND STRUTS</button>
                                <?php
                            }
                            if(isset($row["batttery"])==0){
                                ?>
                                <button class="button2" onclick="location.href='vswash.php'">BATTARY REPLACE</button>
                                <?php
                            }
                    ?>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div>
                <!-- <select id="category" name="category">
                <option value="1">300 KM-1000KM</option>
                <option value="2">1000 KM-1500KM</option>
                <option value="3">1500 KM-3000KM</option>
                </select> -->
                </div>
                <div class="p-3 py-5">
                <span class="border px-3 p-1 add-experience"><a href="vendor_upload.php" style="text-decoration:none; color:black;">Sell Old Parts</a>
                </span></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
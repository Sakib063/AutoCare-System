<?php 
    session_start();
    include("dbcon/conn.php");
    $id=$_SESSION['owner_id'];
    $sql="SELECT * FROM owners_info WHERE owner_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $uname=$row['owner_name'];
            $num=$row['owner_phone_number'];
            $email=$row['owner_email'];
            $_SESSION['address']=$row['owner_address'];
        }
      }
      $_SESSION['owner_phone']=$num;
      $_SESSION['owner_email']=$email;
      $suggest=False;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner page</title>
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
                <a href="landing.php" class="nav-item nav-link">Home</a>
                <a href="forum.php" class="nav-item nav-link">Forum</a>
                <a href="shopping.php" class="nav-item nav-link">Marketplace</a>
                <div class="navbar-nav ml-auto py-0">
                        <a href="speciallist.php" class="nav-item nav-link">Special Services</a> 
                    </div>
                   
                </div>
            </div>
        </nav>
    </div>
</div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <style>
      
    .go{
        
        width:160px;
        margin-top: 20px;
        height:70px;
        border: none;
        color:blacck;
        font-size: 20px;
        text-decoration: none;
        background-color: #8cdaf0;
        border-radius: 4px;
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
                
                <div style="height: 300px; width: 300px;  margin-left: 60px"> 
                <div class="px-3 p-1 add-experience" style="text-decoration:none;">
                    <a href="update_owner.php"><button id="upd">Update Profile</button></a>
                </div>     
                <br>
                <div  style=" margin-left: 20px; "class="d"> <button id="upd"> <a href="add_car_.php" style="text-decoration:none; color:white;">Add a car</a> </button>
                <br><br>

                <button id="upd"><a href="vendor_upload.php" style="text-decoration:none; color:white;">Sell Old Parts</a></button>
                <br><br>
            </span></div>
        </div>
    </div>
    <div style= "width: 50%" class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">Order services</h2>
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
        <div style= "width: 25%" class="col-md-4 ">
            <div class="p-3 py-5 ">
                <div class="px-3 p-1 add-experience" style="text-decoration:none;">
                    <form action="odash_index.php" method="Post">
                        <button style="font-size:20px" id="log" name="submit" type="submit"><i class="fa fa-sign-out"></i></button>
                    </form>
                   
                </div>
        
                
            <br>
                <div>
                    <br>
                    <h2> Car Details </h2>
                    <?php
                        $sql="SELECT * FROM vehicle_info 
                        WHERE owner_id IN (SELECT owner_id From owners_info WHERE owner_id=$id)";
                        $result=mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                $_SESSION['car']=$row['v_id'];
                                echo "<tr><td >". $row["brand"]."&nbsp;&nbsp;<tr><td>".$row["model"]."<br>".$row["cyear"]."<br>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "No cars added";
                        }
                    ?>
                </div>
                <br><br>
                <button class="go" > <a style="text-decoration: none; color:#00008b;" href="shoppingcart.php"> Marketplace <i style='font-size:24px' class='fas'>&#xf290;</i></a> </button>
                <button class="go"><a style="text-decoration: none; color:#00008b;" href="forum 2/forum/index.php" > Forum <i style='font-size:25px; font-weight: bolder; margin-left: 10px;' class='far'>&#xf086;</i>
</a> </button>
                <br>
                <br>
                <div>
                    <h3>Suggested Services</h3>
                    <?php
                        $sql="SELECT date,title,status FROM cservice 
                        WHERE owner_id=$id AND status='done'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        if(mysqli_num_rows($result)==0){
                            ?>
                            <h1 style="color:#00008b;">Woohoo you are up to date!!</h1>
                            <?php
                        }
                        else{
                            $serve=$row['title'];
                            if($row['date']==date("Y-m-d")){
                                $suggest=TRUE;
                            }
                            if($suggest==TRUE){
                                ?>
                                <h1 style="color:purple">Woohoo you are up to date!!</h1>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Tire change'){
                                ?>
                                <button class="button2">Tire change</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Car Wash'){
                                ?>
                                <button class="button2">CAR WASH</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Car Waxing'){
                                ?>
                                <button class="button2">Car Waxing</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Wheel Change'){
                                ?>
                                <button class="button2">Wheel Change</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Change Spark Plug'){
                                ?>
                                <button class="button2">Change Spark Plug</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Shock and Struts inspection'){
                                ?>
                                <button class="button2">Shock and Struts inspection</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Change engine oil'){
                                ?>
                                <button class="button2">Change engine oil</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Air filter replacement'){
                                ?>
                                <button class="button2">Air filter replacement</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Engine Diagnosis'){
                                ?>
                                <button class="button2">Engine Diagnosis</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Replace Brake'){
                                ?>
                                <button class="button2">Replace Brake</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Change Car Battery'){
                                ?>
                                <button class="button2">Change Car Battery</button>
                                <br>
                                <?php
                            }
                            if($suggest==FALSE&&$serve=='Wiper Change'){
                                ?>
                                <button class="button2">Wiper Change</button>
                                <br>
                                <?php
                            }
                        }
                    ?>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div>
                    <!-- Popup of service -->
                    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
                        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
                        <br>
                           <?php include("speciallist2.php"); ?>
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
        </div>
    </div>
</div>
</div>
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
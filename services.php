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
    <title>User page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">

    
    <style>
        .bodys {
            background:    #17a2b8;

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
            /* left:30%; */
            width:50%;
            height:60px;
            margin-left:10%; 
            margin-bottom:20px; 
            border: none;
            color:#00008b;
            background-color:#46C6CE;
            border-radius: 5px;
            box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2);
        }
        .center {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            box-shadow: 2px;
        }

    </style>
</head>
<body>

   <!-- Topbar Start -->
 

    <!-- Navbar Start -->

    <div class="nav" style= " background-color: #194376; width: 1000;">

        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="landing.php" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">AUTO</span>CARE</h1>
                </a>
                <button type="button col" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="landing.php" class="nav-item nav-link active">Home</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
                        <a href="home.php" class="nav-item nav-link">JOIN US!</a>
                            
                        <a href="shopping.php" class="nav-item nav-link">Marketplace</a>
                        <a href="landing.php" class="nav-item nav-link">About</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<div class='bodys'>
    <div class="center rounded bg-white mt-5 mb-5">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3 center">
                        <h4 class="text-right">Order services</h4>
                    </div>
                    <div class="row  mt-2 center">
                        <div class='col'>
                                <div class=''>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                                <button class="button mt-3 font-weight-bold  col">CAR WASH</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div  class='w-50'>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                                <button class="button mt-3 font-weight-bold  col">BRAKE CHANGE</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                                <button class="button mt-3 font-weight-bold  col">OIL CHANGE</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                                <button class="button mt-3 font-weight-bold  col">SELL OLD PARTS</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">TIRE CHANGE</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">WAX VEHICLE</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">AIR FILTER REPLACE</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">INSPECT SHOCKS AND STRUTS</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">REPLACE WINDSHIELD WIPERS</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">MONTHLY MAINTAINANCE</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">WHEEL ALIGN</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">ENGINE DIAGNOSIS</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">Marketplace</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">Spark</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">Shocks</button>
                                </div>
                        </div>
                        <div class='col'>
                                <div>
                                    <img src="SerImg/Air.jpeg" alt="">
                                </div>
                                <div>
                    <button class="button mt-3 font-weight-bold  col">Call For Service</button>
                                </div>
                        </div>

                        
                    </div>
                    
                    <!-- <div class="row mt-3 grid center">
                        <button class="button col"></button>
                        <button class="button col"></button>
                         
                        <button class="button col">MONTHLY MAINTAINANCE</button>      
                    </div>
                    <div class="row mt-3 grid center">
                        <button class="button col">REPLACE WINDSHIELD WIPERS</button>
                        <button class="button col">WHEEL ALIGN</button>
                        <button class="button col">ENGINE DIAGNOSIS</button>  
                        <button class="button col">CALL FOR SERVICE</button>      
                    </div> -->
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Footer Start -->
 <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href=""><h1 class="text-secondary mb-3"><span class="text-white">AUTO</span>CARE</h1></a>
                <p>Never miss a repair of your vehicle through our reminders and get professionals for quality services in just one click at competitive prices.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <p>Get in touch with the AUTOCARE</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i> 22/145 Dog Squad Road, Mirpur 13</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+88 01758556802 +88 01780272410</p>
                <p><i class="fa fa-envelope mr-2"></i>AutoCare@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="shopping.php"><i class="fa fa-angle-right mr-2"></i>Marketplace</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Order A Quick Service</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Service you are looking for" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control border-0" placeholder="Mobile" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                    <h4> A merchant will get back to you shortly! </h4>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">AUTOCARE </a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="https://htmlcodex.com">Flying Whales </a>
        </p>
    </div>
    <!-- Footer End -->

</body>
</html>
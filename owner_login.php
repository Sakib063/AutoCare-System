<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                container-fluid bg-dark text-white py-4 px-sm-3 px-md-5{
                    bottom: 0;
                    
                }
            @import url('https://fonts.googleapis.com/css?family=Mukta');
                body{
                    font-family: 'Mukta', sans-serif;
                    background-repeat: no-repeat;
                    background-size:cover;
                    background-position:center;
                    position:relative;
                    overflow-y:hidden;
                    background: url(images/cl.png);
                    background-repeat: no-repeat;
                    background-position: center;
                }
                .login-reg-panel{
                    top: 50%;
                    transform: translateY(-50%);
                    text-align: center;
                    width:70%;
                    right:0;left:0;
                    
                    margin:auto;
                                margin-top: 300px;   
                    height:500px;
                    background-color: #17a2b8 ;
                    opacity: 0.85;
                }
                .white-panel{
                    background-color:#FFFFFF;
                    height:450px;
                    padding-top:50px;
                    margin-top: 25px;
                    position:absolute;
                    width:50%;
                    right:calc(50% - 50px);
                    transition:.3s ease-in-out;
                    z-index:0;
                    box-shadow: 0 0 35px 9px #00000096;
                    color:black;
                }
                .register-info-box{
                    width:30%;
                    padding:0 50px;
                    top:20%;
                    right:0;
                    position:absolute;
                    text-align:right;
                }
                .error {
                    background: #F2DEDE;
                    color: #A94442;
                    padding: 10px;
                    width: 95%;
                    border-radius: 5px;
                    margin: 20px auto;
                }
                .txtlft{
                text-align:left;
                }
                div.absolute{
                position: absolute;
                width: 50%;
                bottom: 10px;
                }
               
                .container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5{ 
                }
                .login {
                    height: 380px;

                }
                .button-login{
                    background-color: #194376;                   
                    cursor: pointer;
                    margin-top: -20px;
                    border-radius: 6px;
                    margin-left: 40px;
                    height: 50px;
                    width: 120px;
                    font-size: 15px;
                    color: white;

                    }
                    
            </style>
            <title>Owner login</title>
    </head>
    <body> 
        
    <!-- Navbar Start -->
    
        <div class="container-lg position-relative p-0 px-lg-3" style="">
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
        <div class="login">
        <div class="login-reg-panel">                  
            <div class="register-info-box">
                <h2>Don't have an account?</h2>
                <p><a href="owner_registration.php" style="color:black;">Sign in today!</a></p>
            </div>
                                
            <div class="white-panel">
                <form action="ownerlogin_index.php" method="POST">
                    <h2>Login</h2>
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <br>
                    <div>
                        <label>Username</label>
                        <input type="text" name="uname" placeholder="Enter username"><br>
                        <br>
                        <label>Password</label>
                        <input type="password" name="psw" placeholder="Enter password"><br>
                        <br>
                        <br>
                        <br>
                        <button class="button-login" type="submit">Login</button>
                        <br><br>
                         <a style="margin-left: 30px; " href="vender_login.php">  Log in as a vendor </a>
                    </div>
                </form>
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</html>
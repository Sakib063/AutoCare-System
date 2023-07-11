<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

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
    #title{
        font-family: "Raleway", sans-serif;
        color:#0b5a6e;;
    }
    body, html {height: 100%}
    .bgimg{
        background-image: url('images/w.png');
        min-height: 91.8%;
        background-position: center;
        background-size: fit;
        background-repeat: no-repeat;

    
    }
    .center{
        margin: auto;
        width: 50%;
        padding: 10px;
    }
    button{
        cursor: pointer;
        border-radius: 6px;
        background-color: #194376;;
        height: 50px;
        width: 150px;
        font-size: 15px;
        color: white;
    }
    
    .bottomleft{
        position: absolute;
        bottom: 0;
        right: 0;
        color: #D0D3D5;
    }
    label{
            font-size: .85rem;
            text-transform: uppercase;
            color: black;
        }
    
    .white-panel{
        margin-top: 60px;
        background-color: white ;
        padding-left: 70px;
        height:750px;
        width:55%;
        right:calc(50% - 50px);
        transition:.3s ease-in-out;
        z-index:0;
        box-shadow: 0 0 35px 9px #00000096;
        color:black;
        opacity: .85;
        padding-bottom: 90px;
        margin-bottom: 80px;
    }
    #sig { margin-left: 220px;
    margin-top: 20px;
    }
    .vendor{ 
        cursor: pointer;
        border-radius: 6px;
        background-color: #17a2b8;;
        height: 50px;
        width: 150px;
        font-size: 15px;
        color: white;
        margin-left: 30px;

    }
    .button {
        cursor: pointer;
        border-radius: 6px;
        background-color: #194376;;
        height: 50px;
        width: 120px;
        font-size: 15px;
        color: white;
    }
    .signup__link{ margin-left: 80px;
    text-decoration: underline;
   
    }

    #foot{
        position: relative;
        margin-top: 900px;
    }
    .y{ background-color: black;
        z-index: 10;}
</style>
</head>
<body>
    
    <div class="bgimg  w3-animate-opacity w3-text-white">
    <div class="nav" style= " background-color: #194376; width: 1000;">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            
                <nav class="navbar navbar-expand-lg bg-white navbar py-3 py-lg-0 pl-4 pl-lg-4">
                    <a href="" class="navbar-brand">
                        <h1 class="m-0 text-secondary"><span class="text-primary">AUTO</span>CARE</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="landing.php" class="nav-item nav-link active">Home</a>
                        </div>
                    </div>
                </nav>
</div>
</div>
    
 <div class="y">
<div class="white-panel w3-display-middle">
      


        <div class="signup__container">
        <div class="container__child signup__thumbnail">
           
            <h1 id="sig" class="heading--primary">Sign Up </h1>
            <br>
            </div>
            <div class="signup__overlay"></div>
        </div>
        <div class="container__child signup__form center txtlft">
            <form action="ownerreg_index.php" method="post">
            <div class="form-group">
                <label for="username">Name</label>
                <input class="form-control" type="text" name="owner_name" id="username" required />
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="owner_email" id="email" required />
            </div>
            <br>
            <div class="form-group">
                <label for="email">Address</label>
                <input class="form-control" type="text" name="owner_address" id="address" required />
            </div>
            <br>
            <div class="form-group">
                <label for="email">Phone number</label>
                <input class="form-control" type="text" name="owner_phone" id="phone" required />
            </div>
            <br>
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required />
            <br>
            <div class="m-t-lg">
                <ul class="list-inline">
                    <button name="submit" class="button" type="submit">Register</button>
                    <button class=" vendor" onclick="document.location='vendor_reg.php'">Become a Vendor!</button>
                    <br>
                    <br>
                    <br>

                    <a class="signup__link" href="home.php">I am already a member.</a>
                </ul>
            </div>
            </form>  
            
        </div>
        
        </div>
       
</div>
<div id="foot" class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">AUTOCARE </a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="https://htmlcodex.com">Flying Whales </a>
        </p>
    </div>
</html>
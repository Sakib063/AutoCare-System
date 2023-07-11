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
    h1{
        font-family: "Raleway", sans-serif;
        color:black;
    }
    body, html {height: 100%}
    .bgimg{
        background-image: url('images/w.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
        image-rendering: pixelated;
    }
    .center{
        margin: auto;
        width: 50%;
        padding: 10px;
    }
    button{
        cursor: pointer;
        border: 2px solid black;
        background-color: transparent;
        height: 50px;
        width: 150px;
        font-size: 15px;
        color: #3498db;
    }
    .bottomleft{
        position: absolute;
        bottom: 0;
        right: 0;
        color: #D0D3D5;
    }
    .white-panel{
        background-color:#FFFFFF;
        height:250px;
        width:55%;
        right:calc(50% - 50px);
        transition:.3s ease-in-out;
        z-index:0;
        box-shadow: 0 0 35px 9px #00000096;
        color:black;
        opacity: .85;
    }
</style>
</head>
<body>
    
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
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
                            <a href="landing.php" class="nav-item nav-link active">Home</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    
    <div class="white-panel w3-display-middle">
        <br>
        <h1>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
            WELCOME TO AUTOCARE
            <hr class="w3-border-black" style="margin:auto;width:60%">
        </h1>
        <br>
        <br>
        <div class="center">
            <button class="button" onclick="location.href='owner_login.php'">Login as Owner</button>
            &nbsp;&nbsp;
            &nbsp;&nbsp;
            <button class="button" onclick="location.href='vender_login.php'">Login as Vendor</button>
        </div>
    </div>
</div>
<div class="bottomleft">
     Powered by Flying Whales
</div>
</body>
</html>
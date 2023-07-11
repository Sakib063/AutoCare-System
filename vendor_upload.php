<?php     
    include("dbcon/conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #194376;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #17a2b8;
}
</style>
<head>
    <meta charset="utf-8">
    <title>AutoCare-Merchant</title>
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
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h3 class="m-0 text-secondary"> <h1 class="m-0 text-secondary"><span class="text-primary">AUTO</span>CARE</h1></h3>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                      <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="owner_dashboard.php" class="nav-item nav-link active">Home</a>
                    </div>
                </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-0 pt-lg-2 pb-0 mb-2">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                        <h1 class="heading--primary">Sell old part</h1>

                </div>
                
                </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                
                            </div>
                        </div>
                    </div>
                </div>
    
    <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
         
           <label>Product Image</label>
           <br>
       </br>
           <input type="file" 
                  name="my_image">

                  

        <div class="container__child signup__thumbnail">
            <br>
            <div class="thumbnail__content center">
            <br>
            </div>
            <div class="signup__overlay"></div>
        </div>
        <div class="container__child signup__form center txtlft">
            <form action="#">
            <div class="form-group">
                <label for="title">Product Title</label>
                <input class="form-control" type="text" name="title" id="title" required />
            </div>
            
<div>            
<label for="category">Category of product</label>

<select id="category" name="category">
  <option value="1">Interior Acccessories</option>
  <option value="2">Exterior Accessories</option>
  <option value="3">Tools</option>
  <option value="4">Spare Parts</option>
  <option value="5">Chemicals & Oils </option>


</select>
</div>
<br>
<div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" id="price" required />
            </div>
            <br>
             <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" required />
            </div>
            <br>
        
            <div class="m-t-lg">
                <ul class="list-inline">
                <li>
             
             <input type="submit" 
                  name="submit"
                  value="Upload">         
                   </li>
                <br>
                <li>
                </li>
                </ul>
            </div>
            </form>  
        </div>
        </div>
    <!-- Contact End -->


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
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketplace</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Customer Reviews</a>
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
</body>

</html>
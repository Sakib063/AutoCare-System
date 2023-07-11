<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            @import url('https://fonts.googleapis.com/css?family=Mukta');
                body{
                    font-family: 'Mukta', sans-serif;
                    height:100vh;
                    min-height:550px;
                    background-size:cover;
                    background-position:center;
                    position:relative;
                    overflow-y:hidden;
                    background: url(images/vl.png);
                    background-repeat: no-repeat;
                    background-position: center;
                }
                .login-reg-panel{
                    position: relative;
                    top: 50%;
                    transform: translateY(-50%);
                    text-align:center;
                    width:70%;
                    right:0;left:0;
                    margin:auto;
                    height:400px;
                    background-color: #87CEEB;
                    opacity: 0.85;
                }
                .white-panel{
                    background-color:#FFFFFF;
                    height:500px;
                    position:absolute;
                    top:-50px;
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
                
            </style>
            <title>Vendor login</title>
    </head>
    <body>
        <div class="login-reg-panel">                  
            <div class="register-info-box">
                <h2>Don't have an account?</h2>
                <p><a href="vendor_reg.php" style="color:black;">Sign in today!</a></p>
            </div>
                                
            <div class="white-panel">
                <form action="vendorlogin_index.php" method="post">
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
                        <input type="text" name="psw" placeholder="Enter password"><br>
                        <br>
                        <br>
                        <br>
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="absolute txtlft">
        <?php include('templates/footer.php')?>
        </div>
</html>
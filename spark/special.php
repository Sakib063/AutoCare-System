<?php 
    session_start();
    include("dbcon/conn.php");
    $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
        font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
        background: #e9e9e9;
        background-image: url(images/garage.jpg);
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        }
        a,
        [type="submit"] {transition: all .25s ease-in;}
        .signup__container{
        position: absolute;
        height: 50%;
        top: 50%;
        right: 0;
        left: 0;
        margin-right: auto;
        margin-left: auto;
        transform: translateY(-50%);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        width: remy(800px);
        height: remy(480px);
        border-radius: remy(3px);
        box-shadow: 0px remy(3px) remy(7px) rgba(0,0,0,.25);
        }
        .signup__overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,.76);
        }
        .container__child{
        width: 50%;
        height: 100%;
        color: #fff;
        opacity: .95;
        }
        .signup__thumbnail{
            position: relative;
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background: url(images/garage.jpg);
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
            image-rendering: pixelated;
        }
        .thumbnail__logo,
        .thumbnail__content,
        .thumbnail__links{
        position: relative;
        z-index: 2;  
        }
        .thumbnail__logo {align-self: flex-start;}
        .logo__shape {fill: #fff;}
        .logo__text {
        display: inline-block;
        font-size: .8rem;
        font-weight: 700;
        vertical-align: bottom;
        }
        .thumbnail__content{
            align-self: center;
        }
        .center{
        margin: auto;
        width: 60%;
        text-align: center;
        padding: 10px;
        }
        h1,
        h2 {
        font-weight: 300;
        color: rgba(255,255,255,1);
        }
        .heading--primary {font-size: 1.999rem;}
        .heading--secondary {font-size: 1.414rem;}
        .thumbnail__links {
            align-self: flex-end;
            width: 100%;
        }
        .signup__form {
            padding: 2.5rem;
            background: #fafafa;
        }
        label{
            font-size: .85rem;
            text-transform: uppercase;
            color: black;
        }
        .form-control {
            background-color: transparent;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }
        [type="text"] {color: #111;}
        [type="password"] {color: #111;}
        .btn--form{
            padding: .5rem 2.5rem;
            font-size: .95rem;
            font-weight: 600;
            height:50px;
            text-transform: uppercase;
            color: #fff;
            background: purple;
            border:none;
        }
        .signup__link{
            font-size: .8rem;
            font-weight: 600;
            text-decoration: underline;
            color: #999;
        }
        div.absolute{
            position: absolute;
            width: 50%;
            bottom: 10px;
        }
        .txtlft{
            text-align:left;
        }
        

    </style>
    <title>Add Service</title>
</head>
<body>
    <div class="signup__container">
    <div class="container__child signup__thumbnail">
        <br>
        <div class="thumbnail__content center">
        <h1 class="heading--primary">Add Service</h1>
        <br>
        </div>
        <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form center txtlft">
    <form action="special_index.php" method="POST">
        <div class="form-group">
            <label for="sname">Service Name</label>
            <input class="form-control" type="text" name="sname" id="sname" required />
        </div>
        <br>
        <div class="form-group">
            <label for="garage">Garage</label>
            <input class="form-control" type="text" name="garage" id="garage" required />
        </div>
        <br>
        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price" required />
        </div>
        <div class="form-group">
            <input type="hidden" name="vid" id="vid" value="<?php echo $id ?>" required />
        </div>
        <br>
        <div class="m-t-lg">
            <ul class="list-inline">
            <li>
                <button name="submit" class="btn btn--form" type="submit">Add</button>
            </li>
            <br>
            </ul>
        </div>
        </form>  
    </div>
    </div>

    <div class="absolute txtlft">
    <?php include('templates/footer.php')?>
    </div>
</body>
</html>
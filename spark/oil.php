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
    <title>Select Vendor</title>
    <style>
        body{
            font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
            background: #e9e9e9;
            background-repeat: no-repeat;
            background-size: cover;
            image-rendering: pixelated;
        }
        .container{
            top:0;
            bottom:0;
            margin: auto;
            padding: 50px;
            background-color:#FFFFFF;
            height:100%;
            width:55%;
            right:calc(50% - 50px);
            box-shadow: 0 0 35px 9px #00000096;
            color:black;
            opacity: .85;
        }
        .button {
            background-color: cyan;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            line-height: 20px;
            list-style: none;
            margin: 0;
            outline: none;
            padding: 10px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button:hover,
        .button:focus {
            background-color: #F082AC;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Change engine oil</h3>
    <?php
        $sql="SELECT * FROM garage";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $vphone=$row["phone"];
                $vid=$row["vendor_id"];
                $garage=$row["name"];
                echo "<tr><td>".$garage."&nbsp;&nbsp;<tr><td>".$vphone."&nbsp;&nbsp;<tr><td>".$row["address"]."&nbsp;&nbsp;<tr><td>".$row["email"];
                "<br>";
                ?>
                <form action="service_index.php" method='POST'>
                    <input type="hidden" name="garage" value="<?php echo $garage ?>">
                    <input type="hidden" name="title" value="Change engine oil">
                    <input type="hidden" name="vid" value="<?php echo $vid ?>">
                    <input type="hidden" name="vphone" value="<?php echo $vphone ?>">
                    <button class="button" name="submit">Book online</button> 
                    <button class="button" onclick="location.href='owner_login.php'">Call</button> 
                </form>
                <br>
        <?php
            }
        }
    ?>

    </div>
</body>
</html>
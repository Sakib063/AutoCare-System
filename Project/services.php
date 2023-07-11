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


    
    <style>
        body {
            background: rgb(99, 39, 120)
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
        .center {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="center rounded bg-white mt-5 mb-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3 center">
                    <h4 class="text-right">Order services</h4>
                </div>
                <div class="row mt-2 center">
                    <button class="button">CAR WASH</button>
                    <button class="button">BRAKE CHANGE</button>
                    <button class="button">OIL CHANGE</button>
                    <button class="button">SELL OLD PARTS</button>
                </div>
                <div class="row mt-3 center">
                    <button class="button">TIRE CHANGE</button>
                    <button class="button">BATTERY REPLACE</button>
                    <button class="button">SPARK PLUG CHANGE</button> 
                    <button class="button">MARKETPLACE</button> 
                </div>
                <div class="row mt-3 center">
                    <button class="button">WAX VEHICLE</button>
                    <button class="button">AIR FILTER REPLACE</button>
                    <button class="button">INSPECT SHOCKS AND STRUTS</button>  
                    <button class="button">MONTHLY MAINTAINANCE</button>      
                </div>
                <div class="row mt-3 center">
                    <button class="button">REPLACE WINDSHIELD WIPERS</button>
                    <button class="button">WHEEL ALIGN</button>
                    <button class="button">ENGINE DIAGNOSIS</button>  
                    <button class="button">CALL FOR SERVICE</button>      
                </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
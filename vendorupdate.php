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
    <title>Update Profile</title>
    <style>
        #container{
            margin: 20% 30% 0 30%;
            background-color: red;
        }
    </style>
</head>
<body>
    <div id="container">
        <form action="vendorupdate_index.php" method="POST">
            <label for="uname">Name</label>
            <input type="text" name="uname">
            <br><br>
            <label for="phone">Phone</label>
            <input type="text" name="phone">
            <br><br>
            <label for="email">Email</label>
            <input type="email" name="email">
            <br><br>
            <label for="address">Address</label>
            <input type="text" name="address">
            <br><br><br>

            <input type="submit" value="Update">
        </form>
    </div>
    <div>
        Please Send an Email at AutoCare@support.com if you want to change your password
    </div>
    <div>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="submit" name="delete" value="DELETE ACOUNT">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['delete'])){
        $id=$_SESSION['id'];
        $sql="DELETE FROM vendor_info WHERE vendor_id='$id'";
        $run=mysqli_query($conn,$sql);
        if ($run){
            header("Location:landing.php");	
        }
        else {
            echo "unsuccessful" ;
        }
    }
?>
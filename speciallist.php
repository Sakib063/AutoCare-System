
<style> 
input[name=submit]{

  border-radius: 6px;
   margin-top: 20px;
  background-color: rgb(58, 253, 142);
  height: 30px;
  width: 70px;
  font-size: 15px;
}
</style>
<?php
    session_start();
    include("dbcon/conn.php");
    $oid=$_SESSION['owner_id'];

    $sql="SELECT * FROM sservice";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            
            $title=$row['title'];
            $garage=$row['garage'];
            echo "<tr><td>". $row["title"]."&nbsp;&nbsp;<tr><td>".$row["price"]."<br>"."&nbsp;&nbsp;<tr><td>".$row["garage"]."<br>"."&nbsp;&nbsp;<tr><td>".$row["vphone"]."<br>";?>
     


            
            <form action="special_list.php" method="POST">
               <tr> <td><input type="hidden" name='vid' value="<?php echo $row["vendor_id"]  ?>"></td> </tr>
                <td><input type="hidden" name='vphone' value="<?php echo $row["vphone"]  ?>"></td>
                <td><input type="hidden" name='title' value="<?php echo $title  ?>"></td>
                <td><input type="hidden" name='garage' value="<?php echo $garage ?>"></td>
                <td><input type="Submit" name='submit' value="Order"></td>
            </form>
            <?php
        }
        echo "</table>";
    }

?>
<?php
$servername = "localhost";
$username = "cmss";
$password = "1234";
$dbname = "car_management_system_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customer_name,owner_phone,price,title FROM customer_order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Customer Name</th><th>Phone</th><th>Product</th><th>Price</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["customer_name"]."</td><td>".$row["owner_phone"]."</tr><td>".$row["title"]."</tr><td>".$row["price"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

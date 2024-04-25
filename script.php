<?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  $say = htmlspecialchars($_POST['quant']);
  $to  = htmlspecialchars($_POST['pid']);
  $name  = htmlspecialchars($_POST['name1']);
  $price  = htmlspecialchars($_POST['price']);
  $prod = $say*$price;

  echo  $say, '<br> ', $to, '<br>', $name ;
  echo 'Name: ', $name, '<br>Product Code: ', $to, '<br>Quantity: ', $say, '<br>Price: ', $prod, '<br>' ;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "games";
  $conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 } 
 $sql = "INSERT INTO `order` (pid, pname, quantity, price) VALUES ('$to', '$name', '$say', '$prod')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
  ?>
<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "games";
							$data1 = "";
							if (isset($_REQUEST['variable1'])&& !empty($_REQUEST['variable1'])) 
							{ 
							$data1 = $_REQUEST['variable1']; 
							echo "test";
							}
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							     die("Connection failed: " . $conn->connect_error);
							} 
							
							$int = (int)$data1;
							$sql = "SELECT name, iname FROM action where id=$int";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							     // output data of each row
							     while($row = $result->fetch_assoc()) {
							     	
							         echo "<br> <strong> Name: </strong> ". $row["name"].  "";
							         echo "<br> <strong> Product Code: </strong> ". $row["id"].  "";
							         echo "<br> <strong> Availability: </strong> In Stock ";
							         echo "<br> <h4><strong> Price: Rs ". $row["price"].  "</strong></h4>";
							         echo "<a href='themes/images/ladies/" . $row["iname"] . "'' class='thumbnail' data-fancybox-group='group1' title='" . $row["name"] ."'>";
							         echo "<img src='themes/images/ladies/" . $row["iname"] . "' alt=''></a>";
							         echo "<img src='/php_test/image_archive/" . $last_file[0] . "' alt='error'>";


							     }
							} else {
							     echo "0 results";
							}

							$conn->close();
							?>  


								
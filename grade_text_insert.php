<?php
 	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 	 
	 $sql = "INSERT INTO cart (user_id, product_id, product_amount) VALUES ('".$login_id."', '".$id."', '1')  ";
	 $result = $conn->query($sql);
	 if ($result === TRUE){
	 	echo "added to shopping cart";
	 }
	 else{
	 echo $sql.$conn->error;
	 }

?>
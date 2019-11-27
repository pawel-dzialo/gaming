<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0, 1";
	 $result = $conn->query($sql);
	 while($row=$result->fetch_assoc()){
	 	$id_max = $row["product_id"];
	 }
?>
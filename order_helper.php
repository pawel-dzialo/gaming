<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM orders WHERE user_id=".$login_id;
	 $result = mysqli_query($conn, $sql);
	 $products = array();
	 $amounts = array();
     $orders = array();
     while($row = mysqli_fetch_assoc($result)){
        array_push($orders, $row['order_id']);
	 	array_push($products, $row['product_id']);
		array_push($amounts, $row['order_amount']);
	}
    

?>
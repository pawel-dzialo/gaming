<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM cart WHERE user_id=".$login_id;
	 $result = mysqli_query($conn, $sql);
	 $products = array();
	 $amounts = array();
     $prices = array();
     while($row = mysqli_fetch_assoc($result)){
	 	array_push($products, $row['product_id']);
		array_push($amounts, $row['product_amount']);
        array_push($prices, $row['cart_price']);
	}
    

?>
<?php 
    include 'session.php';
    $product_id = $_GET['p_id'];
	  	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
     $price = $_GET['price'];
     $flag = TRUE;
     $sql = "DELETE FROM cart WHERE user_id = ".$login_id." && product_id=".$product_id." AND cart_price=".$price;
	 $result = $conn->query($sql);
    header("location:cart.php");
?>
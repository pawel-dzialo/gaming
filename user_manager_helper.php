<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM users where user_id=".$id;
	 $result = mysqli_query($conn, $sql);
     $name;
     $adress;
     while($row = mysqli_fetch_assoc($result)){
        $id= $row['user_id'];
	 	$name= $row['user_name'];
		$adress = $row['user_adress'];
	}
        $sql = "SELECT * FROM orders where user_id=".$id;
	    $result = mysqli_query($conn, $sql);
        $order_ids = array();
	    $product_ids = array();
        $amounts = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($order_ids, $row['order_id']);
            array_push($product_ids, $row['product_id']);
            array_push($amounts, $row['order_amount']);

        }
     
    

?>
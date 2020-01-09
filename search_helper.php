<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM products
    WHERE product_name LIKE '%{$search}%'";
	 $result = mysqli_query($conn, $sql);
	 $ids = array();
     while($row = mysqli_fetch_assoc($result)){
        array_push($ids, $row['product_id']);
	}
    

?>
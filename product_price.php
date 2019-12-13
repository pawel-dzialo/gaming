<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT product_price FROM products WHERE product_id=".$id;
	 $result = $conn->query($sql);
	 while($row=$result->fetch_assoc()){
        if($row["product_price"]!=0){
	 	  echo $row["product_price"];
		  $price = $row["product_price"];
        }
        else{
            echo 'product price';
            $price = 'product price';
        }
	 }
?>
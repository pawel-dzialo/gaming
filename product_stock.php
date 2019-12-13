<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 $product_stock = 0;
	 $sql = "SELECT product_stock FROM products WHERE product_id=".$id;
	 $result = $conn->query($sql);
     while($row=$result->fetch_assoc()){
        if($row["product_stock"]!="NULL"){

         echo $row["product_stock"];
         $product_stock = $row["product_stock"];
        }
        else{
            echo'Product stock';
        }
         }
?>

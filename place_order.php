<?php
	  	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 $out_of_stock = false;
	 $sql = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 0, 1";
	 $result = $conn->query($sql);
	 while($row=$result->fetch_assoc()){
	 	$id_max = $row["order_id"];
	 }
	 $id_max = $id_max+1;
	 $flag = TRUE;
     $product_stock = 0;
     for($i = 0; $i<count($products);$i++){
     $sql = "SELECT product_stock FROM products WHERE product_id=".$products[$i];
     $result = $conn->query($sql);
     while($row=$result->fetch_assoc()){
     $product_stock = $row["product_stock"];
     
     }
     if($amounts[$i]>$product_stock){
         echo 'Sorry, we are out of stock on ';
         $id = $products[$i];
         include 'product_name.php';
         echo  ' and could not place your order';
         $out_of_stock = true;
     }
     }
     if($out_of_stock == false){
	 for($i=0;$i<count($products);$i++){
	 	$sql = "INSERT INTO orders (order_id, user_id, product_id, order_amount, order_price) VALUES ('".$id_max."','".$login_id."', '".$products[$i]."', '".$amounts[$i]."', '".$prices[$i]."')  ";
		$result = $conn->query($sql);
	 	if ($result === TRUE){
  	 	}
	  	else{
			 $flag = FALSE;
	 	}
        $sql = "SELECT product_stock FROM products WHERE product_id=".$products[$i];
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
        if($row["product_stock"]!=0){
         $product_stock = $row["product_stock"];
         $product_stock = $product_stock - $amounts[$i];
         echo $product_stock;
        }
        else{
        }
        }

        $sql = "UPDATE products SET product_stock=".$product_stock." WHERE product_id=".$products[$i];
		$result = $conn->query($sql);
	 	if ($result === TRUE){
  	 	}
	  	else{
             echo $sql.$conn->error;
			 $flag = FALSE;
	 	}
	 }
	 if($flag == TRUE){
         for($i=0;$i<count($products);$i++){
             $sql = "DELETE FROM cart WHERE user_id=".$login_id;
             $result = $conn->query($sql);
             if ($result === TRUE){
             }
             else{
                 $flag = FALSE;
             }
         }
	 }
     if($flag == TRUE){
         echo 'order placed';
         header('location:cart.php?order=1');
     }
     }
?>
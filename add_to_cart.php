<?php
 	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
     	 $sql = "SELECT * FROM products WHERE product_id=".$id;
	 $result = $conn->query($sql);
     while($row=$result->fetch_assoc()){
        if($row["product_stock"]!="NULL"){
         $product_stock = $row["product_stock"];
         $price = $row["product_price"];
        }
         }
     if($product_stock>0){
     $sql = "SELECT * FROM cart WHERE user_id=".$login_id." AND product_id=".$id." AND cart_price=".$price;
     $result = $conn->query($sql);
     echo $conn -> error;
     if(mysqli_num_rows($result)!=0){
          while($row=$result->fetch_assoc()){
            $amount = $row["product_amount"]+1;
        }
        $sql = "UPDATE cart SET product_amount=".$amount." WHERE product_id=".$id." AND user_id=".$login_id." AND cart_price=".$price;
        $result = $conn->query($sql);
     }
     else{
	 $sql = "INSERT INTO cart (user_id, product_id, product_amount, cart_price) VALUES ('".$login_id."', '".$id."', '1', '".$price."')  ";
	 $result = $conn->query($sql);
     }
	 if ($result === TRUE){
	 	echo "added to shopping cart";
	 }
	 else{
     echo 'wow';
	 echo $sql.$conn->error;
     echo 'wow2';
	 }
     }
     else{
         header('location:main.php');
     }

?>
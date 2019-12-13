<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 include 'admin_session.php';
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
     $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 0, 1";
	 $result = $conn->query($sql);
	 while($row=$result->fetch_assoc()){
	 	$id_max = $row["product_id"];
	 }
	 $id_max = $id_max+1;
	 $sql = "INSERT INTO products (product_id, product_name, product_desc, product_price) VALUES ('".$id_max."','NULL', 'NULL', 'NULL')  ";
	 $result = mysqli_query($conn, $sql);
     if ($result === TRUE){
         header('location:changeprod.php?id='.$id_max);
  	 }
     else{
      die(mysqli_error($conn));
     }
    

?>
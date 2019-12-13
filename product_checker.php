<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT product_name FROM products WHERE product_id=".$id;
	 $result = $conn->query($sql);
     $exists = FALSE;
	 while($row=$result->fetch_assoc()){
        if($result == FALSE){
            $exists = FALSE;
        }
        else{
            $exists = TRUE;
        }
	 }
?>
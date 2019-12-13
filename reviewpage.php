<?php
 	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 	 
	 $sql = "INSERT INTO grade (user_id, product_id, grade_text, grade) VALUES ('".$login_id."', '".$id."', '".$gradetextvar."','".$gradevar."')  ";
	 $result = $conn->query($sql);
	 if ($result === TRUE){
	 	echo "added to shopping cart";
	 }
	 else{
	 echo $sql.$conn->error;
	 }

?>
<?php
 	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 	 
	# $sql = "UPDATE products SET product_name ='".$getname."' WHERE id ='".$id."'";
     $sql = "UPDATE products SET product_desc ='".$getdesc."' WHERE product_id ='".$id."'";
     #$sql = "INSERT INTO grade (user_id, product_id, grade_text, grade) VALUES ('".$login_id."', '".$id."', '".$gradetextvar."','".$gradevar."')  ";
	 $result = $conn->query($sql);
	 if ($result === TRUE){
         echo "work";
	 }
	 else{
	 echo $sql.$conn->error;
	 }

?>
<?php
 	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
     include 'user_counter.php';
     $id_max = $id_max+1;
	# $sql = "UPDATE products SET product_name ='".$getname."' WHERE id ='".$id."'";
     $sql = "INSERT INTO `users`(`user_id`, `user_name`, `user_password`, `user_adress`, `status`, `user_email`) VALUES ('".$id_max."','".$getname."','".$getpassword."','".$getadress."','user','".$getemail."')";
     #$sql = "INSERT INTO grade (user_id, product_id, grade_text, grade) VALUES ('".$login_id."', '".$id."', '".$gradetextvar."','".$gradevar."')  ";
	 $result = $conn->query($sql);
	 if ($result === TRUE){
                 header("Location: main.php?register=1");
	 }
	 else{
	 echo $sql.$conn->error;
	 }

?>
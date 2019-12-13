<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT user_name FROM users WHERE user_id=".$id;
	 $result = $conn->query($sql);
	 while($row=$result->fetch_assoc()){
	 	echo $row["user_name"];
	 }
?>
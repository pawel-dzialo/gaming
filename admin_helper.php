<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM users";
	 $result = mysqli_query($conn, $sql);
	 $ids = array();
	 $names = array();
     $adresses = array();
     while($row = mysqli_fetch_assoc($result)){
        array_push($ids, $row['user_id']);
	 	array_push($names, $row['user_name']);
		array_push($adresses, $row['user_adress']);
	}
    

?>
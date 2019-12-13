<?php
	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
	 
	 $sql = "SELECT * FROM grade WHERE product_id=".$id;
	 $result = mysqli_query($conn, $sql);
	 $users = array();
	 $gradeint = array();
     $grade_tex = array();
     while($row = mysqli_fetch_assoc($result)){
	 	array_push($users, $row['user_id']);
		array_push($gradeint, $row['grade']);
		array_push($grade_tex, $row['grade_text']);
	}
    

?>
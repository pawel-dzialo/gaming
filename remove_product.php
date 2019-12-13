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
             $sql = "DELETE FROM products WHERE product_id=".$_GET['id'];
             $result = $conn->query($sql);
             if ($result === TRUE){
                 header('location:main.php?deletion=1');
             }
             else{
                 echo 'something went wrong';
             }
?>
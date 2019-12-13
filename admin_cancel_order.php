<?php 
    include 'admin_session.php';
     $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 $id=$_GET['id'];
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
     $flag = TRUE;
     $sql = "SELECT user_id FROM orders where order_id=".$id;
	 $result = $conn->query($sql);
     while($row=$result->fetch_assoc()){
	 	$user_id = $row['user_id'];
	 }
     if($flag == TRUE){

        $sql = "DELETE FROM orders WHERE order_id=".$id;
        $result = $conn->query($sql);
        if ($result === TRUE){
        }
        else{
            $flag = FALSE;
        }
    }
    header("location:user_manager.php?id=".$user_id);
?>
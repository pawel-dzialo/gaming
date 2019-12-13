<?php 
    include 'session.php';
    $id = $_GET['id'];
	  	 $servername = "localhost";
	 $username ="root";
	 $password = "";
	 $dbname ="shop";
	 
	 $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 if($conn->connect_error){
	 	die("Connection failed:" . $conn->connect_error);
	 }
     $flag = TRUE;
     $sql = "SELECT user_id FROM orders where order_id=".$id;
	 $result = $conn->query($sql);
     while($row=$result->fetch_assoc()){
	 	if($row["user_id"]==$login_id){
            
        }
        else{$flag = FALSE;}
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
    header("location:my_orders.php");
?>
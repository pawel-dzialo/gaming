<?php
   include('config.php');
   session_start();
   if(isset($_SESSION['login_user'])){
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from users where user_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_id = $row['user_id'];
   $login_session = $row['user_name'];
   $login_adress = $row['user_adress'];
   $login_email = $row['user_email'];
   $login_status = $row['status'];
   $login_flag = TRUE;
   }
   
   else{
   $login_flag = FALSE;	
   }
?>
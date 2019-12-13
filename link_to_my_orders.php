<?php
   //include('config.php');
   //session_start(); 
   if(isset($_SESSION['login_user'])){
      echo "<a href=\"my_orders.php\">my orders</a>";
   }
?>
<?php
   //include('config.php');
   //session_start(); 
   if(isset($_SESSION['login_user'])){
      echo "<a href=\"user_info.php\">profile</a>";
   }
?>
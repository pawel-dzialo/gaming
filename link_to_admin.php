<?php
   //include('config.php');
   //session_start(); 
   if(isset($_SESSION['login_user'])){
    if($login_status=='admin'){
        echo "<a href=\"admin.php\">control panel</a>";
      }
   }
?>
<?php
   if(isset($_SESSION['login_user'])){
      echo "<a href=\"logout.php\">log out</a>";
   }
   else{
   	  echo "<a href=\"login.php\">log in</a>";
   }
?>
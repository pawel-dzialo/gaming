<?php
   include('session.php');
?>
<html>
   
   <head>
   </head>
   
   <body>
   		<a href="main.php">back to main page</a>
       		 <a href="logout.php">log out</a></br>
    User Info:</br> <?php 
		 echo 'name:';
		 echo $login_session;
         echo '</br>';
		 echo '  adress:';
   		 echo $login_adress;
         echo '</br>';
		 echo '  email:';
   		 echo $login_email;
         echo '</br>';
		 echo '  user status:';
   		 echo $login_status;
         echo '</br>';?>
		 

   </body>
   
</html>

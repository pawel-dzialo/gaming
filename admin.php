<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Fri, 22 Nov 2019 05:16:11 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <title></title>
    <?php
   include('admin_session.php');
   ?>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

      <a href="main.php">back to main page</a>
  		<a href="logout.php">log out</a></br>
      list of users:
  		<?php 
			  include 'admin_helper.php';
			  for($i=0;$i<count($ids);$i++){
			   echo '<div id=\'customeritem\'>';
               echo 'id:'.$ids[$i];
			   echo "</a>";
			   echo '   name: ';
			   echo $names[$i];
			   echo '   adress: ';
               echo $adresses[$i];
               echo '<a href="user_manager.php?id='.$ids[$i].'">manage user</a>';
			   echo '</div>';
			  }
		?>
        </br>
        <a href='add_product.php'>add product</a>
		</div>

  </body>
</html>

<!-- Först, kolla hur många produkter kopplade till user i cart. använd värdet i en for-loop som skriver ut en users varje item i cart table -->
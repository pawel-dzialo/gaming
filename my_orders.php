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
   include('session.php');
   ?>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		<a href="main.php">back to main page</a>
  		<a href="logout.php">log out</a>
		<a href="user_info.php">profile</a>
		<div id="cart_items">
  		<?php 
			  include 'order_helper.php';
			  for($i=0;$i<count($products);$i++){
			   echo '<div id=\'cartitem\'>';
               echo 'order id:'.$orders[$i];
			   $id = $products[$i];
			   echo " <a href=\" product_test.php?id=";
			   echo $id;
			   echo " \" >";
			   echo "<br>";
			   include 'product_name.php';
			   echo "</a>";
			   echo 'amount:';
			   echo $amounts[$i];
			   echo 'price:';
			   echo $prices[$i];
               echo '<a href="cancel_order.php?id='.$orders[$i].'">cancel order</a>';
			   echo '</div>';
			  }
		?>
		</div>

  </body>
</html>

<!-- Först, kolla hur många produkter kopplade till user i cart. använd värdet i en for-loop som skriver ut en users varje item i cart table -->
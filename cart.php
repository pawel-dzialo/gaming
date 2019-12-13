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
              if(isset($_GET['order'])){
                  echo'order placed';
              }
			  include 'cart_helper.php';
			  for($i=0;$i<count($products);$i++){
			   echo '<div id=\'cartitem\'>';
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
			   echo $amounts[$i];
			   echo '*';
			   include 'product_price.php';
			   echo '=';
			   echo $amounts[$i]*$price;
               echo '<a href="cart_remover.php?p_id='.$id.'">remove entry</a>';
			   echo '</div>';
			  }
		?>
		</div>

		<form method="post">
        <input type="submit" name="order" class="button" value="place order" />
    	</form>
		<?php
			if(array_key_exists('order', $_POST)) { 
           		include 'place_order.php';
        	} 
		?>
  </body>
</html>

<!-- Först, kolla hur många produkter kopplade till user i cart. använd värdet i en for-loop som skriver ut en users varje item i cart table -->
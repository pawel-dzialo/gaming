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
      orders of user
  		<?php 
              $id = $_GET['id'];
			  include 'user_manager_helper.php';
              echo $name;
              echo '</br>';
              for($i=0; $i<count($order_ids);$i++ ){
                  echo 'order id:';
                  echo $order_ids[$i];
                  echo ' product: ';
                  $id = $product_ids[$i];
                  echo '<a href="product_test.php?'.$id.'">';
                  include 'product_name.php';
                  echo '</a>';
                  echo ' amount: ';
                  echo $amounts[$i];
                  echo ' <a href="admin_cancel_order.php?id='.$order_ids[$i].'">cancel order</a>';
                  echo '</br>';
              }
		?>
		</div>

  </body>
</html>

<!-- Först, kolla hur många produkter kopplade till user i cart. använd värdet i en for-loop som skriver ut en users varje item i cart table -->
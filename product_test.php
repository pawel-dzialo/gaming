<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Thu, 14 Nov 2019 14:52:13 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		<div id="content">
			 <div id = "top">
			 	  <div id ="header">
				  <?php 
				  	$id = $_GET['id'];
				    include 'product_name.php';
				  ?>
			 			</div>
			 
			 	   <div id = "price">
				  <?php 
				  	$id = $_GET['id'];
				    include 'product_price.php';
				  ?>
				  $
			 	</div>
			 </div>
			 
			 <div id = "pic">
			 <img src="test.bmp"></img>
			 </div>
			 

			 
			 <div id = "desc">
			 	  <?php 
				  	$id = $_GET['id'];
				    include 'product_desc.php';
				  ?>

			 </div>

		</div>
  </body>
</html>
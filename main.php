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
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		<?php 
			  include 'product_counter.php';
			  $items_on_page = 9;
			  $page_amount = ceil($id_max/$items_on_page);
			  $page = $_GET['page'] ?? '1';
			  
			  
			  for($id=(($page-1)*$items_on_page)+1;$id<=$page*$items_on_page && $id <= $id_max;$id++){
			  	   echo "<div id=\"item\"><img src=\"img/" .$id. ".bmp  \" height=\"100\" width=\"100\">";
			  	   echo " <a href=\" product_test.php?id=";
				   echo $id;
				   echo " \" >";
				   include 'product_name.php';
				   echo "</a>";
				   include 'product_price.php';
				   echo "</div>";
			  }
			  
			  
			  
			  echo "<br><br><br>";
			  
			  
			  
			  
			  
			  
			  //create page selector
			  for($i=1;$i<=$page_amount;$i++){
			  	   echo " <a href= \" main.php?page=".$i." \" >".$i. "</a>" ;
			  }
		
		
		
		
		
		
		?>
  </body>
</html>
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
        <?php include 'session_accessible.php';?>
        <?php if(isset($_GET['deletion'])){
            echo 'product removed succesfully';
        }
        if(isset($_GET['register'])){
            echo 'user registered succesfully';
        }?>
  		<?php include 'link_to_login.php';?>
        <?php include 'link_to_register.php';?>
		<?php include 'link_to_profile.php';?>
		<?php include 'link_to_cart.php';?>
        <?php include 'link_to_my_orders.php';?>
        <?php include 'link_to_admin.php';?>
      <div id="search">
                      <?php
                echo '<form method="post">';
                echo '<input type="text" name="term" class="text"/>';
                echo '<input type="submit" name="search" class="button" value="search"/>';
                echo '</form>';
                
                if(array_key_exists('search', $_POST)) { 
                    $term = $_POST['term'];
                    header("location:search.php?term=".$term);
                    exit;
                }
            ?>
      </div>
		<div id="items">
  		<?php 
              $search = $_GET['term'];
              if($search == ''){
                  echo'Please enter a search term';
              }
              else{
			  include 'search_helper.php';
              if (count($ids)==0){
                  echo 'No items found matching search term';
              }
              else{
              for($i = 0;$i<count($ids);$i++){
                   $id = $ids[$i];
                   echo "<div id=\"item\"><img src=\"img/" .$id. ".bmp  \" height=\"100\" width=\"100\">";
			  	   echo " <a href=\" product_test.php?id=";
				   echo $id;
				   echo " \" >";
				   echo "<br>";
				   include 'product_name.php';
				   echo "</a>";
				   include 'product_price.php';
				   echo "</div>";
              }
              }
			  
			  
			  
			  echo "<br><br><br>";
		
		
		
              }
		
		?>
		</div>
  </body>
</html>
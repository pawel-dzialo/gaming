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
    <?php include 'session_accessible.php'; ?>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		<div id="content">
		
		<a href="main.php">back to main page</a>
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
             <?php
			 echo "<img src='img/".$id.".bmp'>";
             ?>
			 </div>
			 

			 
			 <div id = "desc">
			 	  <?php 
				  	$id = $_GET['id'];
				    include 'product_desc.php';
                    echo '</br>Stock:';
                    include 'product_stock.php'
                    
				  ?>
				  		<?php
                        if($login_flag === TRUE){
                            if($product_stock > 0){
                            echo '<form method="post">';
                            echo '<input type="submit" name="order" class="button" value="add to cart" />';
                            echo '</form>';
                            }
                            else{echo 'product out of stock';}
                            if($login_status === 'admin'){
                                echo ' <a href="changeprod.php?id=';
                                echo $id;
                                echo '">';
                                echo "<button>change product</button>";
                                echo "</a>";
                                echo ' <a href="remove_product.php?id=';
                                echo $id;
                                echo '">';
                                echo "<button>remove product</button>";
                                echo "</a>";
                        }
                        }
                        ?>
				  <?php
				  	   $id = $_GET['id'];
					    if(array_key_exists('order', $_POST)) { 
           					include 'add_to_cart.php';
        			   } 
				  ?>
			 </div>
                        <div id ="gradeing"> <div id="reviews"><h1>Reviews</h1>
           <?php
        $id = $_GET['id']; 
        include 'grade_text.php';
        ?>
       
            <?php
         echo '<form method="post">';
         #echo '<input type="text" name="get_grade" class="text"/>';
         echo  '<select name="get_grade">';
         echo   '<option value="1">1</option>';
         echo   '<option value="2">2</option>';
         echo   '<option value="3">3</option>';
         echo  '<option value="4">4</option>';
         echo  '<option value="5">5</option>';
         echo  '</select>';
         echo '<input type="text" name="get_text" class="text"/>';
         echo '<input type="submit" name="sumb" class="button"/>';
         echo '</form>';
      ?>
             <?php
				  	   $id = $_GET['id'];
					    if(array_key_exists('sumb', $_POST)) { 
                            $gradevar = $_POST['get_grade'];
                            $gradetextvar = $_POST['get_text'];
           					include 'reviewpage.php';
                            header("location:product_test.php?id=".$_GET['id']);
                            exit;
        			   } 
            
				  ?>
             
                </div>
		</div>

        </div>
  </body>
</html>
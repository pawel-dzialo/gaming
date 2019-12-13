<html lang="en">
<head>
<?php include 'admin_session.php'; ?>
<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
</head>
<body>
    <a href="main.php">back to main page</a>
    <div id = "changeprod">
    <div id = "top">
        <div id ="header">
            product name:
            <?php 
            $id = $_GET['id'];
            include 'product_name.php';
            ?>
            <?php
                echo '<form method="post">';
                echo '<input type="text" name="get_name" class="text"/>';
                echo '<input type="submit" name="namechange" class="button"/>';
                echo '</form>';
                
                if(array_key_exists('namechange', $_POST)) { 
                    $getname = $_POST['get_name'];
                    $id = $_GET['id'];
                    include 'changename.php';
                    header("location:changeprod.php?id=".$_GET['id']);
                    exit;
                }
            ?>
                            

        </div>
         <div id = "pic2">
             picture:
            <?php 
            $id = $_GET['id'];
            
            
			 echo "<img src=\"img/" .$id. ".bmp  \" height=\"60\" width=\"60\">"
			 ?>
            <?php
                echo '<form method="post" enctype="multipart/form-data">';
                echo '<input type=file name=get_browse class="button" value="browse"/>';
                echo '<input type="submit" name="picchange" class="button"/>';
                echo '</form>';
                
                if(array_key_exists('picchange', $_POST)) { 
                    $getpic = $_FILES["get_browse"]["tmp_name"];
                    $id = $_GET['id'];
                    include 'picchange.php';
                    header("location:changeprod.php?id=".$_GET['id']);
                    exit;
                }
            ?>
                            

        </div>
			 </div>
    <div id = "under">
        <div id = "price2">
            price:
            <?php 
            $id = $_GET['id'];
            include 'product_price.php';
			?>
            <?php
                echo '<form method="post">';
                echo '<input type="text" name="get_price" class="text"/>';
                echo '<input type="submit" name="pricechange" class="button"/>';
                echo '</form>';
                
                if(array_key_exists('pricechange', $_POST)) { 
                    $getprice = $_POST['get_price'];
                    $id = $_GET['id'];
                    include 'changeprice.php';
                    header("location:changeprod.php?id=".$_GET['id']);
                    exit;
                }
            ?>
              
				  
		</div>

        <div id = "desc2">
            Description:
			 	  <?php 
				  	$id = $_GET['id'];
				    include 'product_desc.php';
				  ?>
            <?php
                echo '<form method="post">';
                echo '<input type="text" name="get_desc" class="text"/>';
                echo '<input type="submit" name="descchange" class="button"/>';
                echo '</form>';
                
                if(array_key_exists('descchange', $_POST)) { 
                    $getdesc = $_POST['get_desc'];
                    $id = $_GET['id'];
                    include 'changedesc.php';
                    header("location:changeprod.php?id=".$_GET['id']);
                    exit;
                }
            ?>
    </div>
    </div>
        <div id = "stockchanger">
            Stock:
                        <?php
                echo '<form method="post">';
                echo '<input type="text" name="get_stock" class="text"/>';
                echo '<input type="submit" name="stockchange" class="button"/>';
                echo '</form>';
                
                if(array_key_exists('stockchange', $_POST)) { 
                    $getprice = $_POST['get_stock'];
                    $id = $_GET['id'];
                    include 'stock_update.php';
                    header("location:changeprod.php?id=".$_GET['id']);
                    exit;
                }
            ?>
              
        </div>
        
        </div>
    </div>
    
</body>
</html>
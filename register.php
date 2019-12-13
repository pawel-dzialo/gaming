<?php 
    echo '<form method="post">';
    echo 'Name:<input type="text" name="get_name" class="text"/></br>';
    echo 'Password<input type="password" name="get_password" class="text"/></br>';
    echo 'Email<input type="text" name="get_email" class="text"/></br>';
    echo 'Adress:<input type="text" name="get_adress" class="text"/></br>';
    echo '<input type="submit" name="register" class="button"/></br>';
    echo '</form>';
                
    if(array_key_exists('register', $_POST)) { 
        $getname = $_POST['get_name'];
        $getpassword = $_POST['get_password'];
        $getemail = $_POST['get_email'];
        $getadress = $_POST['get_adress'];
        include 'register_helper.php';
    }
?>
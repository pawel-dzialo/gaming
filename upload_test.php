<?php
$ftp_server = "localhost";
$ftp_user_name="admin";
$ftp_user_pass ="admin";
$destination_file = "test.png";
$filename = "C:\Users\apwel\Desktop\questionmark.PNG";


$conn_id = ftp_connect($ftp_server) or die("<span style='color:#FF0000'><h2>Couldn't connect to $ftp_server</h2></span>");        // set up basic connection
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) or die("<span style='color:#FF0000'><h2>You do not have access to this ftp server!</h2></span>");   // login with username and password, or give invalid user message
$upload = ftp_put($conn_id, $destination_file, $filename, FTP_BINARY);  // upload the file
?>
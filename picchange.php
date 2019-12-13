<?php
$ftp_server = "localhost";
$ftp_user_name="Admin";
$ftp_user_pass ="hej";
$destination_file = $id.".bmp";
  #  echo $destination_file;
  #  echo $filename
#$filename = "C:\Users/enab7/Desktop/test.jpg";
$filename = $getpic;
echo $filename;
echo $destination_file;

$conn_id = ftp_connect($ftp_server) or die("<span style='color:#FF0000'><h2>Couldn't connect to $ftp_server</h2></span>");        // set up basic connection
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) or die("<span style='color:#FF0000'><h2>You do not have access to this ftp server!</h2></span>");   // login with username and password, or give invalid user message
$upload = ftp_put($conn_id, $destination_file, $filename, FTP_BINARY);  // upload the file
?>
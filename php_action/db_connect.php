<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}


// 5f4dcc3b5aa765d61d8327deb882cf99
?>

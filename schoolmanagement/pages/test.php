<?php

$database = 'schoolmanagement';
$user = 'admin';
$pass = 'lab-passowrd';
$host = 'database-1.ch9ko7w2w007.us-east-1.rds.amazonaws.com';

$conn = new mysqli($host, $user, $pass, $database);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
if ($conn->connect_error) {
    print_r($conn->connect_error);
}
else{
    print_r("Connected successfully");
}
?>
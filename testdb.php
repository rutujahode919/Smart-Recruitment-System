<?php
$conn = new mysqli("localhost","projectuser","1234","recruitment");

if($conn->connect_error){
    die("DB Error: " . $conn->connect_error);
}

echo "DB Connected Successfully";
?>

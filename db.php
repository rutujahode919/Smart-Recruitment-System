<?php
$conn = new mysqli("localhost","projectuser","1234","recruitment");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

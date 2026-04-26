<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$job_id = $_GET['id'];

$sql="INSERT INTO applications(user_id,job_id,status)
      VALUES('$user_id','$job_id','Applied')";

$conn->query($sql);

echo "Applied Successfully";
?>

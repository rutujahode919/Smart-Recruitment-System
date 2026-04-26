<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: #f4f6f9;
}

.navbar{
    background: linear-gradient(to right, #667eea, #764ba2);
}

.card{
    border-radius: 15px;
    transition: 0.3s;
}

.card:hover{
    transform: scale(1.05);
}

</style>

</head>

<body>

<!-- 🔷 Navbar -->
<nav class="navbar navbar-dark">
<div class="container-fluid">
<span class="navbar-brand">💼 Smart Recruit</span>

<a class="btn btn-light" href="logout.php">Logout</a>
</div>
</nav>

<!-- 🔷 Dashboard Content -->
<div class="container mt-5">

<h2 class="mb-4">Welcome to Dashboard 🎉</h2>

<div class="row">

<!-- Post Job -->
<div class="col-md-4">
<div class="card shadow p-4 text-center">
<h4>📢 Post Job</h4>
<p>Create new job openings</p>
<a href="post_job.php" class="btn btn-primary">Go</a>
</div>
</div>

<!-- View Jobs -->
<div class="col-md-4">
<div class="card shadow p-4 text-center">
<h4>📄 View Jobs</h4>
<p>Browse available jobs</p>
<a href="jobs.php" class="btn btn-success">Go</a>
</div>
</div>

<!-- Applications -->
<div class="col-md-4">
<div class="card shadow p-4 text-center">
<h4>📥 Applications</h4>
<p>Check applied jobs</p>
<a href="applications.php" class="btn btn-warning">Go</a>
</div>
</div>

</div>

</div>

</body>
</html>

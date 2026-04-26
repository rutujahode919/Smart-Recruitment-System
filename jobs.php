<?php
include 'db.php';
$result = $conn->query("SELECT * FROM jobs");
?>

<!DOCTYPE html>
<html>
<head>
<title>Jobs</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: #f5f7fa;
}

.header{
    text-align: center;
    margin-bottom: 40px;
}

.header h2{
    font-weight: bold;
}

.card{
    border-radius: 15px;
    border: none;
    transition: 0.3s;
}

.card:hover{
    transform: translateY(-5px);
}

.company{
    color: #6c757d;
    font-size: 14px;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="header">
<h2>💼 Available Jobs</h2>
<p class="text-muted">Find your perfect opportunity</p>
</div>

<div class="row">

<?php while($row=$result->fetch_assoc()){ ?>

<div class="col-md-4">
<div class="card shadow-sm p-3 mb-4">

<h5><?php echo $row['title']; ?></h5>

<p class="text-muted"><?php echo $row['description']; ?></p>

<p class="company"><?php echo $row['company']; ?></p>

<a href="apply.php?id=<?php echo $row['id']; ?>" 
   class="btn btn-outline-primary w-100">
   Apply
</a>

</div>
</div>

<?php } ?>

</div>

<a href="dashboard.php" class="btn btn-dark w-100 mt-3">⬅ Back to Dashboard</a>

</div>

</body>
</html>
  

<?php
include 'db.php';

if(isset($_POST['post'])){
    $title=$_POST['title'];
    $desc=$_POST['description'];
    $company=$_POST['company'];

    $sql="INSERT INTO jobs(title,description,company)
          VALUES('$title','$desc','$company')";

    if($conn->query($sql)){
        $success = "Job Posted Successfully!";
    } else {
        $error = "Error posting job!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Post Job</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(to right, #43cea2, #185a9d);
    height:100vh;
}

.card{
    border-radius: 20px;
}

input, textarea{
    border-radius: 10px !important;
}

</style>

</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card p-4 shadow-lg" style="width:450px;">

<h3 class="text-center mb-3">📢 Post a Job</h3>

<?php if(isset($success)){ ?>
<div class="alert alert-success"><?php echo $success; ?></div>
<?php } ?>

<?php if(isset($error)){ ?>
<div class="alert alert-danger"><?php echo $error; ?></div>
<?php } ?>

<form method="post">

<input class="form-control mb-3" type="text" name="title" placeholder="Job Title" required>

<textarea class="form-control mb-3" name="description" placeholder="Job Description" required></textarea>

<input class="form-control mb-3" type="text" name="company" placeholder="Company Name" required>

<button class="btn btn-dark w-100" name="post">Post Job</button>

</form>

<a href="dashboard.php" class="btn btn-light w-100 mt-3">⬅ Back to Dashboard</a>

</div>

</div>

</body>
</html>

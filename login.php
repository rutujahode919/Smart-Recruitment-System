<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $result=$conn->query("SELECT * FROM users WHERE email='$email'");
$row=$result->fetch_assoc();

if($row && password_verify($password,$row['password'])){
    $_SESSION['user_id']=$row['id'];
    header("Location: dashboard.php");
    exit();
} else {
    $error="Invalid Login!";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(to right, #36d1dc, #5b86e5);
}
.card{
    border-radius: 15px;
}
</style>

</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card p-4 shadow" style="width:400px;">

<h2 class="text-center mb-3">Login</h2>

<?php if(isset($error)){ ?>
<div class="alert alert-danger"><?php echo $error; ?></div>
<?php } ?>

<form method="post">
<input class="form-control mb-3" type="email" name="email" placeholder="Email" required>
<input class="form-control mb-3" type="password" name="password" placeholder="Password" required>

<button class="btn btn-success w-100" name="login">Login</button>
</form>

<p class="text-center mt-3">
New user? <a href="register.php">Register</a>
</p>

</div>

</div>

</body>
</html>


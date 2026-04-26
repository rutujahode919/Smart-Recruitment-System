<?php 
include 'db.php';

if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role=$_POST['role'];

    $sql="INSERT INTO users(name,email,password,role)
          VALUES('$name','$email','$password','$role')";

    if($conn->query($sql)){
        $success = "Registration Successful!";
    } else {
        $error = "Something went wrong!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(to right, #667eea, #764ba2);
}

.card{
    border-radius: 15px;
}

h2{
    font-weight: bold;
}
</style>

</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card p-4 shadow" style="width:400px;">

<h2 class="text-center mb-3">Create Account</h2>

<?php if(isset($success)){ ?>
<div class="alert alert-success"><?php echo $success; ?></div>
<?php } ?>

<?php if(isset($error)){ ?>
<div class="alert alert-danger"><?php echo $error; ?></div>
<?php } ?>

<form method="post">

<input class="form-control mb-3" type="text" name="name" placeholder="Full Name" required>

<input class="form-control mb-3" type="email" name="email" placeholder="Email" required>

<input class="form-control mb-3" type="password" name="password" placeholder="Password" required>

<select class="form-control mb-3" name="role">
<option value="candidate">Candidate</option>
<option value="recruiter">Recruiter</option>
</select>

<button class="btn btn-primary w-100" name="register">Register</button>

</form>

<p class="text-center mt-3">
Already have an account? <a href="login.php">Login</a>
</p>

</div>

</div>

</body>
</html>

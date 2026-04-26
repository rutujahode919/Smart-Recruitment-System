<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("db.php");

/* JOIN QUERY - professional output */
$sql = "
SELECT 
    a.id,
    a.user_id,
    a.job_id,
    a.status,
    u.name AS user_name,
    j.title AS job_title
FROM applications a
LEFT JOIN users u ON a.user_id = u.id
LEFT JOIN jobs j ON a.job_id = j.id
";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Applications</title>

    <!-- Bootstrap CDN for professional design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }
        .container{
            margin-top:40px;
        }
        .card{
            padding:20px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }
        h2{
            text-align:center;
            margin-bottom:20px;
            font-weight:bold;
        }
        .badge-status{
            background:green;
            padding:5px 10px;
            border-radius:8px;
            color:white;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">

        <h2>Job Applications List</h2>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Job Title</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['user_name'] ?? 'N/A'; ?></td>
                    <td><?php echo $row['job_title'] ?? 'N/A'; ?></td>
                    <td>
                        <span class="badge-status">
                            <?php echo $row['status']; ?>
                        </span>
                    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </div>
</div>

</body>
</html>

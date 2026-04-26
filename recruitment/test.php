<?php
include "db.php";

if ($conn) {
    echo "AWS DB Connected Successfully!";
} else {
    echo "Connection Failed!";
}
?>

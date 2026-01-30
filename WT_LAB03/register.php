
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "START<br>";

$conn = mysqli_connect("localhost", "root", "", "usersdb");

if (!$conn) {
    die("Database connection failed");
}

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "DATA INSERTED SUCCESSFULLY";
} else {
    echo "ERROR: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

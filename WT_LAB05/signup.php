<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters!";
        exit;
    }

    // Check duplicate email
    $existing = $usersCollection->findOne(['email' => $email]);
    if ($existing) {
        echo "Email already exists!";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $insertResult = $usersCollection->insertOne([
        'username' => $username,
        'email' => $email,
        'password' => $hashedPassword,
        'createdAt' => new MongoDB\BSON\UTCDateTime()
    ]);

    if ($insertResult->getInsertedCount() > 0) {
        echo "Signup successful! <a href='index1.html'>Login Now</a>";
    } else {
        echo "Signup failed!";
    }
}
?>
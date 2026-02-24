<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    $user = $usersCollection->findOne(['email' => $email]);

    if (!$user) {
        echo "Invalid email or password!";
        exit;
    }

    if (!password_verify($password, $user['password'])) {
        echo "Invalid email or password!";
        exit;
    }

    $_SESSION['user_id'] = (string)$user['_id'];
    $_SESSION['username'] = $user['username'];

    header('Location: dashboard.php');
    exit;
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == "admin@gmail.com" && $password == "1234") {
            echo "Login successful";
        } else {
            echo "Invalid login";
        }

    } else {
        echo "Email or password missing";
    }

} else {
    echo "Please login from the form";
}
?>


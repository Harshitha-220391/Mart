
<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

*/


error_reporting(E_ALL);
ini_set('display_errors',1);
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=trim($_POST['username']);
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);

        $username=strtolower($username);
        $username=ucwords($username);
        $email=strtolower($email);

        if(strlen($username)<5)
            {
                die("username must be at least 5 characters");
            }
            if(strlen($password)<3)
                {
                    die("password must be at least 3 characters");
                }
                $username=htmlspecialchars($username);
                $email=htmlspecialchars($email);
                $password=addslashes($password);
                $sql="INSERT INTO users(username,email,password)
                 VALUES('$username','$email','$password')";
                 if(mysqli_query($conn,$sql))
                 {
                    echo "registration successful";
                 }
                 else
                 {
                    echo "error:".mysqli_error($conn);
                 }

    }
    ?>

<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful";
    } else {
        echo "Invalid email or password";
    }

} else {
    echo "Please login from the form";
}

*/


error_reporting(E_ALL);
ini_set('display_errors',1);
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       $email=trim($_POST['email']);
        $password=trim($_POST['password']);

        $email=strtolower($email);
        $sql="SELECT * FROM users
        WHERE LOWER(email)='$email'";
        $result=mysqli_query($conn,$sql);
        if(!$result)
            {
                die("query failed");
            }
            if(mysqli_num_rows($result)==1)
                {
                    $row=mysqli_fetch_assoc($result);
                    if(strcmp($row['password'],$password)==0)
                        {
                            echo "login successful";
                            print "<br>welcome ".$row['username'];
                        }
                        else
                        {
                            echo "invalid password";
                        }
                }
                else
                {
                    echo "invalid username";
                }
}
?>
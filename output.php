<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

    if (trim($username) == "" || empty ($username)){
        echo "Username is empty"."<br>";
    } else {
        echo "Username: ". $_POST["username"]."<br>";
    }

    if (trim($password) == trim ($confirm_password)){
        header("location: demo.php?success=Registration Successful");
    } else {
        header("location: demo.php?error=Password Mismatch");
    }

    /*echo "Username: ". $_POST["username"]."<br>";
    echo "Email: ". $_POST["email"]."<br>";
    echo "Password: ". $_POST["password"]."<br>";
    echo "Confirm Password: ". $_POST["confirm_password"]."<br>";
    }

    if (trim($email) == "" || empty ($email)){
        echo "Email is empty"."<br>";
    } else {
        echo "Email: ". $_POST["email"]."<br>";
    }

    if (trim($password) == "" || empty ($password)){
        echo "Password is empty"."<br>";
    } else {
        echo "Password: ". $_POST["password"]."<br>";
    }

    if (trim($confirm_password) == "" || empty ($confirm_password)){
        echo "Confirm Password is empty"."<br>";
    } else {
        echo "Confirm Password: ". $_POST["confirm_password"]."<br>";
    }*/

    }

    else {
        echo "Invalid method type";
    }
?>
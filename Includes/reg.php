<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'moon_db');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "SELECT*FROM users_table WHERE name = '$name'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {

        echo 'Account already exists';
    } else {
        $insert = "INSERT INTO users_table(name,email,password) VALUES('$name', '$email', '$password')";
        mysqli_query($conn, $insert);
        echo 'account successfully created';
        header('Location:../sections/login.php');
    }
}

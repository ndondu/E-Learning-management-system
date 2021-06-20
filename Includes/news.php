<?php
session_start();

if (isset($_POST['submit'])) {
    include '../Includes/connect.php';

    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    $query = mysqli_query($conn, "INSERT INTO news(title, message, user_id ) VALUES('$title', '$message', '$user_id')");
}

<?php
session_start();



if (isset($_POST['enroll'])) {


    $conn = mysqli_connect('localhost', 'root', '', 'moon_db');

    $course = $_POST['course'];
    $course_id = $_POST['course_id'];
    $user_id = $_SESSION['user_id'];


    $insert = "INSERT INTO my_courses(course, course_id, user_id) VALUES('$course', '$course_id','$user_id ')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        $_SESSION['msg'] = "Enroll Successfully !!";
        header("location:../sections/dashboard.php");
    } else {
        $_SESSION['msg'] = "course enroll failed !!";
        header("location:../sections/enrollcourse.php");
    }
}

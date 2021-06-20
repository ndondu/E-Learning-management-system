<?php
session_start();

if (isset($_POST['submit'])) {
    include '../Includes/connect.php';

    $topic = $_POST['topic'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $notes = $_FILES['notes']['name'];
    $course_id = $_POST['id'];
    $classroom = $_POST['classroom'];
    $url = $_POST['url'];

    $target_dir = "../images/" . basename($notes);


    $query = mysqli_query($conn, "INSERT INTO lesson(topic, title, description, notes, course_id, classroom, url ) VALUES('$topic', '$title', '$description','$notes', '$course_id', ' $classroom', '$url')");
    if (move_uploaded_file($_FILES['notes']['tmp_name'], $target_dir));
}

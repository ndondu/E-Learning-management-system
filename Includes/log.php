<?php
session_start();


$message = "";
if (count($_POST) > 0) {
  $con = mysqli_connect('localhost', 'root', '', 'moon_db');
  $result = mysqli_query($con, "SELECT * FROM users_table WHERE email='" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'");
  $row = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION["email"] = $row["email"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["password"] = $row["password"];
    $_SESSION["is_staff"] = $row["is_staff"];

    $row["is_staff"] == 1 ?
      header('location:../moderator/mdashboard.php') : header('location:../sections/dashboard.php');
  } else {
    $message = "Invalid Userid or email or Password!";
  }
}
?>





// if (isset($_POST['submit'])) {
// $email = $_POST['email'];
// $pass = $_POST['password'];

// $con = mysqli_connect('localhost', 'root', '', 'moon_db');
// $query = "SELECT * FROM users_table WHERE email ='$email' && password = '$pass'";
// $results = mysqli_query($con, $query);

// if (mysqli_num_rows($results) > 0) {
// $_SESSION['email'] = $email;
// $_SESSION['password'] = $pass;
// header('location:../sections/dashboard.php');
// $message = "<script>
  // alert('Welcome!')
  // 
</script>";
// // } else {
// // $message = "<script>
  //   alert('Invalid Credetails!')
  // 
</script>";
// header('location:../sections/login.php');
// }
// }
<?php
include 'connection.php';
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['surname']);

    $checkQuery = "SELECT * FROM admin_addteacher WHERE email = '$email' AND surname = '$password'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);
    if($checkRows > 0){
        session_start();
        $_SESSION['surname'] = $password;
        echo "<script>alert('Login Sucessfull'); window.location = '../views/Teacher/teacherdashboard.php'</script>";
    }
}
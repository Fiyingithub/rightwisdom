<?php
include 'connection.php';
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $Query = "SELECT * FROM admin_signup WHERE username = '$username' AND password = '$password'";
    $Result = mysqli_query($conn, $Query);
    $Rows = mysqli_num_rows($Result);
    if(!$Rows > 0){
        echo "<script>alert('Account does not exist'); window.location = '../views/adminsignup.html'</script>";
    }else{
        session_start();
        $_SESSION['username'] = $username;

        echo "<script>alert('Login Successful'); window.location = '../views/Admin/admin-dashboard.php'</script>";
    }
}
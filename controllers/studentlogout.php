<?php
include'connection.php';
session_start();



if(isset($_POST['submit'])){
    unset($_SESSION['surname']);

    session_destroy();
    // echo"destroy";
    echo"<script>alert('Logout Sucessfully'); window.location= '../views/Student/studentlogin.php'</script>";
    exit;
}

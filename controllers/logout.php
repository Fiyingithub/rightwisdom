<?php
include'connection.php';
session_start();



if(isset($_POST['submit'])){
    unset($_SESSION['username']);

    session_destroy();
    // echo"destroy";
    echo"<script>alert('Logout Sucessfully'); window.location= '../views/adminlogin.html'</script>";
    exit;
}

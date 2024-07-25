<?php
include 'connection.php';
if(isset($_POST['login'])){
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $password = mysqli_real_escape_string($conn, $_POST['surname']);

    $checkQuery = "SELECT * FROM teacher_addstudent WHERE class = '$class' AND surname = '$password'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);
    if($checkRows > 0){
        session_start();
        $_SESSION['surname'] = $password;
        
        echo "<script>alert('Login Sucessfull'); window.location = '../views/Student/student-dashboard.php'</script>";
    }
}
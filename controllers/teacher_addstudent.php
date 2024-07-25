<?php
include 'connection.php';

if(isset($_POST['save'])){
    $firstname =  mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $guardianFullname = mysqli_real_escape_string($conn, $_POST['guardianFullname']);
    $homeAddress = mysqli_real_escape_string($conn, $_POST['homeAddress']);

    $checkQuery = "SELECT * FROM teacher_addstudent WHERE firstname = '$firstname' AND surname = '$surname'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);
    if($checkRows > 0){
        echo "<script>alert('Student Already Exist'); window.location = '../views/Teacher/view-students.php'</script>";
    }else{
        $sql = "INSERT INTO teacher_addstudent(firstname,surname,age,class,guardianFullname,homeAddress) VALUE ('$firstname','$surname','$age','$class','$guardianFullname','$homeAddress')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Student Successfully Added'); window.location = '../views/Teacher/teacherdashboard.php'</script>";
        }
    }
}
<?php
include 'connection.php';

if(isset($_POST['save'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $homeAddress = mysqli_real_escape_string($conn, $_POST['homeAddress']);

    $checkQuery = "SELECT * FROM teacher_addguardian WHERE firstname = '$firstname' AND email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);

    if($checkRows > 0){
        echo "<script>alert('Parent Already Exist');</script>";
    }else{
        $sql = "INSERT INTO teacher_addguardian(firstname,surname,phoneNumber,email,homeAddress) VALUE ('$firstname','$surname','$phoneNumber','$email','$homeAddress')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Parent Successfully Added'); window.location = '../views/Teacher/teacherdashboard.php'</script>";
        }
    }
}






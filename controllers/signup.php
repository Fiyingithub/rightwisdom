<?php
include 'connection.php';

if (isset($_POST['signup'])){
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $surname = mysqli_real_escape_string($conn,$_POST['surname']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn,$_POST['confirmPassword']);

    if($confirmPassword != $password){
        echo "<script>alert('Password does not match')</script>";
    }

 
    $checkQuery = "SELECT * FROM admin_signup WHERE email = '$email' AND password = '$password'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);

    if($checkRows > 0){
        echo "<script>alert('Account already exist'); window.location = '../views/adminlogin.html'</script>";
    }else{
        $sql = "INSERT INTO admin_signup(firstname,surname,username,email,password) VALUE ('$firstname','$surname','$username','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Account Created Successfully'); window.location = '../views/adminlogin.html'</script>";
        }
        //else{
        //     echo "<script>alert('Account can not be created, Contact Admin'); window.location ='../views/adminsignup.html'</script>";
        // }
    }

   
}
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
    // Hashing Password
    $hashpassword = password_hash($password, PASSWORD_BCRYPT);

    // How to validate Gender
    // $gender = mysqli_real_escape_string($conn,$_POST['option']);
    // $valid_gender = ['male','female','custom'];
    //if(!in_array($gender, $valid_gender)){
    //    die("invalid gender value");
    //} 

    // NOTE: In the database the gender value  must be eNum['male','female','custom']
 
    $checkQuery = "SELECT * FROM admin_signup WHERE email = '$email' ";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);

    if($checkRows > 0){
        echo "<script>alert('Account already exist'); window.location = '../views/adminlogin.html'</script>";
    }else{
        $sql = "INSERT INTO admin_signup(firstname,surname,username,email,password) VALUE ('$firstname','$surname','$username','$email','$hashpassword')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Account Created Successfully'); window.location = '../views/adminlogin.html'</script>";
        }
        //else{
        //     echo "<script>alert('Account can not be created, Contact Admin'); window.location ='../views/adminsignup.html'</script>";
        // }
    }

   
}
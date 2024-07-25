<?php
include 'connection.php';

if(isset($_POST['save'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $homeAddress = mysqli_real_escape_string($conn, $_POST['homeAddress']);

    $checkQuery = "SELECT * FROM admin_addteacher WHERE firstname = '$firstname' AND email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $checkRows = mysqli_num_rows($checkResult);

    if($checkRows > 0){
        echo "<script>alert('Teacher Already Exist'); window.location = '../views/Admin/viewteacher.html'</script>";
    }else{
        $sql = "INSERT INTO admin_addteacher(firstname,surname,phoneNumber,email,class,homeAddress) VALUE ('$firstname','$surname','$phoneNumber','$email','$class','$homeAddress')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Teacher Successfully Added'); window.location = '../views/Admin/admin-dashboard.php'</script>";
        }
    }
}






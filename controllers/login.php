<?php
include 'connection.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Query to get the hashed password from signup
    $encryptQuery = "SELECT * FROM admin_signup WHERE username = '$username'";
    $encryptResult = mysqli_query($conn, $encryptQuery);
    $encryptRow = mysqli_num_rows($encryptResult);

    if ($encryptRow) {
        // Fetch the result
        $userRow = mysqli_fetch_assoc($encryptResult);
        $hashpassword = $userRow['Password']; 
        
        // Verify the password
        if (password_verify($password, $hashpassword)) {
            session_start();
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Successful'); window.location = '../views/Admin/admin-dashboard.php'</script>";
        }else {
            echo "<script>alert('Account does not exist'); window.location = '../views/adminsignup.html'</script>";
        }
    } 
}


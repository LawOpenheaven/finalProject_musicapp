<?php 
session_start();

include('db_connect.php');
$msg = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name))
    if ($user_password === $user_re_password) {
        $query = "insert into user (user, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
        mysqli_query($con, $query);
        header("Location: index.php");
    } else {
        $msg = "Password Does Not Match";
    }
    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Document</title>
</head>
<body bgcolor="#070101">
    <form method="post">
    <div>
    <img src="images/login-image.svg" class="login-image" id="login-img">
        <div class="inputBox">
            <input type="text" name="user_name" required="required">
            <span>Username</span>
        </div>
        <div class="inputBox">
            <input type="text" name="user_email" required="required">
            <span>Email</span>
        </div>
        <div class="inputBox">
            <input type="password" required="required" name="user_password" style="margin-top: 20px;">
            <span style="margin-top: 20px;">password</span>
        </div>
        <div class="inputBox">
            <input type="password" name="user_re_password" required="required">
            <span>confirm password</span>
        </div>
        <input type="submit" value="Sign Up" class="submit">

        <div class="check">
                    <input type="checkbox" name="" id=""><span>Remeber Me.</span>
                </div>
                <p>You have a account? <a href="index.php">Login</a></p>
        </div>
    
    </div>
    </form>
    <div class="right">
        <!-- <h3>Incorrect Password</h3> -->
        <?php
        echo('<h3>'.$msg.'</h3>');
        ?>
    </div>
</body>
</html>
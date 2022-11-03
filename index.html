<?php

session_start();

include('db_connect.php');
$msg = false;
if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)==1) {
        header('Location: homepage.php');
    } else {
        $msg = "Inccorect Password";
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
<body>
    <section class="header">
        <form method="post">
            

            <div class="login_content">
            <div class="inputBox">
                <input type="text" name="user_name"  required="required">
                <span>Username</span>
            </div>
            <div class="inputBox">
                <input type="password" name="user_password" required="required">
                <span>password</span>
            </div>
            <input type="submit" value="Login" class="submit">
                
            <div class="check">
                <input type="checkbox" name="" id=""><span>Remember me</span>
                <a href="signup.php"> <p class="create">Create an account</p></a>
            </div>
        </form>
        <div class="right">
        <!-- <h3>Incorrect Password</h3> -->
        <?php
        echo ('<h3>'.$msg.'</h3>');
        ?>
        </div>
    </section>
</body>
</html>
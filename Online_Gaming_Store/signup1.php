<?php

ob_start();
require_once 'config.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['c_password'];
$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
if ($password == $cpassword) {
    $query = "Select username from tblusers where username = '$username';";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("location:signup.php?result=userexist");
    } else {
        $query = "insert into tblusers(username,password)values('$username','$hashed_password');";
        $result = mysqli_query($conn, $query);

        if ($result == 1) {
            header("location:signup.php?result=success");
        } else {
            header("location:signup.php?result=fail");
        }
    }
} else {
    header("location:signup.php?result=doesnt");
}
?>

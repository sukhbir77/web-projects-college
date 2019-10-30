<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        require_once 'login_header.php';
        ?>
    </p><h1>Sign Up Below!!!!</h1></p>
<div class="batman">
    <div class="signup">
        <p><form action="signup1.php" method="post">
            <p><label>USERNAME :</label>
                <input type="text" name="username" required><br><br>
                <label>Password:</label>
                <input type="password" name="password" required><br><br>
                <label>Confirm Password:</label>
                <input type="password" name="c_password" required><br><br>
                <input type="submit" class="signup_button" value="SIGNUP"></p>
        </form></p>
    </div>
</div>

<?php
if (isset($_REQUEST['result'])) {
    if ($_REQUEST['result'] == "userexist") {
        echo "<p><h1>User Already Exists!!!!!</h1></p>";
    } elseif ($_REQUEST['result'] == "success") {
        echo "<p><h1>New User Is Successfully Registered!!!!!</p></h1>";
    } elseif ($_REQUEST['result'] == "fail") {
        echo "<p><h1>New User Is Not Registered!!!!!</p></h1>";
    } elseif ($_REQUEST['result'] == "doesnt") {
        echo "<p><h1>Passwords Don't Match!!!!!</p></h1>";
    }
}
?>

</body>
</html>
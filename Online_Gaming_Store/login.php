<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        require_once 'login_header.php';
        ?>
    </p><h1>Login Below!!!!</h1></p>
<div class="batman">
    <div class="signup">
        <p><form action="login1.php" method="post">
            <p><label>USERNAME :</label>
                <input type="text" name="username" required><br><br>
                <label>Password:</label>
                <input type="password" name="password" required><br><br>
                <input type="submit" class="signup_button" value="SIGNUP"></p>
        </form></p>
    </div>
</div>

<?php
if (isset($_REQUEST['result'])) {
    if ($_REQUEST['result'] == "fail") {
        echo "<p><h1>Either Username Or Password Is Not Valid.</h1></p>";
    }
}
?>

</body>
</html>
<?php
require_once 'sessionfile.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        require_once 'logout_header.php';
        ?>
    </p><h1>Add New Games Below!!!!</h1></p>
<div class="batman">
    <div class="signup">
        <p><form action="add_games1.php" method="post">
            <p><label>NAME :</label>
                <input type="text" name="name" required><br><br>
                <label>Price :</label>
                <input type="number" name="price" required><br><br>
                <input type="submit" class="signup_button" value="Submit"></p>
        </form></p>
    </div>
</div>

<?php
if (isset($_REQUEST['result'])) {
    if ($_REQUEST['result'] == "success") {
        echo "<p><h1>Game Added Successfully.</h1></p>";
    } else if ($_REQUEST['result'] == "fail") {
        echo "<p><h1>Something Went Wrong.</h1></p>";
    }
}
?>

</body>
</html>
<!doctype html>
<head>
    <title>Assignment 3/SUKHBIR SINGH</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <img id="im" src="logo.png">
    </div>
    <div id="welcome"><p id="wel">Page <br> For <br> Orders!!!!!!!</p></div>
    <br>
    <div id="order">
        <?php
        $num_coffee = $_REQUEST['num_coffee'];
        $size = $_REQUEST['size'];
        $cream = $_REQUEST['cream'];
        $sugar = $_REQUEST['sugar'];
        $price = 0;

        if ($num_coffee < 0 || $num_coffee == 0 || $cream < 0 || $sugar < 0 || $num_coffee==NULL) {
            echo "<h1 id='error'>Please Enter The Number Of Coffee</h1>";
            echo"<a href='index.php'><input type='button' value='Back'></a>";
        } else {
            if ($size == 'Small') {
                $price = 2.29;
            } else if ($size == 'Medium') {
                $price = 3.29;
            } else if ($size == 'Large') {
                $price = 4.29;
            } else {
                $price = 5.29;
            }
            $tax = $price * $num_coffee * 0.13;
            for ($i = 1; $i <= $num_coffee; $i++) {

                echo "<div id='color'>";
                if ($size == 'Small') {
                    echo"<img src='Images/cup3.jpg'>";
                } else if ($size == 'Medium') {
                    echo"<img src='Images/cup2.jpg'>";
                } else if ($size == 'Large') {
                    echo"<img src='Images/cup1.jpg'>";
                } else {
                    echo"<img src='Images/cup.jpg'>";
                }

                for ($j = 1; $j <= $cream; $j++) {
                    echo"<img src='Images/plus.jpg'>";
                    echo"<img src='Images/cream.jpg'>";
                }

                for ($k = 1; $k <= $sugar; $k++) {
                    echo"<img src='Images/plus.jpg'>";
                    echo"<img src='Images/sugar.jpg'>";
                }
                echo "</div>";
            }

            $bill = ($price * $num_coffee) + $tax;
            echo "<br><br q><h1 id='cost'> Bill: " . $price . " X " . $num_coffee . " + " . $tax . " = " . $bill . "</h1>";
        }
        ?>
    </div>
</body>

</html>
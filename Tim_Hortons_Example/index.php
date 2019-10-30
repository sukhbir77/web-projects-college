<!doctype html>
<head>
    <title>Assignment 3/SUKHBIR SINGH</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <img id="im" src="logo.png">
    </div>
    <div id="welcome"><p id="wel">Welcome <br>To <br>Tim Hortons!!!!</p></div>
    <br><br><br><br>
    <div> <div align="center" id="center">
            <br><br><br>
            <form action="order.php" method="post">

                <label>Enter Number Of Coffees:</label>
                <input type="number" name="num_coffee"><br><br>
                <label>Select Size Of Coffee:</label>
                <select name="size">
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="Ex_large">Extra Large</option>
                </select><br><br>
                <label>Enter Number Of Creams:</label>
                <input type="number" name="cream"><br><br>
                <label>Enter Number Of Sugar:</label>
                <input type="number" name="sugar"><br><br>
                <label><input type="submit" value="ORDER"></label>
            </form>
            <br><br><br>
        </div></div>
</body>
</html>
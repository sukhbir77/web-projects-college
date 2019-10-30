<?php
require_once 'sessionfile.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php require_once 'logout_header.php'; ?>
    </p><h1>View Games!!!!</h1></p>
<div class="batman">

</div>
<p><input type="text" placeholder="Search By Name" id="search" onkeyup="search()"></p>
    <?php
    require_once 'config.php';
    $query = "select * from tblElectronics;";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        echo "<table id='Games'>";
        echo "<tr><th>Row #</th>";
        echo "<th>Game Name</th>";
        echo "<th>Game Price</th></tr>";

        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>$i</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . '$' . $row['Price'] . "</td></tr>";
            $i++;
        }
        echo "</table>";
    }
    ?>
<script>
    function search()
    {
        var input, table, tr, td, txtValue;
        var filter_input, i;

        input = document.getElementById("search");
        filter_input = input.value.toUpperCase();
        table = document.getElementById("Games");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++)
        {
            td = tr[i].getElementsByTagName("td")[1];
            if (td)
            {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter_input) > -1)
                {
                    tr[i].style.display = "";
                } else
                {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>


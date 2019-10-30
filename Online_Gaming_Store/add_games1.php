<?php

require_once 'config.php';

$Name = $_REQUEST['name'];
$Price = $_REQUEST['price'];

$query = "insert into tblElectronics(Name,Price)values('$Name',$Price);";

$result = mysqli_query($conn, $query);

if ($result > 0) {
    header("location:add_games.php?result=success");
} else {
    header("location:add_games.php?result=fail");
}
?>

<?php

$host = 'localhost';
$username = 'sing9014_admin';
$password = 'jCJvYQ~dH+OW';
$db_name = 'sing9014_my_database';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (empty($conn)) {
    die("Connection failed" . mysqli_connect_error());
}
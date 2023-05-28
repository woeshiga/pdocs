<?php
$host = "localhost";
$login = "root";
$password = "";

$con = mysqli_connect($host, $login, $password);

if (!$con)
{
    echo "<h1>MySQL Error!</h1>";
    exit();
}

$db = "pdocs";

mysqli_select_db($con, $db);
?>
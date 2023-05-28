<?php
require("connect.php");

$query = "INSERT INTO `store` (name, address) VALUES ('$_POST[name]', '$_POST[address]')";
mysqli_query($con, $query);
mysqli_close($con);

require("../src/components/header.php");
?>
<link rel="stylesheet" href="../styles/main.css">
<main>
    <div class="container">
        <h1 class="title">Добавлено!</h1>
    </div>
</main>
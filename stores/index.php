<?php
require("../api/connect.php");
include("../src/scripts/stores_table.php");
$query = "SELECT * FROM `store`;";
$stores = mysqli_query($con, $query) -> fetch_all();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Склады</title>
</head>
<body>
    <header>
        <?php
        require("../src/components/header.php");
        ?>
    </header>
    <main>
        <div class="container">
            <?php
            place_stores_table($stores);
            ?>
        </div>
        <div class="container">
            <form action="../api/new_store.php" method="post">
                <h2 class="title">Новый склад</h2>
                <label for="name">Название склада:</label>
                <input type="text" name="name" id="name">
                <label for="address">Адрес склада:</label>
                <input type="text" name="address" id="address">
                <input type="submit" value="Создать">
            </form>
        </div>
        <?php
             mysqli_close($con);
        ?>
    </main>
</body>
</html>
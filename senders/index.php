<?php
require("../api/connect.php");
include("../src/scripts/senders_table.php");
$query = "SELECT * FROM `senders`;";
$senders = mysqli_query($con, $query) -> fetch_all();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Отправители</title>
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
            place_senders_table($senders);
            ?>
        </div>
        <div class="container">
            <form action="../api/new_sender.php" method="post">
                <h2 class="title">Новый отправитель</h2>
                <label for="name">Название организации:</label>
                <input type="text" name="name" id="name">
                <label for="address">Адрес организации:</label>
                <input type="text" name="address" id="address">
                <label for="phone">Телефон организации:</label>
                <input type="text" name="phone" id="phone">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <input type="submit" value="Создать">
            </form>
        </div>
        <?php
             mysqli_close($con);
        ?>
    </main>
</body>
</html>
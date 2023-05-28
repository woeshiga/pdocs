<?php
require("../api/connect.php");
include("../src/scripts/stuff_table.php");
$query = "SELECT * FROM `stuff`;";
$stuff = mysqli_query($con, $query) -> fetch_all();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Сотрудники</title>
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
            place_stuff_table($stuff);
            ?>
        </div>
        <div class="container">
            <form action="../api/new_stuff.php" method="post">
                <h2 class="title">Новый сотрудник</h2>
                <label for="lname">Фамилия:</label>
                <input type="text" name="lname" id="lname">
                <label for="fname">Имя:</label>
                <input type="text" name="fname" id="fname">
                <label for="post">Должность:</label>
                <input type="text" name="post" id="post">
                <input type="submit" value="Создать">
            </form>
        </div>
        <?php
             mysqli_close($con);
        ?>
    </main>
</body>
</html>
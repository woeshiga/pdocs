<?php
require("../api/connect.php");
include("../src/scripts/pmove_table.php");
$query = "SELECT * FROM `product_move`;";
$pmoves = mysqli_query($con, $query) -> fetch_all();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Движение товаров</title>
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
            place_pmove_table($con, $pmoves);
            ?>
        </div>
        <div class="container">
            <form action="../api/new_pmove.php" method="post">
                <h2 class="title">Отправить товар</h2>
                <label for="document">Документ:</label>
                <select name="document" id="document">
                    <?php
                    $query = "SELECT * FROM `documents`";
                    $res = mysqli_query($con, $query);

                    if ($res -> num_rows == 0) {
                        echo "<option>Нет документов!</option>";
                    } else {
                        $documents = $res -> fetch_all();
                        foreach ($documents as $doc) {
                            echo "<option value='$doc[0]'>$doc[5] (№ $doc[3])</option>";
                        }
                    }
                    ?>
                </select>
                <label for="sender">Отправитель:</label>
                <select name="sender" id="sender">
                <?php
                    $query = "SELECT * FROM `senders`";
                    $res = mysqli_query($con, $query);

                    if ($res -> num_rows == 0) {
                        echo "<option>Нет отправителей!</option>";
                    } else {
                        $senders = $res -> fetch_all();
                        foreach ($senders as $sender) {
                            echo "<option value='$sender[0]'>$sender[1]</option>";
                        }
                    }
                    ?>
                </select>
                <label for="accepter">Получатель:</label>
                <select name="accepter" id="accepter">
                <?php
                    $query = "SELECT * FROM `accepters`";
                    $res = mysqli_query($con, $query);

                    if ($res -> num_rows == 0) {
                        echo "<option>Нет получателей!</option>";
                    } else {
                        $accepters = $res -> fetch_all();
                        foreach ($accepters as $accepter) {
                            echo "<option value='$accepter[0]'>$accepter[1]</option>";
                        }
                    }
                    ?>
                </select>
                <label for="stuff">Сотрудник:</label>
                <select name="stuff" id="stuff">
                <?php
                    $query = "SELECT * FROM `stuff`";
                    $res = mysqli_query($con, $query);

                    if ($res -> num_rows == 0) {
                        echo "<option>Нет сотрудников!</option>";
                    } else {
                        $stuff = $res -> fetch_all();
                        foreach ($stuff as $stf) {
                            echo "<option value='$stf[0]'>$stf[1] $std[2] ($stf[3])</option>";
                        }
                    }
                    ?>
                </select>
                <label for="store">Склад:</label>
                <select name="store" id="store">
                <?php
                    $query = "SELECT * FROM `store`";
                    $res = mysqli_query($con, $query);

                    if ($res -> num_rows == 0) {
                        echo "<option>Нет складов!</option>";
                    } else {
                        $stores = $res -> fetch_all();
                        foreach ($stores as $store) {
                            echo "<option value='$store[0]'>$store[1]</option>";
                        }
                    }
                    ?>
                </select>
                <label for="items_count">Количество товаров:</label>
                <input type="number" name="items_count" id="items_count">
                <input type="submit" value="Отправить">
            </form>
        </div>
        <?php
             mysqli_close($con);
        ?>
    </main>
</body>
</html>
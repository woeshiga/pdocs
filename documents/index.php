<?php
require("../api/connect.php");
include("../src/scripts/docs_table.php");
$query = "SELECT * FROM `documents`;";
$documents = mysqli_query($con, $query) -> fetch_all();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Документы</title>
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
            place_documents_table($documents);
            ?>
        </div>
        <div class="container">
            <form action="../api/new_document.php" enctype="multipart/form-data" method="post">
                <h2 class="title">Ноый Документ</h2>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <label for="type">Тип:</label>
                <select name="type" id="type">
                    <option value="Текстовый">Текстовый</option>
                    <option value="JSON">JSON</option>
                    <option value="Таблицы">Таблицы</option>
                    <option value="Изображение">Изображение</option>
                </select>
                <label for="number">Номер:</label>
                <input type="text" name="number" id="number">
                <label for="description">Описание:</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <label for="file">Файл:</label>
                <input type="file" name="file" id="file">
                <input type="submit" value="Создать">
            </form>
        </div>
        <?php
             mysqli_close($con);
        ?>
    </main>
</body>
</html>
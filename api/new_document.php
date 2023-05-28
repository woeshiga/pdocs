<?php
if (in_array($_POST["type"], ["Текстовый", "JSON", "Изображение", "Таблицы"])) {
    require("connect.php");
    
    $upload_path = $_SERVER['DOCUMENT_ROOT']."/src/documents/".basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path);
    
    $query = "INSERT INTO `documents` (type, number, description, file)"
    ."VALUES ('$_POST[type]', '$_POST[number]', '$_POST[description]', '".basename($_FILES['file']['name'])."')";
    
    mysqli_query($con, $query);
    
    mysqli_close($con);

    $message = "Добавлено!";
} else {
    $message = "Неверный формат данных!";
}
require("../src/components/header.php");
?>
<link rel="stylesheet" href="../styles/main.css">
<main>
    <div class="container">
        <h1 class="title"><?php echo $message; ?></h1>
    </div>
</main>
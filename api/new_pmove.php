<?php
if (preg_match("/^\d+$/", $_POST["items_count"])) {
    require("connect.php");
    
    $query = "INSERT INTO `product_move` (document_id, sender_id, accepter_id, stuff_id, store_id, items_count)"
    ."VALUES ($_POST[document], $_POST[sender], $_POST[accepter], $_POST[stuff], $_POST[store], $_POST[items_count])";
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
<?php
if (preg_match("/[^a-zA-Z]/", $_POST["phone"])) {
    require("connect.php");
    
    $query = "INSERT INTO `senders` (name, address, phone, email) VALUES ('$_POST[name]', '$_POST[address]', '$_POST[phone]', '$_POST[email]')";
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
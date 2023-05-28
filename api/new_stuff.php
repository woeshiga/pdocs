<?php
if (!preg_match("/\d/", $_POST["fname"]) && !preg_match("/\d/", $_POST["lname"])) {
    require("connect.php");
    
    $query = "INSERT INTO `stuff` (last_name, first_name, post) VALUES ('$_POST[lname]', '$_POST[fname]', '$_POST[post]')";
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
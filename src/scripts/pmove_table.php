<?php
function place_pmove_table ($con, $pmoves) {
    if ($pmoves && count($pmoves) > 0)
    {
        echo "<table >";
        echo "<tr><th>ID</th><th>Документ</th><th>Отправитель</th><th>Получатель</th><th>Сотрудник</th><th>Склад</th><th>Количество товаров</th></tr>";
        foreach ($pmoves as $pm) {
            $query = "SELECT * FROM `documents` WHERE id = $pm[1]";
            $doc = mysqli_query($con, $query) -> fetch_row();

            $query = "SELECT * FROM `senders` WHERE id = $pm[2]";
            $sender = mysqli_query($con, $query) -> fetch_row();

            $query = "SELECT * FROM `accepters` WHERE id = $pm[3]";
            $accepter = mysqli_query($con, $query) -> fetch_row();

            $query = "SELECT * FROM `stuff` WHERE id = $pm[4]";
            $stuff = mysqli_query($con, $query) -> fetch_row();

            $query = "SELECT * FROM `store` WHERE id = $pm[5]";
            $store = mysqli_query($con, $query) -> fetch_row();
            echo "<tr>"
                ."<td>"
                    .$pm[0]
                ."</td>"
                ."<td>"
                    .$doc[5]." ($doc[3])" 
                ."</td>"
                ."<td>"
                    .$sender[1]
                ."</td>"
                ."<td>"
                    .$accepter[1]
                ."</td>"
                ."<td>"
                    ."$stuff[1] $stuff[2] ($stuff[3])"
                ."</td>"
                ."<td>"
                    .$store[1]
                ."</td>"
                ."<td>"
                    .$pm[6]
                ."</td>"
            ."</tr>";
        }
        echo "</table>";
    } else {
        echo "Нет отправленных товаров!";
    }
}
?>
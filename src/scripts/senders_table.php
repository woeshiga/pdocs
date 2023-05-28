<?php
function place_senders_table ($senders) {
    if ($senders && count($senders) > 0)
    {
        echo "<table >";
        echo "<tr><th>ID</th><th>Название</th><th>Адрес</th><th>Телефон</th><th>Email</th></tr>";
        foreach ($senders as $sender) {
            echo "<tr>"
                ."<td>"
                    .$sender[0]
                ."</td>"
                ."<td>"
                    .$sender[1]
                ."</td>"
                ."<td>"
                    .$sender[2]
                ."</td>"
                ."<td>"
                    .$sender[3]
                ."</td>"
                ."<td>"
                    .$sender[4]
                ."</td>"
            ."</tr>";
        }
        echo "</table>";
    } else {
        echo "Нет отправителей!";
    }
}
?>
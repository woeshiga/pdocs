<?php
function place_accepters_table ($accepters) {
    if ($accepters && count($accepters) > 0)
    {
        echo "<table >";
        echo "<tr><th>ID</th><th>Название</th><th>Адрес</th><th>Телефон</th><th>Email</th></tr>";
        foreach ($accepters as $accepter) {
            echo "<tr>"
                ."<td>"
                    .$accepter[0]
                ."</td>"
                ."<td>"
                    .$accepter[1]
                ."</td>"
                ."<td>"
                    .$accepter[2]
                ."</td>"
                ."<td>"
                    .$accepter[3]
                ."</td>"
                ."<td>"
                    .$accepter[4]
                ."</td>"
            ."</tr>";
        }
        echo "</table>";
    } else {
        echo "Нет получателей!";
    }
}
?>
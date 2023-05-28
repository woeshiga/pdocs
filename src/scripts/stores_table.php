<?php
function place_stores_table ($stores) {
    if ($stores && count($stores) > 0)
    {
        echo "<table >";
        echo "<tr><th>ID</th><th>Название</th><th>Адрес</th></tr>";
        foreach ($stores as $store) {
            echo "<tr>"
                ."<td>"
                    .$store[0]
                ."</td>"
                ."<td>"
                    .$store[1]
                ."</td>"
                ."<td>"
                    .$store[2]
                ."</td>"
            ."</tr>";
        }
        echo "</table>";
    } else {
        echo "Нет складов!";
    }
}
?>
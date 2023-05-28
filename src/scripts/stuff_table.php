<?php
function place_stuff_table ($stuff) {
    if ($stuff && count($stuff) > 0)
    {
        echo "<table >";
        echo "<tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Должность</th></tr>";
        foreach ($stuff as $stf) {
            echo "<tr>"
                ."<td>"
                    .$stf[0]
                ."</td>"
                ."<td>"
                    .$stf[1]
                ."</td>"
                ."<td>"
                    .$stf[2]
                ."</td>"
                ."<td>"
                    .$stf[3]
                ."</td>"
            ."</tr>";
        }
        echo "</table>";
    } else {
        echo "Нет сотрудников!";
    }
}
?>
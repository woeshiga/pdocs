<?php
function place_documents_table ($documents) {
    if ($documents && count($documents) > 0)
    {
        echo "<table >";
        echo "<tr><th>ID</th><th>Тип</th><th>Дата</th><th>Номер</th><th>Описание</th><th>Файл</th></tr>";
        foreach ($documents as $doc) {
            echo "<tr>"
                ."<td>"
                    .$doc[0]
                ."</td>"
                ."<td>"
                    .$doc[1]
                ."</td>"
                ."<td>"
                    .$doc[2]
                ."</td>"
                ."<td>"
                    .$doc[3]
                ."</td>"
                ."<td>"
                    .$doc[4]
                ."</td>"
                ."<td>"
                    ."<a target='_blank' href='../src/documents/$doc[5]'>Скачать</a>"
                ."</td>"
            ."</tr>";
        }
        echo "</table>";
    } else {
        echo "Нет документов!";
    }
}
?>
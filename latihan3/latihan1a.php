<?php

    echo "<table border=\"1\">";
    $suhu = [23,45,36,27,33,32,30,28,35,32];
    for ($i=0; $i < count($suhu); $i++) {
        $hari = $i;
        echo "<tr>";
        echo "<td>Hari ke-", $hari+1, "</td>";
        echo "<td>", $suhu[$i], "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>
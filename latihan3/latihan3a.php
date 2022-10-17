<?php
    echo "<h1>DAFTAR HOBI YG KUPILIH</h1>";
    echo "<ol>";
    if(!empty($_POST['hobi'])){
        foreach ($_POST['hobi'] as $h) {
            echo "<li>", $h;
        }
    }
    echo "</ol>";
    echo "<a href='.\latihan3.php'>Kembali";
?>
<?php
$IPK = 3;
if ($IPK < 2.76) {
    $hasil = "tidak mendapat predikat";
} else if (($IPK <= 2.76) && ($IPK <= 3.00)) {
    $hasil = "Memuaskan";
} else if  (($IPK <= 3.00) && ($IPK <= 3.50)) {
    $hasil = "Sangat Memuaskan";
} else if ($IPK > 3.50) {
    $hasil = "Dengan Pujian";
}

echo "IPK Anda : $IPK Predikat Anda : $hasil";
?>
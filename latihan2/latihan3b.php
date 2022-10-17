
<?php
$ipk = $_POST["ipk"];
if ($ipk < 2.76) {
    $predikat =  "Tidak Mendapatkan Predikat";
} elseif ($ipk >= 2.76 && $ipk <= 3.00) {
    $predikat = "memuaskan";
} elseif ($ipk >= 3.00 && $ipk <= 3.50) {
    $predikat = "Sangat Memuaskan";
} else {
    $predikat = "dengan Pujian";
}

echo "IPK Anda : ", $ipk, "<br>";
echo "Predikat anda : ", $predikat;


?>
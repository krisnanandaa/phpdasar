<?php
$username = $_POST["username"];
$password = $_POST["password"];
if ($username == "admin" && $password == "admin123") {
    $hasil =  "Selamat Datang, anda sukses login";
} else ($hasil = "Gagal") 
echo $hasil;
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>STATUS KELULUSAN MAHASISWA</h1>
        <?php
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $status = $_POST["status"];
            echo "Mahasiswa dengan nama $nama NIM $nim 
            berhasil menyelesaikan studi S1 dengan predikat $status";
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <style>
            label {
                display: inline-block;
                width: 120px;
                text-align: left;
                margin-bottom: 10px;
            }
            select {
                height: 23px;
                width: 170px;
            }
            .tombol {
                margin-left: 130px;
            }
        </style>
    </head>
    <body>
        <form action="latihan1b.php" method="POST">
            <label for="nim">NIM</label>
            : <input type="text" id="nim" name="nim"/> <div></div>
            
            <label for="nama">Nama</label>
            : <input type="text" id="nama" name="nama"/><div></div>

            <label for="status">Status Kelulusan</label> :
            <select id="status" name="status">
                <option value="Memuaskan">Memuaskan</option>
                <option value="Tidak Memuaskan">Tidak Memuaskan</option>
            </select>
            <div class="tombol"><input type="submit" value="Submit Data"></div>
        </form>
    </body>
</html>

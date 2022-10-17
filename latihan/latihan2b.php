<!DOCTYPE html>
<html>
    <head>
        <style>
            th,td {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <td colspan="2">
                <h1>FORM BIODATA - REVIEW</h1>
            </td>
            <?php
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $umur = $_POST["umur"];
            $gender = $_POST["gender"];
            $hobi = $_POST["hobby"];
            ?>
            <tbody>
                <tr>
                    <th>Nama</th>
                    <td> <?= $nama?></td
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td> <?= $alamat?></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td> <?= $umur?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?= $gender?></td>
                </tr>
                <tr>
                    <th>Hobby</th>
                    <td>
                        <?php
                        foreach($hobi as $hb){
                            echo $hb,", ";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

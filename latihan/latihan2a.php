<!DOCTYPE html>
<html>

<head>
    <style>
        label {
            display: inline-block;
            width: 100px;
            text-align: left;
            margin-bottom: 10px;
        }

        .label1 {
            margin-bottom: 5px;
        }

        .parent {
            display: flex;
        }
    </style>
</head>

<body>
    <h1>FORM BIODATA</h1>
    <form action="latihan2b.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>:
                    <input type="text" name="nama" id="nama" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="alamat">Alamat</label>:
                    <input type="text" name="alamat" id="alamat" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="umur">Umur</label>:
                    <input type="text" name="umur" id="umur" />
                </td>
            </tr>

            <tr>
                <td>
                    <div class="parent">
                        <label for="gender">Jenis Kelamin</label>:
                        <div>
                            <input type="radio" name="gender" id="pria" value="Pria" />
                            <label for="pria" class="label1">Pria</label>
                            <br>
                            <input type="radio" name="gender" id="wanita" value="Wanita" />
                            <label for="wanita" class="label1">Wanita</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="parent">
                        <label for="hobby">Hobby</label>:
                            <div class="child">
                                <input type="checkbox" name="hobby[]" id="music" value="Music"/>
                                <label for="music" class="label1">Music</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="program" value="Programming"/>
                                <label for="program" class="label1">Programming</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="game" value="Game"/>
                                <label for="game" class="label1">Game</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="movies" value="Movies"/>
                                <label for="movies" class="label1">Movies</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="travel" value="Travelling"/>
                                <label for="travel" class="label1">Travelling</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="sport" value="Sport"/>
                                <label for="sport" class="label1">Sport</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="organization" value="Organization"/>
                                <label for="organization" class="label1">Organization</label>
                                <br>
                                <input type="checkbox" name="hobby[]" id="auto" value="Automotive"/>
                                <label for="auto" class="label1">Automotive</label>
                                <br>
                            </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

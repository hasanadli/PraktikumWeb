<html>
    <head>
        <title>Soal 2</title>
        <style>
            font{color:red;}
        </style>
    </head>

    <body>
        <?php
        $notifNama = "";
        $notifNim = "";
        $notifKel = "";
        $nama = "";
        $nim = "";
        $jk = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $notifNama = "Nama tidak boleh kosong";
            } else {
                $nama = $_POST["nama"];
            }
            if (empty($_POST["nim"])) {
                $notifNim = "NIM tidak boleh kosong";
            } else {
                $nim = $_POST["nim"];
            }
            if (empty($_POST["jk"])) {
                $notifKel = "Jenis kelamin tidak boleh kosong";
            } else {
                $jk = $_POST["jk"];
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <label for="nama">Nama: </label><input type="text" name="nama" value="<?php echo $nama ?>"><span class="error"><font>* <?php echo $notifNama ?> </span></font><br>

            <label for="nim">NIM: </label><input type="text" name="nim" value="<?php echo $nim ?>"><span class="error"><font>* <?php echo $notifNim ?> </span></font><br>

            <label for="jk">jenis kelamin: </label><span class="error"><font>* <?php echo $notifKel ?> </span></font><br>

            <input type="radio" name="jk" <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?> value="Laki-Laki">Laki-laki <br>

            <input type="radio" id="p" name="jk" <?php if (isset($jk) && $jk == "Perempuan") echo "checked"; ?> value="Perempuan">Perempuan<br>

            <input type="submit" name="enter" value="submit">
        </form>
        <?php
            echo $nama."<br/>";
            echo $nim."<br/>";
            if (!empty($_POST['nama']) && !empty($_POST['nim'])){
                echo $jk;
            }
        ?>
    </body>
</html>




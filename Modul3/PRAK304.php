<html>
    <head>
        <title>PRAK 304</title>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nilai = (int)$_POST["nilai"];
            }
            if (isset($_POST['Tambah'])) {
                $nilai += 1;
            }

            if (isset($_POST['Kurang'])) {
                $nilai -= 1;
            }

        ?>

        <?php
        if (empty($nilai)) : ?>
            <form action="" method="post">
                Jumlah bintang <input type="text" name="nilai"><br>
                <button type="submit">Submit</button>
            </form>

        <?php
        endif;
        if (!empty($nilai)) :
        ?>
            Jumlah bintang <?= $nilai; ?>
            <br><br><br><br>
            <?php
            for ($i = 0; $i < $nilai; $i++) {
                echo "<img src=\"bintang.png\" height=\"100\" width=\"100\">";
            }
            ?>
            <form action="" method="post">
                <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
                <button type="submit" name="Tambah" value="Tambah">Tambah</button>
                <button type="submit" name="Kurang" value="Kurang">Kurang</button>
            </form>
        <?php endif; ?>
    </body>
</html>
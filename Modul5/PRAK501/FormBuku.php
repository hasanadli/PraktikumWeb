<html>
    <head>
        <title>Form Buku</title>
    </head>
    <body>
        <center>
        <?php
            require('./Model.php');
            if (isset($_GET['id_buku'])) {
                editBuku();
            }
        ?>
        <form action="" method="post">

                <label for="judul_buku">Judul Buku</label><br>
                <input type="text" name="judul_buku" id="judul_buku" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["judul_buku"] ?>" required><br><br>
    
                <label for="penulis">Nama Penulis</label><br>
                <input type="text" name="penulis" id="penulis" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["penulis"] ?>" required><br><br>

                <label for="penerbit">Penerbit</label><br>
                <input type="text" name="penerbit" id="penerbit" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["penerbit"] ?>" required><br><br>
    
                <label for="tahun_terbit">Tahun Terbit</label><br>
                <input type="text" name="tahun_terbit" id="tahun_terbit" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["tahun_terbit"] ?>" required><br><br>

                <?php 
                    if (isset($_GET['id_buku'])) {
                        echo "<button type=\"submit\" name=\"update\"> Update </button>";
                    }
                    else {
                        echo "<button type=\"submit\" name=\"tambah\"> Tambah </button>"; 
                    }
                ?>
                <br><input type="button" value="batalkan" onclick="history.back()">
        </form>

        <?php
        if (isset($_POST['update'])) {
            updateBuku($_GET['id_buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
            
        }
        if (isset($_POST['tambah'])) {
            insertDataBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
        }
        ?>

        </center>
    </body>
</html>
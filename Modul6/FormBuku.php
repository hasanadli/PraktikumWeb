<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<html>
    <head>
        <?php echo (isset($_GET['id_buku'])) ? "<title>Update Data | Buku</title>" : "<title>Tambah Data | Buku</title>" ?>
    </head>

    <body id="page-top" align="center">
        <form action="" method="post">
            <table>

                <tr>
                    <td>
                        Judul Buku
                    </td>
                    <td>
                        <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama Penulis
                    </td>
                    <td>
                        <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Penerbit
                    </td>
                    <td>

                        <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tahun Terbit

                    </td>
                    <td>
                        <input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                        if (isset($_GET['id_buku'])) {
                            echo "<button type=\"submit\" name=\"update\">Update</button>";
                        } else {
                            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                        }

                        ?>
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
        }
        if (isset($_POST['update'])) {
            updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
        }
        ?>
    </body>
</html>

<?php
session_start();
require('./Model.php');
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<html>
    <head>
        <title>Data Buku</title>
    </head>

    <body>
    <h2><center>Data Buku</center></h2>
    <center><a href="FormBuku.php">
                <button>Tambah Data Buku</button></a><br>
            <a href="index.php"><br>
                <button>Kembali</button></a><br><br>
            </center>
        <table border="1">
            <tr>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("buku") ?>
        </table>
    </body>
</html>

<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<html>
<head>
    <title>Data Peminjaman</title>
</head>
<body>
<h2><center>Data Peminjaman</center></h2>
<center><a href="FormPeminjaman.php">
            <button>Tambah Data Peminjaman</button></a><br>
        <a href="index.php"><br>
            <button>Kembali</button></a><br><br>
        </center>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("peminjaman") ?>
    </table>
</body>
</html>

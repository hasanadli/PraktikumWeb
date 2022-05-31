<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<html>
    <head>
        <title>Data Member</title>
    </head>
        <body>
        <h2><center>Data Member</center></h2>
        <center><a href="FormMember.php"><button>Tambah Data Member</button></a><br>
        <br>
            <a href="index.php"><button>Kembali</button></a><br><br>
            </center>
            <table border="1">
                <tr>
                    <th>Nama</th>
                    <th>nomor_member</th>
                    <th>alamat</th>
                    <th>Tgl daftar</th>
                    <th>tgl bayar</th>
                    <th>Aksi</th>
                </tr>
                <?= tampildata("member") ?>
            </table>
        </body>
</html>

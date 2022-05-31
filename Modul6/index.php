<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
?>

<html>
    <head>
        <title>Index</title>
    </head>
    <body id="page-top" align="center">
        <h1>Menu<br></h1>
        <h3>
        <a href="Buku.php">Database Buku |</a>
        <a href="Member.php">Database Member |</a>
        <a href="Peminjaman.php">Database Peminjaman</a>
        <a href="Logout.php">Logout</a><br>
    </body>
</html>

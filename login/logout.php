<!-- logout.php -->
<?php
// Menghapus sesi login dan mengarahkan kembali ke halaman login
session_start();
session_destroy();
header("Location: api.php"); // ganti index.php dengan halaman login Anda
exit();
?>

<?php
// Logika Logout - Start
session_start();

// Menghapus semua data session
$_SESSION = [];
session_unset();
session_destroy();

// Mengarahkan kembali ke halaman login setelah logout
header("Location: login.php");
exit;
// Logika Logout - End
?>
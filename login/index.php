<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_account.php");
    exit();
}

echo "Benvenuto, " . $_SESSION['username'];
?>
<a href="logout.php">Logout</a>



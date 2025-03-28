<?php
session_start();
session_unset(); // Видалення всіх змінних сесії
session_destroy(); // Знищення сесії
header("Location: login_account.php");
exit();
?>

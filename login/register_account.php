<?php
require_once 'Register.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_account'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $register_account = new Register();
    $result = $register_account->registerUser($username, $email, $password);

    echo $result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/account.css">
</head>
<body>

<div class="glass-container">
    <div class="login-box">
        <h2>Registrati</h2>
        <form action="../home.php" method="POST">

            <input type="text" id="username" name="username" required placeholder="Username">

            <input type="text" id="email" name="email" required placeholder="Email">

            <input type="password" id="password" name="password" required placeholder="Password">

            <button type="submit">Registrati</button>

            <p>Torna alla pagina <a href="login_account.php">Login</a> </p>
        </form>
    </div>
</div>

</body>
</html>
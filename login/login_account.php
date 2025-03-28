<?php
require_once 'Login.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_account'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login_account = new Login();
    $result = $login_account->loginUser($username, $password);

    if ($result == "Sei entrato nel tuo account.") {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo $result;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/account.css">
</head>
<body>

<div class="glass-container">
    <div class="login-box">
        <h2>Login</h2>
        <form action="../home.php" method="POST">

            <input type="text" id="username" name="username" required placeholder="Username">

            <input type="password" id="password" name="password" required placeholder="Password">

            <div class="options">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ricordami</label>
                <a href="">Hai dimenticato la password?</a>
            </div>

            <button type="submit">Login</button>

            <p>Non sei ancora registrato? <a href="register_account.php" id="register">Registrati</a></p>
            <p>Torna alla pagina <a href="../home.php">HOME</a> </p>
        </form>
    </div>
</div>

</body>
</html>
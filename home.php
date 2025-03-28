<?php
// Налаштування сесії
ini_set('session.gc_maxlifetime', 15);
session_set_cookie_params(15);

// Початок сесії
session_start();

// Обробка терміну дії сесії
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 15)) {
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();

// Перевірка, чи користувач увійшов в акаунт
if (isset($_SESSION['user_id'])) {
    // Якщо користувач увійшов, відображаємо привітання та посилання на вихід
    echo '<div class="welcome"><a href="welcome.php">Welcome</a>, ' . $_SESSION['username'] . '</div>';
    echo '<div class="exit"><a href="./login/logout.php">Esci</a></div>';
} else {
    // Якщо користувач не увійшов, показуємо посилання для входу та реєстрації
    echo '<div class="log-in"><a href="./login/login_account.php">ACCEDI | REGISTRATI</a></div>';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Il mondo dei libri</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            background-image: url('img/f99.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>


</head>

<body>
    <header>
        <div class="header-content">
            <h1 class="titolo">Il mondo dei libri</h1> 
            <img src="img/logo_books.png" alt="logo" class="logo">
        <nav class="navbar">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="chi_siamo.php">CHI SIAMO</a></li>
                <li><a href="catalogo.php">CATALOGO</a></li>
                <li><a href="servizio.php">SERVIZI CLIENTI</a></li>
            </ul>
        </nav>
        </div>
    </header>
      <br> <br>

      <div class="slideshow-container">
        <img class="slideshow-image" src="img/p1.jpg" alt="Photo 1">
        <img class="slideshow-image" src="img/p2.jpg" alt="Photo 2">
        <img class="slideshow-image" src="img/p3.jpg" alt="Photo 3">
        <img class="slideshow-image" src="img/p4.png" alt="Photo 4">
        <img class="slideshow-image" src="img/p5.jpg" alt="Photo 5">
        <img class="slideshow-image" src="img/p6.jpg" alt="Photo 6">
    </div>
    <script src="interval.js"></script>

    <h1 class="offer">Le nostre offerte</h1>

    <div class="book">
        <figure>
            <a href="offerte/book1.php"><img class="book-image" src="img/anniversario.jpg" alt="Book 1"></a>
            <a href="offerte/book1.php"><figcaption>L'anniversario, Andrea Bajani <br> <s>16,00 €</s> - 15,20 €</figcaption></a>
        </figure>
        <figure>
            <a href="offerte/book2.php"><img class="book-image" src="img/callie.jpg" alt="Book 2"</a>
            <a href="offerte/book2.php"><figcaption>Callie Hart, Quicksilver <br> <s>18,00 €</s> - 17,10 €</figcaption></a>
        </figure>
        <figure>
            <a href="offerte/book3.php"><img class="book-image" src="img/heart.jpg" alt="Book 3"></a>
            <a href="offerte/book3.php"><figcaption>Charlotte Rose, Heart on fire <br> <s>15,50 €</s> - 14,25 €</figcaption></a>
        </figure>
        <figure>
            <a href="offerte/book4.php"><img class="book-image" src="img/missbee.jpg" alt="Book 4"></a>
            <a href="offerte/book4.php"><figcaption>Alessia Gazzola, Miss Bee <br> <s>15,30 €</s> - 14,16 €</figcaption></a>
        </figure>
    </div>



    <footer>
        <div class="Newsletter">
            <h3 class="Newsletter__title">
                Newsletter
            </h3>
            <h4>Promozioni, nuovi prodotti e offerte.</h4>
            <h4>Direttamente nella tua casella di posta.</h4>
            <label for="email">Email</label>
            <input id="email" placeholder="Email" type="email">
            <h4></h4>
        </div>
        <div class="info">
            <ul class="info__list">
                <li><a href="home.php">HOME</a></li>
                <br>
                <li><a href="chi_siamo.php">CHI SIAMO</a></li>
                <br>
                <li><a href="catalogo.php">CATALOGO</a></li>
                <br>
                <li><a href="servizio.php">SERVIZIO CLIENTi</a></li>
            </ul>
        </div>

        <div class="MondoDeiLibri">
                <p>Mondo dei libri 2025. All rights reserved</p>
        </div>

        <div class="payment-icons">
            <img src="img/mastercard.png" alt="mastercard">
            <img src="img/visa.png" alt="visa">
            <img src="img/apple.png" alt="apple">
            <img src="img/google.png" alt="google">
        </div>
    </footer>
    </body>
</html>

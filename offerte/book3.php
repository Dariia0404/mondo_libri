<?php
session_start();

// Дані для книги
$book_name = "Heart on fire. Anime incatenate";
$book_price = 14.25;

// Якщо натискається кнопка "Додати до кошика"
if (isset($_POST['add_to_cart'])) {
    // Перевіряємо, чи кошик вже існує в сесії
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Додаємо книгу до кошика
    $_SESSION['cart'][] = [
        'name' => $book_name,
        'price' => $book_price,
        'quantity' => 1
    ];

    // Перенаправлення на сторінку кошика
    header('Location: ../cart.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Le nostre offerte</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/offer-book.css">

</head>
<body>
<header>
    <div class="header-content">
        <h1 class="titolo">Il mondo dei libri</h1>
        <img src="../img/logo_books.png" alt="logo" class="logo">
        <nav class="navbar">
            <ul>
                <li><a href="../home.php">HOME</a></li>
                <li><a href="../chi_siamo.php">CHI SIAMO</a></li>
                <li><a href="../catalogo.php">CATALOGO</a></li>
                <li><a href="../servizio.php">SERVIZI CLIENTI</a></li>
            </ul>
        </nav>
    </div>
</header>

<br> <br>

<h1 class="offer-book">Le nostre offerte</h1>

<div class="photo-book">
    <img class="photo" src="../img/heart.jpg" alt="photo">
</div>

<div class="book-details">
<h1><?php echo $book_name; ?></h1>
    <br>
<h4>Marlene Prise ha ventun anni e un passato difficile che vuole lasciarsi alle spalle. Frequenta il terzo anno alla Berkeley University e vive protetta dai sei adorati fratelli maggiori, che le hanno imposto una sola regola: stare alla larga da Travis Harris. Lui è tutto ciò che la ragazza dovrebbe evitare: arrogante e misterioso, motociclista spericolato e pugile implacabile, non conosce limiti né in pista né sul ring.</h4>
<p><s>15,50 € -</s> <?php echo $book_price; ?>€ <sup>-7%</sup></p>


<form method="POST">
    <button type="submit" name="add_to_cart">Aggiungi al carrello</button>
</form>
</div>
<br>
<div class="libri">
<a href="book1.php">L'anniversario</a>  <a href="book2.php">Quicksilver</a>  <a href="book4.php">Miss Bee</a>
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
            <li><a href="../home.php">HOME</a></li>
            <br>
            <li><a href="../chi_siamo.php">CHI SIAMO</a></li>
            <br>
            <li><a href="../catalogo.php">CATALOGO</a></li>
            <br>
            <li><a href="../servizio.php">SERVIZIO CLIENTi</a></li>
        </ul>
    </div>
    <div class="MondoDeiLibri">
        <p>Mondo dei libri 2025. All rights reserved</p>
    </div>
    <div class="payment-icons">
        <img src="../img/mastercard.png" alt="mastercard">
        <img src="../img/visa.png" alt="visa">
        <img src="../img/apple.png" alt="apple">
        <img src="../img/google.png" alt="google">
    </div>
</footer>
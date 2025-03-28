<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Catalogo</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
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

<?php if (isset($_SESSION['user_id'])): ?>
    <div class="welcome">
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    </div>
    <div class="exit"><a href="./login/login_account.php">Esci</a></div>

<?php else: ?>
<?php endif; ?>


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
    <form class="search-form" action="/search" method="get">
        <input type="text" name="query" placeholder="Cerca tutti i prodotti..." class="search-input">
        <button type="submit" class="search-button">🔍</button>
      </form>

      <br> <br>

        <h2 class="prodotti">LE NOSTRE CATEGORIE</h2>

        <br> <br>

        <ul class="categorie">
            <li><a href="catalogo/classica.html" class="link">
                CLASSICA
                <img src="img/claudioMonteverdi.jpg" class="hover-image" alt="Картинка" />
              </a></li>
            <li><a href="catalogo/biografie.html" class="link">
                BIOGRAFIE
                <img src="img/georgeVashington.webp" class="hover-image" alt="Картинка" />
            </a></li>
            <li><a href="catalogo/poesie.html" class="link">
                POESIE
                <img src="img/AleksandrPushkin.jpg" class="hover-image" alt="Картинка" />
            </a></li>
            <li><a href="catalogo/politica.html" class="link">
                POLITICA
                <img src="img/Kennedy.webp" class="hover-image" alt="Картинка" />
            </a></li>
            <li><a href="catalogo/psicologia.html" class="link">
                PSICOLOGIA
            <img src="img/freud.jpg" class="hover-image" alt="Картинка" />
            </a></li>
            <li><a href="catalogo/sport.html" class="link"> 
                SPORT
                <img src="img/UsainBolt.webp" class="hover-image" alt="Картинка" />
            </a></li>
            <li><a href="catalogo/scuola.html" class="link">
                SCUOLA
            <img src="img/scuola.jpg" class="hover-image" alt="Картинка" />
            </a></li>
            <li><a href="catalogo/cucina.html" class="link">
                CUCINA
            <img src="img/cucina.jpg" class="hover-image" alt="Картинка" />
            </a></li>
        </ul>

            <br> <br>
 
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
                        <li><a href="servizio.php">SERVIZIO CLIENTI</a></li>
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

s
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Servizio clienti</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
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

    <br> <br>


    <h2 class="text">SERVIZIO CLIENTI</h2>

    <h3 class="proposte">Per info su ordini, tracking e disponibilità</h3>
    <h3 class="proposte">Lettori: ordini@poste.it </h3>
    <h3 class="proposte">Librerie e Rivenditori: info@libri.it</h3>
    <h3 class="proposte">Telefono: 00000000000</h3>

    <br> <br>

    <h2 class="domande">Hai effettuato un pre-ordine da alcuni giorni e non hai ancora avuto risposta?</h2>
    <p class="paragraph">Pre-Ordine significa che hai comprato un libro in anteprima, che non è stato pubblicato. Se hai fatto il pre-ordine, riceverai il tuo libro prima di tutti. Quando si tratta di pre-ordine, visto che il libro non è ancora stato pubblicato, potrebbero non essere ancora arrivate le copie dalla casa editrice, soprattutto se mancano diversi mesi alla pubblicazione.</p>
    <br> <br>
    <h2 class="domande">Hai provato a fare un ordine ma non sei riuscito a completarlo?</h2>
    <p class="paragraph">Può darsi che tu abbia un problema di linea o un problema tecnico.</p> <p>Riprova a fare l'ordine una seconda volta, provando a cambiare il metodo di pagamento.</p>
    <br> <br>
    <h2 class="domande">Hai bisogno di un quantitativo superiore alle n. 100 copie?</h2>
    <p class="paragraph">Non preoccuparti di effettuare l'ordine normalmente, per noi sei un cliente speciale!</p> <p>Richiedi uno sconto personalizzato alla nostra mail (ordini@santellionline.it). Riceverai un Buono Sconto da utilizzare sul tuo ordine.</p>

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

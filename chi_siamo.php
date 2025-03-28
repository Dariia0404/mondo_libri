<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Chi siamo</title>
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
        <h1 class="testo">CHI SIAMO</h1>
        <br>
        <div class="sottotitolo"><p>Benvenuti nel primo portale italiano online di vendita di libri che coniuga la vendita ai lettori con la fornitura alle librerie.
            Santelli Online offre ai lettori un servizio veloce e moderno, attento alle esigenze di lettura e di consegna, oltre a dare la possibilità - su alcuni libri - a differenza di qualunque altro store, non solo di pre-ordinarli in anteprima ma anche di riceverli diverse settimane prima di chiunque altro.
            Mondo dei Libri offre un servizio di fornitura studiato per sostenere, da un lato, le librerie indipendenti, dall'altro tutti quegli editori che sono fuori dal circuito delle librerie o che non arrivano ancora alle librerie indipendenti. La fornitura alle librerie avviene con estrema attenzione delle esigenze di ciascuna, con flessibilità sui pagamenti, informazioni sulle novità editoriali, crediti omaggio e copie extra.
            Mondolibri è un marchio della società Mondadori Retail S.p.A. specializzato nella vendita di libri per corrispondenza, da anni punto di riferimento per chi ama la lettura. La principale attività è offrire la migliore consulenza in ambito editoriale,valutando, selezionando e proponendo i migliori titoli del panorama letterario italiano e internazionale in esclusiva per i soci del Club.
            Libri, proposte di lettura, moltissime offerte e informazioni editoriali empre aggiornate di Mondolibri il primo e più autentico club del libro italiano, con una comunità di 150.000 lettori in tutta Italia e oltre 50 librerie presenti sul territorio nazionale.</p>

        </div>
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

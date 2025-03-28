<?php
session_start();

// Перевірка, чи є товари в кошику
if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty</p>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>Pagamento</h1>

<p>Il tuo carrello</p>
<ul>
    <?php
    // Перевірка чи масив $_SESSION['cart'] є асоціативним масивом і чи мають елементи всі необхідні індекси
    if (is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            if (isset($item['name'], $item['price'], $item['quantity'])) {
                echo "<li>" . htmlspecialchars($item['name']) . " - " . $item['price'] . " (Quantità: " . $item['quantity'] . ")</li>";
            } else {
                echo "<li>Errore: Dati del prodotto non corretti.</li>";
            }
        }
    } else {
        echo "<p>Errore: Il carrello non contiene dati validi.</p>";
    }
    ?>
</ul>

<p>Totale: <?php
    // Підрахунок загальної суми з перевіркою
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        if (isset($item['price'], $item['quantity'])) {
            $total += $item['price'] * $item['quantity'];
        }
    }
    echo $total;
    ?></p>

<p>Puoi procedere al pagamento</p>

<!-- Тут можна додати форму для платіжних систем -->
</body>
</html>

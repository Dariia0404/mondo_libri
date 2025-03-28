<?php
session_start();

// Перевірка, чи є товари в кошику
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty</p>";
    exit;
}

// Підрахунок загальної суми
$total = 0;

// Видалення товару з кошика
if (isset($_GET['remove'])) {
    $removeIndex = $_GET['remove'];  // Отримуємо індекс товару для видалення
    if (isset($_SESSION['cart'][$removeIndex])) {
        unset($_SESSION['cart'][$removeIndex]);  // Видаляємо товар з кошика
        $_SESSION['cart'] = array_values($_SESSION['cart']);  // Перестановка індексів масиву
    }
    // Перенаправлення назад до кошика після видалення
    header('Location: cart.php');
    exit;
}

// Зміна кількості товару
if (isset($_POST['update_quantity'])) {
    $index = $_POST['index'];  // Отримуємо індекс товару
    $newQuantity = $_POST['quantity'];  // Отримуємо нову кількість

    if (isset($_SESSION['cart'][$index])) {
        $_SESSION['cart'][$index]['quantity'] = $newQuantity;  // Оновлюємо кількість товару
    }

    // Перенаправлення назад до кошика після оновлення
    header('Location: cart.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrello</title>
    <link rel="stylesheet" href="css/offer-book.css">
</head>
<body>
<h1 class="cart">Il tuo carrello</h1>

<table border="1">
    <thead>
    <tr>
        <th>Nome di prodotto</th>
        <th>Quantità</th>
        <th>Prezzo</th>
        <th>Totale</th>
        <th>Azioni</th>
    </tr>
    </thead>
    <tbody>

    <?php
    // Перебираємо всі товари в кошику
    foreach ($_SESSION['cart'] as $index => $item):
        // Перевіряємо, чи товар є масивом з необхідними ключами
        if (isset($item['name'], $item['price'], $item['quantity'])):
            $totalPrice = $item['price'] * $item['quantity'];  // Підраховуємо загальну ціну для цього товару
            $total += $totalPrice;  // Додаємо до загальної суми
            ?>
            <tr>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td>
                    <!-- Форма для зміни кількості товару -->
                    <form action="cart.php" method="POST">
                        <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit" name="update_quantity">Update</button>
                    </form>
                </td>
                <td><?php echo $item['price']; ?> </td>
                <td><?php echo $totalPrice; ?> </td>
                <td>
                    <!-- Кнопка для видалення товару -->
                    <a href="cart.php?remove=<?php echo $index; ?>">Delete</a>
                </td>
            </tr>
        <?php endif; endforeach; ?>

    </tbody>
</table>

<p>Totale: <?php echo $total; ?> </p>

<!-- Перехід на сторінку оплати -->
<form action="checkout.php" method="POST">
    <button type="submit">Procedi al pagamento</button>
</form>

</body>
</html>

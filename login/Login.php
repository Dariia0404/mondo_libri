<?php
class Login {
    // Метод для перевірки логіну користувача
    public function loginUser($username, $password) {
        // Підключення до бази даних
        $conn = new mysqli('localhost', 'root', '', 'users_ml'); // Заміни на свої дані

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Захист від SQL-ін'єкцій
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        // Перевірка чи користувач існує в базі даних
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Перевірка пароля
            if (password_verify($password, $user['password'])) {
                return "Sei entrato nel tuo account.";
            } else {
                return "Password errata.";
            }
        } else {
            return "Utente non trovato.";
        }

        $conn->close();
    }
}
?>


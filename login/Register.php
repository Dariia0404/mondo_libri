<?php
class Register {
    // Метод для реєстрації нового користувача
    public function registerUser($username, $email, $password) {
        // Підключення до бази даних
        $conn = new mysqli('localhost', 'root', '', 'users_ml'); // Заміни на свої дані

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Захист від SQL-ін'єкцій
        $username = $conn->real_escape_string($username);
        $email = $conn->real_escape_string($email);
        $password = password_hash($conn->real_escape_string($password), PASSWORD_DEFAULT); // Хешування пароля

        // Перевірка, чи вже існує користувач з таким логіном
        $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return "Username o Email già in uso.";
        } else {
            // Додавання користувача до бази даних
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                return "Registrazione completata!";
            } else {
                return "Errore: " . $conn->error;
            }
        }

        $conn->close();
    }
}
?>

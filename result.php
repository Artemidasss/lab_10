<?php require 'header.php'; ?>

<h2>Результат отправки</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    if ($name && $email && $message) {
        echo "<p><strong>Имя:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Сообщение:</strong><br>" . nl2br($message) . "</p>";
    } else {
        echo "<p style='color: red;'>Пожалуйста, заполните все поля!</p>";
        echo "<p><a href='contact.php'>Вернуться назад</a></p>";
    }
} else {
    echo "<p>Данные не отправлены правильно.</p>";
    echo "<p><a href='contact.php'>Перейти к форме</a></p>";
}
?>

<?php require 'footer.php'; ?>
<?php require 'header.php'; ?>

<h2>Форма для связи</h2>
<form method="POST" action="result.php">
    <div>
        <label for="name">Ваше имя:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Ваш email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="message">Ваше сообщение:</label>
        <textarea name="message" id="message" rows="5" required></textarea>
    </div>
    <button type="submit">Отправить сообщение</button>
</form>

<?php require 'footer.php'; ?>
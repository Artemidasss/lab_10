<?php require 'header.php'; ?>

<h2>Поиск на сайте</h2>
<form method="GET" action="index.php">
    <label for="query">Что вы ищете?</label>
    <input type="text" name="q" id="query" value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
    <button type="submit">Найти</button>
</form>

<?php
if (isset($_GET['q']) && !empty(trim($_GET['q']))) {
    $searchQuery = htmlspecialchars(trim($_GET['q']));
    echo "<h3>Вот результаты:</h3>";
    echo "<p>Ваш запрос: <strong>$searchQuery</strong></p>";
    // Здесь можно добавить логику реального поиска, но в рамках лабораторной просто выводим запрос
} else {
    echo "<p>Введите фразу для поиска.</p>";
}
?>

<?php require 'footer.php'; ?>
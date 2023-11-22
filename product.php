<?php
// Подключение к базе данных
$servername = "sql11.freesqldatabase.com";
$username = "sql11664234";
$password = "wIxbmYPXMz";
$dbname = "sql11664234";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение информации о продукте по его ID
$productId = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle.css">
    <title><?php echo $product['name']; ?></title>
</head>
<body>
    <main>

    <header class="header-style">
    <h1 class="text-label">Магазин микрокомпьютеров SINARDCOM</h1>
    <p></p>



    <nav>
        <!-- <ul class="header_menu">
        <li class="header_menu-item"><a class="menu-item" href="https://sinardcom.ru/collection/all">Каталог</a></li>
        <li class="header_menu-item"><a class="menu-item" href="https://sinardcom.ru/blogs/blogs">Блог</a></li>
        <li class="header_menu-item"><a class="menu-item" href="https://sinardcom.ru/page/about-us">О компании</a></li>
        <li class="header_menu-item"><a class="menu-item" href="https://sinardcom.ru/page/contacts">Контакты</a></li>
        <li class="header_menu-item"><a class="menu-item" href="https://sinardcom.ru/page/delivery-payment">Доставка и
            оплата</a></li>
        <li class="header_menu-item"><a class="menu-item" href="https://sinardcom.ru/page/faq">FAQ</a></li>
        <li><img class="header_menu-label" src="image.png" alt="logo"></li>
        </ul> -->
        <?php
        $menuItems = array(
        array("text"=>"Главная","url"=>"index.php"),
        array("text" => "Каталог", "url" => "shop.php"),
        array("text" => "Блог", "url" => "https://sinardcom.ru/blogs/blogs"),
        array("text" => "О компании", "url" => "https://sinardcom.ru/page/about-us"),
        array("text" => "Контакты", "url" => "https://sinardcom.ru/page/contacts"),
        array("text" => "Доставка и оплата", "url" => "https://sinardcom.ru/page/delivery-payment"),
        array("text" => "FAQ", "url" => "https://sinardcom.ru/page/faq"),
        );

        echo '<ul class="header_menu">';
        foreach ($menuItems as $item) {
        echo '<li class="header_menu-item"><a class="menu-item" href="' . $item["url"] . '">' . $item["text"] . '</a></li>';
        }
        echo '<li><img class="header_menu-label" src="image.png" alt="logo"></li>';
        echo '</ul>';
        ?>
        
    </nav>
    </header>

        
        <!-- Режим отдельной страницы -->
        <div class="product-details">
            <!-- Кнопка возврата на страницу shop.php -->
            <button onclick="window.location.href='shop.php'">Назад в магазин</button>
            <!-- Кнопка возврата на главную страницу -->
            <button onclick="window.location.href='index.php'">На главную</button>

            <img src='<?php echo $product['image_path']; ?>' alt='<?php echo $product['name']; ?>' class="prod-img">
            <h2><?php echo $product['name']; ?></h2>
            <p>Цена: <?php echo $product['price']; ?></p>
            <p>Характеристики: <?php echo $product['characteristics']; ?></p>
            <p>Описание: <?php echo $product['description']; ?></p>
            <p>Количество в наличии: <?php echo $product['quantity']; ?></p>

             <!-- Кнопка "Добавить в корзину" -->
             <button id="addToCartBtn" data-product-id="<?php echo $product['id']; ?>">Добавить в корзину</button>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // ... Ваш существующий JavaScript-код ...

    // Обработчик нажатия на кнопку "Добавить в корзину"
    var addToCartBtn = document.getElementById('addToCartBtn');
    if (addToCartBtn) {
        addToCartBtn.addEventListener('click', function () {
            var productId = this.getAttribute('data-product-id');

            // Вместо этого места добавьте код для отправки данных на сервер или локального сохранения в корзину
            alert('Товар добавлен в корзину!'); // Пример: вы можете заменить этот алерт реальным кодом
        });
    }
});

    </script>
    </main>
</body>
</html>

<?php
// Закрытие соединения с базой данных
$conn->close();
?>

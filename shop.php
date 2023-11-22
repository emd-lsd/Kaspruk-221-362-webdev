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

// Запрос для получения продукции
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle.css">
    <title>Магазин</title>
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

        <!-- Режим таблицы -->
        <table>
            <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Описание</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'></td>";
                    echo "<td><a href='product.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <script src="script.js"></script>
        </table>
    </main>
    
</body>
</html>

<?php
// Закрытие соединения с базой данных
$conn->close();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <?php
    $dynamicTitle = "SINA ENGINEERING";
    echo "<title>$dynamicTitle</title>"
    ?>
    
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Playfair+Display:wght@400;600;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Playfair+Display:wght@400;600;900&display=swap" rel="stylesheet">



</head>

<body>
    
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
        <!-- <p ><a href="auth.html" class="auth-link">Авторизация</a></p> -->
        <p><a href = "<?php 
            $name = "Sign-in";
            $link = "auth.php";
            $current_page = true;

            echo $link;
        ?>" class="<?php
            if($current_page)
                echo 'auth-link';
        ?>"><?php
            
            echo $name;
        ?></a></p>
    </nav>
    </header>
    <main>
    <article>
        <section class="content">
        <div class="content-text">
            <?php
            $dynamicH2 = "Синардком - интернет-магазин микрокомпьютеров и комплектующих к ним";
            ?>
            <h2 class="label2">
            <!-- Синардком - интернет-магазин микрокомпьютеров и комплектующих к ним<br> -->
            <?php echo $dynamicH2  ?><br>
            </h2>
            <p class="text1">
            Добро пожаловать в магазин СИНАРДКОМ (SINARDCOM)! <br>Наша компания занимается продажей комплектующих и
            одноплатных микрокомпьютеров, чтобы помочь нашим клиентам реализовать свои идеи и проекты.<br>
            Мы осознаем, что на сегодняшний день одноплатные микрокомпьютеры являются очень актуальным и важным
            инструментом, и именно поэтому мы создали SINARDCOM - чтобы предложить широкий выбор таких устройств и
            комплектующих. <br>Название нашего магазина было выбрано неслучайно: оно отражает суть нашей деятельности и
            происходит от сокращения фразы "single-board computer". <br>Кроме того, основной цвет нашего бренда - синий
            - также не был выбран случайно, так как он символизирует множество плат из текстолита, окрашиваемых в этот
            цвет.<br>
            Мы гордимся тем, что предоставляем нашим клиентам непревзойденный уровень обслуживания. <br>Наша компания
            предлагает широкий выбор продукции, экспресс-доставку, а также скидки постоянным заказчикам и оптовым
            покупателям. Мы гарантируем, что наши цены находятся на самом низком уровне в индустрии, так как мы
            сотрудничаем с изготовителями напрямую.
            <br>Мы стремимся стать вашим надежным партнером в области одноплатных микрокомпьютеров и комплектующих, и
            надеемся на продолжительное и взаимовыгодное сотрудничество. <br>Спасибо, что выбрали СИНАРДКОМ!
            </p>
        </div>
        <div>
            <!-- <img class="content-img" src="image2.png" alt="logo2"> -->
            <?php
            $currentSecond = date("s"); // Получаем текущую секунду
            $imageSrc = ($currentSecond % 2 == 0) ? "image2.png" : "image3.png";
            ?>

            <img class="content-img" src="<?php echo $imageSrc; ?>" alt="logo2">
        </div>
        </section>
        <section class="table">
        <div>
            <table>
            <tr>
                <td class="" rowspan="4"><a class="table-content"
                  href="https://sinardcom.ru/collection/mikrokompyutery">Микрокомпьютеры</a></td>
            <tr>
                <td><a class="table-content" href="https://sinardcom.ru/collection/nabory">Наборы</a></td>
                <td><a class="table-content" href="https://sinardcom.ru/collection/bloki-pitaniya">Блоки питания</a></td>
                <td><a class="table-content" href="https://sinardcom.ru/collection/monitory">Мониторы</a></td>
            </tr>
            <tr>
                <td><a class="table-content" href="https://sinardcom.ru/collection/katalog-1-a52e1a">Корпуса<br>Orange
                    Pi</a></td>
                <td><a class="table-content"
                  href="https://sinardcom.ru/collection/korpusa-raspberry-pi">Корпуса<br>Raspberry Pi</a></td>
                <td><a class="table-content" href="https://sinardcom.ru/collection/razlichnye-kabeli">Различные кабели</a>
                </td>
            </tr>
            </tr>
            </table>
        </div>
        </section>
    </article>
    </main>
    <div class="communication">
        
        <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
            <h1>Обратная связь</h1>
            <label for="fio">ФИО:</label>
            <input class="com-inp" type="text" id="fio" name="fio" required><br>

            <label for="email">Email:</label>
            <input class="com-inp" type="email" id="email" name="email" required><br>

            <label>Откуда узнали о нас:</label><br>
            <input type="radio" id="internet" name="source" value="Интернет" required>
            <label for="internet">Интернет</label><br>
            <input type="radio" id="tv" name="source" value="Телевизор">
            <label for="tv">Телевизор</label><br>
            <input class="lab-fr" type="radio" id="friends" name="source" value="Друзья">
            <label for="friends">Друзья</label><br>

            <label for="type">Тип обращения:</label>
            <select class="lab-fr" id="type" name="type" required>
            <option value="Жалоба">Жалоба</option>
            <option value="Предложение">Предложение</option>
            </select><br>

            <label for="message">Текст сообщения:</label><br>
            <textarea class="lab-fr" id="message" name="message" rows="4" required></textarea><br>

            <label for="attachment">Вложения:</label>
            <input class="com-inp" type="file" id="attachment" name="attachment"><br>

            <input type="checkbox" id="consent" name="consent" required>
            <label for="consent">Даю согласие на обработку персональных данных</label><br>
            <input class="com-inp" type="submit" value="Отправить">
        </form>
    </div>
    <footer>
    <p>Контактная информация:</p>
    <ul>
        <li>8-495-988-09-16</li>
        <li>sales@sinardcom.ru</li>

    </ul>
    <p>© 2023 Любое использование контента без письменного разрешения запрещено</p>
    <!-- <p>Страница сформирована - 00,00,00</p> -->
    <?php
    $currentDateTime = date("d.m.Y в H:i:s");
    echo "Сформировано $currentDateTime";
    ?>
    </footer>

</body>

</html>
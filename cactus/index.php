<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин кактусов</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="top_header">
        <div class="wrapper">
            <div class="logo">
                <a href="http://">
                    <img src="assets\img\svg\logo.svg" alt="logo">
                </a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Доставка</a></li>
                </ul>
            </nav>
            <div class="button">
                <a href="http://google.com">Купить</a>
            </div>
        </div>
    </header>
    <main class="main" role="main">
        <section class="wrapper">
            <section class="wallpaper">
                <div class="left">
                    <div class="text">
                        Купи кактус - получи второй в подарок
                    </div>
                    <div class="button">
                        <a href="http://">Купить</a>
                    </div>
                </div>
                <div class="right">
                    <div class="logo_picture">
                        <img src="assets\img\svg\logo_picture.svg" alt="logo_picture">
                    </div>
                </div>
            </section>
            <section class="catalog">
                <h1>Каталог</h1>
                <div class="products">
                    <section class="product_1">
                        <img src="assets\img\svg\cactus_1.svg" alt="product_1">
                        <div class="text">
                            <h2>Эхиноцереус</h2>
                            <h3>199 ₽</h3>
                        </div>
                        <div class="button">
                            <a href="http://">Купить</a>
                        </div>
                    </section>
                    <section class="product_2">
                        <img src="assets\img\svg\cactus_2.svg" alt="product_2">
                        <div class="text">
                            <h2>Трихоцереус</h2>
                            <h3>249 ₽</h3>
                        </div>
                        <div class="button">
                            <a href="http://">Купить</a>
                        </div>
                    </section>
                    <section class="product_3">
                        <img src="assets\img\svg\cactus_3.svg" alt="product_3">
                        <div class="text">
                            <h2>Нотокактус</h2>
                            <h3>149 ₽</h3>
                        </div>
                        <div class="button">
                            <a href="http://">Купить</a>
                        </div>
                    </section>
                    <section class="product_4">
                        <img src="assets\img\svg\cactus_4.svg" alt="product_4">
                        <div class="text">
                            <h2>Опунция</h2>
                            <h3>299 ₽</h3>
                        </div>
                        <div class="button">
                            <a href="http://">Купить</a>
                        </div>
                    </section>
                </div>
            </section>
            <table>
        <tr>
        <th>ID</th>
            <th>Title</th>
            <th>price</th>
            
        </tr>
        <?php 
        $products = mysqli_query($connect, "SELECT * FROM `products`");
        $products = mysqli_fetch_all($products);
        foreach($products as $products) {
        ?>
            <tr>
            <td><?=$products[0]?></td>
            <td><?=$products[1]?></td>
            <td><?=$products[2]?></td>
            
        </tr>
        <?php }
        ?>
    </table>
            <section class="pay">
                <h1>Оплата</h1>
                <div class="pay_picture">
                    <img src="assets\img\svg\pay_picture.svg" alt="pay_picture">
                </div>
            </section>
            <section class="delivery">
                <h1>Доставка</h1>
                <div class="delivery_picture">
                    <img src="assets\img\svg\delivery_picture.svg" alt="delivery_picture">
                </div>
            </section>
            <section class="about">
                <h1>О компании</h1>
                <div class="team">
                    <section class="member_1">
                        <div class="image">
                            <img src="assets\img\svg\member_1.svg" alt="member_1">
                        </div>
                        <h3>Елена Михайловна</h3>
                    </section>
                    <section class="member_2">
                        <div class="image">
                            <img src="assets\img\svg\member_2.svg" alt="member_2">
                        </div>
                        <h3>Полина Владимировна</h3>
                    </section>
                    <section class="member_3">
                        <div class="image">
                            <img src="assets\img\svg\member_3.svg" alt="member_3">
                        </div>
                        <h3>Дарья Олеговна</h3>
                    </section>
                </div>
            </section>
        </section>
    </main>

    <footer class="footer">
        <div class="wrapper">
            <div class="logo">
                <a href="http://">
                    <img src="assets\img\svg\logo.svg" alt="logo">
                </a>
            </div>
            <nav class="icons">
                <ul>
                    <li><a href="#"><img src="assets\img\svg\icon_facebook.svg" alt="icon_facebook"></a></li>
                    <li><a href="#"><img src="assets\img\svg\icon_instagram.svg" alt="icon_instagram"></a></li>
                    <li><a href="#"><img src="assets\img\svg\icon_twitter.svg" alt="icon_twitter"></a></li>
                    <li><a href="#"><img src="assets\img\svg\icon_youtube.svg" alt="icon_youtube"></a></li>
                </ul>
            </nav>
            <div class="button">
                <a href="#">Наверх</a>
            </div>
    </footer>
    <style>
       th, td {
        padding:10px; 
        }
    th {
        background:#606060;
        color:#fff;

    }
    td {
        background:#ccc;
        
    }
    </style>
</body>

</html>
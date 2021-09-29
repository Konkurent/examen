<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/php/core.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Хижина программиста</title>

    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <script defer src="/js/jquery-3.5.1.js"></script>
    <script defer src="/js/slick.min.js"></script>
    <script defer src="/js/jquery.mask.min.js"></script>
    <script defer src="/js/script.js"></script>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__row">
            <button class="header__btn_mob"><img src="/img/header__btn_mob.png" alt=""></button>
            <nav>
                <ul class="menu">
                    <li class="menu__item">
                        <a href="#top" class="menu__link">Услуги</a>
                    </li>
                    <li class="menu__item">
                        <a href="#middle" class="menu__link">Портфолио</a>
                    </li>
                    <li class="menu__item">
                        <a href="#down" class="menu__link">Стоимость</a>
                    </li>
                </ul>
            </nav>
            <div class="header__row_right">
                <a href="tel:+79031585368" class="header__link">+7 (985) 358-96-99</a>
                <button class="header__btn">Заказать звонок</button>
                <button class="call__btn_mob"><span class="fa fa-phone"></span></button>
            </div>
        </div>
    </div>
</header>
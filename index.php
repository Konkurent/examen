<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/template/header.php');
?>

    <div class="mob-menu__bg">
        <section class="mob-menu">
            <div class="mob-container">
                <div class="mob-menu__row">
                    <button><span class="fa fa-times"></span></button>
                    <h3 class="mob-menu__title">
                        Голякова Елена
                    </h3>
                </div>
                <div class="mob-menu__content">
                    <nav>
                        <ul class="mob-menu__list">
                            <li class="mob-menu__item">
                                <a href="#top">Услуги <span class="fa fa-circle"></span></a>
                            </li>
                            <li class="mob-menu__item">
                                <a href="#middle">Портфолио <span class="fa fa-circle"></span></a>
                            </li>
                            <li class="mob-menu__item">
                                <a href="#down">Стоимость <span class="fa fa-circle"></span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>

    <main class="main">
        <section class="bio">
            <span class="teg teg_1">&lt;div&gt;</span>
            <span class="teg teg_2">&lt;div&gt;</span>
            <span class="teg teg_3">{ }</span>
            <span class="teg teg_4">#</span>
            <span class="teg teg_5">&lt;/&gt;</span>
            <span class="teg teg_6">&lt;/&gt;</span>
            <div class="container" style="display: flex; justify-content: center; align-items: center">
                <div class="bio__row">
                    <div class="bio__column">
                        <h3 class="bio__title">
                            Голякова Елена
                        </h3>
                        <p class="bio__text"> 
                            Frontend-разработчик и веб-разработчик
                        </p>
                        <div class="bio__btn_container">
                            <button class="bio__btn btn">
                                Узнать больше
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="what">
            <a id="top"></a>
            <div class="container">
                <h3 class="title">
                    Что я делаю
                </h3>
                <div class="what__row">
                    <div class="what__item">
                        <img src="img/tools-and-utensils.png" alt="Картинка">
                        <p class="what__text">
                            Вёрстка лендинг–страниц <br>
                            и сайтов любой сложности
                        </p>
                    </div>
                    <div class="what__item">
                        <img src="img/responsive.png" alt="Картинка">
                        <p class="what__text">
                            Адаптивная вёрстка под все
                            браузеры и устройства
                        </p>
                    </div>
                    <div class="what__item">
                        <img src="img/programming.png" alt="Картинка">
                        <p class="what__text">
                            Frontend–разработка <br>
                            и программирование
                        </p>
                    </div>
                    <div class="what__item">
                        <img src="img/coding.png" alt="Картинка">
                        <p class="what__text">
                            Исправление и доработка
                            существующей вёрстки
                        </p>
                    </div>
                </div>
                <div class="what__btn_container">
                    <button class="what__btn btn">
                        Узнать стоимость
                    </button>
                </div>
            </div>
        </section>
    
        <section class="ex">
            <a id="middle"></a>
            <div class="container">
                <h3 class="title">
                    Примеры моих работ
                </h3>
                <div class="slider">
                    <div class="slider__item">
                        <img src="img/Layer2.jpg" alt="Картинка">
                        <p>Сайт психолога Веры Антоновой</p>
                    </div>
                    <div class="slider__item">
                        <img src="img/Layer1.png" alt="Картинка">
                        <p>Сайт магазина детской одежды</p>
                    </div>
                    <div class="slider__item">
                        <img src="img/Layer3.png" alt="Картинка">
                        <p>Сайт магазина «Рыболов»</p>
                    </div>
                    <div class="slider__item">
                        <img src="img/Luchshie-knigi-po-psihologii.jpg" alt="Картинка">
                        <p>Сайт высшей школы психологии</p>
                    </div>
                </div>
                <div class="ex__btn_container">
                    <button class="ex__btn btn">Заказать проект</button>
                </div>
            </div>
        </section>

        <section class="price">
            <a id="down"></a>
            <span class="teg teg_1 teg__1">{ }</span>
            <span class="teg teg_2 teg__2">&lt;div&gt;</span>
            <span class="teg teg_3 teg__3">{ }</span>
            <span class="teg teg_4 teg__4">#</span>
            <span class="teg teg_5 teg__5">&lt;/&gt;</span>
            <div class="container">
                <h5 class="price__text price__container">
                    Адаптивная вёрстка под все устройства
                    и&nbsp;браузеры от 1000 рублей всего за 4 часа.*
                </h5>
                <div class="price__row price__container price__container_com">
                    <span><sup>*</sup></span>
                    <p class="price__comment">
                        Срок и стоимость могут отличаться от заявленных и рассчитываются  индивидуально,&nbsp;
                        в&nbsp;зависимости от&nbsp;сложности&nbsp;задач
                    </p>
                </div>
            </div>
        </section>
        <div class="lists">
            <div class="container">
                <div class="lists__row">
                    <ul class="lists__list_1">
                        <li>
                            <a href="#top">Услуги</a>
                        </li>
                        <li>
                            <a href="#middle">Портфолио</a>
                        </li>
                        <li>
                            <a href="#down">Стоимость</a>
                        </li>
                    </ul>
                    <ul class="lists__list_2">
                        <li>
                            <a href="tel:+79853589699"><span class="fa fa-phone"></span>+7 (985) 358-96-99</a>
                        </li>
                        <li>
                            <a href="mailto:<?=EMAIL?>"><span class="fa fa-envelope"></span><?=EMAIL?></a>
                        </li>
                    </ul>
                    <ul class="lists__list_3">
                        <li>
                            <button class="header__btn lists__btn">Заказать звонок</button>
                        </li>
                        <li>
                            <div class="lists__sprait lists__sprait_1">
                                <a href="https://vk.com/mishel.moor" target="_blank"></a>
                            </div>
                            <div class="lists__sprait lists__sprait_2"></div>
                            <div class="lists__sprait lists__sprait_3"></div>
                            <div class="lists__sprait lists__sprait_4">
                                <a href="https://instagram.com/mishel.moor/" target="_blank"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/template/footer.php');
?>
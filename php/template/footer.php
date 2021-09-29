<footer class="footer">
    <p class="footer__text">
        &copy; Елена Голякова, 2021
    </p>
</footer>

<section class="info__bg">
    <div class="info">
        <div class="info_container">
            <h3 class="info__title">
                Обо мне
            </h3>
            <p style="color: white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at atque deleniti ducimus possimus! A, alias autem fuga laborum minima nam perferendis ullam. Dolore doloremque ex, explicabo magnam minima minus?
            </p>
            <div class="info__btn_container">
                <button>
                    Закрыть
                </button>
            </div>
        </div>
    </div>
</section>

<section class="service__bg">
    <div class="service">
        <div class="service_container">
            <h3 class="service__title">
                Стоимость моих услуг
            </h3>
            <p class="service__text">
                Цена разработки любого проекта зависит от сложности самого проекта.
            </p>
            <div class="service__row">
                <div class="service__item">
                    Landing <br>
                    От 1000 рублей
                </div>
                <div class="service__item">
                    Сайт под ключ <br>
                    От 3000 рублей
                </div>
                <div class="service__item">
                    Интернет-магазин <br>
                    От 5000 рублей
                </div>
            </div>
            <div class="service__btn_container">
                <button class="service__btn">
                    Закрыть
                </button>
            </div>
        </div>
    </div>
</section>

<section class="project__bg">
    <div class="project">
        <div class="project__container">
            <div class="project__row">
                <button class="project__btn_top">
                    <span class="fa fa-times"></span>
                </button>
                <h3 class="project__title">
                    Заказать проект
                </h3>
            </div>
            <form class="form">
                <input type="hidden" name="id" value="2">
                <input type="text" name="Name" placeholder="Введите имя">
                <input type="email" name="Email" placeholder="Введите почту">
                <textarea name="text" placeholder="Введите свои пожелания"></textarea>
                <div class="project__btn_container">
                    <button class="project__btn">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="call__bg">
    <div class="call">
        <div class="call_container">
            <div class="call__row">
                <button>
                    <span class="fa fa-times"></span>
                </button>
                <h3>
                    Заказать звонок
                </h3>
            </div>
            <form class="form">
                <input type="hidden" name="id" value="1">
                <input type="text" name="Name" placeholder="Введите имя" required="required">
                <input type="text" name="Surname" placeholder="Введите фамилию">
                <input type="email" name="Email" placeholder="Введите почту" required="required">
                <input type="tel" name="Phone" placeholder="Введите номер телефона" required="required" id="input__tel">
                <div class="call__btn_container">
                    <button class="call__btn">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
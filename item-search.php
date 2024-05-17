<?php //Template name:item-search ?>
<?php get_header(); ?>

<main class="main">
    <div class="main__container">
        <div class="search">
            <div class="search__wrapper">
                <div class="search__title">iPhone <span>REF</span></div>
                <div class="search__sup">(восстановленный)</div>
                <p class="search__p">Нашли дешевле? Напишите нам и мы сможем найти <br> договоренность</p>
            </div>
        </div>

        <div class="price-list">
            <div class="price-list__container container">
                <div class="price-list__items pl elements_wr itemS " style="row-gap:36px;">
                </div>
            </div>
        </div>

        <div class="steps">
            <div class="steps__title">5 шагов для начала работы</div>

            <div class="steps__wrapper container">
                <span class="steps__item active">
                    <span class="circle">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/galka.svg" alt="#">
                    </span>
                    <div class="steps__item-title">Шаг 1</div>
                    <p class="steps__item-p">Оставляете заявку
                        на сайте или в соцсетях</p>
                </span>
                <span class="steps__item active">
                    <span class="circle">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/galka.svg" alt="#">
                    </span>
                    <div class="steps__item-title">Шаг 2</div>
                    <p class="steps__item-p">Наш менеджер связывается с вами</p>
                </span>
                <span class="steps__item active">
                    <span class="circle">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/galka.svg" alt="#">
                    </span>
                    <div class="steps__item-title">Шаг 3</div>
                    <p class="steps__item-p">Получаете расчет
                        и производите оплату</p>
                </span>
                <span class="steps__item active">
                    <span class="circle">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/galka.svg" alt="#">
                    </span>
                    <div class="steps__item-title">Шаг 4</div>
                    <p class="steps__item-p">В течение 24 часов мы собираем заказ</p>
                </span>
                <span class="steps__item active">
                    <span class="circle">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/galka.svg" alt="#">
                    </span>
                    <div class="steps__item-title">Шаг 5</div>
                    <p class="steps__item-p">Отправляем заказ, присылаем трек-номер</p>
                </span>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>

        </div>
      <div class="container_f">

        <script>!function (a, m, o, c, r, m) { a[o + c] = a[o + c] || { setMeta: function (p) { this.params = (this.params || []).concat([p]) } }, a[o + r] = a[o + r] || function (f) { a[o + r].f = (a[o + r].f || []).concat([f]) }, a[o + r]({ id: "1344410", hash: "75e49f48d0041266c7f66f70964fb2d9", locale: "ru" }), a[o + m] = a[o + m] || function (f, k) { a[o + m].f = (a[o + m].f || []).concat([[f, k]]) } }(window, 0, "amo_forms_", "params", "load", "loaded");</script>
        <script id="amoforms_script_1344410" async="async" charset="utf-8"
            src="https://forms.amocrm.ru/forms/assets/js/amoforms.js?1715969511"></script>
        </div>
        <!-- <div class="form">
            <div class="form__container container">
                <div class="form__box">
                    <div class="form__title">Заявка на обратный звонок</div>
                    <p class="form__p">Оставьте заявку и наш менеджер свяжется с Вами <br>
                        в ближайщее время</p>
                    <form action="#">
                        <label for="name">Имя</label><br>
                        <input type="text" name="name" id="name" class="form__input"><br>
                        <label for="tel">Телефон</label><br>
                        <input type="text" name="tel" class="form__input">
                                               <div class="submit-box">
                           
                            <button class="btn-white">Отправить</button>
                        </div>
                    </form>
                </div>

                <div class="form__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/hand.png" alt="#">
                </div>
            </div>
        </div> -->
    </div>


</main>
<?php get_sidebar();?>

<div class="surfacing">
    <div class="surfacing__container">
        <div class="surfacing__left">
            <div class="surfacing__title">
                Для быстрого ответа свяжитесь с нами
                в соцсетях
            </div>
            <p class="surfacing__p"> Наши менеджеры ответят Вам мгновенно</p>
            <div class="surfacing__btn-box">
                <button class="btn-white telegramH"><span>Telegram</span> <img
                        src="<?php bloginfo('template_url'); ?>/assets/icons/telegram-black.svg" alt="#"></button>
                <button class="btn-white whatsappH"><span>WhatsApp</span> <img
                        src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp-black.svg" alt="&"></button>
            </div>
        </div>
        <div class="surfacing__right">
            <img src="<?php bloginfo('template_url'); ?>/assets/icons/close-wh.png" alt="" class="surfacing__close">
            <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsappB.png" alt="" class="surfacing__whatsapp">
            <img src="<?php bloginfo('template_url'); ?>/assets/icons/telegramB.png" alt="" class="surfacing__telegram">
        </div>
    </div>
</div>

<?php get_footer(); ?>
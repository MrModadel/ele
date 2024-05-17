<?php
//Template name:contacts
?>
<?php get_header(); ?>

<style>
    .steps__item-p {
        max-width: 300px;
    }

    .steps__wrapper container {
        width: 100%;
    }

    .ad__wrapper {
        background: transparent;
        padding: 0;
        grid-template-columns: 40% 60%;
    }
</style>
<main class="main">
    <div class="main__container">


        <div class="ad contacts ">
            <div class="ad__wrapper container" style="padding:  0 24px;">
                <div class="ad__left" style="padding: 95px 0;">
                    <div class="ad__title" style="color: #1d1d1f;">Контакты</div>

                    <div class="ad__contacts">

                        <div class="ad__contacts" style="margin-top: 44px;">
                            <div class="ad__advice-title">Офис</div>
                            <p class="ad__cup" style="color: #3c3c3c;">г. Москва, Перерва 52 стр.1,
                                Офис 14</p>
                        </div>
                        <div class="ad__contacts" style="margin-top: 36px;">
                            <div class="ad__advice-title">Телефон</div>
                            <p class="ad__cup" style="color: #3c3c3c;">+ 7 (930) 238-00-00</p>
                        </div>
                        <div class="ad__contacts" style="margin-top: 36px;">
                            <div class="ad__advice-title">Почта</div>
                            <p class="ad__cup" style="color: #3c3c3c;">electronik-optom@mail.ru</p>
                        </div>
                        <div class="ad__contacts" style="margin-top: 36px;">
                            <div class="ad__advice-title" style="margin-bottom: 21px;">Наши соцсети</div>
                            <div class="ad__icons">
                                <a href="https://t.me/iam_electronik"> <img
                                        src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.png" alt=""
                                        class="ad__icon"></a>
                                <a href="https://wa.me/79302380000"> <img
                                        src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.png" alt=""
                                        class="ad__icon" style="margin-left: 20px;"></a>
                                <a href="https://www.youtube.com/@electronik_optom"> <img
                                        src="<?php bloginfo('template_url'); ?>/assets/icons/youtube.png" alt=""
                                        class="ad__icon" style="margin-left: 20px;"></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ad__right" style="padding:95px 0 0 0 ;">
                    <div style="position:relative;overflow:hidden;widht:100%; height:100%;"><a
                            href="https://yandex.uz/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
                            href="https://yandex.uz/maps/213/moscow/house/ulitsa_pererva_52s1/Z04YcQRoSUwOQFtvfXp0cnxiYQ==/?ll=37.738099%2C55.653015&utm_medium=mapframe&utm_source=maps&z=16.24"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Перерва, 52с1 —
                            Яндекс Карты</a>
                        <iframe
                            src="https://yandex.uz/map-widget/v1/?ll=37.738099%2C55.653015&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjY1NTQ3NxI80KDQvtGB0YHQuNGPLCDQnNC-0YHQutCy0LAsINGD0LvQuNGG0LAg0J_QtdGA0LXRgNCy0LAsIDUy0YExIgoN0fMWQhWwnF5C&z=16.24"
                            frameborder="1" allowfullscreen="true" style="position:relative;     width: 100%;
    height: 100%;
    max-width: 947px;
    max-height: 530px;
    border-radius: 20px;
    border: 0;"></iframe>
                    </div>
                </div>
            </div>

        </div>
      <div class=" container_f">

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

                    <div class="form__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/hand.png" alt="#">
                    </div>
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
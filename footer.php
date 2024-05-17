<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electronik
 */

?>
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__box">
            <div class="footer__title">Остались вопросы?</div>
            <p class="footer__p" style="max-width: 600px;">Напишите нам и мы все расскажем о наших айфонах и поможем их
                перепродать легко и зарабатывать от 3000₽ до 15000₽ с одной продажи</p>
            <div class="footer__btn-box">
                <button class="btn-white telegramH">Telegram <img
                        src="<?php bloginfo('template_url'); ?>/assets/icons/telegram-black.svg" alt="#"></button>
                <button class="btn-white whatsappH">WhatsApp <img
                        src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp-black.svg" alt="&"></button>
            </div>

            <a href="#" class="footer__a">Все права защищены</a>
        </div>

        <div class="footer__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/icons/optovik.png" alt="#">
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

<script type="module">




    import bd from '<?php bloginfo('template_url'); ?>/assets/bd.js'
    let list__items = document.querySelector('.home_cat .pl');
    let elements_wr = document.querySelector('.elements_wr');
    let search__title = document.querySelector('.search__title');
    function scrollToElement(btns, elem) {
        for (let btn of btns) {
            console.log(btn);
            btn.onclick = () => {
                console.log(elem);
                elem.scrollIntoView({ behavior: 'smooth', block: 'end' });
            }
        }

    }
    let img_bd = {
        "X": "iPhoneX",
        "Xs": "iPhoneXs",
        "Xsm": "iPhoneXsm",
        "XR": "iPhoneXR",

        "11": "iPhone11",
        "11PRO": "iPhone11PRO",
        "11PRO MAX": "iPhone11PRO",

        "12": "iPhone12",
        "12PRO": "iPhone12PRO",
        "12PM": "iPhone12PRO",
        "12 mini": "iPhone12mini",

        "13 mini": "iPhone13mini",
        "13": "iPhone13",
        "13PRO": "iPhone13PRO",
        "13PM": "iPhone13PRO",

        "14": "iPhone14",
        "14PLUS": "iPhone14Plus",
        "14PRO": "iPhone14PRO",
        "14PM": "iPhone14PRO",

        "15": "iPhone15",
        "15PRO": "iPhone15Pro",
        "15PM": "iPhone15Pro",

        "Xr13/14Pro": "iPhone13X14",
        "Xr15Pro": "iPhone15Plus",

        "SE2": "iPhoneSE2"


    }
    function reload__bd(place, arr) {
        place.innerHTML = ' ';

        for (let item of arr) {

            let btn = document.createElement("button");
            let pl__item = document.createElement('div');

            pl__item.className = 'pl__item';
            btn.className = 'btn'
            btn.innerText = 'Посмотреть'

            pl__item.innerHTML += `
                <img src="<?php bloginfo('template_url'); ?>/assets/icons/${item.img}" alt="">
                <div class="pl__title">${item.iPhoneN ? item.iPhoneN : ''} <span>${item.name}</span></div>
                <p class="pl__p">${item.description}</p>`


            pl__item.append(btn);
            place.append(pl__item);


            btn.onclick = () => {
                location.assign('https://electronik-optom.ru/item-search?pageN=' + item.name)
            }

        }
    }
    function reload__items(place, arr) {
        place.innerHTML = ' ';
        let hht = location.search.split('=').at(-1);

        for (let item of arr) {

            if (item.nameS === hht) {

                let btns = [];

                if (item.descMod) {
                    search__title.innerHTML = item.name;
                    place.classList.add('gridModal');
                    for (let elem of item.arr) {

                        let div = document.createElement('div');
                        let btn = document.createElement('button');
                        let types = document.createElement('div');
                        let wr = document.createElement('div');
                        //Class
                        div.classList.add('desc-item');
                        btn.classList.add('desc-item__btn');
                        types.classList.add('desc-item__types');
                        wr.classList.add('desc-item__wr');
                        //Other
                        btn.innerText = 'Заказать';


                        for (let q of elem.typeOf) {


                            let li = document.createElement('li');

                            li.classList.add('desc-item__li');

                            li.innerHTML = `<Span>${q.price}₽ </Span>от ${q.amount}шт`
                            types.append(li);
                        }

                        wr.innerHTML += `
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/${elem.img}" alt="">
                        <div class="desc-item__title">${elem.name}</div>
                        <p class="desc-item__p">${elem.desp}</p>
                        <hr class="desc-item__hr">
                    `

                        wr.append(types);
                        div.append(wr, btn);
                        place.append(div);
                        btns.push(btn);

                    }
                } else {

                    for (let elem of item.arr) {
                        if (!elem.titleMod) {
                            search__title.innerHTML = `iPhone <span>${item.name}</span>`;
                        } else {
                            search__title.innerHTML = `<span>${item.name}</span>`;
                        }
                        let btn = document.createElement("button");
                        let pl__item = document.createElement('div');
                        let p = document.createElement('ul');

                        p.className = 'pl__model';
                        pl__item.className = 'pl__item';
                        btn.className = 'btn';
                        btn.innerText = 'Заказать';
                        if (!elem.priceMod) {
                            for (let q of elem.typeOf) {
                                let li = document.createElement('li');

                                li.innerHTML = `${q.memory}-<span>${q.price}₽</span>`
                                p.append(li);
                            }
                        } else {
                            let li = document.createElement('li');

                            li.innerHTML = `<span>${elem.price}₽</span>`
                            p.append(li);
                        }
                        if (!elem.titleMod) {

                            pl__item.innerHTML += `<img src="<?php bloginfo('template_url'); ?>/assets/icons/${img_bd[elem.model]}.png" alt="">
                    <div class="pl__title">${elem.name.split(' ').at(0)} <span>${elem.model}</span></div>`
                        } else {

                            pl__item.innerHTML += `<img src="<?php bloginfo('template_url'); ?>/assets/icons/${elem.img}" alt="">
                    <div class="pl__title">${elem.name.split(' ').at(0)} <span>${elem.model}</span></div>`
                        }
                        pl__item.append(p, btn);
                        place.append(pl__item);
                        btns.push(btn);

                    }
                }
                scrollToElement(btns , document.querySelector('.container_f'))

            };

        }
    }
    if (elements_wr) reload__items(elements_wr, bd);
    if (list__items) reload__bd(list__items, bd);   
</script>

</div>
</body>

</html>
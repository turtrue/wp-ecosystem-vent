<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!-- <base href="/"> -->

    <title>ECOSYSTEM</title>
    <meta name="description" content="description" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    <meta property="og:image" content="images/preview.jpg" />

    <?php wp_head() ?>
</head>

<body>
    <header class="header">
        <div class="my-container">
            <div class="row">
                <div class="col-lg-3">
                    <a class="header__logo" href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Логотип компании Ecosystem">
                    </a>

                    <button id="burger-btn" class="burger-btn burger-btn--header">
                        &#9776;
                    </button>
                </div>

                <nav id="nav-top" class="col-lg-9 nav nav--top">
                    <ul>
                        <li><a class="current" href="#main">Главная</a></li>
                        <li><a href="#about-descr">О компании</a></li>
                        <li><a href="#catalog">Каталог</a></li>
                        <li><a href="#partners">Партнеры</a></li>
                        <li><a href="#form">Оставить заявку</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="main" class="about" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-bg.jpg')">
        <div class="my-container">
            <div class="about__body">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="about__title">
                            <span>Ecosystem</span> - компания по
                            производству и поставке систем вентиляции
                        </h1>

                        <div class="about__buttons">
                            <a href="#form" class="button">Оставить заявку</a>
                            <a href="tel:+78435052775" class="button">Связаться с нами</a>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about__img" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/about.jpg');
                                "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-wrapper">
        <main id="about-descr" class="about-descr">
            <div class="my-container">
                <div class="about-descr__line">
                    <div class="decor-line"></div>
                </div>

                <section class="about-descr__item">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="about-descr__img" style="
                                        background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-descr-1.jpg');
                                    "></div>
                        </div>

                        <div class="col-lg-5 about-descr__text">
                            <h2 class="about-descr__text-title">
                                Компания специализируется
                            </h2>
                            на оптовой и розничной продаже вентиляции как
                            для дома, так и для офиса. Проектирование,
                            монтаж, эксплуатация внутренних инженерных сетей
                            и монтаж металлоконструкций по всей России.
                            <br />
                            <br />
                            За время работы у нас сложились партнерские
                            отношения с ведущими производителями,
                            позволяющие предлагать высококачественную
                            продукцию по конкурентоспособным ценам.
                        </div>
                    </div>
                </section>

                <section class="about-descr__item">
                    <div class="row">
                        <div class="col-lg-7 order-lg-last">
                            <div class="about-descr__img" style="
                                        background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-descr-2.jpg');
                                    "></div>
                        </div>

                        <div class="col-lg-5 about-descr__text">
                            <h2 class="about-descr__text-title">
                                Собственное производство
                            </h2>

                            оборудованное станками ведущих мировых
                            производителей, позволяет изготавливать
                            продукцию с высокой точностью и в кратчайшие
                            сроки.
                            <br />
                            <br />
                            Использование производительных станков и
                            отлаженная технология, являются основой для
                            выпуска и поставки высококонкурентной продукции.
                        </div>
                    </div>
                </section>

                <section class="about-descr__item">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="about-descr__img" style="
                                        background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-descr-3.jpg');
                                    "></div>
                        </div>

                        <div class="col-lg-5 about-descr__text">
                            <h2 class="about-descr__text-title">
                                Комплексные поставки
                            </h2>

                            широкого спектра вентиляционного оборудования,
                            кондиционеров, комплектующих для
                            кондиционирования и вентиляции, а также
                            инструмента для установки и монтажа
                            оборудования.
                            <br />
                            <br />
                            Поставлять продукцию высокого качества,
                            комплексно, учитывая интересы и потребности
                            клиентов, сроки и цены - наша основная задача.
                        </div>
                    </div>
                </section>

                <div class="about-descr__line">
                    <div class="decor-line"></div>
                </div>
            </div>
        </main>

        <div id="catalog" class="catalog">
            <div class="my-container">
                <div class="row catalog__row catalog__row--height-middle">
                    <section class="col-md-7">
                        <a href="https://ecosystem-vent-home.ru/catalog/vozdukhovodi-i-fasonnie-chasti" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-1.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">
                                Воздуховоды и<br />фасонные изделия
                            </h2>
                        </a>
                    </section>

                    <section class="col-md-5">
                        <a href="https://ecosystem-vent-home.ru/products/ventilyatori" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-2.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">Вентиляторы</h2>
                        </a>
                    </section>
                </div>

                <div class="row catalog__row catalog__row--height-small">
                    <section class="col-md-4">
                        <a href="https://ecosystem-vent-home.ru/catalog/raskhodnie-materiali" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-3.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">
                                Расходные материалы
                            </h2>
                        </a>
                    </section>

                    <section class="col-md-4">
                        <a href="https://ecosystem-vent-home.ru/catalog/konditsioneri" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-4.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">
                                Кондиционеры
                            </h2>
                        </a>
                    </section>

                    <section class="col-md-4">
                        <a href="https://ecosystem-vent-home.ru/products/teplovie-zavesi" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-5.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">
                                Тепловые завесы
                            </h2>
                        </a>
                    </section>
                </div>

                <div class="row catalog__row catalog__row--height-large">
                    <section class="col-md-6">
                        <a href="https://ecosystem-vent-home.ru/products/ventilyatsionnie-ustanovki" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-6.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">
                                Вентиляционные установки
                            </h2>
                        </a>
                    </section>

                    <section class="col-md-6">
                        <a href="https://ecosystem-vent-home.ru/catalog" style="
                                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/catalog-7.jpg');
                                " class="catalog__item">
                            <h2 class="catalog__item-title">
                                Блоки управления и автоматизации
                            </h2>
                        </a>
                    </section>
                </div>

                <div class="catalog__button">
                    <a href="https://ecosystem-vent-home.ru/catalog" class="button button--light">Перейти к каталогу</a>
                </div>

                <div class="catalog__line">
                    <div class="decor-line"></div>
                </div>
            </div>
        </div>

        <section id="partners" class="partners">
            <div class="my-container">
                <h2 class="partners__title">
                    <span>Ecosystem</span> сотрудничает с крупными
                    компаниями и обеспечивает их производственные и офисные
                    здания качественно произведенной и установленной
                    системой вентиляции.
                </h2>

                <div class="partners__body">
                    <div class="row">
                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://www.transneft.ru/" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-1.png" alt="Транснефть" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://mosinzhproekt.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-2.png" alt="Мосинжпроект" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://www.mosmetro.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-3.png" alt="Московский метрополитен" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://www.vtb.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-4.png" alt="ВТБ банк" />
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://mcdonalds.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-5.png" alt="Макдоналдс" />
                            </a>
                        </div>

                        <div class="col-md-9 col-6 partners__item-wrapper">
                            <a href="https://innopolis.university" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-6.png" alt="Университет Иннополис" />
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9 col-6 partners__item-wrapper">
                            <a href="https://kazanmall.com" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-7.png" alt="Казань молл" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://www.nknh.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-8.png" alt="Нижнекамскнефтехим" />
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://www.fonbet.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-9.png" alt="Фонбет" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://kalashnikovgroup.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-10.png" alt="Концерн Калашников" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://rostec.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-11.png" alt="Ростех" />
                            </a>
                        </div>

                        <div class="col-md-3 col-6 partners__item-wrapper">
                            <a href="https://alfabank.ru" class="partners__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/partners-12.png" alt="Альфа банк" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="partners__line">
                    <div class="decor-line"></div>
                </div>
            </div>
        </section>

        <section id="form" class="form">
            <div class="my-container">
                <div class="form__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/form-bg.png')">
                    <div class="form__content">
                        <h2 class="form__title">Оставить заявку</h2>

                        <form class="form__body">
                            <input type="text" name="phone" placeholder="+7(___)___-__-__" required />
                            <input type="text" name="name" placeholder="Ваше имя" required />
                            <input type="email" name="email" placeholder="Email" required />
                            <label for="file">
                                Прикрепить файл проекта
                            </label>
                            <input id="file" type="file" name="file" />

                            <div class="form__button">
                                <input class="button button--form" type="submit" value="Отправить заявку" />
                            </div>

                            <div class="form__privacy">
                                Отправляя заявку вы автоматически даете
                                согласие на
                                <span>обработку персональных данных</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="my-container">
            <div class="row">
                <div class="col-lg-3 col-sm-5 col-12">
                    <a class="footer__logo" href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Логотип компании Ecosystem">
                    </a>

                    <div class="footer__logo-descr">
                        Производство и поставка<br />систем вентиляции
                    </div>

                    <div class="footer__soc">
                        <a href="https://www.instagram.com" class="footer__soc-link footer__soc-link--instagram">
                            <svg>
                                <use href="<?php echo get_template_directory_uri(); ?>/sprite.svg#instagram"></use>
                            </svg>
                        </a>

                        <a href="https://www.whatsapp.com" class="footer__soc-link footer__soc-link--whatsapp">
                            <svg>
                                <use href="<?php echo get_template_directory_uri(); ?>/sprite.svg#whatsapp"></use>
                            </svg>
                        </a>

                        <a href="https://vk.com" class="footer__soc-link footer__soc-link--vk">
                            <svg>
                                <use href="<?php echo get_template_directory_uri(); ?>/sprite.svg#vk"></use>
                            </svg>
                        </a>

                        <a href="https://www.youtube.com" class="footer__soc-link footer__soc-link--youtube">
                            <svg>
                                <use href="<?php echo get_template_directory_uri(); ?>/sprite.svg#youtube"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 footer__contacts-title-wrapper">
                    <h2 class="footer__contacts-title">
                        Контактная информация
                    </h2>
                </div>

                <div class="col-lg-6 col-sm-7 col-12 footer__contacts-info">
                    <ul>
                        <li>+7(843)505-27-75</li>
                        <li>
                            г. Казань, Оренбургский тракт, 10 км, стр. 1
                        </li>
                        <li>с 8:00 до 20:00</li>
                        <li>ecosystem.vent@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>

</html>
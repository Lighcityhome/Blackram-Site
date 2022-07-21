<?php
/*
Template Name: home
*/
?>
<?php 'get_header'(); ?>
<body>
    <div class="container">
        <div class="bg-image">
                    <div class="hiden">
                        <?php global $post;
                        $myposts = 'get_posts'([
                            'numberposts' => 1,
                            'category_name'    => 'fons',
                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                'setup_postdata'($post);
                        ?>
                                <?php 'the_post_thumbnail'(
                                        array(0, 0),
                                        array('class' => 'img__1')
                                    ); ?>
                        <?php
                        } }
                        'wp_reset_postdata'(); // Сбрасываем $post
                        ?>
                    </div>
            <div class="screen s1">
                <div class="s1__logo">
                    <img id="logo" src="<?php 'bloginfo'('template_url'); ?> /assets/images/Logo (1).svg">
                    <p>blackram</p> 
                </div>
                <div class="block">
                    <h1>Текстильное полотно оптом от производителя</h1>
                    <p>Российское производство ткани из турецкого сырья на турецких станках</p>
                </div>
            </div>
        </div>
        <div class="box__color-black">
            <div id="products" class="screen s2">
                <h2>Продукция</h2>
                <div>
                    <div class="s2__tile-set">
                        <?php global $post;

                        $myposts = 'get_posts'([
                            'numberposts' => -1,
                            'category_name'    => 'products',
                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                'setup_postdata'($post);
                        ?>
                                <div class="s2__tile-set__tile">
                                    <a href="<?php the_permalink()?>" title=''> <?php 'the_post_thumbnail'(
                                        array(410, 278),
                                        array('class' => 'img')
                                    ); ?> </a>
                                    <a href="<?php the_permalink()?>" title=''>
                                    <?php 'the_title'(); ?> </div>
                                    </a>
                        <?php
                        } }
                        'wp_reset_postdata'(); // Сбрасываем $post
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="customers" class="box__color-white">
            <h2>Заказчикам</h2>
            <div class="screen s3">
                <div class="s3__tile-set">
                    <div class="s3__image">
                        <img class="img" src="<?php 'bloginfo'('template_url'); ?> /assets/images/warehouse1.jpg">
                    </div>
                    <div class="s3__image">
                        <img class="img" src="<?php 'bloginfo'('template_url'); ?> /assets/images/warehouse2.jpg">
                    </div>
                    <div class="s3__image">
                        <img class="img" src="<?php 'bloginfo'('template_url'); ?> /assets/images/warehouse1.jpg">
                    </div>
                    <div class="s3__image">
                        <img class="img" src="<?php 'bloginfo'('template_url'); ?> /assets/images/warehouse2.jpg">
                    </div>
                </div>
                <div class="block">
                    <ul>
                        <li id="client"> Минимальный заказ на цвет от 500 кг</li>
                        <li id="client"> Сроки изготовления, календарные дни
                            <ul id="c1">
                                <li id="c2">выкрас от 3-х</li>
                                <li id="c2">полотно от 7-ми</li>
                            </ul>
                        </li>
                        <li id="client"> Более точный срок производства устанавливается на моменте формления заказа</li>
                        <li id="client"> Склады
                            <ul id="c1">
                                <li id="c2"><a>г.Иваново</a></li>
                                <li id="c2"><a>г.Москва</a></li>
                            </ul>
                        </li>
                        <li id="client"> <a>Сертификаты</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box__color-black">
            <div id="pallet" class="screen s4">
                <div class="block">
                    <h2>Получите прайс лист и каталог цветов</h2>
                    <div>
                        <input class="contact-form" type="name" name="name" placeholder="Как к вам обращатся" maxlenght="11" required>

                        <form>

                            <!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="Site Name">
                            <input type="hidden" name="admin_email" value="lightcityhome@gmail.com">
                            <input type="hidden" name="form_subject" value="Form Subject">
                            <!-- END Hidden Required Fields -->

                            <input class="name_h" type="name" name="name" placeholder="Как к вам обращатся" required>

                            <div class="msng-form">
                                <input class="contact-form low" type="phone" name="phone" placeholder="Телефон" required>

                                <div class="msng-form__logo">
                                    <label for="telegram">
                                        <input type="radio" name="Messenger" class="msng__logo" id="telegram" value="telegram" checked />
                                        <svg viewBox="0 0 30 28" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 0.9919L25.2546 26.8343C25.2546 26.8343 24.5906 28.6261 22.7667 27.7668L11.8178 18.6984L11.767 18.6716C13.2459 17.2371 24.7143 6.09851 25.2155 5.59361C25.9915 4.81166 25.5098 4.34614 24.6089 4.93683L7.66862 16.5578L1.13311 14.1824C1.13311 14.1824 0.104617 13.7872 0.00567291 12.9279C-0.0945729 12.0672 1.16696 11.6017 1.16696 11.6017L27.8102 0.311208C27.8102 0.311208 30 -0.728115 30 0.9919Z" />
                                        </svg>
                                    </label>

                                    <label for="whatsapp">
                                        <input type="radio" name="Messenger" class="msng__logo" id="whatsapp" value="whatsapp" />
                                        <svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.6098 4.375C22.7875 1.5625 19.0244 0 15.0523 0C6.79442 0 0.104528 6.66667 0.104528 14.8958C0.104528 17.5 0.836237 20.1042 2.09059 22.2917L0 30L7.94425 27.9167C10.1394 29.0625 12.5436 29.6875 15.0523 29.6875C23.3101 29.6875 30 23.0208 30 14.7917C29.8955 10.9375 28.4321 7.1875 25.6098 4.375ZM22.2648 20.2083C21.9512 21.0417 20.4878 21.875 19.7561 21.9792C19.1289 22.0833 18.2927 22.0833 17.4564 21.875C16.9338 21.6667 16.2021 21.4583 15.3659 21.0417C11.6028 19.4792 9.19861 15.7292 8.98955 15.4167C8.78049 15.2083 7.42161 13.4375 7.42161 11.5625C7.42161 9.6875 8.36237 8.85417 8.67596 8.4375C8.98955 8.02083 9.40767 8.02083 9.72125 8.02083C9.93031 8.02083 10.2439 8.02083 10.453 8.02083C10.662 8.02083 10.9756 7.91667 11.2892 8.64583C11.6028 9.375 12.3345 11.25 12.439 11.3542C12.5436 11.5625 12.5436 11.7708 12.439 11.9792C12.3345 12.1875 12.23 12.3958 12.0209 12.6042C11.8118 12.8125 11.6028 13.125 11.4983 13.2292C11.2892 13.4375 11.0801 13.6458 11.2892 13.9583C11.4983 14.375 12.23 15.5208 13.3798 16.5625C14.8432 17.8125 15.993 18.2292 16.4112 18.4375C16.8293 18.6458 17.0383 18.5417 17.2474 18.3333C17.4564 18.125 18.1882 17.2917 18.3972 16.875C18.6063 16.4583 18.9199 16.5625 19.2334 16.6667C19.547 16.7708 21.4286 17.7083 21.7422 17.9167C22.1603 18.125 22.3693 18.2292 22.4739 18.3333C22.5784 18.6458 22.5784 19.375 22.2648 20.2083Z" />
                                        </svg>
                                    </label>

                                    <label for="viber">
                                        <input type="radio" name="Messenger" class="msng__logo" id="viber" value="viber" />
                                        <svg viewBox="0 0 28 30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.6719 0.712061C16.5899 -0.237354 11.3124 -0.237354 6.23036 0.712061C3.98255 1.18677 1.14834 3.84513 0.659686 5.93384C-0.219895 10.0163 -0.219895 14.1938 0.659686 18.2762C1.24607 20.365 4.08028 23.0233 6.23036 23.498C6.3281 23.498 6.42582 23.593 6.42582 23.6879V29.6692C6.42582 29.954 6.81675 30.1439 7.01222 29.8591L9.94415 26.9159C9.94415 26.9159 12.2897 24.5424 12.6806 24.1626C12.6806 24.1626 12.7784 24.0677 12.8761 24.0677C15.808 24.1626 18.8377 23.8778 21.7696 23.4031C24.0175 22.9284 26.8517 20.27 27.3403 18.1813C28.2199 14.0988 28.2199 9.92139 27.3403 5.8389C26.7539 3.84513 23.9197 1.18677 21.6719 0.712061ZM21.7696 18.5611C21.281 19.5105 20.6946 20.27 19.7173 20.7447C19.4241 20.8397 19.1309 20.9346 18.8377 21.0295C18.4468 20.9346 18.1536 20.8397 17.8604 20.7447C14.733 19.5105 11.801 17.8015 9.4555 15.3331C8.18499 13.9089 7.10995 12.2949 6.23036 10.586C5.83944 9.73151 5.44852 8.97197 5.15532 8.1175C4.86213 7.35797 5.35078 6.59844 5.83944 6.02879C6.32809 5.45914 6.91448 5.07937 7.5986 4.79455C8.08726 4.50972 8.57592 4.69961 8.96684 5.07937C9.74869 6.02879 10.5305 6.9782 11.1169 8.02256C11.5079 8.68715 11.4101 9.44668 10.726 9.92139C10.5305 10.0163 10.4328 10.1113 10.2373 10.3012C10.1396 10.3961 9.94415 10.491 9.84642 10.6809C9.65096 10.9657 9.65096 11.2506 9.74869 11.5354C10.5305 13.719 11.9965 15.428 14.2443 16.3774C14.6352 16.5673 14.9284 16.6622 15.4171 16.6622C16.1012 16.5673 16.3944 15.8078 16.8831 15.428C17.3717 15.0482 17.9581 15.0482 18.5445 15.3331C19.0332 15.6179 19.5218 15.9976 20.1082 16.3774C20.5969 16.7572 21.0855 17.042 21.5742 17.4218C21.8674 17.6117 21.9651 18.0864 21.7696 18.5611ZM17.6649 11.4405C17.4695 11.4405 17.5672 11.4405 17.6649 11.4405C17.274 11.4405 17.1763 11.2506 17.0785 10.9657C17.0785 10.7759 17.0785 10.491 16.9808 10.3012C16.8831 9.92139 16.6876 9.54162 16.2967 9.2568C16.1012 9.16186 15.9058 9.06691 15.7103 8.97197C15.4171 8.87703 15.2216 8.87703 14.9284 8.87703C14.6353 8.78209 14.5375 8.59221 14.5375 8.30738C14.5375 8.1175 14.8307 7.92762 15.0262 7.92762C16.5899 8.02256 17.7627 8.87703 17.9581 10.6809C17.9581 10.7759 17.9581 10.9657 17.9581 11.0607C17.9581 11.2506 17.8604 11.4405 17.6649 11.4405ZM16.6876 7.26303C16.1989 7.07314 15.7103 6.88326 15.1239 6.78832C14.9284 6.78832 14.6353 6.69338 14.4398 6.69338C14.1466 6.69338 13.9511 6.50349 14.0489 6.21867C14.0489 5.93384 14.2443 5.74396 14.5375 5.8389C15.5148 5.93384 16.3944 6.12373 17.274 6.50349C19.0332 7.35797 20.0105 8.78209 20.3037 10.6809C20.3037 10.7759 20.3037 10.8708 20.3037 10.9657C20.3037 11.1556 20.3037 11.3455 20.3037 11.6303C20.3037 11.7253 20.3037 11.8202 20.3037 11.9152C20.2059 12.2949 19.5218 12.3899 19.4241 11.9152C19.4241 11.8202 19.3264 11.6303 19.3264 11.5354C19.3264 10.6809 19.1309 9.82645 18.74 9.06691C18.1536 8.21244 17.4695 7.64279 16.6876 7.26303ZM21.9651 12.9595C21.6719 12.9595 21.4764 12.6747 21.4764 12.3899C21.4764 11.8202 21.3787 11.2506 21.281 10.6809C20.8901 7.64279 18.349 5.17431 15.3194 4.6996C14.8307 4.60466 14.3421 4.60466 13.9511 4.50972C13.6579 4.50972 13.267 4.50972 13.1693 4.12996C13.0716 3.84513 13.3647 3.56031 13.6579 3.56031C13.7557 3.56031 13.8534 3.56031 13.8534 3.56031C17.8604 3.65525 14.0489 3.56031 13.8534 3.56031C17.9581 3.65525 21.3787 6.31361 22.0628 10.3012C22.1606 10.9657 22.2583 11.6303 22.2583 12.3899C22.4538 12.6747 22.2583 12.9595 21.9651 12.9595Z" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <button>
                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.054 18L10.5227 16.4886L16.8267 10.1847H0.5V7.99716H16.8267L10.5227 1.71307L12.054 0.181818L20.9631 9.09091L12.054 18Z"></path>
                                </svg>
                            </button>
                        </form>

                        <form>

                            <!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="Site Name">
                            <input type="hidden" name="admin_email" value="lightcityhome@gmail.com">
                            <input type="hidden" name="form_subject" value="Form Subject">
                            <!-- END Hidden Required Fields -->

                            <input class="name_h" type="name" name="name" placeholder="Как к вам обращатся" required>
                            <input class="contact-form low" type="email" name="email" placeholder="Электронная почта" required>

                            <button>
                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.054 18L10.5227 16.4886L16.8267 10.1847H0.5V7.99716H16.8267L10.5227 1.71307L12.054 0.181818L20.9631 9.09091L12.054 18Z"></path>
                                </svg>
                            </button>

                        </form>
                    </div>
                </div>
                <div class="s4__image" >
                    <img src="<?php 'bloginfo'('template_url'); ?> /assets/images/pallet.png">
                </div>
            </div>
        </div>

        <div id="contact" class="box__color-white">
            <h2>Контакты</h2>
            <div class="screen s5">
                <div class="map__manufacture is-visible">
                    <script class="manufacture"  type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4979016a696559a12d9511336051218b00590d7eef8dbf08b541a12f0fcc559a&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="map__textyleprofi">
                    <script class="textyleprofi" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acc946e6862e9be5cd7d577b8791df49be26585619f9a9e9407adbe82919317ed&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="map__sadovod">
                    <script class="sadovod" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acc7a7ca22f909fbe0f5c6abe3da9de22f97e569f48f231e7e3fcf0e0d50e965c&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="block">
                    <div>
                        <button class="location manufacture on">
                            <h3> Производство г.Кинешма:</h3>
                            2-я Шуйская ул., 1
                        </button>
                    </div>
                    <div>
                        <button class="location textyleprofi">
                            <h3> Склад г.Иваново:</h3>
                            ул. Сосновая, 1, Склад 1126-1128
                        </button>
                        <div class="information">
                            +7 4932 58 81 85 <br>
                            rus.blackram@mail.ru <br>
                            Пн-Пт 8:00-17:00 <br>
                        </div>
                    </div>
                    <div>
                        <button class="location sadovod">
                            <h3> Склад г.Москва:</h3>
                            ул. Верхние Поля, 48 А
                        </button>
                        <div class="information">
                            +7 495 666 44 20 <br>
                            blackram-moskow@mail.ru <br>
                            Пн-Пт 9:00-18:00 <br>
                            Сб 10:00-17:00 <br>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div id="contact" class="box__color-black">
            <h2>О нас</h2>
            <div class="screen s6">
                <div class="block">
                    <p>С учётом сложившейся и международной обстановки, высокотехнологичная концепция общественного уклада предполагает независимые способы реализации своевременного выполнения сверхзадачи. Противоположная точка зрения подразумевает, что реплицированные с зарубежных источников, современные исследования в равной степени предоставлены сами себе. И нет сомнений, что диаграммы связей представлены в исключительно положительном свете. </p>
                </div>
                <div class="s6__image">
                    <img class="img" src="<?php 'bloginfo'('template_url'); ?> /assets/images/manufacture.jpg">
                </div>
            </div>
        </div>
        <div id="contact" class="box__color-white">
            <h2>Новости</h2>
            <div class="screen s7">
                <div class="block">
                    Турецкий бизнес приходит в Ивановскую область <br>
                    <a href="https://kineshma.bezformata.com/listnews/turetckiy-biznes-prihodit-v-ivanovskuyu/96151239/" target="_blank">bezformata.com</a> <br>
                </div>
                <div class="block">
                    Турецкий трикотаж производят в Кинешме <br>
                    <a href="https://www.ivanovonews.ru/reports/1053831/" target="_blank">ivanovonews.ru</a> <br>
                </div>
                <div class="block">
                    Турецкая компания откроет в Кинешме крупное трикотажное производство <br>
                    <a href="https://168.ru/news/gorod/turetskaya-kompaniya-otkroet-v-kineshme-krupno-27721/" target="_blank">168.ru</a> <br>
                </div>
                <div class="block">
                    Новое турецкое производство текстиля под Ивановом <br>
                    <a href="https://finance.rambler.ru/economics/43172405-novoe-turetskoe-proizvodstvo-tekstilya-zapustyat-pod-ivanovom-do-kontsa-goda/" target="_blank">rambler.ru</a> <br>
                </div>
            </div>
        </div>
        <button href="#0"  class="button sticky">Заказать звонок</button>


        <div class="popup" role="alert">
            <div class="popup-container">
                <form>
                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Site Name">
                    <input type="hidden" name="admin_email" value="lightcityhome@gmail.com">
                    <input type="hidden" name="form_subject" value="Form Subject">
                    <!-- END Hidden Required Fields -->
                    <input class="contact-form" type="name" name="name" placeholder="Как к вам обращатся" required>
                    <input class="contact-form" type="phone" name="phone" placeholder="Мобильный номер" required>
                    <button>Перезвонить</button>
                </form>
                <a href="#0" class="popup-close img-replace">Close</a>
            </div>
        </div>
    </div>
</body>
<?php 'get_footer'(); ?>
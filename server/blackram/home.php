<?php
/*
Template Name: home
*/
?>
<?php get_header();?>
<body>
   <div class="mane">
    <div class="bg-image">
        <div class="screen s1">
            <div class="s1__logo">
                <img id="logo" src="<?php bloginfo('template_url'); ?> /assets/images/Logo (1).svg">
                <div>
                    BLACKRAM
                </div>
            </div>
            <div class="block">
                <h1>
                    Текстильное полотно оптом от производителя
                </h1>
                <p>Российское производство ткани из турецкого сырья на турецких станках</p>

            </div>
        </div>
    </div>
    <div class="box__color-black">
            <div id="products" class="screen s2">
                <h2>Продукция</h2>
                <div>
                    <div class="s2__tile-set">
                        <?php
                            global $post;

                            $myposts = get_posts([ 
                            	'numberposts' => -1,
                            ]);

                            if( $myposts ){
                            	foreach( $myposts as $post ){
                            		setup_postdata( $post );
                            		?>
                            		<div class="s2__tile-set__tile">
                                        <?php the_post_thumbnail(
                                            array (410, 278),
                                            array ('class' => 'img')
                                        );?>
                                        <?php the_title();?> </div>
                            		<?php 
                            	}
                            }

                            wp_reset_postdata(); // Сбрасываем $post
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
                        <img class="img_in" src="<?php bloginfo('template_url'); ?> /assets/images/warehouse1.jpg">
                    </div>
                    <div class="s3__image">
                        <img class="img_in" src="<?php bloginfo('template_url'); ?> /assets/images/warehouse2.jpg">
                    </div>
                    <div class="s3__image">
                        <img class="img_in" src="<?php bloginfo('template_url'); ?> /assets/images/warehouse1.jpg">
                    </div>
                    <div class="s3__image">
                        <img class="img_in" src="<?php bloginfo('template_url'); ?> /assets/images/warehouse2.jpg">
                    </div>
                </div>
                <div class="block">
                    <ul>
                        <li id="client"> Минимальный заказ на цвет от 500 кг </li>
                        <li id="client"> Сроки изготовления, календарные дни
                            <ul id="c1">
                                <li id="c2">выкрас от 3-х</li>
                                <li id="c2">полотно от 7-ми</li>
                            </ul>
                            </li>
                        <li id="client"> Более точный срок производства устанавливается на моменте формления заказа </li>
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
                        <input class="contact-form" placeholder="Как к вам обращаться">
                        <input class="contact-form__low" placeholder="Телефон"> <button> <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.054 18L10.5227 16.4886L16.8267 10.1847H0.5V7.99716H16.8267L10.5227 1.71307L12.054 0.181818L20.9631 9.09091L12.054 18Z"/>
                            </svg> </button>
                        <input class="contact-form__low" placeholder="Электронная почта"> <button><svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.054 18L10.5227 16.4886L16.8267 10.1847H0.5V7.99716H16.8267L10.5227 1.71307L12.054 0.181818L20.9631 9.09091L12.054 18Z"/>
                            </svg></button>
                
                    </div>
                </div>
               <img class="s4__image" src="<?php bloginfo('template_url'); ?> /assets/images/pallet.png">
            </div>
    </div>
    
    <div id="contact" class="box__color-white">
        <h2>Контакты</h2>
            <div class="screen s5">
                <div class="map">


                </div>
                <div class="block">
                    <ul>
                        <li>
                            <div class="location">
                            <h3> Производство г.Кинешма:</h3>
                            2-я Шуйская ул., 1
                            </div>
                        </li>
                        <li>
                            <div class="location">
                            <h3> Склад г.Иваново:</h3>
                            ул. Сосновая, 1, Склад 1126-1128
                            </div>
                            <div class="information">
                            +7 4932 58 81 85  <br>
                            rus.blackram@mail.ru  <br>
                            Пн-Пт    8:00-17:00  <br>
                            </div>
                        </li>
                        <li>
                            <div class="location">
                            <h3> Склад г.Москва:</h3>
                            ул. Верхние Поля, 48 А
                            </div>
                            <div class="information">
                            +7 495 666 44 20  <br>
                            blackram-moskow@mail.ru  <br>
                            Пн-Пт     9:00-18:00   <br>
                            Сб         10:00-17:00  <br>
                            </div>
                        </li>
                    </ul>
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
                    <img class="img" src="<?php bloginfo('template_url'); ?> /assets/images/manufacture.jpg">
                    </div>
                </div>
    </div>
    <div id="contact" class="box__color-white">
        <h2>Новости</h2>
            <div class="screen s7">
                <div class="block">
                Турецкий бизнес приходит в Ивановскую область <br>
                <a href="https://kineshma.bezformata.com/listnews/turetckiy-biznes-prihodit-v-ivanovskuyu/96151239/"  target="_blank">bezformata.com</a> <br>
                </div>
                <div class="block">
                Турецкий трикотаж производят в Кинешме <br>
                <a href="https://www.ivanovonews.ru/reports/1053831/"  target="_blank">ivanovonews.ru</a> <br>
                </div>
                <div class="block">
                Турецкая компания откроет в Кинешме крупное трикотажное производство <br>
                <a href="https://168.ru/news/gorod/turetskaya-kompaniya-otkroet-v-kineshme-krupno-27721/"  target="_blank">168.ru</a> <br>
                </div>
                <div class="block">
                Новое турецкое производство текстиля под Ивановом <br>
                <a href="https://finance.rambler.ru/economics/43172405-novoe-turetskoe-proizvodstvo-tekstilya-zapustyat-pod-ivanovom-do-kontsa-goda/"  target="_blank">rambler.ru</a> <br>
                </div>
            </div>
    </div>
    <button class="button sticky">Заказать звонок</button>    
</body>
<?php get_footer();?>

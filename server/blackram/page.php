<?php 

// Template Name: Article

// Template post Type: post, pages

?>
<?php 'get_header'(); ?>
<body>
    <div class="body-page">
        <div class="box__color-white">
            <div class="screen page-products">
                <div class="image-page-products">
                    <?php 'the_post_thumbnail'(
                    array(740, 500),
                    array('class' => 'img')
                    ); ?> 
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
    </div>
</body>
<?php 'get_footer'(); ?>
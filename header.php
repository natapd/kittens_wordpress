<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Питомник шотландских кошек в Санкт-Петербурге">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="mccrae World, mccrae, маккре, маккре ворлд, шотландские кошки, купить котёнка,
    купить котенка в спб, купить котенка в Санкт-Петербурге, купить шотландского котёнка, вислоухие кошки, купить вислоухого котёнка в спб, шотландские вислоухие, скоттиш, скоттиш-фолд, купить скоттиш-фолд, питомник шотландских вислоухих кошек, питомник кошек в спб, питомник кошек в Санкт-Петербурге, питомник скоттиш-фолд">
    
    <title>Питомник McCrae World</title>
     
     <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
     <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/BreeCYR-Light.woff2" as="font">
     <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/BreeCYR-Book.woff2" as="font">
    
    <?php wp_head() ?>
  </head>
  <body>
    <!---------Форма отправки сообщения----------------------->  
         <div class="formEmail hidden">
          <div class="formEmail__wrapper">
          <!--<form class="page-form" action="send.php" method="post">
            <h3>Отправить письмо:</h3>
          <input class="page-form__input" type="text" name="fio" required placeholder="Укажите ФИО">
          <input class="page-form__input" type="tel" name="tel" maxlength="15" required
 placeholder="Укажите номер телефона">
          
          <textarea class="page-form__textarea"  name="discr" placeholder="Задайте задесь ваш вопрос"></textarea>
          <input class="page-form__btn kitten_btn btn" type="submit" value="Отправить"> -->
          <div class="page-form">
            <?php echo do_shortcode('[contact-form-7 id="213" title="Контактная форма 1"]');?>
             <span class="close-popup" tabindex="0">X</span></div>
           
          

        </div>         
        </div>
      <!-------------------------------------------------------> 
    <header class="main-header">
      <h1 class="visually-hidden">Питомник шотландских кошек в Санкт-Петербурге</h1>
        <div class="top-header">

            <?php 
                wp_nav_menu( [
                    'theme_location'  => 'contact_menu',
                    
                    'container'       => 'false', 
                   
                    'menu_class'      => 'top-header__list contacts', 
              
                    'depth'           => 0,
                    
                ] ); ?>
            
            <?php 
                wp_nav_menu( [
                    'theme_location'  => 'social_menu',
                    
                    'container'       => 'false', 
                   
                    'menu_class'      => 'top-header__list social', 
              
                    'depth'           => 0,
                    
                ] ); ?>
        
        </div>
         <div class="main-header-logo">

            <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" width="185" height="107" alt="Логотип McCrae"></a>
         </div>
        <nav class="main-nav main-nav--closed main-nav--nojs">
          <button class="main-nav__toggle" type="button"><span class="visually-hidden">Открыть меню</span></button>
          <div class="main-nav__wrapper">
            <?php 
                wp_nav_menu( [
                    'theme_location'  => 'head_menu',
                    
                    'container'       => 'false', 
                   
                    'menu_class'      => 'main-nav__list',
                    'link_before'          => '<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                     width="10.000000pt" height="10.000000pt" viewBox="0 0 1280.000000 1280.000000"
                     preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                    fill="#7b8f38" stroke="none">
                    <path d="M4615 12476 c-167 -39 -293 -112 -436 -255 -116 -115 -199 -232 -279
                    -391 -477 -954 -316 -2528 353 -3430 91 -123 249 -285 357 -366 354 -267 752
                    -281 1071 -38 327 250 551 732 636 1369 21 164 25 672 5 840 -82 702 -291
                    1283 -618 1722 -82 109 -243 273 -344 350 -94 71 -272 163 -365 188 -83 23
                    -302 29 -380 11z"/>
                    <path d="M8546 12274 c-311 -61 -636 -299 -905 -661 -346 -465 -580 -1080
                    -668 -1758 -28 -216 -25 -698 5 -894 70 -447 219 -789 442 -1011 191 -192 431
                    -281 675 -252 581 72 1154 706 1460 1616 254 755 281 1550 73 2156 -203 591
                    -615 897 -1082 804z"/>
                    <path d="M2095 9010 c-409 -65 -717 -395 -856 -919 -79 -301 -90 -716 -28
                    -1081 143 -850 635 -1631 1217 -1933 298 -154 595 -181 850 -75 376 156 623
                    560 704 1153 16 119 16 472 -1 610 -130 1102 -809 2069 -1564 2230 -89 19
                    -247 26 -322 15z"/>
                    <path d="M10570 8200 c-360 -77 -713 -330 -1006 -722 -318 -426 -532 -982
                    -594 -1542 -16 -146 -13 -460 5 -601 122 -948 766 -1403 1495 -1059 391 185
                    745 566 998 1073 480 960 449 2085 -73 2606 -220 220 -523 310 -825 245z"/>
                    <path d="M6225 6421 c-662 -118 -1497 -813 -2237 -1861 -579 -821 -987 -1705
                    -1109 -2405 -29 -168 -32 -468 -6 -583 41 -179 110 -297 244 -422 224 -207
                    493 -329 830 -376 175 -24 529 -15 754 19 301 47 555 108 1124 272 550 158
                    704 191 856 181 193 -13 338 -60 754 -243 298 -131 464 -193 606 -228 530
                    -128 976 39 1435 537 137 148 179 220 222 377 24 90 26 110 26 321 0 191 -3
                    245 -23 355 -118 667 -469 1473 -976 2240 -603 912 -1311 1569 -1902 1764
                    -215 71 -398 87 -598 52z"/>
                    </g>
                    </svg> ', 
              
                    'depth'           => 0,
                    
                ] ); ?>
                
          </div>
      </nav>
       
    </header>
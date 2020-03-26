<?php get_header() ?>
<?php the_post(); ?>
 <main class="page-kittens">
  <!---------Форма отправки сообщения бронирования----------------------->  
        <div class="formBooking hidden">
          <div class="formEmail__wrapper">
          
           <div class="booking-form">
            <?php echo do_shortcode('[contact-form-7 id="214" title="Забронировать котёнка"]');?>
             <span class="close-popup__booking" tabindex="0">X</span></div>
          </div>
       </div>
  <!---------------------------------------------------------------------> 
        
        <div class="page-kittens__wrapper">
         <section class="kitten01">
            <div class="kitten01__wrapper">
                <nav class="kittens__fastmenu">
                    <div><a href="<?php bloginfo( 'url' ); ?>">Главная</a>/</div>
                    <div><a href="<?php the_permalink( '39' ); ?>">В добрые руки</a>/</div>
                    <div><a class="kittens__fastmenu__name"><?php the_title(); ?></a></div>
                </nav>
                <div class="kitten__about">
                    <div class="kitten__photo">
                        <?php the_post_thumbnail( full ); ?> 
                        
                    </div>
                    <div class="kitten__about__wrapper">
                        <div class="kitten__data">
                            <div class="kitten__data__field"><h3 class="kitten__name"><?php the_title(); ?></h3></div>
                            <hr>
                            <div class="kitten__data__field"><b>Пол: </b><p class="kitten__sex"><?php the_field('sex'); ?></p></div>
                            <div class="kitten__data__field"><b>Порода: </b><p class="kitten__breed"><?php the_field('breed'); ?></p></div>
                            <div class="kitten__data__field"><b>Окрас: </b><p class="kitten__color"><?php the_field('color'); ?></p></div>
                            <div class="kitten__data__field"><b>Дата рождения: </b><p class="kitten__bdate"><?php the_field('birth_date'); ?></p></div>
                        </div>
                        <div class="button__wrapper"><button class="kitten__book-btn kitten_btn btn">Забронировать</button></div>
                    </div>
                </div>
                
            </div>
            <div class="forfree1__desr">
                <h3>Описание </h3>
                 <?php the_field('desc'); ?>
             </div>
            <div class="kitten__gallery">
                <h3>Фотографии </h3>
                 <div class="kitten_photoBlock">

                     <?php the_content(); ?>    
                 </div>
             </div>
          </section>
           <section class="kittens__also">
               <h3>Ждут хозяев</h3>
               <ul class="kittens__also__list">
                 <?php
                              // параметры по умолчанию
                              $posts = get_posts( array(
                              'numberposts' => 3,
                              'order' => ASC,
                              'post_type'   => 'kittens',
                              'tax_query' => array(
                                    array(
                                    'taxonomy' => 'status1',
                                    'field' => 'slug',
                                    'terms' => 'free')),

                              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                              ) );
                              foreach( $posts as $post ){ ?>  <?php
                              setup_postdata($post);
                              ?>
                       
                          <li class="kittens__also__item">
                            <a class="kittens__also__content" href="<?php the_permalink(); ?>">
                                <div class="kittens__also__photo">
                                    <?php the_post_thumbnail( full ); ?> 
                                   
                                </div>
                                <div class="kittens__also__description">
                                    <div class="kittens__also__field"><b>Имя: <?php the_title();?></b><p class="kittens__also__name"></p></div>
                                    <div class="kittens__also__field"><b>Пол: </b><p class="kittens__also__sex"> <?php the_field('sex'); ?></p></div>
                                    <div class="kittens__also__field"><b>Порода: </b><p class="kittens__also__breed"> <?php the_field('breed'); ?></p></div>
                                    
                                </div>
                            </a>
                     
                         </li>
                         <?php
          }
          wp_reset_postdata(); // сброс
          ?>
               </ul>
               <a class="kitten_btn btn" href="<?php the_permalink( '33' ); ?>">Посмотреть всех</a>
           </section>
         
          </div>
        
    </main>     
<?php get_footer() ?>
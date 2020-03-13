<?php 
/* Template Name: Производители */ ?>
<?php get_header() ?>
 
    <main class="sire-page">
        
        <section class="sire">
            <div class="sire__wrapper">
                
                <h2 class=" section-title ">Наши производители</h2>
                <div class="sire__container">
                    <h3 class="sire__title">Коты</h3>
                    <ul class="sireBoys__list">
                        <?php
                              // параметры по умолчанию
                              $posts = get_posts( array(
                              'numberposts' => 3,
                              'order' => ASC,
                              'post_type'   => 'sire',
                              'tax_query' => array(
                                    array(
                                    'taxonomy' => 'sex',
                                    'field' => 'slug',
                                    'terms' => 'male')),

                              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                              ) );
                              foreach( $posts as $post ){ ?>  <?php
                              setup_postdata($post);
                              ?>
                        <li class="sire__item">
                            <div class="sire__cat">
                                <?php the_post_thumbnail( full ); ?>
                                <p class="sire__name"><?php the_title();?></p>
                            </div>
                            <div class="sire__description">
                                <div class="sire__description__field"><b>Пол: </b><p class="sire__description__sex"><?php the_field('sex'); ?></p></div>
                                <div class="sire__description__field"><b>Порода: </b><p class="sire__description__breed"><?php the_field('breed'); ?></p></div>
                                <div class="sire__description__field"><b>Окрас: </b><p class="sire__description__color"><?php the_field('color'); ?></p></div>
                                <div class="sire__description__field"><b>Дата рождения: </b><p class="sire__description__birthdate"><?php the_field('birth_date'); ?></p></div>
                               
                            </div>
                            <div class="sire__gallery">
                                <?php the_content(); ?>
                            </div>
                            
                            
                            
                        </li>
                         <?php
          }
          wp_reset_postdata(); // сброс
          ?>
                    </ul>
                    <h3 class="sire__title">Кошки</h3>
                    <ul class="sireGirls__list">
                        <?php
                              // параметры по умолчанию
                              $posts = get_posts( array(
                              'numberposts' => 3,
                              'order' => ASC,
                              'post_type'   => 'sire',
                              'tax_query' => array(
                                    array(
                                    'taxonomy' => 'sex',
                                    'field' => 'slug',
                                    'terms' => 'female')),

                              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                              ) );
                              foreach( $posts as $post ){ ?>  <?php
                              setup_postdata($post);
                              ?>
                        <li class="sire__item">
                            <div class="sire__cat">
                                <?php the_post_thumbnail( full ); ?>
                                <p class="sire__name"><?php the_title();?></p>
                            </div>
                            <div class="sire__description">
                                <div class="sire__description__field"><b>Пол: </b><p class="sire__description__sex"><?php the_field('sex'); ?></p></div>
                                <div class="sire__description__field"><b>Порода: </b><p class="sire__description__breed"><?php the_field('breed'); ?></p></div>
                                <div class="sire__description__field"><b>Окрас: </b><p class="sire__description__color"><?php the_field('color'); ?></p></div>
                                <div class="sire__description__field"><b>Дата рождения: </b><p class="sire__description__birthdate"><?php the_field('birth_date'); ?></p></div>
                               
                            </div>
                            <div class="sire__gallery">
                                <?php the_content(); ?>
                            </div>
                            
                        </li>
                         <?php
          }
          wp_reset_postdata(); // сброс
          ?>
                    </ul>
                </div>
            </div> 
        </section>
    </main>





<?php get_footer() ?>
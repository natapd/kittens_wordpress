<?php get_header() ?>
     <main class="page-main">
    
          
          <section class="slider">
            <h2 class="section-title visually-hidden">Шотландские котята</h2>
              <div class="slider__photo">
                <div class="slider__item slide1 active">
                   <img class="slide1__img" src="<?php echo get_template_directory_uri() ?>/img/slide1.jpg"  alt="Питомник шотландских котят">
                </div> 
                <div class="slider__item slide2 visually-hidden">
                   <img class="slide2__img" src="<?php echo get_template_directory_uri() ?>/img/slide2.jpg"   alt="Питомник шотландских котят">
                </div> 
                <div class="slider__item slide3 visually-hidden">
                   <img class="slide3__img" src="<?php echo get_template_directory_uri() ?>/img/slide3.jpg"   alt="Питомник шотландских котят">
                </div> 
                   <div class="slider__arrows-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-left.png" width="40" height="40" alt="Предыдущий слайд">
                   </div>
                   <div class="slider__arrows-right">
                        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.png" width="40" height="40" alt="Следующий слайд">
                   </div>
                   <div class="slider__infoBlock">
                       <div class="infoBlock__inner">
                            <h3 >Добро пожаловать<br> в McCrae World!</h3>
                            <!--<img src="img/logo-line.png" >-->
                            <p class="infoBlock_descr">Мы поможем выбрать Вам котенка своей мечты</p>
                            <div class="infoBlock__btnGroup">
                                <a href="<?php the_permalink( '33' ); ?>" class="infoBlock_btn btn">Выбрать котенка</a>
                                <!--<a href="" class="infoBlock_btn btn">В добрые руки</a>-->
                            </div>
                       </div>
                   </div>
              </div>
          </section>
          <section class="kittens-for-sale ">
            <div class="kittens-for-sale__wrapper">
                <div class="kittens-for-sale__title">
                    <h2 class=" section-title">Шотландские котята в продаже</h2>
                    <a href="<?php the_permalink( '33' ); ?>" >Смотреть больше котят -></a>
                </div>
                <div class="kittens-for-sale__container">
                   <ul class="kittens-for-sale__list">
                      
                        <?php
                    // параметры по умолчанию
                    $posts = get_posts( array(
                    'numberposts' => 3,
                    'order' => ASC,
                    'post_type'   => 'kittens',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    foreach( $posts as $post ){ ?>  <?php
                    setup_postdata($post);
                    ?>  
                      <li class="kittens-for-sale__item">
                        <div class="kittens-for-sale__content">
                          <?php the_post_thumbnail( full ); ?>
                          <span <?php post_class('kitten__also__status'); ?>   >
                          
                          <?php 

                                $cur_terms = get_the_terms( get_the_ID(), 'status1', '', '', '' );
                                if( is_array( $cur_terms ) ){
                                  foreach( $cur_terms as $cur_term ){
                                    echo  $cur_term->name ;
                                  }
                                }
                          ?>

                        </span>
                          <p class="kittens-for-sale__name"><?php the_title(); ?></p>
                          
                        </div>
                        <div class="kittens-for-sale__btn__wrapper">
                          
                          <a class="kittens-for-sale__btn kitten_btn btn__cart" href="<?php the_permalink(); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 17 17"><path fill="#fff" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>Посмотреть</a>
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
          <section class="kittens-expect">
            <div class="kittens-expect__wrapper">
              <?php
          // параметры по умолчанию
          $posts = get_posts( array(
          'numberposts' => 3,
          'category_name'    => new_kittens,
          'orderby' => date,
          'order' => DESC,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
          foreach( $posts as $post ){ ?>  <?php
          setup_postdata($post);
          ?><div class="kittens-expect__post">
               <h2 class="kittens-expect__title section-title"><?php the_title();?></h2>
                <div class="kittens-expect__parent" ><?php the_post_thumbnail( full ); ?></div>
              <div class="kittens-expect__dicsr">
               
                  
                <div class="kittens-expect__dicsr_wrapper">
                  <?php the_content(); ?>
                  </div>
             </div>
          </div>
          <?php
          }
          wp_reset_postdata(); // сброс
          ?>
          
             
            </div>
          </section>
          <section class="about_cattery">
            <h2 class="about_cattery__title section-title visually-hidden">О питомнике</h2>
            <div class="about_cattery__wrapper">
                <div class="cattery__photos ">
                    <ul class="cphotos_block">
                        <li class="cphotos__item"><img src="<?php echo get_template_directory_uri() ?>/img/photos/cattery1.jpg" alt="Питомник McCrae World"></li>
                        <li class="cphotos__item"><img src="<?php echo get_template_directory_uri() ?>/img/photos/cattery2.jpg" alt="Питомник McCrae World"></li>
                        <li class="cphotos__item"><img src="<?php echo get_template_directory_uri() ?>/img/photos/cattery4.jpg" alt="Питомник McCrae World"></li>
                        <li class="cphotos__item"><img src="<?php echo get_template_directory_uri() ?>/img/photos/cattery3.jpg" alt="Питомник McCrae World"></li>
                    </ul>
                </div>
                <div class="cattery-discr">
                    <h3 class="cattery-discr__title section-title">О питомнике</h3>
                      <?php
                          // параметры по умолчанию
                          $posts = get_posts( array(
                          'numberposts' => 2,
                          'category_name'    => aboutus,
                          'order' => ASC,
                          'post_type'   => 'post',
                          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                          ) );
                          foreach( $posts as $post ){ ?>  <?php
                          setup_postdata($post);
                          ?>
                      
                                    
                                    <?php the_content(); ?>

                                    

                              <?php
                          }
                          wp_reset_postdata(); // сброс
                          ?>
       

                    
                    <a href="<?php the_permalink('37'); ?>"  class="read-more-btn btn">Читать больше</a>
                   
                </div>
            </div>
              
          </section>
        
    </main> 
   
    
<?php get_footer() ?>
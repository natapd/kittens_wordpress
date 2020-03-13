<?php 
/* Template Name: В добрые руки */ ?>
<?php get_header() ?>
<main class="page-forfree">
     

        <div class="page-forfree__wrapper">
             <section class="ingoodhands" id="ingoodhands-section">
            <div class="ingoodhands__wrapper">
                <h2 class="ingoodhands__title section-title">Отдадим в добрые руки</h2>
                    
                                       
                
                <div class="ingoodhands__container">
                   <ul class="ingoodhands__list">
                   	<?php
					          // параметры по умолчанию
					          $posts = get_posts( array(
					          'numberposts' => 3,
					          'order' => ASC,
					          'post_type'   => 'ingoodhands',
					          
					          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					          ) );
					          foreach( $posts as $post ){ ?>  <?php
					          setup_postdata($post);

					          ?>
                         <li class="ingoodhands__item">
				            <a class="ingoodhands__item__link" href="<?php the_permalink(); ?>">
				            <div class="ingoodhands__content">
				                <div class="ingoodhands__photo">
				                    <?php the_post_thumbnail( full ); ?>
				                     
				                </div>
				                <div class="ingoodhands__description">
				                    <div class="ingoodhands__description__field"><b>Имя: </b><p class="ingoodhands__name"><?php the_title(); ?></p></div>
				                    <div class="ingoodhands__description__field"><b>Пол: </b><p class="ingoodhands__sex"><?php the_field('sex'); ?></p></div>
				                    <div class="ingoodhands__description__field"><b>Порода: </b><p class="ingoodhands__breed"><?php the_field('breed'); ?></p></div>
				                    <div class="ingoodhands__description__field"><b>Окрас: </b><p class="ingoodhands__color"><?php the_field('color'); ?></p></div>
				                </div>
				            </div>
				         <div class="kittens__btn__wrapper ">   
				                
				                <a class="ingoodhands__link" href="<?php the_permalink(); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 17 17"><path fill="#7b8f38" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>  Посмотреть подробнее</a>
				         </div>
				            </a>
				         </li>
				         <?php
          }
          wp_reset_postdata(); // сброс
          ?>
                    </ul>     
                </div>
            </div>

         </section>
         <section class="forfree-about">
            <div class="forfree-about__wrapper">
                        
                <h2 class="forfree-about__title section-title">Почему животное отдаем в другой дом?</h2>
                 <?php
				          // параметры по умолчанию
				          $posts = get_posts( array(
				          'numberposts' => -1,
				          'category_name'    => forfree,
				          'order' => ASC,
				          'post_type'   => 'post',
				          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				          ) );
				          foreach( $posts as $post ){ ?>  <?php
				          setup_postdata($post);
				          ?>
                <div class="forfree-about__dicsr">
                	<div class="forfree-about__block1">  
		                    <div class="forfree-about__<?php the_title(); ?>" >
		                      <?php the_post_thumbnail(array(200) ); ?>
		           			</div>
		                    <div><?php the_content(); ?></div>  
                    </div>  
				                        

                </div>
                <?php
          }
          wp_reset_postdata(); // сброс
          ?>
            </div>
          </section>
          
       
         
      </div>
    </main>     
    <?php get_footer() ?>
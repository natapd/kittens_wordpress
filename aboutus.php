<?php 
/* Template Name: О питомнике */ ?>
<?php get_header() ?>
<main class="aboutus-page">
       

        <h3 class="aboutus__title section-title">О питомнике</h3>
         
         	 <?php
          // параметры по умолчанию
          $posts = get_posts( array(
          'numberposts' => 4,
          'category_name'    => aboutus,
          'order' => ASC,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
          foreach( $posts as $post ){ ?>  <?php
          setup_postdata($post);
          ?>
			<section class="aboutus <?php the_title(); ?>">
            <div class="aboutus__img <?php the_title(); ?>__img">
                <?php the_post_thumbnail( full ); ?>
            </div>
            <div class="aboutus__text <?php the_title(); ?>__text">
                    
                    <?php the_content(); ?>

                    

                    
                </div>
              </section>
              <?php
          }
          wp_reset_postdata(); // сброс
          ?>
       

      
          <?php
          // параметры по умолчанию
          $posts = get_posts( array(
          'numberposts' => 3,
          'category_name'    => sales_terms,
          'order' => ASC,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
          foreach( $posts as $post ){ ?>  <?php
          setup_postdata($post);
          ?>
          <h3 class="aboutus__title section-title"><?php the_title(); ?></h3>
			<section class="aboutus block5" id="rules">
            <div class="aboutus__img block5__img">
                <?php the_post_thumbnail( full ); ?>
            </div>
            <div class="aboutus__text block5__text">
                    
                    <?php the_content(); ?>

                    

                    
                </div>
              </section>
              <?php
          }
          wp_reset_postdata(); // сброс
          ?>
  
    </main>
<?php get_footer() ?>
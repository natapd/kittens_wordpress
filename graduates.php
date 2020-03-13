<?php 
/* Template Name: Выпускники */ ?>
<?php get_header() ?>
 <main class="graduates-page">
        
        <section class="graduates">
            <div class="graduates__wrapper">
                
                <h2 class="section-title">Наши выпускники</h2>
                <div class="graduates__container">
                    
                    <ul class="graduates-brood__list">
                        <?php
                              // параметры по умолчанию
                              $posts = get_posts( array(
                              'numberposts' => -1,
                              'order' => ASC,
                              'post_type'   => 'graduates',
                              

                              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                              ) );
                              foreach( $posts as $post ){ ?>  <?php
                              setup_postdata($post);
								?>
								<li class="graduates-brood__item">
									
									<div class="graduates-brood__wrapper">
										<h3 class="section-title graduates__title"><?php the_title(); ?></h3>
									    <a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( array(320)); ?><br>Посмотреть фотографии</a>
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
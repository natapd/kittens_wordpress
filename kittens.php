<?php 
/* Template Name: Котята в продаже */ ?>
<?php get_header() ?>
<main class="page-kittens">
       
        <section class="kittens" id="section_kittens">
            <div class="kittens__wrapper">
                <h2 class="kittens__title section-title">Котята в продаже</h2>
                    
                    <p><?php
						$terms = get_terms( array(
							'taxonomy'      => array( 'brood_tax' ), // название таксономии с WP 4.5
							'orderby'       => 'slug', 
							'order'         => 'DESC',
							'hide_empty'    => true, 
							'object_ids'    => null,
							'include'       => array(),
							'exclude'       => array(), 
							'exclude_tree'  => array(), 
							'number'        => '', 
							'fields'        => 'id=>name', 
							'count'         => false,
							'slug'          => '', 
							'parent'         => '',
							'hierarchical'  => true, 
							'child_of'      => 0, 
							'get'           => '', // ставим all чтобы получить все термины
							'name__like'    => '',
							'pad_counts'    => false, 
							'offset'        => '', 
							'search'        => '', 
							'cache_domain'  => 'core',
							'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
							'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
							'update_term_meta_cache' => true, // подгружать метаданные в кэш
							'meta_query'    => '',
						) );

				foreach( $terms as $term ){?>
					<h3 class="kittens__title section-title">Помет <?php print_r($term); ?> </h3>
							</p>
                   <!-------------------Блок с родителями------------------------------>
						<?php get_template_part('parents'); ?>
                   <!-------------окончание блока-------------------------------------->
                    	<div class="kittens__container">
					<ul class="kittens__list">
						
												<?php
					          // параметры по умолчанию
					          $posts = get_posts( array(
					          'numberposts' => 3,
					          'order' => ASC,
					          'post_type'   => 'kittens',
					          'tax_query' => array(
                                    array(
                                    'taxonomy' => 'brood_tax',
                                    'field' => 'name',
                                    'terms' => $term)),
					          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					          ) );
					          foreach( $posts as $post ){ ?>  <?php
					          setup_postdata($post);

					          ?>
								<li class="kittens__item">
									<!--<a class="kittens__item__link" href="<?php the_permalink(); ?>">-->
										<div class="kittens__content">
											<div class="kittens__photo">
												<?php the_post_thumbnail( full ); ?>
												<span <?php post_class('kitten__also__status'); ?>   >
													
													<?php the_terms( get_the_ID(), 'status1', '', '', '' ); ?>

												</span>
											</div>
											<div class="kittens__description">
													 <div class="kittens__description__field"><b>Имя:  </b><p class="kittens__name"><?php the_title(); ?></p></div>
								                    <div class="kittens__description__field"><b>Пол: </b><p class="kittens__sex"><?php the_field('sex'); ?></p></div>
								                    <div class="kittens__description__field"><b>Порода: </b><p class="kittens__breed"><?php the_field('breed'); ?></p></div>
								                    <div class="kittens__description__field"><b>Окрас: </b><p class="kittens__color"><?php the_field('color'); ?></p></div>
													</div>
										</div>
										<div class="kittens__btn__wrapper ">
											
											<a class="kittens__link" href="<?php the_permalink(); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 17 17"><path fill="#7b8f38" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>  Посмотреть подробнее</a>
										</div>
									
								</li>
          
              <?php
          }
          wp_reset_postdata(); // сброс
          ?>
							
						
					</ul>
				</div>
	<?php 
}
						?>
							

                    
                
			
				</div>

         </section>
<?php get_footer() ?>
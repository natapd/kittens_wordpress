<?php get_header() ?>
<main class="page-kittens">
       
        <section class="kittens" id="section_kittens">
            <div class="kittens__wrapper">
                <h2 class="kittens__title section-title">Котята в продаже</h2>
                    <h3 class="kittens__title section-title">Помет N 26.10.19</h3>
                    <div class="kittens__parents">
                        <div class="kittens__parentBlock"> 
                            <img class="kittens__parents-photo mammy-icon" src="img/photos/kukla.jpg" width="100"><p class="kittens_parent-name mammy-name">McCrae World WONDERFUL (Кукла)</p>
                        </div>  
                        <div class="kittens__plus">
                            <img src="img/plus.png" width="50">
                        </div>          
                        <div class="kittens__parentBlock"> 
                            <img class="kittens__parents-photo daddy-icon" src="img/photos/grand.jpg" width="100"><p class="kittens_parent-name daddy-name">McCrae World GRAND</p>
                        </div>
                    </div>

                    
                
				<div class="kittens__container">
					<ul class="kittens__list">
						
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>					
								<li class="kittens__item">
									<!--<a class="kittens__item__link" href="<?php the_permalink(); ?>">-->
										<div class="kittens__content">
											<div class="kittens__photo">
												<?php the_post_thumbnail( full ); ?>
												<span class="kitten__also__status ">
													<?php the_terms( get_the_ID(), 'status1', '', '', '' ); ?>
												</span>
											</div>
											<div class="kittens__description">
												<?php the_content(); ?>
											</div>
										</div>
										<div class="kittens__btn__wrapper ">
											
											<a class="kittens__link" href="<?php the_permalink(); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 17 17"><path fill="#7b8f38" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>  Посмотреть подробнее</a>
										</div>
									
								</li>
          
              <?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>
							
						
					</ul>
				</div>
				</div>

         </section>
<?php get_footer() ?>
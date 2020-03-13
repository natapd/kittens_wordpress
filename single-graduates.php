
<?php get_header() ?>
<?php the_post(); ?>
 <main class="graduates-page">
        
        <section class="graduates">
            <div class="graduates__wrapper">
                
                <h2 class="section-title">Наши выпускники</h2>
                <div class="graduates__container">
                    
                    <ul class="graduates__list">
                        
								<li class="graduates__item">
									
									
										<h3 class="section-title graduates__title"><?php the_title(); ?></h3>
									    
										<?php the_content(); ?>
									
								</li>
			                      
			                        
                    </ul>
                   
                </div>
            </div> 
        </section>
    </main>

<?php get_footer() ?>
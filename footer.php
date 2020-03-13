   <footer class="main-footer">
        <div class="footer__container">
                <div class="footer__main-menu fmenu">
                    <h3 class="footer__main-menu__title">Основные разделы</h3>
                    
                        <?php 
                wp_nav_menu( [
                    'theme_location'  => 'footer_main_menu',
                    
                    'container'       => 'false', 
                   
                    'menu_class'      => 'fmenu__list', 
              
                    'depth'           => 0,
                    
                ] ); ?>
                        
                    
                </div>
                <div class="footer__user-menu">
                    <h3 class="footer__main-menu__title">Покупателям</h3>
                     <?php 
                wp_nav_menu( [
                    'theme_location'  => 'footer_user_menu',
                    
                    'container'       => 'false', 
                   
                    'menu_class'      => 'umenu__list', 
              
                    'depth'           => 0,
                    
                ] ); ?>
                   
                </div>
                <div class="footer__social">
                    <h3 class="footer__main-menu__title">Следите за нами</h3>
                    <?php 
                wp_nav_menu( [
                    'theme_location'  => 'footer_social_menu',
                    
                    'container'       => 'false', 
                   
                    'menu_class'      => 'smenu__list', 
              
                    'depth'           => 0,
                    
                ] ); ?>
                    
                </div>
                <div class="footer__contact">
                    <h3 class="footer__main-menu__title">Контакты</h3>
                    <p class="footer__contact__p">
                        Россия, г.Санкт-Петерубрг <br>
                        <a href="tel:+79215733044">+7(921)573-30-44</a>
                    </p>
                </div>
        </div>
    </footer> 


     
    <?php wp_footer() ?>
  </body>
  </html>
<?php
add_action('wp_enqueue_scripts','style_theme');
add_action('wp_footer','scripts_theme');
add_action('after_setup_theme','my_menu');
add_action( 'init', 'register_post_types' );
// хук для регистрации
/*add_action( 'init', 'post_tag_for_pages' );
function post_tag_for_pages(){
	register_taxonomy_for_object_type( 'status1', 'kittens');

}*/
function register_post_types(){
	
	register_taxonomy( 'status1',  array('kittens'), [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Статусы',
			'singular_name'     => 'Статус',
			'search_items'      => 'Искать статусы',
			'all_items'         => 'Все статусы',
			'view_item '        => 'Смотреть статус',
			'parent_item'       => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать статус',
			'update_item'       => 'Обновить статус',
			'add_new_item'      => 'Добавить новый статус',
			'new_item_name'     => 'Новое название статуса',
			'menu_name'         => 'Статус',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		 'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => true, // добавить в REST API  Таксономия появляется в админке у поста.
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'brood_tax',  array('kittens'), [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Помёт',
			'singular_name'     => 'Помёт',
			'search_items'      => 'Искать помёт',
			'all_items'         => 'Все помёты',
			'view_item '        => 'Смотреть помёт',
			'parent_item'       => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать помёт',
			'update_item'       => 'Обновить помёт',
			'add_new_item'      => 'Добавить новый помёт',
			'new_item_name'     => 'Новое название помёта',
			'menu_name'         => 'Помёт',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		 'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => true, // добавить в REST API  Таксономия появляется в админке у поста.
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );

	register_post_type('kittens', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Котята', // основное название для типа записи
			'singular_name'      => 'Котёнок', // название для одной записи этого типа
			'add_new'            => 'Добавить котёнка', // для добавления новой записи
			'add_new_item'       => 'Добавление котёнка', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование котенка', // для редактирования типа записи
			'new_item'           => 'Новый котёнок', // текст новой записи
			'view_item'          => 'Смотреть котёнка', // для просмотра записи этого типа.
			'search_items'       => 'Искать котёнка', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Котята', // название меню
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => false, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-heart', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ,'custom-fields','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( 'status1','brood_tax' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true
	) );
	
	

	register_taxonomy( 'sex',  array('sire'), [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Пол',
			'singular_name'     => 'Пол',
			'search_items'      => 'Искать пол',
			'all_items'         => 'Все значения',
			'view_item '        => 'Смотреть пол животного',
			'parent_item'       => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать пол',
			'update_item'       => 'Обновить пол',
			'add_new_item'      => 'Добавить новый пол',
			'new_item_name'     => 'Новое название пола',
			'menu_name'         => 'Пол',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		 'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => true, // добавить в REST API  Таксономия появляется в админке у поста.
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_post_type('sire', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Производители', // основное название для типа записи
			'singular_name'      => 'Производитель', // название для одной записи этого типа
			'add_new'            => 'Добавить производителя', // для добавления новой записи
			'add_new_item'       => 'Добавление производителя', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование производителя', // для редактирования типа записи
			'new_item'           => 'Новый производитель', // текст новой записи
			'view_item'          => 'Смотреть производителя', // для просмотра записи этого типа.
			'search_items'       => 'Искать производителя', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Производители', // название меню
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => false, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 11,
		'menu_icon'           => 'dashicons-awards', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ,'custom-fields','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( 'sex' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true
	) );
	register_post_type('graduates', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Выпускники', // основное название для типа записи
			'singular_name'      => 'Выпускники', // название для одной записи этого типа
			'add_new'            => 'Добавить выпускников', // для добавления новой записи
			'add_new_item'       => 'Добавление выпускников', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование помета выпускников', // для редактирования типа записи
			'new_item'           => 'новая группа выпускников', // текст новой записи
			'view_item'          => 'Смотреть выпускников', // для просмотра записи этого типа.
			'search_items'       => 'Искать помёт', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Выпускники', // название меню
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => false, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 12,
		'menu_icon'           => 'dashicons-welcome-learn-more', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ,'custom-fields','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true
	) );
	register_post_type('ingoodhands', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Кот в добрые руки', // основное название для типа записи
			'singular_name'      => 'Кот в добрые руки', // название для одной записи этого типа
			'add_new'            => 'Добавить кота', // для добавления новой записи
			'add_new_item'       => 'Добавление котов в добрые руки', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование информации о коте', // для редактирования типа записи
			'new_item'           => 'новая группа котов в пристрой', // текст новой записи
			'view_item'          => 'Смотреть котов в добрые руки', // для просмотра записи этого типа.
			'search_items'       => 'Искать пкота', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'В добрые руки', // название меню
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => false, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 13,
		'menu_icon'           => 'dashicons-admin-multisite', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ,'custom-fields','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true
	) );
}


function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri(), false, time());
	//wp_enqueue_script('parkingjs', get_stylesheet_directory_uri() . '/js/script.js', false, time(),true);
};
function scripts_theme(){
	wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', false, time(),true);
	
	wp_enqueue_script('swipe', get_template_directory_uri() . '/js/swipe.js', false, time(),true);
	if (is_front_page()){
		wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', false, time(),true);
     }
	
	wp_enqueue_script('email', get_template_directory_uri() . '/js/email.js', false, time(),true);
	
	
if (is_singular('kittens')||is_singular('ingoodhands')){
	wp_enqueue_script('booking', get_template_directory_uri() . '/js/booking.js', false, time(),true);

}

}
function my_menu(){
 register_nav_menus(array(
 	'head_menu' => 'Главное меню',
	'contact_menu' => 'Меню контактов',
	'social_menu'=> 'Меню соцсетей',
	'footer_main_menu' => 'Главное меню в футере',
	'footer_user_menu' => 'User menu в футере',
	'footer_social_menu'=> 'Меню соцсетей в футере'
 ));
 add_theme_support('post-thumbnails', array('post','kittens','sire','graduates','ingoodhands'));
}

?>
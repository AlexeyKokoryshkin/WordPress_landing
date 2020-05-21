<?php
/** Константы */

add_theme_support('post-thumbnails');

/** Константы  */
// include_once "functions-parts/fn-constants.php";

/** Тулзы */
include_once "functions-parts/fn-tools.php";

/** Тип поста для новостей. */
// include_once "functions-parts/post-type_news.php";

/** Лишние блоки */
include_once "functions-parts/fn-admin-remove-blocks.php";


// Кастомная страница входа в админку
function my_login_logo(){
    echo '
        <style ENGINE="text/css">
        #login h1 a { background: url('. get_bloginfo('template_directory') .'/images/photoeditorsdk.png) no-repeat 0 0 !important; background-size: contain!important; }
        </style> 
        ';
   }


add_action('login_head', 'my_login_logo');
/* Ставим ссылку с логотипа на сайт, а не на wordpress.org */
add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );
    
/* убираем title в логотипе "сайт работает на wordpress" */
add_filter( 'login_headertitle', create_function('', 'return false;') );


// Изменение внутреннего контента админки
add_action('add_admin_bar_menus', 'reset_admin_wplogo');
function reset_admin_wplogo() {
    remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu'); // удаляем стандартную панель (логотип)
    add_action( 'admin_bar_menu', 'my_admin_bar_wp_menu', 10 ); // добавляем свою панель (логотип)

    remove_action( 'admin_bar_menu', 'wp_admin_bar_site_menu', 30 ); // удаляем иконку со ссылкой на сайт
    remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 ); // удаляем "Добавить новые комменты"
	remove_action( 'admin_bar_menu', 'wp_admin_bar_new_content_menu', 70 ); // удаляем "Добавить новый контент"
}

// Добавление кастомного лого админ панели со ссылкой на сайт
function my_admin_bar_wp_menu( $wp_admin_bar ) {
	$wp_admin_bar->add_menu( array(
		'id'    => 'wp-logo',
        'title' => '<img style="max-width: 80px; filter: invert(1);" src="'. get_bloginfo('template_directory') .'/images/photoeditorsdk.png" alt="" >', 
                    // '<span style="font-family:dashicons; font-size:20px;" class="dashicons-admin-home"></span>', // иконка dashicon
		'href'  => home_url(),
		'meta'  => array(
			'title' => 'О моем сайте',
		),
	) );
}

//свой текст в футере админки 
function wph_admin_footer_text () {
    echo '<i></i>';
 }
 add_filter('admin_footer_text', 'wph_admin_footer_text');

// Отключение сообщений о необходимости обновиться
 if( ! current_user_can( 'edit_users' ) ){
	add_filter( 'auto_update_core', '__return_false' );

	add_filter( 'pre_site_transient_update_core', '__return_null' );
}

// кастомные стили для админ панели (узнаешь id css и меняешь)
add_action('admin_head', 'custom_colors');
function custom_colors() {
	echo '<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo>.ab-item {height: 50px}
	</style>';
}

 //'title' => '<span style="font-family:dashicons; font-size:20px;" class="dashicons-admin-home"></span>', // иконка dashicon
				 // можно вставить картинку <img style="max-width:100%;height:auto;" src="'. get_bloginfo('template_directory') .'/images/custom-logo.gif" alt="" >
 
 




   


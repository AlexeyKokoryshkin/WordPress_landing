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

function my_login_logo(){
    echo '
    <style ENGINE="text/css">
    #login h1 a { background: url('. get_bloginfo('template_directory') .'/images/photo_2019-10-22_12-33-52.jpg) no-repeat 0 0 !important; }
    </style>';
   }
   add_action('login_head', 'my_login_logo');
   /* Ставим ссылку с логотипа на сайт, а не на wordpress.org */
   add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );
    
   /* убираем title в логотипе "сайт работает на wordpress" */
   add_filter( 'login_headertitle', create_function('', 'return false;') );
   


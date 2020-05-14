<?php
if (!function_exists( 'umc' )){

    function umc() {
 
        $labels = array(
            'name'                => 'УМК',
            'singular_name'       => 'УМК',
            'menu_name'           => 'УМК',
            'parent_item_colon'   => 'Родительский:',
            'all_items'           => 'Все УМК',
            'view_item'           => 'Просмотреть',
            'add_new_item'        => 'Добавить УМК',
            'add_new'             => 'Добавить новую',
            'edit_item'           => 'Редактировать УМК',
            'update_item'         => 'Обновить УМК',
            'search_items'        => 'Найти УМК',
            'not_found'           => 'Не найдено',
            'not_found_in_trash'  => 'Не найдено в корзине',
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array(  'title', 'editor', 'thumbnail' ),
            //'taxonomies'          => array( 'category' ), 
            'public'              => true,
            'menu_position'       => 1,
            'menu_icon'           => 'dashicons-welcome-learn-more',
        );
        register_post_type( 'umc_form', $args );
    }
 
	add_action( 'init', 'umc', 0 ); // инициализируем
}
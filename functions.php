<?php
if ( function_exists('register_sidebars') ) {
    register_sidebars(2, array(
        'before_widget' => '',
        'after_widget' => '',
    ));
}
register_nav_menus(array(  
    'top' => 'Верхнее меню'
));  
add_theme_support('post-thumbnails');
set_post_thumbnail_size(160, 160, false);
remove_filter('the_content', 'wptexturize');

// Подключение стилей из другого файла
function enqueue_custom_styles() {

    wp_enqueue_style('main.css', get_template_directory_uri() . '/css/main.css');

    wp_enqueue_style('grid.css', get_template_directory_uri() . '/css/grid.css');
    
    wp_enqueue_style('slds.css', get_template_directory_uri() . '/css/slds.css');

    wp_enqueue_style('forms.css', get_template_directory_uri() . '/css/forms.css');

    wp_enqueue_style('cover.css', get_template_directory_uri() . '/cover.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
?>
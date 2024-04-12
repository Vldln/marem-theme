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

    wp_enqueue_style('cover.css', get_template_directory_uri() . '/css/cover.css');

    wp_enqueue_style('tilda-blocks-page34271496.min.css', get_template_directory_uri() . '/css/tilda-blocks-page34271496.min.css');

    wp_enqueue_style('tilda-blocks-page32935498.min.css', get_template_directory_uri() . '/css/tilda-blocks-page32935498.min.css');

    wp_enqueue_style('tilda-blocks-page36538260.min.css', get_template_directory_uri() . '/css/tilda-blocks-page36538260.min.css');

    wp_enqueue_style('tilda-blocks-page33894907.min.css', get_template_directory_uri() . '/css/tilda-blocks-page33894907.min.css ');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function my_custom_scripts() {
    wp_enqueue_script('hammer.min.js', get_template_directory_uri() . '/js/hammer.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('lazyload-1.3.min.export.js', get_template_directory_uri() . '/js/lazyload-1.3.min.export.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page32934699.min.js', get_template_directory_uri() . '/js/tilda-blocks-page32934699.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page32935498.min.js', get_template_directory_uri() . '/js/tilda-blocks-page32935498.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page33894907.min.js', get_template_directory_uri() . '/js/tilda-blocks-page33894907.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page33927741.min.js', get_template_directory_uri() . '/js/tilda-blocks-page33927741.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page33927784.min.js', get_template_directory_uri() . '/js/tilda-blocks-page33927784.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page34271496.min.js', get_template_directory_uri() . '/js/tilda-blocks-page34271496.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-blocks-page36538260.min.js', get_template_directory_uri() . '/js/tilda-blocks-page36538260.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-cover-1.0.min.js', get_template_directory_uri() . '/js/tilda-cover-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-events-1.0.min.js', get_template_directory_uri() . '/js/tilda-events-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-forms-1.0.min.js', get_template_directory_uri() . '/js/tilda-forms-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-menu-1.0.min.js', get_template_directory_uri() . '/js/tilda-menu-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-polyfill-1.0.min.js', get_template_directory_uri() . '/js/tilda-polyfill-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-scripts-3.0.min.js', get_template_directory_uri() . '/js/tilda-scripts-3.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-skiplink-1.0.min.js', get_template_directory_uri() . '/js/tilda-skiplink-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-slds-1.4.min.js', get_template_directory_uri() . '/js/tilda-slds-1.4.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-stat-1.0.min.js', get_template_directory_uri() . '/js/tilda-stat-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-video-1.0.min.js', get_template_directory_uri() . '/js/tilda-video-1.0.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('tilda-video-processor-1.0.min.js', get_template_directory_uri() . '/js/tilda-video-processor-1.0.min.js', array('jquery'), '1.0', true);
    
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

?>
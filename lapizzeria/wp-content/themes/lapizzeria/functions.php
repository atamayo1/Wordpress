<?php 
function lapizzeria_styles() {
    wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css' );
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:900");
    wp_enqueue_style('baskerville', "https://fonts.googleapis.com/css?family=Libre+Baskerville:700");
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.6', true);
}
add_action('wp_enqueue_scripts', 'lapizzeria_styles');

//Navegación
register_nav_menus(array(
    'menu_principal' => __('Menu Principal', 'laPizzeria'),
    'sociales_menu' => __('Menu Redes Sociales', 'laPizzeria')
 ));


 //Imagen Destacada
add_theme_support('post-thumbnails');
add_image_size('entradas', 750, 490, true);
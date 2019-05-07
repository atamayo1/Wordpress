<?php 
function blogviajes_styles() {
    wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css' );
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    wp_enqueue_style('Raleway', "https://fonts.googleapis.com/css?family=Raleway:900");
    wp_enqueue_style('Baskerville', "https://fonts.googleapis.com/css?family=Libre+Baskerville:700");
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.6', true);
}
add_action('wp_enqueue_scripts', 'blogviajes_styles');

//Navegación
register_nav_menus(array(
   'menu_principal' => __('Menu Principal', 'blogViajes')
));

//Imagen Destacada
add_theme_support('post-thumbnails');
add_image_size('entradas', 750, 490, true);

?>

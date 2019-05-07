**Crear sitio web en Wordpress, Manual Plantilla:**

- Librería, Versión de **Bootstrap 3.3.7**
- Librería **Normalize**
- Crear Carpeta del Tema **theme**
- Dentro de la carpeta **theme** Crear **style.css** con el siguiente contenido
        /* Theme Name: Blog de Viajes
        Theme URI: 
        Author: Anthony Tamayo Ortega
        Author URI: https://www.anthonyjobs.co
        Description: Tema para el sitio web de Blog de Viajes
        Version: 1.0
        License: GNU General Public licence or later
        Tags: HTML5, CSS3, Viajes, Blog
        */

        nav.navegacion {
        background-color: #008fd1;
        }
        nav.navegacion ul li {
        margin-top: 25px;
        }
        nav.navegacion ul li {
        margin-right: 20px;
        margin-left: 20px;
        text-align: center;
        }
        nav.navegacion ul li a {
        padding: 0;
        text-transform: uppercase;
        font-size: 16px;
        color: #fff;
        }
        nav.navegacion ul li a:hover {
        background-color: transparent;
        border: none;
        }
        .navbar-toggle {
        border: 1px solid #fff;
        }
        .icon-bar {
            background-color: #fff;
        }
        .site-header{
            height: 600px;
            background-repeat: no-repeat;
            background-position: center center;
            padding-top: 20px;
        }
        @media (min-widht: 768px){
            nav.navegacion {
                padding: 10px 0;
            }
            .site-header{
                background-size: cover;
                background-attachment: fixed;
            }
            .home .site-header{
                height: 800px;
            }
            img.logo {
                max-width: 400px;
            }
        }

- Dentro de la Carpeta **theme** Crear **index.php**

        <?php

        get_header();

        echo "Hola amigos";

        get_footer();

        ?>

- Dentro de la Carpeta **theme** Crear **page.php** para modificar el contenido agregar el siguiente codigo:


	<?php while (have_posts()): the_post(); ?>

    <?php the_title(); ?>

    <?php the_content(); ?>

	<?php endwhile; ?>
    
- Dentro de la Carpeta **theme** Crear **header.php** para modificar el contenido agregar el siguiente codigo:


	<!DOCTYPE html>
    <html lang="<?php language_attributes() ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
        <title>Blog de Viajes</title>
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>

    <?php //the_post_thumbnail($size = 'post-thumbnail', $attr = ''); ?>
    <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
    <!--pre> <?php //var_dump($destacada[0]); ?> </pre-->
    <?php $destacadajpg = $destacada[0]; ?>

       <header class="site-header" style="background-image: url(<?php echo $destacadajpg; ?>)">
          
           <nav class="navegacion"><!-- Menu Principal Responsive-->
               <div class="container">
                   <div class="row">
                       <div class="navbar-header">
                           
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><!--Menu Hamburguesa-->
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button><!--Menu Hamburguesa-->

                            <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo img-responsive" alt="">
                            </a>
                            
                       </div><!--.navbar-header-->
                       <div class="navbar-right">
                            
                            <?php wp_nav_menu(array(
                                'theme_location' => 'menu_principal',
                                'container_id' => 'navbar',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                )); ?><!--Clases de Foundation de Bootstrap-->
                            
                       </div><!--.navbar-right-->
                   </div><!--.row-->
               </div><!--.container-->
           </nav><!-- Menu Principal Responsive -->

           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <div class="titulo">
                            <?php $description = get_bloginfo( 'description', 'display' ); ?>
                            <h1 class="site-title"><span> <?php echo $description; ?> </span></h1>
                        </div><!--.titulo-->
                   </div><!--.col-md-6-->
               </div><!--.row-->
           </div><!--.container-->

       </header>
      
            
- Dentro de la Carpeta **theme** Crear **footer.php** para modificar el contenido agregar el siguiente codigo:

        <footer>

        </footer>

        <?php wp_footer();?>
        </body>
        </html>
        
- Dentro de la Carpeta **theme** Crear **functions.php** para modificar el contenido agregar el siguiente codigo:

        <?php 
        function blogviajes_styles() {
            wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css' );
            wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
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

        ?>
        
- Dentro de la Carpeta **theme** Crear **front-page.php** para modificar el contenido agregar el siguiente codigo:

        <?php
        get_header();
        ?>

        <h2 class="text-center">Ultimas Entradas</h2>

        <section class="container contenido">
            <div class="row">
                Resto del contenido aquí
            </div>
        </section>

        <?php
        get_footer();
        ?>


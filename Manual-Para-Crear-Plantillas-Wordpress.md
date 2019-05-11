**Crear sitio web en Wordpress, Manual Plantilla Blog de Viajes:**

- Librería, Versión de **Bootstrap 3.3.7**
- Librería **Normalize**
- Crear Carpeta del Tema **theme**
- Dentro de la carpeta **theme** Crear **style.css** con el siguiente contenido
- Dentro de la carpeta **theme** Crear **style.sass** con el siguiente contenido
        /*  Theme Name: Blog de Viajes
        Theme URI: Author: Anthony Tamayo Ortega 
        Author URI: https://www.anthonyjobs.co 
        Description: Tema para el sitio web de Blog de Viajes Version: 1.0 
        License: GNU General Public licence or later 
        Tags: HTML5, CSS3, Viajes, Blog */

        $azul-theme: #008fd1
        $azul-theme-hover: #0070A3
        $raleway: 'Raleway', sans-serif
        $baskerville: 'Libre Baskerville', serif

        body
            background-color: #f2f2f2

        h1, h2, h3, h4, h5
            text-transform: uppercase
            margin-bottom: 20px
            font-family: $raleway

        blockquote
            margin: 20px 10px
            padding: .5em 10px
            quotes: '\201C' '\201D' '\201B' '\2019'
            font-size: 30px
            font-style: italic
            color: #a1a1a1

        blockquote:before
            color: #cccccc
            content: open-quote
            font-size: 4em
            line-height: 0.1em
            margin-right: 0.25em
            vertical-align: -0.4em

        blockquote p
            display: inline

        nav.navegacion 
            background-color: $azul-theme

        nav.navegacion ul li 
            margin-top: 20px

        nav.navegacion ul li 
            text-align: center

        nav.navegacion ul li.current_page_item
            background-color: $azul-theme-hover
            padding: 10px 0px

        .navbar-collapse
            padding-bottom: 20px

        nav.navegacion ul li a 
            padding: 0
            text-transform: uppercase
            font-size: 16px
            color: #fff

        nav.navegacion ul li a:hover
            background-color: transparent
            border: none

        .navbar-toggle 
            border: 1px solid #fff

        .icon-bar 
            background-color: #fff

        .site-header
            height: 600px
            background-repeat: no-repeat
            background-position: center center
            padding-top: 20px

        div.titulo
            line-height: 1.3
            padding: 6px 0
            border-left: 20px solid $azul-theme
            margin: 20px auto

        div.titulo h1
            background-color: $azul-theme
            padding: 4px 0
            color: #fff
            display: inline
            margin: 0
            font-size: 60px

        div.titulo h1 span
            position: relative
            left: -10px

        @media (min-width: 768px)
            nav.navegacion 
                padding: 10px 0

            nav.navegacion li
                margin-right: 20px

            nav.navegacion ul li.current_page_item
                border-bottom: 3px solid #fff
                background: none
                padding: 0px

            .site-header
                background-size: cover
                background-attachment: fixed


            .home .site-header
                height: 800px


            img.logo 
                max-width: 400px


            .home div.titulo
                margin-top: 200px


            div.titulo
                margin-top: 100px


        /* Ultimas Entradas */
        section.contenido .entrada
         margin-bottom: 20px

        div.contenido-entrada
            background-color: #fff
            padding: 20px
            text-align: center
            min-height: 220px

        div.contenido-entrada h3
            margin: 0
            line-height: 24px
            font-family: $baskerville
            font-size: 16px
            font-weight: 700
            margin-bottom: 30px

        div.contenido-entrada span
            font-weight: bold
            color: #db008d

        div.contenido-entrada p
            text-transform: uppercase
            font-weight: bold

        div.contenido-entrada .btn.btn-success
            background-color: $azul-theme
            color: #fff
            border-radius: 0
            border: none
            text-transform: uppercase
            font-weight: bold
            padding: 15px 50px
            margin-top: 20px
            transition: all .3s ease

        div.contenido-entrada .btn.btn-success:hover
            background-color: $azul-theme-hover

        /** POR CATEGORÍAS **/
        section.categorias-blog div.categoria
            text-align: center
            background-color: #fff
            background-clip: content-box
            margin-bottom: 20px

        section.categorias-blog div.categoria i
            margin-top: 30px
            margin-bottom: 20px
            font-size: 60px

        section.categorias-blog div.categoria:nth-child(1) i
            color:#eca300

        section.categorias-blog div.categoria:nth-child(2) i
            color: $azul-theme

        section.categorias-blog div.categoria:nth-child(3) i
            color:#db008d

        section.categorias-blog div.categoria:nth-child(4) i
            color:#9800d1

        section.categorias-blog div.categoria a
            font-family: $baskerville
            margin-bottom: 10px
            display: block
            text-transform: uppercase
            font-size: 28px
            color: #000

        footer
            background-color: $azul-theme
            padding: 10px 0 0 0
            margin-top: 30px
            color: #fff
            text-align: justify

        footer h3
            font-size: 22px

        footer a,
        footer a:hover
            color: #fff
            text-decoration: none

        footer a:hover
            color: #eee

        footer .footer-info
            background-color: #004d70
            font-size: 20px
            font-family: $raleway
            margin: 0
            padding: 10px 0
            text-transform: uppercase
            text-align: center
            margin-top: 15px

        #social
            list-style: none

        #social li
            position: relative
            display: inline-block

        #social li a:before
            display: inline-block
            vertical-align: top
            padding: 0 5px
            font-size: 40px
            color: #fff
            font-family: "Font Awesome 5 Brands"
            content: '\f35d'

        #social li a[href*="facebook.com"]::before
            content: '\f09a'

        #social li a[href*="youtube.com"]::before
            content: '\f167'

        #social li a[href*="instagram.com"]::before
            content: '\f16d'


        /** INTERIORES **/
        section.contenido
            margin-top: 20px

        /** CONTACTO **/
        .pagina-full-width
            margin-top: 50px

        .nf-form-fields-required
            text-align: center
            margin-bottom: 20px
            font-size: 18px

        .nf-form-content input,
        .nf-form-content textarea
            height: 40px!important
            border: none

        .nf-form-content textarea
            height: 200px!important

        .nf-field-label label
            font-weight: normal!important

        #nf-field-4
            background-color: $azul-theme
            color: #fff
            padding: 10px 40px
            text-transform: uppercase
            font-weight: bold

        #nf-field-4:hover
            background-color: $azul-theme-hover

        /** PAGINA CON SIDEBAR **/
        .page-template-page-sidebar-php section.contenido
            margin-top: 0px

        .page-template-page-sidebar-php footer
            margin-top: 0px

        .contenido-pagina
            padding-bottom: 20px
            padding-top: 20px
            box-shadow: 768px 0px 0px #e6e6e6
            text-align: justify

        aside.sidebar-widget
            padding-top: 20px

        aside.sidebar-widget h3 
            font-size: 30px

        aside.sidebar-widget li 
            margin-bottom: 10px

        aside.sidebar-widget li a,
        aside.sidebar-widget li a:hover
            color: $azul-theme
            text-decoration: none

        aside.sidebar-widget li a:hover
            color: $azul-theme-hover



- Dentro de la Carpeta **theme** Crear **index.php**

       <?php
        get_header('blog');
        ?>

        <section class="container contenido">
            <div class="row">

               <?php while(have_posts()): the_post(); ?>

                   <!-- the_title('<h2>', '</h2>');-->

                <div class="col-xs-6 col-md-4 entrada">
                    <?php the_post_thumbnail('entradas', array('class' => 'img-responsive')) ?>
                    <div class="contenido-entrada">
                        <?php the_title('<h3>', '</h3>');?>

                        <p>
                            Escrito el: <span><?php the_time( get_option('date-format') ); ?></span>
                        </p>

                        <p>
                            Por: <span><?php the_author(); ?></span>
                        </p>

                        <a href="<?php the_permalink() ?>" class="btn btn-success">Leer más</a>
                    </div>
                </div><!--entrada-->

                <?php endwhile;?>
            </div>
        </section>

        <?php get_footer(); ?>


- Dentro de la Carpeta **theme** Crear **page.php** para modificar el contenido agregar el siguiente codigo:


	<?php
    get_header();
    ?>

    <section class="container-fluid contenido">
        <div class="row">
            <?php if(is_page('contacto')):?>
                <div class="col-sm-8 col-sm-offset-2 pagina-full-width">
                    <?php 
                        while(have_posts()): the_post();
                        the_content();
                        endwhile;
                    ?>
                </div>
            <?php else: ?>
                <?php the_content() ?>
           <?php endif;?>
        </div>
    </section>

    <?php get_footer(); ?>
    
    
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
                            <?php if(is_front_page()): ?>
                                <?php $description = get_bloginfo( 'description', 'display' ); ?>
                                <h1 class="site-title"><span> <?php echo $description; ?> </span></h1>
                            <?php elseif(is_category()): ?>
                                <h1 class="site-title"><span> <?php the_archive_title(); ?> </span></h1>
                            <?php else: ?>
                                <h1 class="site-title"><span> <?php the_title(); ?> </span></h1>
                            <?php endif; ?>
                        </div><!--.titulo-->
                   </div><!--.col-md-6-->
               </div><!--.row-->
           </div><!--.container-->

       </header>
      
            
- Dentro de la Carpeta **theme** Crear **footer.php** para modificar el contenido agregar el siguiente codigo:

            <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <?php dynamic_sidebar('footer_widget'); ?>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h3>Redes Sociales</h3>
                        <?php wp_nav_menu(array(
                                        'theme_location' => 'sociales_menu',
                                        'container' => 'div',
                                        'container_id' => 'menu-social',
                                        'container_class' => 'menu',
                                        'menu_id' => 'social',
                                        'menu_class' => 'menu_items',
                                        'depth' => 1,
                                        'link_before' => '<span class="sr-only">',
                                        'link_after' => '</span>',
                                        'fallback_cb' => '',
                                        'items-wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                        )); ?><!--Clases de Foundation de Bootstrap-->
                    </div>
                </div><!--.row-->
            </div>

            <p class="footer-info">
                Blog de viajes <?php echo date('Y'); ?>
            </p>
        </footer>

        <?php wp_footer();?>
        </body>
        </html>
        
- Dentro de la Carpeta **theme** Crear **functions.php** para modificar el contenido agregar el siguiente codigo:

        <?php 
        function blogviajes_styles() {
            wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css' );
            wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
            wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:900");
            wp_enqueue_style('baskerville', "https://fonts.googleapis.com/css?family=Libre+Baskerville:700");
            wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
            wp_enqueue_style('style', get_stylesheet_uri());

            wp_enqueue_script('jquery');
            wp_enqueue_script('bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.6', true);
        }
        add_action('wp_enqueue_scripts', 'blogviajes_styles');

        //Navegación
        register_nav_menus(array(
           'menu_principal' => __('Menu Principal', 'blogViajes'),
           'sociales_menu' => __('Menu Redes Sociales', 'blogViajes')
        ));

        //Widget
        function blogviajes_widgets(){
            register_sidebar(array(
                'name' => __('Footer Widgets'),
                'id' => 'footer_widget',
                'description' => 'Widgets para el Footer',
                'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));

            register_sidebar(array(
                'name' => __('Sidebar Widgets'),
                'id' => 'sidebar-widgets',
                'description' => 'Widgets para el Sidebar',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
        }
        add_action('widgets_init', 'blogviajes_widgets');

        //Imagen Destacada
        add_theme_support('post-thumbnails');
        add_image_size('entradas', 750, 490, true);

        ?>

        
- Dentro de la Carpeta **theme** Crear **front-page.php** para modificar el contenido agregar el siguiente codigo:

        <?php
        get_header();
        ?>

        <h2 class="text-center">Ultimas Entradas</h2>

        <section class="container contenido">
            <div class="row">
               <?php 
                    $args = array(
                        'post_per_page' => 6
                    );
                    $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

                   <!-- the_title('<h2>', '</h2>');-->

                <div class="col-xs-6 col-md-4 entrada">
                    <?php the_post_thumbnail('entradas', array('class' => 'img-responsive')) ?>
                    <div class="contenido-entrada">
                        <?php the_title('<h3>', '</h3>');?>

                        <p>
                            Escrito el: <span><?php the_time( get_option('date-format') ); ?></span>
                        </p>

                        <p>
                            Por: <span><?php the_author(); ?></span>
                        </p>

                        <a href="<?php the_permalink() ?>" class="btn btn-success">Leer más</a>
                    </div>
                </div><!--entrada-->

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </section>

        <section class="categorias-blog container">
            <h2 class="text-center">Por Categoría: </h2>
            <?php $categorias = get_categories(); ?>
            <div class="row">
                <?php foreach($categorias as $categoria) { ?>
                    <div class="col-xs-6 col-md-6 col-lg-3 categoria">
                        <i class="<?php echo $categoria->description; ?>"></i>
                        <a href="<?php echo get_category_link($categoria->cat_ID); ?>">
                            <?php echo $categoria->name; ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>

        <?php
        get_footer();
        ?>
        
- Dentro de la Carpeta **theme** Crear **header-blog.php** para modificar el contenido agregar el siguiente codigo:

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

                <?php 
                    $pagina_blog = get_option('page_for_posts');
                    $id_imagen = get_post_thumbnail_id($pagina_blog);
                    $destacada = wp_get_attachment_image_src($id_imagen, 'full');
                    $destacadajpg = $destacada[0];
                ?>

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
                               <?php 
                                    $pagina_blog = get_option('page_for_posts');
                                    $titulo = get_the_title($pagina_blog);
                                ?>
                                    <h1 class="site-title"><span> <?php echo $titulo; ?> </span></h1>

                                </div><!--.titulo-->
                           </div><!--.col-md-6-->
                       </div><!--.row-->
                   </div><!--.container-->

               </header>

- Dentro de la Carpeta **theme** Crear **page-sidebar.php** para modificar el contenido agregar el siguiente codigo:

        <?php
        /*
        Template Name: Pagina Con Sidebar
        */
        get_header();
        ?>

        <section class="container-fluid contenido">
            <div class="row">
                <?php 
                while (have_posts()): the_post(); 
                ?>
                <div class="col-sm-8 contenido-pagina">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

                <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>

- Dentro de la Carpeta **theme** Crear **sidebar.php** para modificar el contenido agregar el siguiente codigo:

        <aside class="sidebar-widget">
            <?php get_search_form(); ?>

            <?php dynamic_sidebar('sidebar-widgets') ?>
        </aside>
        
- Dentro de la Carpeta **theme** Crear **single.php** para modificar el contenido agregar el siguiente codigo:

        <?php get_header();?>

        <section class="container contenido">
            <div class="row">

               <?php 
               while (have_posts()): the_post();
                    the_content();
               endwhile;
               ?>

            </div>
        </section>

        <?php get_footer(); ?>

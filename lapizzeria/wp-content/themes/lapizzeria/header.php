<!DOCTYPE html>
    <html lang="<?php language_attributes() ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
        <title>La Pizzeria</title>
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>

    <?php //the_post_thumbnail($size = 'post-thumbnail', $attr = ''); ?>
    <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
    <!--pre> <?php //var_dump($destacada[0]); ?> </pre-->
    <?php $destacadajpg = $destacada[0]; ?>

       <header class="site-header" > <!--style="background-image: url(<?php //echo $destacadajpg; ?>)"-->
            <div class="container">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo img-responsive" alt="">
                    </a>
                </div>
            </div><!--.container-->

            <nav class="navegacion">
                <div class="container">
                    <div class="navbar-right">
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
                        <p>Dirección:</p> 
                        <p>Telefono:</p>        
                    </div><!--.navbar-right-->


                    <div class="navbar-header">
                            
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><!--Menu Hamburguesa-->
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--Menu Hamburguesa-->
                        
                    </div><!--.navbar-header-->

                    <div class="navbar-left" >
                                
                            <?php wp_nav_menu(array(
                                'theme_location' => 'menu_principal',
                                'container_id' => 'navbar',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_class' => 'nav navbar-nav navbar-left',
                                )); ?><!--Clases de Foundation de Bootstrap-->
                            
                    </div><!--.navbar-left-->
                </div>
            </nav>
       </header>
      

       
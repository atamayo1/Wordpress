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
      
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
    <body>

       <header>
           <!-- Menu Principal Responsive-->
           <nav class="navegacion">
               <div class="container">
                   <div class="row">
                        <!--Menu Hamburguesa-->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--Menu Hamburguesa-->
                       <div class="navbar-header">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="">
                       </div>
                       <div class="navbar-right">
                            <?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
                       </div>
                   </div>
               </div>
           </nav>
           <!-- Menu Principal Responsive -->
       </header>
      
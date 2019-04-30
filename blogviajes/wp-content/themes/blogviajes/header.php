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
           <nav class="navegacion">
               <div class="container">
                   <div class="row">
                       <div class="navbar-header">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="">
                       </div>
                       <div class="navbar-right">
                            <?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
                       </div>
                   </div>
               </div>
           </nav>
       </header>
      
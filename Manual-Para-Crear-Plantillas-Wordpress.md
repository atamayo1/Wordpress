**Crear sitio web en Wordpress, Manual Plantilla:**

- Crear Carpeta del Tema **theme**
- Dentro de la carpeta **theme** Crear **style.css** con el siguiente contenido
/* Theme Name: PlantillaWP
Theme URI: 
Author: Anthony Tamayo Ortega
Author URI: https://www.anthonyjobs.co
Description: Mi primera plantilla en wordpress
Version: 1.0
License: GNU General Public licence or later
Tags: html5, css3, ciudad
*/

- Dentro de la Carpeta **theme** Crear **index.php**
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
        <title>Theme</title>
    </head>
    <body <?php body_class(); ?>>
        <div id="page">
            <header id="masthead" class="site-header" role="banner">
                <div id="container">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    </a>
                    <h2 class="site-description"><?php bloginfo('description') ?></h2>
                </div>
            </header>
         <div id="contenido" class="container">
            
- Dentro de la Carpeta **theme** Crear **footer.php** para modificar el contenido agregar el siguiente codigo:

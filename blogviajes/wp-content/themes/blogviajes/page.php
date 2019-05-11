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
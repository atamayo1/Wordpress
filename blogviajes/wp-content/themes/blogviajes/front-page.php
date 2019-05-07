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

<?php
get_footer();
?>
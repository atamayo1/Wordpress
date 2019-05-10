<?php get_header();?>

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
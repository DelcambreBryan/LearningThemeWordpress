<?php get_header(); ?>

<div class="page">

    <section style="padding: 30px; text-align: center; width: 94%;">

        <?php
            if( have_posts() ) :

                while ( have_posts() ) :
                    the_post(); ?>

                <section <?php post_class( 'static' ); ?>>
                    <div class='post-body'>
                        <?php the_title('<h3>', '</h3>'); ?>
                        <?php the_content(); ?>
                    </div>
                </section>

                <?php endwhile;
            endif;
        ?>

    </section>

<?php get_footer(); ?>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fiberr
 */

?>


<section class="theme-recent-section">
    <div class="row">

        <?php
		    if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    ?>

                    <div class="col-12 col-md-6 mb-3">
                        <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                    </div>

                    <?php
                    
                endwhile;

			the_posts_navigation();

		    else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
</section> <!-- .theme-recent-section -->
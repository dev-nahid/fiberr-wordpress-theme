<<<<<<< HEAD
<?php
/**
 * DISPLAY BLOG POSTS  
 * 
 * Default two column post section. You can customize single column and three column from theme customization option.
 *
 * @package Fiberr
 */

?>

<!-- BLOG POSTS -->
<section class="theme-recent-section">
    <div class="one-column-wrap recent-post">
        <div class="row">
            <div class="col-12 col-md-6">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laborum quis cumque maxime a ab consequatur eius nam voluptates consequuntur? Quasi quod atque quaerat, sunt praesentium et repudiandae quas corrupti perferendis doloribus maiores cum deserunt ad ducimus esse quibusdam, non hic! Quod consectetur, architecto assumenda et, nesciunt molestiae quasi ipsam eveniet praesentium, enim quisquam soluta itaque minima ipsum minus ut provident quae in quibusdam. Quod quo nisi expedita placeat molestias consequatur ratione minus quae inventore dolore. Provident voluptatum voluptatibus minima! Modi blanditiis fugit sed eum, dignissimos asperiores cumque magni alias aliquam assumenda, laborum iure suscipit quas voluptatibus! Laudantium, repellat incidunt.
            </div> <!-- .col-12 col-md-6 -->
         </div>
        </div><!-- .row -->
=======
<section class="theme-recent-section">
    <div class="one-column-wrap recent-post">
    <div class="row">
        <?php 
        if( have_posts(  ) ) :
            while( have_posts(  ) ) : the_post(  );
            ?>
            <div class="col-12 col-md-6">
            <article>        
                <!-- Post thumbnail -->
                <?php fiberr_post_thumbnail(); ?>
                <header class="entry-header">
                    <div class="category-list py-2"><strong>Freelancer</strong></div>
                    <h2 class="entry-title"><a href="#" rel="bookmark"><?php the_title(); ?></a></h2>
                <div class="entry-meta">
                    <?php fiberr_posted_by() ?>
                    <time class="entry-date published"><?php the_date(); ?></time>
                </div><!-- .entry-meta -->
                </header><!-- .entry-header -->
                <div class="entry-content d-none d-md-block">
                    <?php the_excerpt( ) ?>
                </div>
                <footer class="entry-footer">
                    
                </footer>         
            </article>
            </div>
            <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div><!-- .row -->
>>>>>>> 8be673f08c04f903a14e0b983ef7e05d7902df86
    </div>
</section> <!-- .theme-recent-section -->
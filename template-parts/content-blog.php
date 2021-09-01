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
    </div>
</section> <!-- .theme-recent-section -->
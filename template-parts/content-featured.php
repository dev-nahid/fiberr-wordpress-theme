<?php
/**
 * Template part for displaying featured posts
 *
 * @package Fiberr
 */

?>
  <section class="theme-feature-section">
    <div class="container">
      <div class="row">
        <div class="col-12">

        <?php
        $featured_query = new WP_Query ( array(
          'post_type' => 'post',
          'posts_per_page' => 1,
        ) );
          if ( $featured_query->have_posts() ) : 
            while ( $featured_query->have_posts() ) : $featured_query->the_post();
              ?>
              <article class="theme-feature-post">
                <a class="feature-post-img pr-lg-4 py-lg-2 py-xl-0" href="<?php the_permalink() ?>">
                <?php the_post_thumbnail() ?>
                </a>
                <header class="feature-post-title pl-lg-4">
                  <div class="post-category py-3 pt-lg-0"><span>Freelancer Tips</span></div>
                  <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
                  <div class="post-meta">
                    <span class="author-name"><?php the_author(); ?></span>
                    <span class="pipe">|</span>
                    <time class="post-date"><?php the_date() ?></time>
                  </div>
                </header>
              </article>

              <?php

            endwhile;

          endif;
        ?>

        </div>
      </div>
    </div> 
  </section><!-- .theme-feature-section -->
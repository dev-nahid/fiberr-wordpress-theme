<?php
/**
 * The main template file
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 8be673f08c04f903a14e0b983ef7e05d7902df86
 * @package Fiberr
 */

get_header();
?>
<<<<<<< HEAD

 <main style="margin-top: 80px;">
    <div class="theme-main-wrap">
<!-- Featured post section content -->
        <div class="theme-center-section">
          <div class="container">
            <div class="theme-center-wrap">
              <div class="theme-center-left">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi nesciunt beatae, quis architecto natus aperiam laborum velit voluptatem eaque aspernatur vitae, numquam laboriosam iste ad enim hic veritatis placeat ex explicabo iure blanditiis? Nemo, adipisci consectetur quaerat unde magnam beatae, autem nihil rem corporis temporibus repellat neque repellendus, veritatis voluptates.
              </div>
              <!-- MAIN SIDEBAR -->
              <div class="theme-center-right">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum autem, fugit iusto inventore consectetur maxime facilis aliquam ab? Blanditiis ipsam provident voluptatibus, fugit officia necessitatibus quis consequatur aperiam amet veritatis, aliquam doloremque illo facilis nobis cumque dolore et voluptates praesentium molestias tempore architecto placeat harum impedit odio. Asperiores, numquam!
            </div>
            </div>
          </div><!-- .container -->
        </div>     
    </div> <!-- .theme-main-wrap -->
  </main><!-- Main Section -->

=======
<main style="margin-top: 80px;">
  <div class="theme-main-wrap">
      <?php get_template_part( 'template-parts/content', 'featured' ); ?>
      <div class="theme-center-section">
        <div class="container">
          <div class="theme-center-wrap">
            <div class="theme-center-left">
              <?php get_template_part( 'template-parts/content' , 'blog'); ?>
              <?php //get_template_part( 'template-parts/content' , 'news'); ?>
              <?php //get_template_part( 'template-parts/content' , 'business'); ?>
            </div>
              <?php get_sidebar(); ?>
          </div>
        </div><!-- .container -->
      </div>      
  </div>
</main><!-- End Main Section -->
>>>>>>> 8be673f08c04f903a14e0b983ef7e05d7902df86
<?php

get_footer();

<?php
/**
 * The main template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fiberr
 */

get_header();
?>

  <main style="margin-top: 80px;">
    <div class="theme-main-wrap">
		<?php get_template_part( 'template-parts/content', 'featured' ); ?>
        <div class="theme-center-section">
          <div class="container">
            <div class="theme-center-wrap">
              <div class="theme-center-left">

			  <?php get_template_part( 'template-parts/content', 'recent' ); ?>
			  <?php //get_template_part( 'template-parts/content', 'news' ); ?>
			  <?php //get_template_part( 'template-parts/content', 'business' ); ?>

              </div>
			        <?php get_sidebar(); ?>
            </div>
          </div>
        </div>      
    </div> <!-- .theme-main-wrap -->
  </main><!-- main -->

<?php
get_footer();

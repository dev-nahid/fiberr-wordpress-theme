<?php
/**
 * The single template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fiberr
 */

get_header();
?>

  <main style="margin-top: 80px;">
    <div class="theme-main-wrap">
        <div class="theme-center-section">
          <div class="container">
            <div class="theme-center-wrap">
              <div class="theme-center-left">
				<?php
				 while( have_posts() ) : 
					the_post();
					?>
						<section class="single-post-section">
							<div class="single-post-wrap">
							<div class="feature-post-title">
							<a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
							</div>
							<div class="post-author-fast">
								<div class="author-img">
								<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
								</div>
								<div class="author-about">
								<h6><?php the_author(); ?></h6>
								<span><?php echo get_the_date(); ?></span>
								</div>  
							</div>
							<div class="single-post-img">
								<?php the_post_thumbnail( ) ?>
							</div>
							<div class="single-post-discription">
							<?php
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fiberr' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);
							 ?>
							</div>
							<div class="post-author-last">
								<div class="author-img">
								<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
								</div>
								<div class="author-about">
								<h4><?php echo get_the_author(); ?></h4>
								<p>Amy Sept (@amysept) is an independent writer, editor, and content marketing strategist who’s dedicated to helping businesses of all sizes navigate the future of work. As a Canadian military spouse and slow traveller, she has a lot of hands-on experience with remote work, productivity hacks, and learning how to "go with the flow."</p>
								</div>  
							</div>
							</div>
					</section><!-- .single-post-section -->
					<?php
				 endwhile;
				?>
              </div>
			  <?php get_sidebar(); ?>
            </div>
          </div>
        </div>      
    </div> <!-- .theme-main-wrap -->
  </main><!-- main -->

<?php
get_footer();

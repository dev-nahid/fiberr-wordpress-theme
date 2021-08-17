<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fiberr
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="post-thumbnail mb-md-3" href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
		</a>
	<header class="post-header">
		<div class="post-category py-2">
			<span>Freelancer Tips</span>
		</div>
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>
		<div class="post-meta">
			<span class="author-name"><a href="#"><?php the_author(); ?></a></span>
			<span class="pipe">|</span>
		<time class="post-date"><?php echo get_the_date(); ?></time>
		</div>
	</header>
	<div class="post-content d-none d-md-block">
	<?php

	if ( is_home() ) : 
		the_excerpt();
		else : 
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
	endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fiberr' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<footer class="post-footer">
	<?php //fiberr_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->